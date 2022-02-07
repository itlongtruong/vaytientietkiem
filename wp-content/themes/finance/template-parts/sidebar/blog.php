<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Finance
 * @since Finance 1.0
 */
$cat_id = 0;
if (!empty(get_query_var( 'cat' ))){
	$category = get_category( get_query_var( 'cat' ) );
	$cat_id = $category->cat_ID;
}
$args = array(
    'taxonomy' => 'category',
    'hide_empty' => false,
);
$categories = get_terms($args);
?>
    <div class="sidebar">

		<h3 class="sidebar-title">Tìm Kiếm</h3>
		<div class="sidebar-item search-form">
		<form action="<?php bloginfo('url'); ?>/" method="GET" role="search">
			<input type="text" name="s" placeholder="Nhập Từ khóa...."  <?php if(is_search()) { ?>value="<?php the_search_query(); ?>" <?php } else { ?>value="" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"<?php } ?>>
			<input type="hidden" name="post_type" value="kien-thuc" />
			<button type="submit"><i class="bi bi-search"></i></button>
		</form>
		</div>

		<h3 class="sidebar-title">Kiến Thức</h3>
		<div class="sidebar-item categories">
		<ul>		
		<?php
		    foreach ($categories as $category) {
				$url = get_term_link($category);
		?>
			<li><a class="<?php echo $cat_id == $category->term_id ? 'active' : ''?>" href="<?php echo $url;?>"><?php echo $category->name; ?><span>(<?php echo $category->count; ?>)</span></a></li>
		<?php
			}
		?>
		</ul>
		</div><!-- End sidebar categories-->

		<?php
		$args = array(
			'post_type'        => 'kien-thuc',		
			'numberposts'      =>  5,
			'orderby'          => 'date',
			'order'            => 'DESC',		
		);
		$data = get_posts( $args );
		?>
        <?php if (!empty($data)):?>
		<h3 class="sidebar-title">Bài viết gần đây</h3>
		<div class="sidebar-item recent-posts">
		<?php
		    foreach ($data as $post) {
				$post_id = get_the_ID(); 
		?>
		<div class="post-item clearfix">
			<img src="<?php echo get_the_post_thumbnail_url($post_id,'full');?>" alt="">
			<h4><a href="<?php the_permalink(); ?>"><?php echo $post->post_title;?></a></h4>
			<time datetime="<?php echo date('Y-m-d', strtotime($post->post_date))?>"><?php echo date('M j, Y', strtotime($post->post_date))?></time>
		</div>
		<?php
			}
		?>		

		</div><!-- End sidebar recent posts-->
		<?php endif;?>
      
    </div><!-- End sidebar -->
