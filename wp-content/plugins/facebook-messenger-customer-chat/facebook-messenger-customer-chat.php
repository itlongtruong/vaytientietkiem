<?php
/*
Plugin Name: Facebook Chat Plugin - Live Chat Plugin for WordPress
Description: With a few clicks, you can add the Facebook Chat Plugin to your website, enabling customers to message you while browsing your website. To see and reply to those messages, simply use the same messaging tools you use for your Facebook messaging, on desktop at facebook.com, Facebook Page Manager App (available on iOS and Android), or by adding your page account to Messenger. It's free, easy to install and comes with a user interface your customers are already familiar with.
Author: Facebook
Author URI: https://developers.facebook.com
Version: 2.2
Text Domain: facebook-messenger-customer-chat
Domain Path: /languages
*/

/*
* Copyright (C) 2017-present, Facebook, Inc.
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; version 2 of the License.

* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*/

class Facebook_Messenger_Customer_Chat {
  function __construct() {
    include( plugin_dir_path( __FILE__ ) . 'options.php' );
    require  __DIR__ . '/vendor/persist-admin-notices-dismissal/persist-admin-notices-dismissal.php';
    add_action( 'admin_init', array( 'PAnD', 'init' ) );
    add_action( 'current_screen', array( $this, 'show_deactivation_feedback_form' ) );
    add_action( 'wp_footer', array( $this, 'fbmcc_inject_messenger' ) );
    add_filter( 'plugin_action_links',
                array( $this, 'fbmcc_plugin_action_links'), 10, 2 );
    add_filter( 'plugin_row_meta',
                array( $this, 'fbmcc_register_plugin_links'), 10, 2 );
    add_action( 'plugins_loaded', array($this, 'fbmcc_i18n') );
    add_action( 'admin_notices', array($this, 'fbmcc_admin_notice_review') );
  }

  public function show_deactivation_feedback_form() {
    if ( get_current_screen()->id !== 'plugins' ) {
      return;
    }

    add_action( 'in_admin_header', array($this, 'render_feedback_form'));
  }

  function fbmcc_plugin_action_links( $links, $file ) {
    $settings_url = 'admin.php?page=facebook-messenger-customer-chat';
    if ( current_user_can( 'manage_options' ) ) {
      $base = plugin_basename(__FILE__);
      if ( $file == $base ) {
        $settings_link = sprintf(
          '<a href="%s">%s</a>',
          $settings_url,
          esc_html__( 'Settings', 'facebook-messenger-customer-chat' )
        );
        array_unshift( $links, $settings_link );

      }
    }
    return $links;
  }

  function fbmcc_register_plugin_links( $links, $file ) {
    $settings_url = 'admin.php?page=facebook-messenger-customer-chat';
    $base = plugin_basename(__FILE__);
    if ( $file == $base ) {
      if ( current_user_can( 'manage_options' ) ) {
        $links[] = sprintf(
          '<a href="%s">%s</a>',
          $settings_url,
          esc_html__( 'Settings', 'facebook-messenger-customer-chat' )
        );
      }
      $links[] =
        sprintf(
          '<a href="%s">%s</a>',
          esc_url( 'https://wordpress.org/plugins/facebook-messenger-customer-chat/#faq' ),
          esc_html__( 'FAQ', 'facebook-messenger-customer-chat' )
        );
      $links[] =
        sprintf(
          '<a href="%s">%s</a>',
          esc_url( 'https://wordpress.org/support/plugin/facebook-messenger-customer-chat/' ),
          esc_html__( 'Support', 'facebook-messenger-customer-chat' )
        );
    }
    return $links;
  }

