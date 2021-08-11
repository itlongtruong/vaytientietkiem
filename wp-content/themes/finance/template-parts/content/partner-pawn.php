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
	'post_type'        => 'cam-do-online',		
	'orderby'          => 'date',
	'order'            => 'ASC',
);

$data = get_posts( $args );
?>
    <?php if (!empty($data)):?>
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg wow fadeInUp">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Các sản phẩm vay online</h3>          
        </header>

        <div class="row flex-items-xs-middle flex-items-xs-center">
		<?php
			$i = 0;
			$delay = 1;
			foreach ($data as $post) {
				$post_id = get_the_ID();
				$description = get_field_object('description' , $post_id);
				$so_tien_cam = get_field_object('so_tien_cam' , $post_id);
				$lai_suat = get_field_object('lai_suat' , $post_id);
				$do_tuoi_cam = get_field_object('do_tuoi_cam' , $post_id);
				$thoi_gian_cam = get_field_object('thoi_gian_cam' , $post_id);
				$thoi_gian_giai_ngan = get_field_object('thoi_gian_giai_ngan' , $post_id);
				$link_dang_ky = get_field_object('link_dang_ky' , $post_id);
		?>
          <!-- Basic Plan  -->
          <div class="col-xs-12 col-lg-4 product-2" data-aos="fade-up" data-aos-delay="<?php echo $delay*100; ?>">
            <div class="card">
              <div class="card-header">
			    <?php if ($i < 3){ ?>
              	<div class="panel-label"><span class="panel-label-text">TOP #<?php echo  $i+1;?> tốt nhất</span><br><span class="triangle-right"></span></div>
              	<div class="offers-tags"><img class="offers-tags__item" height="20" src="<?php echo get_template_directory_uri();?>/assets/img/new-2.png"></div>
				<?php } ?>  
                <div class="logo">
                   <img src="<?php echo get_the_post_thumbnail_url($post_id,'full');?>" class="testimonial-img" alt="">
                </div>
                <h4 class="card-title">
				  <?php echo $post->post_title;?>
                </h4>
                <p class="gift"><i aria-hidden="true" class="fa fa-gift"></i> <span style="font-size: 85%;"><?php echo $description['value'];?></span></p>
              </div>
              <div class="card-block">
                <h3>
				<?php echo $so_tien_cam['value'];?><span class="currency">triệu</span><span class="period">lãi suất</span>
                <?php echo $lai_suat['value'];?><span class="currency">%</span><span class="period">/năm</span>
                </h3>
                <ul class="list-group">
                  <li class="list-group-item"><?php echo $do_tuoi_cam['value'];?></li>
                  <li class="list-group-item"><?php echo $thoi_gian_cam['value'];?></li>
                  <li class="list-group-item"><?php echo $thoi_gian_giai_ngan['value'];?></li>
                  <li class="list-group-item"><a href="<?php echo $link_dang_ky['value'];?>">Xem thêm</a></li>
                </ul>
                <a href="<?php echo $link_dang_ky['value'];?>" target="_blank" class="btn">Đăng ký ngay</a>
              </div>
            </div>
          </div>
		<?php 
				$i++;
				$delay++;
				if ($delay > 3){
					$delay = 1;
				}
				
			} 
		?>  
        </div>
		<?php
		  if ($pagename != 'vay-tien-nhanh'){
		?>
        <div class="row block-more">
        	<div class="col-xs-12 col-lg-12" data-aos="fade-up" data-aos-delay="300">
        	  <a href="<?php echo get_home_url(); ?>/vay-tien-nhanh/" class="btn-more">Xem thêm</a>
            </div>
        </div>
		<?php
		  }
		?>
      </div>

    </section><!-- End Pricing Section -->
	<?php endif;?>
