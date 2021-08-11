=== Custom Permalinks ===
Contributors: sasiddiqui
Tags: permalink, url, link, address, custom, redirect, custom post type, GDPR, GDPR Compliant
Tested up to: 5.8
Stable tag: 2.0.1
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Set custom permalinks on a per-post, per-tag or per-category basis.

== Description ==

> Incase of found any site breaking issue after upgrading to the latest version then please report the issue on [WordPress Forum](https://wordpress.org/support/plugin/custom-permalinks/) OR [GitHub](https://github.com/samiahmedsiddiqui/custom-permalinks) with complete information to reproduce the issue and move back to the old version. You can download any of the old version from here: https://wordpress.org/plugins/custom-permalinks/advanced/

Lay out your site the way *you* want it. Set the URL of any post, page, tag or category to anything you want. Old permalinks will redirect properly to the new address. Custom Permalinks give you ultimate control over your site structure.

> Be warned: *This plugin is not a replacement for WordPress's built-in permalink system*. Check your WordPress administration's "Permalinks" settings page first, to make sure that this doesn't already meet your needs.

This plugin is only useful for assigning custom permalinks for *individual* posts, pages, tags or categories. It will not apply whole permalink structures or automatically apply a category's custom permalink to the posts within that category.

> If anyone wants the different Structure Tags for their Post types or use symbols in the URLs So, use the [Permalinks Customizer](https://wordpress.org/plugins/permalinks-customizer/) which is a fork of this plugin and contains the enhancement of this plugin.

== Privacy Policy ==

This plugin only collects the following information.

1. Administration Email Address (Only the email that is set in the WordPress setting)
2. Plugin version
3. Site Title
4. WordPress Address (URL)
5. WordPress version

All this information gets collected when the plugin is installed or updated.

To have any kind of query please feel free to [contact us](https://www.custompermalinks.com/contact-us/).

== Filters ==

=== Add `PATH_INFO` in `$_SERVER` Variable ===

`
add_filter( 'custom_permalinks_path_info', '__return_true' );
`

=== Disable Redirects ===

To disable complete redirects functionality provided by this plugin, add the filter that looks like this:

`
function yasglobal_avoid_redirect( $permalink ) {
  return true;
}
add_filter( 'custom_permalinks_avoid_redirect', 'yasglobal_avoid_redirect' );
`

=== Disable Particular Redirects ===

To disable any specific redirect to be processed by this plugin, add the filter that looks like this:

`
function yasglobal_avoid_redirect( $permalink ) {
  // Replace 'testing-hello-world/' with the permalink you want to avoid
  if ( 'testing-hello-world/' === $permalink ) {
    return true;
  }

  return false;
}
add_filter( 'custom_permalinks_avoid_redirect', 'yasglobal_avoid_redirect' );
`

=== Exclude Permalink to be processed ===

To exclude any Permalink to be processed by the plugin, add the filter that looks like this:

`
function yasglobal_xml_sitemap_url( $permalink ) {
  if ( false !== strpos( $permalink, 'sitemap.xml' ) ) {
    return '__true';
  }

  return;
}
add_filter( 'custom_permalinks_request_ignore', 'yasglobal_xml_sitemap_url' );
`

=== Exclude Post Type ===

To remove custom permalink **form** from any post type, add the filter that looks like this:

`
function yasglobal_exclude_post_types( $post_type ) {
  // Replace 'custompost' with your post type name
  if ( 'custompost' === $post_type ) {
    return '__true';
  }

  return '__false';
}
add_filter( 'custom_permalinks_exclude_post_type', 'yasglobal_exclude_post_types' );
`

=== Exclude Posts ===

To exclude custom permalink **form** from any posts (based on ID, Template, etc), add the filter that looks like this:

`
function yasglobal_exclude_posts( $post ) {
  if ( 1557 === $post->ID ) {
    return true;
  }

  return false;
}
add_filter( 'custom_permalinks_exclude_posts', 'yasglobal_exclude_posts' );
`

=== Allow Accents Letters ===

To allow accents letters, please add below-mentioned line in your theme `functions.php`:

`
function yasglobal_permalink_allow_accents() {
  return true;
}
add_filter( 'custom_permalinks_allow_accents', 'yasglobal_permalink_allow_accents' );
`

=== Allow Uppercase Letters ===

To allow uppercase letters/words, please add below-mentioned line in your theme `functions.php`:

`
function yasglobal_allow_uppercaps() {
  return true;
}
add_filter( 'custom_permalinks_allow_caps', 'yasglobal_allow_uppercaps' );
`

=== Manipulate Permalink Before Saving ===

To make changes in permalink before saving, please use `custom_permalink_before_saving` filter. Here is an example to see how it works.

`
function yasglobal_permalink_before_saving( $permalink, $post_id ) {
  // Check trialing slash in the permalink.
  if ( substr( $permalink, -1 ) !== '/' ) {
    // If permalink doesn't contain trialing slash then add one.
    $permalink .= '/';
  }

  return $permalink;
}
add_filter( 'custom_permalink_before_saving', 'yasglobal_permalink_before_saving', 10, 2 );
`

=== Remove `like` Query ===

To remove `like` query to being work, add below-mentioned line in your theme `functions.php`:
`
add_filter( 'cp_remove_like_query', '__return_false' );
`

Note: Use `custom_permalinks_like_query` filter if the URLs doesn't works for you after upgrading to `v1.2.9`.

=== Thanks for the Support ===

I do not always provide active support for the Custom Permalinks plugin on the WordPress.org forums, as I have prioritized the email support. One-on-one email support is available to people who bought [Custom Permalinks Premium](https://www.custompermalinks.com/#pricing-section) only.

=== Bug reports ===

Bug reports for Custom Permalinks are [welcomed on GitHub](https://github.com/samiahmedsiddiqui/custom-permalinks). Please note GitHub is not a support forum, and issues that aren't properly qualified as bugs will be closed.

== Installation ==

This process defines you the steps to follow either you are installing through WordPress or Manually from FTP.

**From within WordPress**

1. Visit 'Plugins > Add New'
2. Search for Custom Permalinks
3. Activate Custom Permalinks from your Plugins page.

**Manually**

1. Upload the `custom-permalinks` folder to the `/wp-content/plugins/` directory
2. Activate Custom Permalinks through the 'Plugins' menu in WordPress

== Changelog ==

= 2.0.1 - Aug 02, 2021 =

* Bugs
  * [Plugin not save persian alphabet](https://wordpress.org/support/topic/plugin-not-save-persian-alphabet/)
  * [404 error when post/page custom permalink is part of category custom permalink](https://github.com/samiahmedsiddiqui/custom-permalinks/issues/49)

= 2.0.0 - Jul 30, 2021 =

* Bugs
  * [Bug with AMP plugin](https://wordpress.org/support/topic/bug-with-amp-plugin/)
  * [Oembed links not working](https://wordpress.org/support/topic/oembed-links-not-working/)
  * [Uncaught (in promise) TypeError: getHomeURL is null](https://wordpress.org/support/topic/uncaught-in-promise-typeerror-gethomeurl-is-null/)
  * [Plugin stop saving uppercase slugs](https://wordpress.org/support/topic/plugin-stop-saving-upppercase-slugs/)
  * [template_redirect](https://wordpress.org/support/topic/make-redirect/)
  * conflict with WooCommerce Paid courses
  * Fix creating duplicated permalink while creating multiple `Categories` and/or `Tags`
* Enhancements
  * Added Query caching to improve performance
  * Changed Permalink sanitization method (Similar way as WP does)
  * Added Nonce verification to make forms secure
  * [Permalink Filter before saving](https://wordpress.org/support/topic/permalink-filter/)
  * Show/Hide column and Pagination features added on Post Type Permalinks and Taxonomies Permalinks page
  * Removed deprecated functions
  * Applied WPCS Standards

= 1.7.1 - Aug 30, 2020 =

  * Bugs
    * Fix PHP notice (start reporting with WordPress 5.5)

= Earlier versions =

  * For the changelog of earlier versions, please refer to the separate changelog.txt file.
