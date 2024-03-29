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
$query = new WP_Query( array(
  'post_type'        => 'post',
  'showposts'=>4,
	'cat'       => 12
));

?>
 
 <section id="team" class="team">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>Kiến thức Vay Tiền Nhanh</h3>
          <p style="width: 80%">Cập nhật những kiến thức hữu ích về tài chính cá nhân và các sản phẩm vay online cũng như thẻ tín dụng</p>
        </header>

        <div class="row">
			<?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post();
              $post_id = get_the_ID();            
            ?>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <a href="<?php the_permalink(); ?>">
	              <img src="<?php echo get_the_post_thumbnail_url($post_id,'full');?>"  class="img-fluid" alt="">
	              <div class="member-info">
	                <div class="member-info-content">
	                  <h4><?php the_title(); ?></h4>
	                </div>
	              </div>
              </a>
            </div>
          </div>

          
		  <?php endwhile; ?>
		 
        </div>
		<?php wp_reset_postdata(); ?>  
          <?php endif;?>

        <div class="row block-more">
        	<div class="col-xs-12 col-lg-12" data-aos="fade-up" data-aos-delay="200">
        	  <a href="<?php echo get_home_url(); ?>/danh-muc/vay-nhanh" class="btn-more">Xem thêm</a>
            </div>
        </div>

      </div>
    </section>
