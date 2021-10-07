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
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="<?php the_permalink(); ?>"><?php echo get_comments_number(get_the_ID())?> bình luận</a></li>
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

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><?php the_tags('');?></li>
                </ul>
              </div>
            </article><!-- End blog entry -->

           <!-- <div class="blog-author d-flex align-items-center">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/blog/blog-author.jpg" class="rounded-circle float-left" alt="">
              <div>
                <h4>Jane Smith</h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/itlongtruong"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                  Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                </p>
              </div>
            </div> End blog author bio -->
            
                <div class="blog-comments">
                <h4 class="comments-count">8 Comments</h4>
                <div id="comment-1" class="comment">
                    <div class="d-flex">
                      <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
                      <div>
                          <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                          <time datetime="2020-01-01">01 Jan, 2020</time>
                          <p>
                            Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
                            Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                          </p>
                      </div>
                    </div>
                </div>
                <!-- End comment #1 -->
                <div id="comment-2" class="comment">
                    <div class="d-flex">
                      <div class="comment-img"><img src="<?php echo get_template_directory_uri();?>/assets/img/blog/comments-2.jpg" alt=""></div>
                      <div>
                          <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                          <time datetime="2020-01-01">01 Jan, 2020</time>
                          <p>
                            Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
                          </p>
                      </div>
                    </div>
                    <div id="comment-reply-1" class="comment comment-reply">
                      <div class="d-flex">
                          <div class="comment-img"><img src="<?php echo get_template_directory_uri();?>/assets/img/blog/comments-3.jpg" alt=""></div>
                          <div>
                            <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                            <time datetime="2020-01-01">01 Jan, 2020</time>
                            <p>
                                Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.
                                Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat.
                                Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.
                            </p>
                          </div>
                      </div>
                      <!-- <div id="comment-reply-2" class="comment comment-reply">
                          <div class="d-flex">
                            <div class="comment-img"><img src="<?php echo get_template_directory_uri();?>/assets/img/blog/comments-4.jpg" alt=""></div>
                            <div>
                                <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                <time datetime="2020-01-01">01 Jan, 2020</time>
                                <p>
                                  Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.
                                </p>
                            </div>
                          </div>
                      </div> -->
                      <!-- End comment reply #2-->
                    </div>
                    <!-- End comment reply #1-->
                </div>
                <!-- End comment #2-->
                <!-- <div id="comment-3" class="comment">
                    <div class="d-flex">
                      <div class="comment-img"><img src="<?php echo get_template_directory_uri();?>/assets/img/blog/comments-5.jpg" alt=""></div>
                      <div>
                          <h5><a href="">Nolan Davidson</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                          <time datetime="2020-01-01">01 Jan, 2020</time>
                          <p>
                            Distinctio nesciunt rerum reprehenderit sed. Iste omnis eius repellendus quia nihil ut accusantium tempore. Nesciunt expedita id dolor exercitationem aspernatur aut quam ut. Voluptatem est accusamus iste at.
                            Non aut et et esse qui sit modi neque. Exercitationem et eos aspernatur. Ea est consequuntur officia beatae ea aut eos soluta. Non qui dolorum voluptatibus et optio veniam. Quam officia sit nostrum dolorem.
                          </p>
                      </div>
                    </div>
                </div> -->
                <!-- End comment #3 -->
                <!-- <div id="comment-4" class="comment">
                    <div class="d-flex">
                      <div class="comment-img"><img src="<?php echo get_template_directory_uri();?>/assets/img/blog/comments-6.jpg" alt=""></div>
                      <div>
                          <h5><a href="">Kay Duggan</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                          <time datetime="2020-01-01">01 Jan, 2020</time>
                          <p>
                            Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit tempore. Cumque sed quia ut maxime. Est ad aut cum. Ut exercitationem non in fugiat.
                          </p>
                      </div>
                    </div>
                </div> -->
                <!-- End comment #4 -->
                <!-- <div class="reply-form">
                    <h4>Leave a Reply</h4>
                    <p>Your email address will not be published. Required fields are marked * </p>
                    <form action="">
                      <div class="row">
                          <div class="col-md-6 form-group">
                            <input name="name" require type="text" class="form-control" placeholder="Tên của bạn*">
                          </div>
                          <div class="col-md-6 form-group">
                            <input name="email" require type="text" class="form-control" placeholder="Email*">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col form-group">
                            <textarea name="comment" require class="form-control" placeholder="Nội dung*"></textarea>
                          </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Bình luận</button>
                    </form>
                </div> -->
              </div>
          </div><!-- End blog entries list -->
          <div class="col-lg-4">
           <?php get_template_part( 'template-parts/sidebar/blog' ); ?>
          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->
  </main><!-- End #main -->

<?php get_footer(); ?>
