<!DOCTYPE html>
<html lang="en">
<head>
    {!! Assets::renderHeader() !!}
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lw4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndỌK28anvf" rossorigin="anonymous">
    @yield('css')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    <script type="text/javascript" src="{{asset('fontend/js/jquery-1.9.1.min.js')}}"> </script>
	<script type="text/javascript" src="{{asset('fontend/js/Slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('fontend/js/jquery.js')}}"></script>
    <title>Website hỗ trợ sinh viên CNTT tìm kiếm việc làm Blue Star</title>
</head>
<body>
    @yield('header')
    <?php
        $messenger = Session()->get('messenger');
        if($messenger)
        {
            echo '<script> alert("'.$messenger.'"); </script>';
            session()->put('messenger', null);
        }
    ?>
    <div class="menu">
        <a href="{{URL::to('/trang-chu')}}"><img src="{{asset('fontend/img/logo_top.png')}}" class="menu__logo" alt="logo_top"></a>
        <nav>
            <ul class="menu__main">
                <li class="menu__main--content"><a href="" class="menu__main--content__link">Tìm việc làm</a>
                    <ul class="menu__main--content_ul">
                        <li class="menu__main--content_li"><a href="{{URL::to('/tat-ca-viec-lam')}}" class="menu__main--content_li--a">Tất Cả Việc Làm</a></li>
                        <li class="menu__main--content_li"><a href="{{URL::to('/viec-lam-moi-nhat')}}" class="menu__main--content_li--a">Việc Làm Mới Nhất</a></li>
                        
                    </ul>
                </li>
                    
                <li class="menu__main--content"><a href="" class="menu__main--content__link">Dành Cho Nhà Tuyển Dụng</a>
                    <ul class="menu__main--content_ul">
                        <li class="menu__main--content_li"><a href="{{URL::to('/dang-tuyen')}}" class="menu__main--content_li--a">Đăng Tuyển Dụng</a></li>
                        <li class="menu__main--content_li"><a href="{{URL::to('/tim-ung-vien')}}" class="menu__main--content_li--a">Tìm Ứng Viên</a></li>
                    </ul>
                </li>
                @if(session()->get('name'))
                    <li class="menu__main--content"><p class="user"><img src="{{asset('fontend/img/avatar'.'/'.session()->get('img'))}}" align="center" class="img_menu" alt="img"/>{{session()->get('name')}}</p>
                        <ul class="menu__main--content_ul">
                            <li class="menu__main--content_li"><a href="{{URL::to('/profile')}}" class="menu__main--content_li--a">Profile</a></li>
                            <li class="menu__main--content_li"><a href="{{URL::to('/logout')}}" class="menu__main--content_li--a">Đăng Xuất</a></li>
                            <li class="menu__main--content_li"><a href="{{URL::to('/doi-mat-khau')}}" class="menu__main--content_li--a">Đổi Mật Khẩu</a></li>
                        </ul>
                    </li>
                @else
                    <li class="menu__main--content"><a href="{{URL::to('/login')}}" class="menu__main--content__link">Đăng nhập</a></li>
                @endif
            </ul>
        </nav>
    </div>
    <!-- <script>
        $(document).ready(function(){

        });
    </script> -->
    <script type="text/javascript">
    
        jQuery(document).ready(function($) {
         $(window).load(function() {
          if ($('.menu').length > 0) {
            var _top = $('.menu').offset().top - parseFloat($('.menu').css('marginTop').replace(/auto/, 0));
             $(window).scroll(function(evt) {
              var _y = $(this).scrollTop();
              if (_y > _top) {
              $('.menu').addClass('fixed');
              
              } else {
              $('.menu').removeClass('fixed');
              
            }
           })
          }
         });
        });
    </script>
    
    
    


      @yield('content')



    <footer class="footer">
        <div class="footer_logo">
            <img src="{{asset('fontend/img/logo_top.png')}}" alt="footer_logo"/> 
        </div>
        <div class="footer_info">
            <div class="row footer_info--top">
                <div class="col-1-of-4">
                    <h2>Dành cho ứng viên</h2>
                    <p class="footer_info--sv"><a href="#" class="info-job_a">Tạo CV</a></p>
                    <p class="footer_info--sv"><a href="job.html" class="info-job_a">Việc làm mới nhất</a></p>
                    <p class="footer_info--sv"><a href="job.html" class="info-job_a">Tất cả việc làm</a></p>
                    <p class="footer_info--sv"><a href="#" class="info-job_a">Trang cá nhân</a></p>
                </div>
                <div class="col-1-of-4">
                    <h2>Dành cho nhà tuyển dụng</h2>
                    <p class="footer_info--sv"><a href="#" class="info-job_a">Đăng tuyển</a></p>
                    <p class="footer_info--sv"><a href="#" class="info-job_a">Tìm ứng viên</a></p>
                </div>
                <div class="col-1-of-4">
                    <h2>Trung tâm hỗ trợ</h2>
                    <p class="footer_info--sv"><a href="#" class="info-job_a">Thông tin về Blue Star</a></p>
                    <p class="footer_info--sv"><a href="#" class="info-job_a">Chính sách BV thông tin</a></p>
                    <p class="footer_info--sv"><a href="#" class="info-job_a">Quy định bảo mật</a></p>
                    <p class="footer_info--sv"><a href="#" class="info-job_a">Trợ giúp</a></p>
                </div>
                <div class="col-1-of-4">
                    <h2>Website đối tác</h2>
                    <p class="footer_info--sv"><a href="https://careerbuilder.vn/" class="info-job_a">Career Builder</a></p>
                    <p class="footer_info--sv"><a href="topcv.vn" class="info-job_a">Top CV</a></p>
                    <p class="footer_info--sv"><a href="https://vn.joboko.com" class="info-job_a">Joboko</a></p>
                    <p class="footer_info--sv"><a href="#" class="info-job_a">Liên hệ</a></p>
                </div>
            </div>
            <div class="footer_info--bottom">
                <p>Website Blue Star - hỗ trợ sinh viên tìm kiếm việc làm</p>
                <p>Địa chỉ: Số 200 đường Trần Văn Ơn, Tổ 8, khu phố 5, Phương Phú Hoà, Thành Phố Thủ Dầu Một</p>
                <p>Điện thoại: 0338313262 - Email: nguyenvanphan0708@gmail.com - 1824801030268@student.tdmu.edu.vn</p>
                <p><a href="https://www.facebook.com/Nguyenvanphan0708/" class="info-job_a"><i class="fa fa-facebook"> facebook</i></a></p>
            </div>
        </div>
        {!! Assets::renderFooter() !!}
    </footer>
</body>
</html>