  function fbmcc_should_display() {
    $fbmcc_page_types = get_option( 'fbmcc_page_types' );
    global $wp_query;

    if( !$fbmcc_page_types || $fbmcc_page_types['all'] == "1") {
      return true;
    }

    if (
      $fbmcc_page_types['front_page'] == "1" &&
      (is_home() || is_front_page())
    ) {
      return true;
    }

    if($fbmcc_page_types['posts'] == "1" && is_single()) {
      return true;
    }

    if($fbmcc_page_types['product_pages'] == "1") {
      if ( function_exists ( 'is_product' ) && is_product() )  {
        return true;
      }
    }

    $active_pages = $fbmcc_page_types["pages"];
    $current_page = $wp_query->get_queried_object()->ID;
    $pages_all = $fbmcc_page_types['pages_all'];
    if(is_page()) {
      if( $pages_all == "1" ) {
        return true;
      } else {
        if( $active_pages && in_array( $current_page, $active_pages) ) {
          return true;
        }
      }
    }

    if( ($fbmcc_page_types['category_index'] == "1") && is_category() ) {
      return true;
    }

    if( $fbmcc_page_types['tag_index'] == "1" && is_tag() ) {
      return true;
    }

    return false;
  }

  function fbmcc_inject_messenger() {
    if( !get_option( 'fbmcc_pageID' ) ||
        get_option( 'fbmcc_pageID' ) == '' ) {
      return;
    }

    if( $this->fbmcc_should_display() ) {
      $genCode = "";
      $genCode .= "
        <div id='fb-root'></div>
          <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/".fbmcc_sanitize_locale(get_option( 'fbmcc_locale' ))."/sdk/xfbml.customerchat.js#xfbml=1&version=v6.0&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>
          <div class='fb-customerchat'
            attribution='wordpress'
            attribution_version='2.2'
            page_id=".fbmcc_sanitize_page_id(get_option( 'fbmcc_pageID' ))."
          >
        </div>
        ";
    } else {
      $genCode = "<!-- fbmcc-config-disabled -->\n";
    }
    _e($genCode);
  }

