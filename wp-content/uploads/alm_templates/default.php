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

            </article>