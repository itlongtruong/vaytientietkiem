<?php
/**
 * Template Name: Home Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Finance
 * @since Finance 1.0
 */

get_header();
?>

  <section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-md-6 intro-info order-md-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2>Vay Tiền Online<br><span>Sự lựa chọn thông minh</span> của bạn</h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Đăng ký tư vấn ngay</a>
          </div>
        </div>

        <div class="col-md-6 intro-img order-md-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section>

  <main id="main">

        <!-- ======= Portfolio Details Section ======= -->
    <!-- <section id="portfolio-details" class="portfolio-details">
      <div class="container-fluid" data-aos="fade-up">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/portfolio-details-1.jpg" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/portfolio-details-2.jpg" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/portfolio-details-3.jpg" class="img-fluid" alt="">
          </div>

        </div>
      
      </div>
    </section> -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Tư vấn tài chính &amp; Đánh giá sản phẩm vay online</h3>
          <p style="width: 80%">So sánh sản phẩm vay, thẻ tín dụng từ nhiều ngân hàng và tổ chức tài chính khác nhau. Thông tin cung cấp rõ ràng và trực quan để bạn dễ dàng so sánh và chọn lựa đúng sản phẩm mình cần.</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon" ><img  src="<?php echo get_template_directory_uri();?>/assets/img/icon/vay-tien-nhanh-1.png" style="width:60px"></div>
              <h4 class="title"><a href="javascript:void(0)">Vay nhanh</a></h4>
            </div>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><img  src="<?php echo get_template_directory_uri();?>/assets/img/icon/cam-do.png" style="width:60px"></i></div>
              <h4 class="title"><a href="javascript:void(0)">Cầm đồ</a></h4>           
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <div class="icon"><img  src="<?php echo get_template_directory_uri();?>/assets/img/icon/vay-tin-chap-1.png" style="width:60px"></i></div>
              <h4 class="title"><a href="javascript:void(0)">Vay tín chấp</a></h4>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><img  src="<?php echo get_template_directory_uri();?>/assets/img/icon/the-tin-dung-1.png" style="width:60px"></div>
              <h4 class="title"><a href="javascript:void(0)">Thẻ tín dụng</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200"">
	        <div class=" box">
	            <div class="icon"><img  src="<?php echo get_template_directory_uri();?>/assets/img/icon/vay-mua-xe-1.png" style="width:60px"></div>
	            <h4 class="title"><a href="javascript:void(0)">Vay mua xe</a></h4>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
	          <div class="box">
	            <div class="icon" ><img  src="<?php echo get_template_directory_uri();?>/assets/img/icon/vay-mua-nha-1.png" style="width:60px"></div>
	            <h4 class="title"><a href="javascript:void(0)">Vay mua nhà</a></h4>     
	          </div>
	        </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services-2">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Bạn đã biết cách sử dụng <span style='color: #50b848;'>Vay Tiền Online</span> chưa?</span></h3>
          <p style="width: 80%">Vay online với <span style='font-size: 110%; color: #50b848;'>03</span> bước đơn giản tại <span style='color: #50b848;'>Vaytienonline.vn </span></p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
            <div class="icon">
             <svg xmlns="http://www.w3.org/2000/svg" id="Layer_3" enable-background="new 0 0 64 64" width="60px" viewBox="0 0 64 64" class=""><g><g><path d="m26 14c-6.617 0-12 5.383-12 12s5.383 12 12 12 12-5.383 12-12-5.383-12-12-12zm0 22c-5.514 0-10-4.486-10-10s4.486-10 10-10 10 4.486 10 10-4.486 10-10 10z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m61.879 56.464-10.879-10.878v-39.586c0-.552-.447-1-1-1h-3v-3c0-.552-.447-1-1-1h-34c-.266 0-.52.105-.707.293l-10 10c-.188.187-.293.442-.293.707v46c0 .552.447 1 1 1h3v3c0 .552.447 1 1 1h44c.553 0 1-.448 1-1v-5.587l5.465 5.465c.723.724 1.683 1.122 2.707 1.122 2.11 0 3.828-1.717 3.828-3.829 0-1.022-.398-1.983-1.121-2.707zm-12.879-49.464v36.586l-2-2v-34.586zm-38-2.586v6.586h-6.586zm-8 8.586h9c.553 0 1-.448 1-1v-9h32v36.586l-1.655-1.655c.399-.755.29-1.71-.345-2.345l-2.619-2.619c1.026-2.11 1.619-4.468 1.619-6.967 0-8.822-7.178-16-16-16s-16 7.178-16 16 7.178 16 16 16c2.499 0 4.857-.593 6.967-1.619l2.619 2.619c.39.39.902.585 1.414.585.321 0 .64-.086.931-.24l7.069 7.069v6.586h-42zm34 28.586-2.223-2.223c1.823-1.201 3.385-2.763 4.586-4.586l2.223 2.223zm-11-1.586c-7.72 0-14-6.28-14-14s6.28-14 14-14 14 6.28 14 14-6.28 14-14 14zm23 21h-42v-2h39c.553 0 1-.448 1-1v-5.586l2 2zm10.172 0c-.481 0-.952-.195-1.293-.536l-18.465-18.464 2.586-2.586 18.465 18.464c.345.346.535.805.535 1.293 0 1.009-.82 1.829-1.828 1.829z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m17 7h24v2h-24z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m7 51h34v2h-34z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m7 47h34v2h-34z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m7 43h26v2h-26z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m28.793 24.855c.743-.727 1.207-1.736 1.207-2.855 0-2.206-1.794-4-4-4s-4 1.794-4 4c0 1.119.464 2.128 1.207 2.855-1.331.9-2.207 2.422-2.207 4.145v3c0 .552.447 1 1 1h8c.553 0 1-.448 1-1v-3c0-1.723-.876-3.245-2.207-4.145zm-4.793-2.855c0-1.103.897-2 2-2s2 .897 2 2-.897 2-2 2-2-.897-2-2zm5 9h-6v-2c0-1.654 1.346-3 3-3s3 1.346 3 3z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path></g></g> </svg>
             </div>
              <h6>Bước 1</h6>
              <h4 class="title"><a href="javascript:void(0)">Tìm kiếm</a></h4>
			  <p>Chọn sản phẩm vay online bạn muốn tìm kiếm như <span style='color: #50b848;'><a href='https://vaytienonline.vn/vay-tien-nhanh/' style='color: #50b848;'>vay nhanh</a></span>, <span style='color: #50b848;'><a href='https://vaytienonline.vn/vay-tin-chap/' style='color: #50b848;'>vay tín chấp</a></span>,
				                                vay mua xe, vay mua nhà..</p>              
            </div>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_3" enable-background="new 0 0 64 64"  viewBox="0 0 64 64" width="60px"><g><g><path d="m58 .905h-52c-2.757 0-5 2.243-5 5v38c0 2.757 2.243 5 5 5h16v6h-2c-2.206 0-4 1.794-4 4v3c0 .552.448 1 1 1h30c.552 0 1-.448 1-1v-3c0-2.206-1.794-4-4-4h-2v-6h16c2.757 0 5-2.243 5-5v-38c0-2.757-2.243-5-5-5zm-52 2h52c1.654 0 3 1.346 3 3v31h-58v-31c0-1.654 1.346-3 3-3zm40 56v2h-28v-2c0-1.103.897-2 2-2h24c1.103 0 2 .897 2 2zm-6-4h-16v-6h16zm18-8h-52c-1.654 0-3-1.346-3-3v-5h58v5c0 1.655-1.346 3-3 3z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m9 18.22v15.685c0 .552.448 1 1 1h20c.552 0 1-.448 1-1v-24c0-.552-.448-1-1-1h-11.685c-1.126-2.361-3.53-4-6.315-4-3.86 0-7 3.14-7 7 0 2.786 1.639 5.189 4 6.315zm20-7.315v22h-18v-14.08c.328.047.66.08 1 .08s.672-.033 1-.08v3.08c0 .552.448 1 1 1h12c.552 0 1-.448 1-1v-8c0-.552-.448-1-1-1h-7.08c.047-.328.08-.66.08-1s-.033-.672-.08-1zm-10.685 4h6.685v6h-10v-2.685c1.45-.691 2.623-1.865 3.315-3.315zm-6.315-8c2.757 0 5 2.243 5 5s-2.243 5-5 5-5-2.243-5-5 2.243-5 5-5z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m11 14.905c.256 0 .512-.098.707-.293l4-4-1.414-1.414-3.293 3.293-1.293-1.293-1.414 1.414 2 2c.195.196.451.293.707.293z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m37 18.22v15.685c0 .552.448 1 1 1h20c.552 0 1-.448 1-1v-24c0-.552-.448-1-1-1h-11.685c-1.126-2.361-3.53-4-6.315-4-3.86 0-7 3.14-7 7 0 2.786 1.639 5.189 4 6.315zm20-7.315v22h-18v-14.08c.328.047.66.08 1 .08s.672-.033 1-.08v3.08c0 .552.448 1 1 1h12c.552 0 1-.448 1-1v-8c0-.552-.448-1-1-1h-7.08c.047-.328.08-.66.08-1s-.033-.672-.08-1zm-10.685 4h6.685v6h-10v-2.685c1.45-.691 2.623-1.865 3.315-3.315zm-6.315-8c2.757 0 5 2.243 5 5s-2.243 5-5 5-5-2.243-5-5 2.243-5 5-5z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m38.707 14.612 1.293-1.293 1.293 1.293 1.414-1.414-1.293-1.293 1.293-1.293-1.414-1.414-1.293 1.293-1.293-1.293-1.414 1.414 1.293 1.293-1.293 1.293z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m13 24.905h14v2h-14z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m13 28.905h14v2h-14z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m41 24.905h14v2h-14z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m41 28.905h14v2h-14z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m57 42.905h2v2h-2z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m53 42.905h2v2h-2z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path></g></g> </svg>
              </div>
              <h6>Bước 2</h6>
              <h4 class="title"><a href="javascript:void(0)">So sánh</a></h4>
              <p>So sánh các sản phẩm vay online từ ngân hàng, công ty tài chính được gợi ý trên <a href='https://vaytienonline.vn/'><span style='color: #50b848;'>Vay Tiền Online</span></a></p>           
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="-73 0 512 512.15596" width="60px"><g><path d="m1.78125 232.433594c-3.957031 10.554687-.867188 22.460937 7.730469 29.753906 16.289062 16.300781 49.789062 75.144531 66.371093 116.609375 11.316407 28.28125 36.164063 56.039063 55.015626 74.351563 8.113281 7.984374 12.667968 18.898437 12.644531 30.285156v3.121094c0 14.140624 11.460937 25.601562 25.601562 25.601562h136.53125c14.140625 0 25.601563-11.460938 25.601563-25.601562v-26.214844c-.078125-2.167969.746094-4.273438 2.277344-5.808594 31.496093-28.800781 31.855468-76.878906 31.855468-78.910156v-135.089844c.316406-18.273438-13.460937-33.722656-31.648437-35.488281-6.835938-.449219-13.648438 1.171875-19.550781 4.648437v-13.269531c.070312-12.296875-6.515626-23.667969-17.21875-29.726563-10.699219-6.058593-23.839844-5.855468-34.347657.535157-1.09375-11.511719-8.007812-21.660157-18.316406-26.890625-10.3125-5.230469-22.582031-4.820313-32.519531 1.09375v-14.132813c21.179687-12.019531 34.226562-34.527343 34.136718-58.878906 0-37.703125-30.566406-68.265625-68.269531-68.265625s-68.265625 30.5625-68.265625 68.265625c-.089844 24.351563 12.957032 46.859375 34.132813 58.878906v137.386719c.242187 10.074219-1.128907 20.117188-4.0625 29.757812-.914063 2.847657-3.246094 5.019532-6.152344 5.734376-2.734375.691406-5.632813-.070313-7.679687-2.015626-6.664063-6.355468-12.585938-13.449218-17.644532-21.144531-14.808594-22.152343-52.070312-63.53125-75.394531-63.53125-13.101563-.273437-25.152344 7.132813-30.828125 18.945313zm124.695312-164.011719c0-28.277344 22.921876-51.199219 51.199219-51.199219 28.277344 0 51.199219 22.921875 51.199219 51.199219.082031 14.601563-6.136719 28.527344-17.066406 38.214844v-38.214844c0-18.851563-15.28125-34.132813-34.132813-34.132813-18.851562 0-34.132812 15.28125-34.132812 34.132813v38.214844c-10.925781-9.6875-17.148438-23.613281-17.066407-38.214844zm-32.699218 218.070313c5.785156 8.773437 12.550781 16.859374 20.164062 24.105468 6.277344 5.9375 15.15625 8.253906 23.535156 6.136719 8.539063-2.128906 15.394532-8.480469 18.175782-16.828125 3.53125-11.398438 5.207031-23.289062 4.957031-35.21875v-196.265625c0-9.425781 7.640625-17.066406 17.066406-17.066406s17.066407 7.640625 17.066407 17.066406v179.199219c0 4.714844 3.820312 8.535156 8.535156 8.535156 4.710937 0 8.53125-3.820312 8.53125-8.535156v-76.796875c0-9.425781 7.644531-17.066407 17.066406-17.066407 9.425781 0 17.070312 7.640626 17.070312 17.066407v76.796875c0 4.714844 3.820313 8.535156 8.53125 8.535156 4.714844 0 8.535157-3.820312 8.535157-8.535156v-51.199219c0-9.425781 7.640625-17.066406 17.066406-17.066406s17.066406 7.640625 17.066406 17.066406v59.734375c0 4.710938 3.820313 8.53125 8.53125 8.53125 4.714844 0 8.535157-3.820312 8.535157-8.53125v-17.066406c-.011719-4.527344 1.792968-8.871094 5.007812-12.058594 3.519531-3.488281 8.367188-5.296875 13.3125-4.964844 9.21875 1.203125 16.039062 9.171875 15.8125 18.464844v135.089844c0 .417968-.433594 42.667968-26.316406 66.324218-5.058594 4.769532-7.894532 11.441407-7.816406 18.394532v26.214844c0 4.714843-3.820313 8.535156-8.535157 8.535156h-136.53125c-4.714843 0-8.535156-3.820313-8.535156-8.535156v-3.121094c.011719-15.996094-6.414063-31.324219-17.824219-42.53125-14.457031-14.035156-40.3125-41.609375-51.046875-68.453125-17.5625-43.878907-52.308593-104.476563-70.160156-122.328125-4.0625-4.058594-5.421875-7.816406-4.039063-11.160156 3.09375-5.359376 8.882813-8.589844 15.070313-8.40625 11.597656 0 43.042969 28.75 61.167969 55.9375zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m322.742188 367.089844c4.714843 0 8.535156-3.820313 8.535156-8.535156v-51.199219c0-4.710938-3.820313-8.53125-8.535156-8.53125-4.710938 0-8.53125 3.820312-8.53125 8.53125v51.199219c0 4.714843 3.820312 8.535156 8.53125 8.535156zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m314.210938 418.289062c2.261718 0 4.433593-.898437 6.03125-2.5 6.492187-6.007812 10.441406-14.273437 11.035156-23.101562-.007813-4.609375-3.71875-8.355469-8.328125-8.410156-4.660157-.089844-8.539063 3.558594-8.738281 8.214844-.640626 4.332031-2.773438 8.304687-6.035157 11.230468-2.4375 2.441406-3.167969 6.109375-1.847656 9.296875 1.320313 3.191407 4.429687 5.269531 7.882813 5.269531zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m186.210938 478.023438h8.53125c4.714843 0 8.535156-3.820313 8.535156-8.535157 0-4.710937-3.820313-8.53125-8.535156-8.53125h-8.53125c-4.714844 0-8.535157 3.820313-8.535157 8.53125 0 4.714844 3.820313 8.535157 8.535157 8.535157zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m228.875 478.023438h59.734375c4.714844 0 8.535156-3.820313 8.535156-8.535157 0-4.710937-3.820312-8.53125-8.535156-8.53125h-59.734375c-4.710938 0-8.53125 3.820313-8.53125 8.53125 0 4.714844 3.820312 8.535157 8.53125 8.535157zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m109.410156 141.289062c3.40625 0 6.484375-2.019531 7.835938-5.144531 1.351562-3.125.71875-6.753906-1.613282-9.234375-29.566406-31.25-31.171874-79.644531-3.738281-112.785156 2.027344-2.339844 2.628907-5.59375 1.574219-8.503906-1.058594-2.910156-3.609375-5.019532-6.667969-5.511719-3.058593-.492187-6.140625.710937-8.058593 3.144531-32.90625 39.765625-31 97.828125 4.449218 135.347656 1.613282 1.714844 3.863282 2.6875 6.21875 2.6875zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path><path d="m257.320312 118.683594c2.011719 1.03125 4.355469 1.222656 6.507813.527344 2.15625-.695313 3.945313-2.214844 4.976563-4.230469 18.65625-36.328125 13.859374-80.28125-12.195313-111.726563-1.914063-2.433594-5-3.636718-8.058594-3.144531-3.054687.492187-5.605469 2.601563-6.664062 5.511719-1.058594 2.910156-.457031 6.164062 1.574219 8.503906 21.710937 26.195312 25.707031 62.8125 10.164062 93.074219-2.152344 4.191406-.496094 9.332031 3.695312 11.484375zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path></g> </svg>
              </div>
              <h6>Bước 3</h6>
              <h4 class="title"><a href="javascript:void(0)">Chọn lựa</a></h4>
              <p>Chọn sản phẩm vay tốt nhất dựa trên các tiêu chí như lãi suất, thời gian vay, điều kiện vay, hạn mức vay&#8230;</p>
            </div>
          </div>       
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
 
      <div class="container">
	        <div class="row counters" data-aos="fade-up" data-aos-delay="100">
	        
	          <div class="col-lg-3 col-6 text-center">
	            <span data-toggle="counter-up">20</span>
	            <p>Sản phẩm</p>
	          </div>

	          <div class="col-lg-3 col-6 text-center">
	            <span data-toggle="counter-up">11,364</span>
	            <p>Hồ sơ</p>
	          </div>

	          <div class="col-lg-3 col-6 text-center">
	            <span data-toggle="counter-up">18</span>
	            <p>Ngân hàng</p>
	          </div>

	           <div class="col-lg-3 col-6 text-center">
	            <span data-toggle="counter-up">274</span>
	            <p>Nhân viên</p>
	          </div>

	        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg wow fadeInUp">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Các sản phẩm vay online</h3>          
        </header>

        <div class="row flex-items-xs-middle flex-items-xs-center">

          <!-- Basic Plan  -->
          <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-header">
              	<div class="panel-label"><span class="panel-label-text">TOP #1 tốt nhất</span><br><span class="triangle-right"></span></div>
              	<div class="offers-tags"><img class="offers-tags__item" height="20" src="<?php echo get_template_directory_uri();?>/assets/img/new-2.png"></div>
                <div class="logo">
                   <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/doctordong.png" class="testimonial-img" alt="">
                </div>
                <h4 class="card-title">
                  Vay tiêu dùng tín chấp VIB
                </h4>
                <p class="gift"><i aria-hidden="true" class="fa fa-gift"></i> <span style="font-size: 85%;"> 0% lãi suất đến 30 ngày cho khoản vay đầu</span></p>
              </div>
              <div class="card-block">
                <h3>
                	10<span class="currency">triệu</span><span class="period">lãi suất</span>
                	20<span class="currency">%</span><span class="period">/năm</span>
                </h3>
                <ul class="list-group">
                  <li class="list-group-item">Độ tuổi từ 20 – 60</li>
                  <li class="list-group-item">Thời gian vay tối đa 30 ngày</li>
                  <li class="list-group-item">Chỉ cần CMND, giải ngân trong 5 phút</li>
                  <li class="list-group-item"><a href="#">Xem thêm</a></li>
                </ul>
                <a href="#" class="btn">Đăng ký vay ngay</a>
              </div>
            </div>
          </div>

          <!-- Regular Plan  -->
          <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-header">
              	<div class="panel-label"><span class="panel-label-text">TOP #2 tốt nhất</span><br><span class="triangle-right"></span></div>
              	<div class="offers-tags"><img class="offers-tags__item" height="20" src="<?php echo get_template_directory_uri();?>/assets/img/new-2.png"></div>
                <div class="logo">
                   <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/moneyveo.png" class="testimonial-img" alt="">
                </div>
                <h4 class="card-title">
                  Vay tiêu dùng tín chấp TPBank
                </h4>
                <p class="gift"><i aria-hidden="true" class="fa fa-gift"></i> <span style="font-size: 85%;"> 0% lãi suất đến 30 ngày cho khoản vay đầu</span></p>
              </div>
              <div class="card-block">
                <h3>
                    20<span class="currency">triệu</span><span class="period">lãi suất</span>
                    18.25<span class="currency">%</span><span class="period">/năm</span>
                </h3>
                <ul class="list-group">
                  <li class="list-group-item">Độ tuổi từ 20 – 60</li>
                  <li class="list-group-item">Thời gian vay tối đa 30 ngày</li>
                  <li class="list-group-item">Chỉ cần CMND, giải ngân trong 5 phút</li>
                  <li class="list-group-item"><a href="#">Xem thêm</a></li>
                </ul>
                <a href="#" class="btn">Đăng ký vay ngay</a>
              </div>
            </div>
          </div>

          <!-- Premium Plan  -->
          <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-header">
              	<div class="panel-label"><span class="panel-label-text">TOP #3 tốt nhất</span><br><span class="triangle-right"></span></div>
              	<div class="logo">
                   <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/oncredit.png" class="testimonial-img" alt="">
                </div>
                <h4 class="card-title">
                  OnCredit &#8211; Vay tiền nhanh online 24/7
                </h4>
                <p class="gift"><span style="font-size: 85%;">  Thủ tục đơn giản, giải ngân nhanh chóng</span></p>
              </div>
              <div class="card-block">
                <h3>
                	10<span class="currency">triệu</span><span class="period">lãi suất</span>
                	14.2<span class="currency">%</span><span class="period">/năm</span>
                </h3>
                <ul class="list-group">
                  <li class="list-group-item">Độ tuổi từ 20 – 60</li>
                  <li class="list-group-item">Thời gian vay tối đa 30 ngày</li>
                  <li class="list-group-item">Chỉ cần CMND, giải ngân trong 5 phút</li>
                  <li class="list-group-item"><a href="#">Xem thêm</a></li>
                </ul>
                <a href="#" class="btn">Đăng ký vay ngay</a>
              </div>
            </div>
          </div>

           <!-- Basic Plan  -->
          <div class="col-xs-12 col-lg-4 product-2" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-header">
                <div class="logo">
                   <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/senmo.png" class="testimonial-img" alt="">
                </div>
                <h4 class="card-title">
                  Vay tiêu dùng tín chấp VIB
                </h4>
                <p class="gift"><i aria-hidden="true" class="fa fa-gift"></i> <span style="font-size: 85%;"> 0% lãi suất đến 30 ngày cho khoản vay đầu</span></p>
              </div>
              <div class="card-block">
                <h3>
                	10<span class="currency">triệu</span><span class="period">lãi suất</span>
                	12<span class="currency">%</span><span class="period">/năm</span>
                </h3>
                <ul class="list-group">
                  <li class="list-group-item">Độ tuổi từ 20 – 60</li>
                  <li class="list-group-item">Thời gian vay tối đa 30 ngày</li>
                  <li class="list-group-item">Chỉ cần CMND, giải ngân trong 5 phút</li>
                  <li class="list-group-item"><a href="#">Xem thêm</a></li>
                </ul>
                <a href="#" class="btn">Đăng ký vay ngay</a>
              </div>
            </div>
          </div>

          <!-- Regular Plan  -->
          <div class="col-xs-12 col-lg-4 product-2" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-header">
                <div class="logo">
                   <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/moneycat.png" class="testimonial-img" alt="">
                </div>
                <h4 class="card-title">
                  Vay tiêu dùng tín chấp TPBank
                </h4>
                <p class="gift"><i aria-hidden="true" class="fa fa-gift"></i> <span style="font-size: 85%;"> 0% lãi suất đến 30 ngày cho khoản vay đầu</span></p>
              </div>
              <div class="card-block">
                <h3>
                	10<span class="currency">triệu</span><span class="period">lãi suất</span>
                	20<span class="currency">%</span><span class="period">/năm</span>
                </h3>
                <ul class="list-group">
                  <li class="list-group-item">Độ tuổi từ 20 – 60</li>
                  <li class="list-group-item">Thời gian vay tối đa 30 ngày</li>
                  <li class="list-group-item">Chỉ cần CMND, giải ngân trong 5 phút</li>
                  <li class="list-group-item"><a href="#">Xem thêm</a></li>
                </ul>
                <a href="#" class="btn">Đăng ký vay ngay</a>
              </div>
            </div>
          </div>

          <!-- Premium Plan  -->
          <div class="col-xs-12 col-lg-4 product-2" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-header">
              	<div class="logo">
                   <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/tamo.png" class="testimonial-img" alt="">
                </div>
                <h4 class="card-title">
                  OnCredit &#8211; Vay tiền nhanh online 24/7
                </h4>
                <p class="gift"><span style="font-size: 85%;">  Thủ tục đơn giản, giải ngân nhanh chóng</span></p>
              </div>
              <div class="card-block">
                <h3>
                	10<span class="currency">triệu</span><span class="period">lãi suất</span>
                	18.25<span class="currency">%</span><span class="period">/năm</span>
                </h3>
                <ul class="list-group">
                  <li class="list-group-item">Độ tuổi từ 20 – 60</li>
                  <li class="list-group-item">Thời gian vay tối đa 30 ngày</li>
                  <li class="list-group-item">Chỉ cần CMND, giải ngân trong 5 phút</li>
                  <li class="list-group-item"><a href="#">Xem thêm</a></li>
                </ul>
                <a href="#" class="btn">Đăng ký vay ngay</a>
              </div>
            </div>
          </div>

        </div>

        <div class="row block-more">
        	<div class="col-xs-12 col-lg-12" data-aos="fade-up" data-aos-delay="300">
        	  <a href="#" class="btn-more">Xem thêm</a>
            </div>
        </div>
      </div>

    </section><!-- End Pricing Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Đăng ký tư vấn</h3>
            <p class="cta-text"><span style="font-size: 120%;">Vay tiền <span style="color: #ff0000;">nhanh</span> online chỉ với CMND – Nhận tiền ngay trong ngày</span></p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Đăng ký tư vấn</a>
          </div>
        </div>

      </div>
    </section><!--  End Call To Action Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services services-3 section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Tại sao chọn và sử dụng <span style="font-size: 115%; color: #50b848;">Vay tiền Online</span></h3>         
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="javascript:void(0)">HOÀN TOÀN MIỄN PHÍ</a></h4>
              <p>Nền tảng so sánh miễn phí, dễ sử dụng, và minh bạch</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200"">
	        <div class=" box">
	            <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
	            <h4 class="title"><a href="javascript:void(0)">CẬP NHẬT LIÊN TỤC</a></h4>
	            <p>Sản phẩm, chương trình ưu đãi được cập nhật liên tục, mới nhất</p>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
	          <div class="box">
	            <div class="icon" style="background: #ecebff;"><i class="ion-ios-clock-outline" style="color: #8660fe;"></i></div>
	            <h4 class="title"><a href="javascript:void(0)">CHUYÊN NGHIỆP TUYỆT ĐỐI</a></h4>
	            <p>Đội ngũ tư vấn nhiều kinh nghiệm, nhiệt tình trong công việc</p>     
	          </div>
	        </div>
        </div>
      </div>
    </section><!-- End Services Section -->

        <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>Kiến thức tài chính</h3>
          <p style="width: 80%">Cập nhật những kiến thức hữu ích về tài chính cá nhân và các sản phẩm vay online cũng như thẻ tín dụng</p>
        </header>

        <div class="row">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <a href="#">
	              <img src="<?php echo get_template_directory_uri();?>/assets/img/news/1.png" width="225" height="179"  class="img-fluid" alt="">
	              <div class="member-info">
	                <div class="member-info-content">
	                  <h4>Cầm cavet xe máy được bao nhiêu tiền?</h4>
	                </div>
	              </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <a href="#">
	              <img src="<?php echo get_template_directory_uri();?>/assets/img/news/3.jpg" width="225" height="179" alt="">
	              <div class="member-info">
	                <div class="member-info-content">
	                  <h4>5 nguyên nhân cơ bản dẫn tới việc nợ nần chồng chất</h4>                  
	                </div>
	              </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <a href="#">
	              <img src="<?php echo get_template_directory_uri();?>/assets/img/news/vay-online-2-trieu.jpg" width="225" height="179"  alt="">
	              <div class="member-info">
	                <div class="member-info-content">
	                  <h4>Vay online 2 triệu – Có tiền ngay trong ngày</h4>                 
	                </div>
	              </div>
	           </a>   
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <a href="#">            	
	              <img src="<?php echo get_template_directory_uri();?>/assets/img/news/no-nan-chong-chat.jpg" width="225" height="179"  alt="">
	              <div class="member-info">
	                <div class="member-info-content">
	                  <h4>Nợ nần chồng chất phải làm thế nào?</h4>                 
	                </div>
	              </div>
	           </a>   
            </div>
          </div>

        </div>

        <div class="row block-more">
        	<div class="col-xs-12 col-lg-12" data-aos="fade-up" data-aos-delay="300">
        	  <a href="#" class="btn-more">Xem thêm</a>
            </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <section id="news" class="news">
        <div class="container" data-aos="zoom-in">
            <header class="section-header">
              <h3>Tin tức mới nhất</h3>
              <p style="width: 80%">Blog của <span style='color: #50b848;'>Vay tiền Oline</span> cập nhật thông tin ưu đãi và tin tức mới nhất liên quan đến lĩnh vực tài chính cá nhân, thẻ tín dụng và sản phẩm vay online.</p>
            </header>
            <div class="row">
              <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="100">
              	<a href="#">
	                <div class="box box-normal box-text-bottom box-blog-post has-hover">
					   <div class="box-image">
					      <div class="image-cover" style="padding-top:65%"> 
					      	<img src="<?php echo get_template_directory_uri();?>/assets/img/news/vay-online-2-trieu.jpg" class="attachment-medium size-medium wp-post-image"> 
					      </div>
					   </div>
					   <div class="box-text text-left">
					      <div class="box-text-inner blog-post-inner">
					         <h5 class="post-title is-large">Vay online 2 triệu – Có tiền ngay trong ngày</h5>				         
					         <p class="from_the_blog_excerpt">Vay online 2 triệu&nbsp;có tiền ngay trong ngày chỉ cần CMND sẽ giúp bạn vượt qu...</p>
					      </div>
					   </div>
					</div>
			    </a>
              </div>
              <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="200">
              	  <div class="row">
              	  	  <div class="col-lg-12 col-md-12">
              	  	  	 <a href="#">
              	  	  	 	<div class="box box-vertical box-text-top box-blog-post has-hover">
							    <div class="box-image" style="width:31%">
							        <div class="image-cover" style="padding-top:70%"> <img src="<?php echo get_template_directory_uri();?>/assets/img/news/3.jpg" alt="Nợ nần chồng chất phải làm thế nào?" class="attachment-medium size-medium wp-post-image"> </div>
							    </div>
							    <div class="box-text text-left">
							        <div class="box-text-inner blog-post-inner">
							            <h5 class="post-title is-large">Nợ nần chồng chất phải làm thế nào?</h5>
							            <p class="from_the_blog_excerpt">Nợ nần chồng chất có thể chỉ là điều không may mắn bất ngờ đến với bạn trong 1 k...</p>
							        </div>
							    </div>
							</div>
              	  	  	 </a>
              	  	  </div>
              	  	  <div class="col-lg-12 col-md-12">
              	  	  	 <a href="#">
	              	  	  <div class="box box-vertical box-text-top box-blog-post has-hover">
						    <div class="box-image" style="width:31%">
						        <div class="image-cover" style="padding-top:70%"> 
						        	<img src="<?php echo get_template_directory_uri();?>/assets/img/news/2.png" alt="Dịch vụ vay tiền bằng cầm hộ khẩu được bao nhiêu tiền?" class="attachment-medium size-medium wp-post-image"> 
						        </div>
						    </div>
						    <div class="box-text text-left">
						        <div class="box-text-inner blog-post-inner">
						            <h5 class="post-title is-large">Dịch vụ vay tiền bằng cầm hộ khẩu được bao nhiêu tiền?</h5>
						            <p class="from_the_blog_excerpt">Trên thị trường hiện nay có rất nhiều hình thức dịch vụ vay tiền phổ biến ...</p>
						        </div>
						    </div>
						  </div>
						</a>
					   </div>

					   <div class="col-lg-12 col-md-12">
              	  	  	 <a href="#">
							<div class="box box-vertical box-text-top box-blog-post has-hover">
							    <div class="box-image" style="width:31%">
							        <div class="image-cover" style="padding-top:70%"> 
							        	<img src="<?php echo get_template_directory_uri();?>/assets/img/news/1.png" alt="Cầm cavet xe máy được bao nhiêu tiền?" class="attachment-medium size-medium wp-post-image"> 
							        </div>
							    </div>
							    <div class="box-text text-left">
							        <div class="box-text-inner blog-post-inner">
							            <h5 class="post-title is-large">Cầm cavet xe máy được bao nhiêu tiền?</h5>
							            <p class="from_the_blog_excerpt">Cầm cavet xe máy&nbsp;được bao nhiêu tiền? Đó là câu hỏi được rất nhiều ng...</p>
							        </div>
							    </div>
							</div>              	  	  	 	
              	  	  	 </a>	
                        </div>
              	  </div>
              </div>
            </div>

            <div class="row block-more">
	        	<div class="col-xs-12 col-lg-12" data-aos="fade-up" data-aos-delay="300">
	        	  <a href="#" class="btn-more">Xem thêm</a>
	            </div>
            </div>

        </div>
    </section>
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <header class="section-header">
          <h3>Khách hàng nói gì về <span style="font-size: 115%; color: #50b848;">Vay tiền Online</span></h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-12">

            <div class="owl-carousel testimonials-carousel">

              <div class="testimonial-item">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                <div class="star-rating"><span style="width:100%"><strong class="rating"></strong></span></div>
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                <div class="star-rating"><span style="width:100%"><strong class="rating"></strong></span></div>
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                <div class="star-rating"><span style="width:100%"><strong class="rating"></strong></span></div>
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
                <div class="star-rating"><span style="width:100%"><strong class="rating"></strong></span></div>
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <header class="section-header">
          <h3>Ngân hàng liên kết</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/vpbank.jpg" alt="">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/vib.jpg" alt="">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/vpbank.jpg" alt="">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/vib.jpg" alt="">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/vpbank.jpg" alt="">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/vib.jpg" alt="">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/vpbank.jpg" alt="">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/vib.jpg" alt="">
        </div>

      </div>
    </section><!-- End Clients Section -->
    
  </main><!-- End #main -->

<?php get_footer(); ?>
