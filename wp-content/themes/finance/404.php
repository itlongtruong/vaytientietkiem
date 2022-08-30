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


?>
<style>
  @import url(https://fonts.googleapis.com/css?family=Raleway:300,700);

  #title {
    text-align: center;
    font-size: 40px;
    margin-top: 40px;
    margin-bottom: -40px;
    position: relative;
    color: #fff;
  }



  .circles {
    background: #fff;
    text-align: center;
    position: relative;
  }

  .circles p {
    font-size: 240px;
    padding-top: 60px;
    position: relative;
    z-index: 9;
    line-height: 100%;
  }

  .circles p small {
    font-size: 40px;
    line-height: 100%;
    vertical-align: top;
  }

  .circles .circle.small {
    width: 140px;
    height: 140px;
    border-radius: 50%;
    background: #50B848;
    position: absolute;
    z-index: 1;
    top: 80px;
    left: 50%;
    animation: 7s smallmove infinite cubic-bezier(1, .22, .71, .98);
    -webkit-animation: 7s smallmove infinite cubic-bezier(1, .22, .71, .98);
    animation-delay: 1.2s;
    -webkit-animation-delay: 1.2s;
  }

  .circles .circle.med {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    background: #50B848;
    position: absolute;
    z-index: 1;
    top: 0;
    left: 10%;
    animation: 7s medmove infinite cubic-bezier(.32, .04, .15, .75);
    -webkit-animation: 7s medmove infinite cubic-bezier(.32, .04, .15, .75);
    animation-delay: 0.4s;
    -webkit-animation-delay: 0.4s;
  }

  .circles .circle.big {
    width: 400px;
    height: 400px;
    border-radius: 50%;
    background: #50B848;
    position: absolute;
    z-index: 1;
    top: 200px;
    right: 0;
    animation: 8s bigmove infinite;
    -webkit-animation: 8s bigmove infinite;
    animation-delay: 3s;
    -webkit-animation-delay: 1s;
  }

  @-webkit-keyframes smallmove {
    0% {
      top: 10px;
      left: 45%;
      opacity: 1;
    }

    25% {
      top: 300px;
      left: 40%;
      opacity: 0.7;
    }

    50% {
      top: 240px;
      left: 55%;
      opacity: 0.4;
    }

    75% {
      top: 100px;
      left: 40%;
      opacity: 0.6;
    }

    100% {
      top: 10px;
      left: 45%;
      opacity: 1;
    }
  }

  @keyframes smallmove {
    0% {
      top: 10px;
      left: 45%;
      opacity: 1;
    }

    25% {
      top: 300px;
      left: 40%;
      opacity: 0.7;
    }

    50% {
      top: 240px;
      left: 55%;
      opacity: 0.4;
    }

    75% {
      top: 100px;
      left: 40%;
      opacity: 0.6;
    }

    100% {
      top: 10px;
      left: 45%;
      opacity: 1;
    }
  }

  @-webkit-keyframes medmove {
    0% {
      top: 0px;
      left: 20%;
      opacity: 1;
    }

    25% {
      top: 300px;
      left: 80%;
      opacity: 0.7;
    }

    50% {
      top: 240px;
      left: 55%;
      opacity: 0.4;
    }

    75% {
      top: 100px;
      left: 40%;
      opacity: 0.6;
    }

    100% {
      top: 0px;
      left: 20%;
      opacity: 1;
    }
  }

  @keyframes medmove {
    0% {
      top: 0px;
      left: 20%;
      opacity: 1;
    }

    25% {
      top: 300px;
      left: 80%;
      opacity: 0.7;
    }

    50% {
      top: 240px;
      left: 55%;
      opacity: 0.4;
    }

    75% {
      top: 100px;
      left: 40%;
      opacity: 0.6;
    }

    100% {
      top: 0px;
      left: 20%;
      opacity: 1;
    }
  }

  @-webkit-keyframes bigmove {
    0% {
      top: 0px;
      right: 4%;
      opacity: 0.5;
    }

    25% {
      top: 100px;
      right: 40%;
      opacity: 0.4;
    }

    50% {
      top: 240px;
      right: 45%;
      opacity: 0.8;
    }

    75% {
      top: 100px;
      right: 35%;
      opacity: 0.6;
    }

    100% {
      top: 0px;
      right: 4%;
      opacity: 0.5;
    }
  }

  @keyframes bigmove {
    0% {
      top: 0px;
      right: 4%;
      opacity: 0.5;
    }

    25% {
      top: 100px;
      right: 40%;
      opacity: 0.4;
    }

    50% {
      top: 240px;
      right: 45%;
      opacity: 0.8;
    }

    75% {
      top: 100px;
      right: 35%;
      opacity: 0.6;
    }

    100% {
      top: 0px;
      right: 4%;
      opacity: 0.5;
    }
  }
</style>
<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="<?php echo get_home_url(); ?>">Trang Chủ</a></li>
        <li>404</li>
      </ol>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->

  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-8 entries">
        <div class="post--items post--items-5">
            <div class="col-md-12 col-sm-12 ptop--30">
              <section id="not-found">

                <div class="circles">
                  <p>404<br>
                    <small>Không tìm thấy trang</small></small>

                  </p>
                  <div><a class="btn btn-success" href="<?php echo home_url(); ?>/" role="button">Về Trang Chủ</a></div>
                  <span class="circle big"></span>
                  <span class="circle med"></span>
                  <span class="circle small"></span>
                </div>
              </section>

            </div>
          </div>
        </div><!-- End blog entries list -->

        <div class="col-lg-4">
          <?php get_template_part('template-parts/sidebar/blog'); ?>
        </div><!-- End blog sidebar -->

      </div>

    </div>
  </section><!-- End Blog Section -->



</main><!-- End #main -->

<?php get_footer(); ?>