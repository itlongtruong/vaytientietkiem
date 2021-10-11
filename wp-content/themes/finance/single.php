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
<?php setPostViews(get_the_ID()); ?>
  <main id="main">
         <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?php echo get_home_url(); ?>">Trang Chủ</a></li>
          <li><a href="<?php echo get_home_url(); ?>/kien-thuc">Kiến Thức</a></li>
          <li><?php the_title();?></li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="<?php the_permalink(); ?>"> <?php echo get_the_author();?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="<?php the_permalink(); ?>"><time datetime="<?php echo date('Y-m-d', strtotime($post->post_date))?>"><?php echo date('M j, Y', strtotime($post->post_date))?></time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-eye"></i> <a href="<?php the_permalink(); ?>"><?php echo getPostViews(get_the_ID()); ?></a></li>
                </ul>
              </div>

              <div class="entry-content">
                    <?php the_content();?>
              </div>
              
              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li style="margin-left: -40px;"><?php the_category();?></li>
                </ul>
              </div>
            </article><!-- End blog entry -->
          </div><!-- End blog entries list -->
          <div class="col-lg-4">
           <?php get_template_part( 'template-parts/sidebar/blog' ); ?>
          </div><!-- End blog sidebar -->
        </div>

      </div>
    </section><!-- End Blog Section -->
  </main><!-- End #main -->

<?php get_footer(); ?>
