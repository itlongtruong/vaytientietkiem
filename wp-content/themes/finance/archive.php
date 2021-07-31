<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Finance
 * @since Finance 1.0
 */

get_header();
$category = get_category( get_query_var( 'cat' ) );
$cat_id = $category->cat_ID;
$posts_per_page = 1;
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$query = new WP_Query( array(
    'post_type'        => 'blog',
	'category'       => $cat_id,	
    'posts_per_page' => $posts_per_page,
    'paged' => $paged
));

?>
  <main id="main">
         <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?php echo get_home_url(); ?>">Trang Chủ</a></li>
          <li>Blog</li>
        </ol>
    
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
   
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">		  
          <div class="col-lg-8 entries">
		  <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post();
              $post_id = get_the_ID();            
            ?>
            <article class="entry">

              <div class="entry-img">
                <img src="<?php echo get_the_post_thumbnail_url($post_id,'full');?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?>></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="<?php the_permalink(); ?>"> <?php echo get_the_author();?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="<?php the_permalink(); ?>"><time datetime="<?php echo date('Y-m-d', strtotime($post->post_date))?>"><?php echo date('M j, Y', strtotime($post->post_date))?></time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="<?php the_permalink(); ?>"><?php echo get_comments_number($post_id)?> bình luận</a></li>
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

            </article><!-- End blog entry -->
            <?php endwhile; ?>
            <!-- end loop -->

			<div class="blog-pagination">  
          <?php
          $big = 999999999; // need an unlikely integer

          $pages = paginate_links( array(
              'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
              'format' => '?paged=%#%',
              'current' => max( 1, get_query_var('paged') ),
              'total' => $query->max_num_pages,
              'type'  => 'array',
              'prev_next'   => true,
              'prev_text'    => __('« Trang Trước'),
              'next_text'    => __('Trang Sau »'),
            )
          );
        
          if( is_array( $pages ) ) {
            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        
            $pagination = '<ul class="justify-content-center">';
        
            foreach ( $pages as $page ) {
              $pagination .= "<li>$page</li>";
            }
        
            $pagination .= '</ul>';
        
            
            echo $pagination;
          }
          ?>
          </div> 
		  <?php wp_reset_postdata(); ?>  
          <?php endif;?>
          </div><!-- End blog entries list -->
		  

          <div class="col-lg-4">
            <?php get_template_part( 'template-parts/sidebar/blog' ); ?>
          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->
    

   
  </main><!-- End #main -->

<?php get_footer(); ?>

