<?php
/**
 * Template Name: Pawn Template
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
          <li>Cầm Đồ Online</li>
        </ol>
  
      </div>
      
    </section><!-- End Breadcrumbs -->

    <?php get_template_part( 'template-parts/content/partner-pawn' ); ?>

    <?php get_template_part( 'template-parts/content/partner-news-pawn' ); ?>

    <?php get_template_part( 'template-parts/content/partner-review-pawn' ); ?>
     
    
    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>Câu hỏi thường gặp</h3>
          <p>Các thắc mắc thường gặp khi cầm đồ online</p>
        </header>

        <ul id="faq-list" data-aos="fade-up" data-aos-delay="100">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">Cầm đồ online là gì? <i class="ion-android-remove"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list">
              <p>
              Cầm đồ (cầm cố) là hình thức cho vay tiền có tài sản đảm bảo như ô tô, xe máy, điện thoại, laptop, máy ảnh, sim số đẹp, và nhiều tài sản có giá trị khác.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Cầm đồ online có lừa đảo không?<i class="ion-android-remove"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>
              Các trang web/ ứng dụng (app) cầm đồ online được giới thiệu trên VayTienOnline được triển khai bởi các ngân hàng hay các công ty tài chính chính thống, có giấy phép ĐKKD.
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

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Hạn mức vay tiền nhanh online là bao nhiêu?<i class="ion-android-remove"></i></a>
            <div id="faq5" class="collapse" data-parent="#faq-list">
              <p>
              Các trang web/ app vay tiền nhanh online hỗ trợ vay từ 100.000 VND – 15.000.000 VND. Một số đơn vị cho vay có chính sách ưu đãi 0% lãi suất cho khoản vay đầu tiên.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">Thời gian vay trong bao lâu?<i class="ion-android-remove"></i></a>
            <div id="faq6" class="collapse" data-parent="#faq-list">
              <p>
              Thời gian vay tối thiểu là 180 ngày và tối đa là 12 tháng
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq7" class="collapsed">Lãi suất là bao nhiêu?<i class="ion-android-remove"></i></a>
            <div id="faq7" class="collapse" data-parent="#faq-list">
              <p>
              Lãi suất phần trăm hàng năm được tính trên dư nợ gốc (APR) tối thiểu 10% và tối đa lên tới 70%. Tuy nhiên, các đơn vị cho vay tiền nhanh online thường tách lãi suất ra thành phí tư vấn, phí xử lý hồ sơ và lãi suất, vì vậy bạn nên tìm hiểu thật kỹ lưỡng về số tiền đóng hàng tháng trước khi vay. Ví dụ Khoản vay 2.000.000 VND Tại Doctor Đồng và trả toàn bộ sau 90 ngày sử dụng. Lãi và phí dịch vụ là 800.000VND/tháng. Tổng số tiền phải thanh toán = 4.400.000 VND.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq8" class="collapsed">Tôi cần cung cấp giấy tờ gì khi vay?<i class="ion-android-remove"></i></a>
            <div id="faq8" class="collapse" data-parent="#faq-list">
              <p>
              Chứng minh nhân dân/ thẻ CCCD hoặc hộ chiếu còn hiệu lực, số điện thoại và tài khoản ngân hàng để giải ngân. Ngoài ra một số đơn vị còn yêu cầu giấy tờ chứng minh thu nhập nếu có.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq9" class="collapsed">Vay tiền nhanh online hỗ trợ vay ở những tỉnh thành nào?<i class="ion-android-remove"></i></a>
            <div id="faq9" class="collapse" data-parent="#faq-list">
              <p>
              Dịch vụ cho vay nhanh online được giới thiệu Trên VayTienOnline hỗ trợ cho vay ở hầu hết các tỉnh thành tại Việt Nam.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq10" class="collapsed">Tôi có thể đăng ký một lúc nhiều công ty không<i class="ion-android-remove"></i></a>
            <div id="faq10" class="collapse" data-parent="#faq-list">
              <p>
              Bạn hoàn toàn có thể đăng ký vay cùng một lúc nhiều ứng dụng nếu như đảm bảo được khả năng trả nợ, đồng thời đáp ứng được các điều kiện vay từ các đơn vị cho vay.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq11" class="collapsed">Vay tiền online không trả có sao không?<i class="ion-android-remove"></i></a>
            <div id="faq11" class="collapse" data-parent="#faq-list">
              <p>
              Với hình thức vay tiền nhanh online hiện nay, từ lúc đăng ký vay cho tới khi giải ngân qua thẻ ATM của bạn, thường thì các đơn vị cho vay không có 01 hợp đồng vay tiền đúng nghĩa (có dấu đỏ). Tất cả thông tin vay chỉ thể hiện ở điều khoản vay mà thôi nên bạn sẽ không bị vướng vào tội hình sự hay bị đi tù. Tuy nhiên, nếu không trả nợ, khách hàng sẽ bị các tổ chức cho vay gọi điện, nhắn tin làm phiền đến chính họ hoặc bạn bè, người thân của họ.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq12" class="collapsed">Tôi có thể thanh toán khoản vay sớm không?<i class="ion-android-remove"></i></a>
            <div id="faq12" class="collapse" data-parent="#faq-list">
              <p>
              Khách hàng có thể thanh toán khoản vay sớm mà không phát sinh khoản phí hay khoản phạt nào khác.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq13" class="collapsed">Thanh toán khoản vay qua đâu?<i class="ion-android-remove"></i></a>
            <div id="faq13" class="collapse" data-parent="#faq-list">
              <p>
              Bạn có thể thanh toán thông qua ví điện tử, ngân hàng trực tuyến (internet baking hoặc mobile banking) hoặc có thể đến bất kỳ ngân hàng nào gần chỗ bạn ở nhất để thanh toán. Chi tiết sẽ được thông báo khi bạn đăng ký vay.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq14" class="collapsed">Thanh toán trễ hạn có sao không?<i class="ion-android-remove"></i></a>
            <div id="faq14" class="collapse" data-parent="#faq-list">
              <p>
              Để thuận tiện nhất bạn nên thanh toán khoản vay theo đúng thời hạn quy định. Trường hợp bạn thanh toán trễ thì phí thanh toán trễ sẽ được áp dụng.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq15" class="collapsed">Tôi có thể hủy đơn đề nghị vay trước khi nhận được tiền không?<i class="ion-android-remove"></i></a>
            <div id="faq15" class="collapse" data-parent="#faq-list">
              <p>
              Quý khách được huỷ đơn đề nghị vay bất kỳ lúc nào trước thời điểm ký hợp đồng. Vì sau khi ký hợp đồng, số tiền vay sẽ được giải ngân ngay tức thì. Trong trường hợp này, Quý khách chỉ có thể thanh toán toàn bộ số dư nợ (bao gồm tiền gốc + các phí DV và tiền lãi).
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End F.A.Q Section -->
  </main><!-- End #main -->

<?php get_footer(); ?>
