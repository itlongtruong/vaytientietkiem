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
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$query = new WP_Query( array(
    'post_type'        => 'kien-thuc',
	  'cat'       => $cat_id
));

?>
  <main id="main">
         <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?php echo get_home_url(); ?>">Trang Chủ</a></li>
          <li><?php single_cat_title(); ?></li>
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

            </article><!-- End blog entry -->
            <?php endwhile; ?>
            <!-- end loop -->

          <div class="blog-pagination">
            <ul class="justify-content-center">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
            </ul>
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

