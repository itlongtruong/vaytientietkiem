<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Finance
 * @since Finance 1.0
 */

?>

         <!-- ======= Breadcrumbs ======= -->
  
    <!-- ======= Blog Section ======= -->    
    <section>
      <div class="container" data-aos="fade-up">

        <div class="row">
			<div class="col-lg-8 entries">
		
				
			
		<?php if ( is_search() ) : ?>

			<h1 class="page-title">
				<?php
				printf(
					/* translators: %s: search term. */
					esc_html__( 'Kết quả cho tìm kiếm: %s', 'twentytwentyone' ),
					'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
				);
				?>
			</h1>

		<?php else : ?>

			<h1 class="page-title"><?php esc_html_e( 'Nothing here', 'twentytwentyone' ); ?></h1>

		<?php endif; ?>
	
	

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<?php
			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'twentytwentyone' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);
			?>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Xin lỗi, Nhưng không có gì phù hợp với cụm từ tìm kiếm của bạn. Vui lòng thử lại tìm kiếm với một số từ khóa khác.', 'twentytwentyone' ); ?></p>
			
			
		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwentyone' ); ?></p>
		

		<?php endif; ?>

			</div>
			<div class="col-lg-4">
            	<?php get_template_part( 'template-parts/sidebar/blog' ); ?>
        	</div><!-- End blog sidebar -->

        

		
      </div>
	  
    </section><!-- End Blog Section -->    
<?php