  function fbmcc_i18n() {
    load_plugin_textdomain( 'facebook-messenger-customer-chat', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
  }

  function render_feedback_form() {
    ?>
    <div id="fbmcc-deactivationModalOverlay">
      <div id="fbmcc-deactivationModalContainer">
        <button title="<?php esc_html_e( 'Cancel', 'facebook-messenger-customer-chat' ); ?>" class="fbmcc-deactivationModal-closeButton">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24px"
            height="24px"
            viewBox="0 0 24 24"
            fill="#424D57"
            class="material material-close-icon undefined"
          >
            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
          </svg>
        </button>
        <div id="fbmcc-deactivationModal">
          <div id="fbmcc-deactivationFormContainer">
            <h3><?=esc_html__( 'We value your feedback.', 'facebook-messenger-customer-chat' )?></h3>
            <p><?=esc_html__( 'Please let us know why you’re deactivating Facebook Chat Plugin.', 'facebook-messenger-customer-chat' )?></p>
            <form id="fbmcc-deactivationForm">
              <ul>
                <li><input type="radio" name="fbmcc-deactivationReason" value="1" /> <?=esc_html__( 'I’m unable to get the plugin to work', 'facebook-messenger-customer-chat' )?></li>
                <li><input type="radio" name="fbmcc-deactivationReason" value="2" /> <?=esc_html__( 'I no longer need a live chat feature', 'facebook-messenger-customer-chat' )?></li>
                <li><input type="radio" name="fbmcc-deactivationReason" value="3" /> <?=esc_html__( 'I’m using a different live chat plugin', 'facebook-messenger-customer-chat' )?></li>
                <li><input type="radio" name="fbmcc-deactivationReason" value="4" /> <?=esc_html__( 'This is a temporary deactivation. I’ll be back!', 'facebook-messenger-customer-chat' )?></li>
                <li><input type="radio" name="fbmcc-deactivationReason" value="5" /> <?=esc_html__( 'Other', 'facebook-messenger-customer-chat' )?></li>
                <li>
                  <div
                    class="fbmcc-deactivationReason-commentContainer"
                    id="fbmcc-deactivationReason-commentContainer"
                  >
                  <?=esc_html__( 'Comments:', 'facebook-messenger-customer-chat' )?>
                    <textarea rows="4" id="fbmcc-deactivationReason" style="width: 100%"></textarea>
                  </div></li>
                <li>
                  <input type="hidden" id="fbmcc-deactivationForm-pageId" value="<?php echo fbmcc_sanitize_page_id(get_option( 'fbmcc_pageID' )); ?>" />
                  <input id="fbmcc-deactivationFormSubmit" type="button" value="<?=esc_html__( 'Submit', 'facebook-messenger-customer-chat' )?>" />
                </li>
              </ul>
            </form>
          </div>
          <div id="fbmcc-deactivationModal-thankYou" class="hidden">
            <h3><?=esc_html__( 'Thank you.', 'facebook-messenger-customer-chat' )?>
              <?=esc_html__( 'We appreciate your feedback.', 'facebook-messenger-customer-chat' )?></h3>
          </div>
        </div>
      </div>
    </div>
    <?php
  }

  function fbmcc_admin_notice_review() {
    if ( ! PAnD::is_admin_notice_active( 'disable-done-notice-forever' ) ||
         ! $this->fbmcc_should_show_admin_notice_review() ) {
      return;
    }
    $message = '<h4>';
    $message .= esc_html__( 'How is the Facebook Chat plugin working out for you and your visitors?', 'facebook-messenger-customer-chat' );
    $message .= '</h4>';
    $message .= '<p>';
    $message .= esc_html__( 'We\'d love to hear your feedback!', 'facebook-messenger-customer-chat' );
    $message .= ' <a href="https://wordpress.org/support/plugin/facebook-messenger-customer-chat/reviews/" target="_blank">';
    $message .= esc_html__( 'Please leave us a review.', 'facebook-messenger-customer-chat' );
    $message .= '</a></p>';
    ?>
    <div class="notice notice-success is-dismissible" data-dismissible="disable-done-notice-forever">
      <div class="fbmcc-logo"></div>
      <?=$message;?>
    </div>
    <?php
  }

  function fbmcc_should_show_admin_notice_review() {
    $page_id = get_option('fbmcc_pageID');
    if ($page_id == false) {
      return false;
    }

    if (current_user_can( 'manage_options' ) && !get_option( 'fbmcc_install_ts' )) {
      update_option('fbmcc_install_ts', time());
      return false;
    }

    $last_alert_check_ts = get_option('fbmcc_last_alert_check_ts', 0);
    $diff_secs = time() - intval($last_alert_check_ts);
    if ($diff_secs > Time::SECS_IN_HOUR) {
      update_option('fbmcc_last_alert_check_ts', time());

      $url = 'https://graph.facebook.com/v10.0/fb3p_chat_plugin/';
      $access_token = '1214154679040756|02b35c7bc067140ef19ebfe0eb3f420e';

      $url = $url.'?page_id='.$page_id.'&access_token='.$access_token;
      $args = array(
        'headers' => array( "Content-type" => "application/json" ),
        'timeout' => 5
      );

      $response = wp_remote_get($url, $args);
      $res_body = wp_remote_retrieve_body($response);
      $res_json = json_decode($res_body);

      if ( is_wp_error( $response ) || $res_json->enabled == false) {
        update_option('fbmcc_cached_alert_check_response', 0);
        return false;
      }
      update_option('fbmcc_cached_alert_check_response', $res_json);
    }
    else {
      $response = get_option('fbmcc_cached_alert_check_response');
      if (!$response) {
        return false;
      }
    }

    $install_ts = get_option('fbmcc_install_ts');
    $diff_secs = time() - intval($install_ts);
    if ($diff_secs < (7 * Time::SECS_IN_DAY)) {
      return false;
    }
    return true;
  }
}

class Time {
  const SECS_IN_HOUR = 3600;
  const SECS_IN_DAY = 86400;
}

new Facebook_Messenger_Customer_Chat();
?>
