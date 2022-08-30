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
 
		<section id="news" class="news">
        <div class="container" data-aos="zoom-in">
            <header class="section-header">
              <h3>Tin tức mới nhất</h3>
              <p style="width: 80%">Blog của <span style='color: #50b848;'>Vay tiền Oline</span> cập nhật thông tin ưu đãi và tin tức mới nhất liên quan đến lĩnh vực tài chính cá nhân, thẻ tín dụng và sản phẩm vay online.</p>
            </header>
            <div class="row">
			<?php 	
			$args = array(
				'post_type'        => 'post',	
				'numberposts'      =>  1,
				'orderby'          => 'date',
				'order'            => 'DESC',		
			);
			$data = get_posts( $args );
			?>
				<?php
					foreach ($data as $post) {
						$post_id = get_the_ID(); 
				?>
              <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="100">
              	<a href="<?php the_permalink(); ?>">
	                <div class="box box-normal box-text-bottom box-blog-post has-hover">
					   <div class="box-image">
					      <div class="image-cover" style="padding-top:65%"> 
					      	<img src="<?php echo get_the_post_thumbnail_url($post_id,'full');?>" class="attachment-medium size-medium wp-post-image"> 
					      </div>
					   </div>
					   <div class="box-text text-left">
					      <div class="box-text-inner blog-post-inner">
					         <h5 class="post-title is-large"><?php echo $post->post_title;?></h5>				         
					         <p class="from_the_blog_excerpt"><?php echo $post->post_excerpt;?></p>
					      </div>
					   </div>
					</div>
			    </a>
              </div>
				<?php
					}
				?>	

              <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="200">
              	  <div class="row">
								<?php 	
						$args = array(
							'post_type'        => 'post',		
							'numberposts'      =>  4,
							'orderby'          => 'date',
							'order'            => 'DESC',		
						);
						$data = get_posts( $args );
						$i = 0;
						?>
							<?php
								foreach ($data as $post) {
								$post_id = get_the_ID(); 
								if ($i > 0){
								
						?>
						
              	  	  <div class="col-lg-12 col-md-12">
              	  	  	 <a href="<?php the_permalink(); ?>">
	              	  	  <div class="box box-vertical box-text-top box-blog-post has-hover">
						    <div class="box-image" style="width:31%">
						        <div class="image-cover" style="padding-top:70%"> 
						        	<img src="<?php echo get_the_post_thumbnail_url($post_id,'full');?>" alt="" class="attachment-medium size-medium wp-post-image"> 
						        </div>
						    </div>
						    <div class="box-text text-left">
						        <div class="box-text-inner blog-post-inner">
						            <h5 class="post-title is-large"><?php echo $post->post_title;?></h5>
						            <p class="from_the_blog_excerpt"><?php echo $post->post_excerpt;?></p>
						        </div>
						    </div>
						  </div>
						</a>
					   </div>
					   
					   <?php
					   }
					   		$i++;	
							}
						?>	
					  
              	  </div>
              </div>
            </div>

            <div class="row block-more">
	        	<div class="col-xs-12 col-lg-12" data-aos="fade-up" data-aos-delay="200">
	        	  <a href="<?php echo home_url(); ?>/kien-thuc/" class="btn-more">Xem thêm</a>
	            </div>
            </div>

        </div>
    </section>
