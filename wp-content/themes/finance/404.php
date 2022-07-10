<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Finance
 * @since Finance 1.0
 */

get_header();
?>
<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="<?php echo get_home_url(); ?>">Trang Chủ</a></li>
        <li>404</li>
      </ol>

    </div>
  </section><!-- End Breadcrumbs -->
<style>
  .blog .sidebar {
    padding: 0px;
    margin: 0 0 0 0;
    box-shadow: 0 0 0 rgb(0 0 0 /0%);
}
</style>
  <!-- ======= Blog Section ======= -->
  <section id="main" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-md-3">
          <span class="header-font" style="font-size: 6em; font-weight: bold; opacity: .3">404</span>
        </div>
        
        <div class="col-md-9">
        <div class="sidebar">
          <h3 class="sidebar-title"><?php esc_html_e('Rất tiếc! Không tìm thấy trang đó...', 'Finance'); ?></h3>
          <div class="sidebar-item search-form">
            <form action="<?php bloginfo('url'); ?>/" method="GET" role="search">
              <input type="text" name="s" placeholder="Search" <?php if (is_search()) { ?>value="<?php the_search_query(); ?>" <?php } else { ?>value="" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" <?php } ?>>
              <input type="hidden" name="post_type" value="kien-thuc" />
              <button type="submit"><i class="bi bi-search"></i></button>
            </form>
          </div>
        </div>
        </div>

      </div>
    </div>
  </section><!-- End Blog Section -->
</main>
<?php
get_footer();
