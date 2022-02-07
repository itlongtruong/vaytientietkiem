<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
          <li>Tìm Kiếm</li>
        </ol>
    
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->    
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
        <?php 
			if (have_posts() ) {
		?>
			<div class="col-lg-8 entries">		
				<header class="page-header alignwide">
					<h1 class="page-title">
					<?php if ( is_search() ) : ?>

						<h1 class="page-title">
							<?php
							printf(
								/* translators: %s: search term. */
								esc_html__( 'Kết quả cho tìm kiếm: "%s"', 'twentytwentyone' ),
								'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
							);
							?>
						</h1>

						<?php else : ?>

						<h1 class="page-title"><?php esc_html_e( 'Nothing here', 'twentytwentyone' ); ?></h1>

						<?php endif; ?>
					</h1>
					<h4>
						<?php
						printf(
							esc_html(
								/* translators: %d: the number of search results. */
								_n(
									
									'Chúng tôi tìm thấy %d kết quả cho tìm kiếm của bạn.',
									'Chúng tôi tìm thấy %d kết quả cho tìm kiếm của bạn.',
									(int) $wp_query->found_posts,
									'twentytwentyone'
								)
							),
							(int) $wp_query->found_posts
						);
						?>
					</h4>
				</header>
				<?php while ( have_posts() ) : the_post();
					$post_id = get_the_ID();            
				?>
				
			<article class="entry">

              <div class="entry-img">
                <img src="<?php echo get_the_post_thumbnail_url($post_id,'full');?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="<?php the_permalink(); ?>"> <?php echo get_the_author();?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="<?php the_permalink(); ?>"><time datetime="<?php echo date('Y-m-d', strtotime($post->post_date))?>"><?php echo date('M j, Y', strtotime($post->post_date))?></time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-eye"></i> <a href="<?php the_permalink(); ?>"><?php echo getPostViews(get_the_ID()); ?></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                <?php the_excerpt();?>
                </p>
                <div class="read-more">
                  <a href="<?php the_permalink(); ?>">Xem Thêm</a>
                </div>
              </div>

            </article>

		 <?php endwhile; ?>
		 <?php htmlwp_pagination(); ?>
		
			
			</div>
			<div class="col-lg-4">
            	<?php get_template_part( 'template-parts/sidebar/blog' ); ?>
        	</div><!-- End blog sidebar -->

        </div>
		<?php 
			} else {
				get_template_part( 'template-parts/content/content-none' );
			}
		?>

      </div>
    </section>
	
	<!-- End Blog Section -->    

   
  </main>
<?php
get_footer();
