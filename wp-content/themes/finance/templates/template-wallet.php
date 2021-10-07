<?php
/**
 * Template Name: Wallet Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Finance
 * @since Finance 1.0
 */

get_header();
?>

  <main id="main">

  <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Trang Chủ</a></li>
          <li>Ví Điện Tử</li>
        </ol>
    
      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3> Ví điện tử là gì? &amp; Các loại ví điện tử</h3>
          <p style="width: 80%">Ví điện tử hay còn được gọi là Ví tiền Online là một tài khoản thanh toán các giao dịch trực tuyến phổ biến nhất hiện nay như: Thanh toán tiền điện, nước, học phí, nạp tiền điện thoại, mua vé xem phim,..</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon" ><img  src="<?php echo get_template_directory_uri();?>/assets/img/icon/momo.png" style="width:60px"></div>
              <h4 class="title"><a href="javascript:void(0)">MoMo</a></h4>
            </div>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><img  src="<?php echo get_template_directory_uri();?>/assets/img/icon/zalopay.png" style="width:60px"></i></div>
              <h4 class="title"><a href="javascript:void(0)">ZaloPay</a></h4>           
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <div class="icon"><img  src="<?php echo get_template_directory_uri();?>/assets/img/icon/airpay.png" style="width:60px"></i></div>
              <h4 class="title"><a href="javascript:void(0)">AirPay</a></h4>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <?php get_template_part( 'template-parts/content/partner-news-wallet' ); ?>
    <!-- ======= Testimonials Section ======= -->
    <?php get_template_part( 'template-parts/content/partner-review-wallet' ); ?>
      <!-- ======= F.A.Q Section ======= -->
      <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>Câu hỏi thường gặp</h3>
          <p>Các thắc mắc thường gặp vế Ví điện tử</p>
        </header>

        <ul id="faq-list" data-aos="fade-up" data-aos-delay="100">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">Ví điện tử là gì? <i class="ion-android-remove"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list">
              <p>
              Vay tiền online hay vay tiền trực tuyến là hình thức vay tín chấp chỉ cần CMND/ thẻ CCCD, số điện thoại, số tài khoản ngân hàng với thời gian giải ngân nhanh trong vòng 5 phút tới 24 giờ.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Vay tiền nhanh online có lừa đảo không?<i class="ion-android-remove"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>
              Các trang web/ ứng dụng (app) vay tiền nhanh online được giới thiệu trên VayTienOnline được triển khai bởi các ngân hàng hay các công ty tài chính chính thống, có giấy phép ĐKKD.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Bị nợ xấu trên CIC có vay được không?<i class="ion-android-remove"></i></a>
            <div id="faq3" class="collapse" data-parent="#faq-list">
              <p>
              Các trang web/app vay tiền được giới thiệu trên VayTienOnline đều hỗ trợ cho vay đối với người có nợ xấu trên CIC.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Điều kiện vay tiền nhanh online là gì?<i class="ion-android-remove"></i></a>
            <div id="faq4" class="collapse" data-parent="#faq-list">
              <p>
              Để có được khoản vay bạn phải là công dân Việt Nam trong độ tuổi từ 18 – 60 tuổi, có chứng minh nhân dân/ thẻ Căn cước công dân còn hiệu lực, số điện thoại và 01 tài khoản ngân hàng để giải ngân.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section><!-- End F.A.Q Section -->
        
  </main><!-- End #main -->

<?php get_footer(); ?>
