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
$args = array(
	'post_type'        => 'review',
  'cat'       => 12,		
	'orderby'          => 'date',
	'order'            => 'ASC',		
);
$data = get_posts( $args );
?>
    <?php if (!empty($data)):?>
    <!-- ======= Pricing Section ======= -->
	<section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <header class="section-header">
          <h3>Khách hàng nói gì về <span style="font-size: 115%; color: #50b848;">Vay tiền Online</span></h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-12">

            <div class="owl-carousel testimonials-carousel">
			<?php
			foreach ($data as $post) {
				$post_id = get_the_ID();
				$name = get_field_object('name' , $post_id);
				$job = get_field_object('job' , $post_id);
				$address = get_field_object('address' , $post_id);
				$description = get_field_object('description' , $post_id);
				
			
			?>
              <div class="testimonial-item">
                <img src="<?php echo get_the_post_thumbnail_url($post_id,'full');?>" class="testimonial-img" alt="">
                <div class="star-rating"><span style="width:100%"><strong class="rating"></strong></span></div>
                <h3><?php echo $name['value'];?></h3>

                <h4><?php echo $job['value'];?> / ( <?php echo $address['value'];?> )</h4>
                <p>
				<?php echo $description['value'];?>
                </p>
              </div>
			  <?php 		
				} 
				?>  

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
	<?php endif;?>
