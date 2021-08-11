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
	'post_type'        => 'bank',		
	'orderby'          => 'date',
	'order'            => 'ASC',		
);
$data = get_posts( $args );
?>
    <?php if (!empty($data)):?>
    <!-- ======= Pricing Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <header class="section-header">
          <h3>Ngân hàng liên kết</h3>
        </header>

        <div class="owl-carousel clients-carousel">
		<?php
			foreach ($data as $post) {
				$post_id = get_the_ID();
		?>
          <img src="<?php echo get_the_post_thumbnail_url($post_id,'full');?>" alt="">
		  <?php 		
			} 
		?>  
		</div>

      </div>
    </section><!-- End Clients Section -->
	<?php endif;?>
