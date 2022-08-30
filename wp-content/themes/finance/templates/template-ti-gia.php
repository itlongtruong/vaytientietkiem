<?php

/**
 * Template Name: ti-gia Template
 * Template Post Type: post, page
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
                <li><a href="<?php echo home_url(); ?>/">Trang Chủ</a></li>
                <li> Lãi suất ,Tỷ giá và Ngoại tệ</li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->
    <section class="pricing section-bg">

        <div class="container" data-aos="fade-up">


            <div class="row flex-items-xs-middle flex-items-xs-center">

                <div class="col-xs-12 col-lg-12 product-2 ">
                    <header class="section-header ">
                        <h3>Lãi suất tiền gửi ( cập nhập ngày : <?php $current_date = current_datetime();
                                                                echo $current_date->format('d/m/Y'); ?> )</h3>
                    </header>
                    <div class="card">
                        <div class="">

                            <iframe frameborder="0" width="100%" height="650px" src="https://webtygia.com/api/laisuat?bgheader=53b94f&colorheader=ffffff&padding=5&fontsize=13&undefined"></iframe>


                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-lg-12 product-2 " style="margin-top: 30px;">
                    <header class="section-header ">
                        <h3>Lãi suất vay ( cập nhập ngày : <?php $current_date = current_datetime();
                                                            echo $current_date->format('d/m/Y'); ?> )</h3>
                    </header>
                    <div class="card">
                        <div class="">

                            <iframe frameborder="0" width="100%" height="650px" src="https://webtygia.com/api/json/laisuatchovay?bgheader=53b94f&colorheader=ffffff&padding=5&fontsize=13&border=0&hienthi=VietinBank,ACB,BIDV,MBBank,SHB,Sacombank,Techcombank,Vietcombank,EXIMBANK,HDBANK,OCB,SCB,VIB,VCCB,Agribank,GPBANK&"></iframe>
                        </div>
                    </div>
                </div>



            </div>


        </div>

    </section>

    <!-- ======= Services Section ======= -->
    <section class="services services-2" style="margin-top: 20px;">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>Ngoại tệ và Công cụ chuyển đổi </h3>
            </header>

            <div class="row">

                <div class="col-md-6 col-lg-6 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
                    <iframe frameborder="0" width="100%" height="600px" src="https://webtygia.com/api/ngoaite?bgheader=53b94f&colorheader=ffffff&padding=5&fontsize=13&undefined"></iframe>

                </div>

                <div class="col-md-6 col-lg-6 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
                    <iframe frameborder="0" height="600px" width="100%" src="https://webtygia.com/api/json/cong-cu-chuyen-doi-tien-te?maukhungketqua=53b94f&mauchuketqua=ffffff&sizechuketqua=30&fontsize=13&border=1&hienthamkhao=0&undefined"></iframe>

                </div>


            </div>

        </div>
    </section><!-- End Services Section -->
</main><!-- End #main -->

<?php get_footer(); ?>