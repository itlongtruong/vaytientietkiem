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

    <!-- ======= Blog Section ======= -->    
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
         
			<header class="page-header alignwide">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can’t be found.', 'Finance' ); ?></h1>
			</header><!-- .page-header -->

			<div class="error-404 not-found default-max-width">
				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'Finance' ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</div>
						
         

        </div>

      </div>
    </section><!-- End Blog Section -->    

   
  </main>
<?php
get_footer();
