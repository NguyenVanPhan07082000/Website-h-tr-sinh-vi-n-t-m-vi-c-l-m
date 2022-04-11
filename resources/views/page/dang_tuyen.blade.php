@extends('welcome')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/css/info-job.css')}}"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lw4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndỌK28anvf" rossorigin="anonymous">
    <script type="text/javascript" src="{{asset('fontend/js/jquery-1.9.1.min.js')}}"> </script>
	<script type="text/javascript" src="{{asset('fontend/js/Slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('fontend/js/jquery.js')}}"></script>
@endsection
@section('content')
<div class="info_job info_job--1">
    <img src="{{asset('fontend/img/background_re.png')}}" class="img_chamngon" alt="chamngon"/>
    <h2 class="title-dangtin">Đăng Tin Tuyển Dụng</h2>
    <form action="{{URL::to('/save-dang-tuyen')}}" method="POST">
        {{ csrf_field() }}
        <div class="info_job--name">
            <div class="row">
                <div class="info_job--details info_job--details--1">
                    <h2 class="info_job--details_title info_job--details_title--new">Thông Tin Tuyển Dụng</h2>
                    <div class="info_job--details_info">
                        <div class="info_job--details_info--1">
                            <div class="col-1-of-2">
                                <div>
                                    <p class="card_p card_p--nganhnghe"><i class="fa fa-user-md"> Ngàng Nghề</i>
                                        <input type="text" name="txtNganhnghe" id="find_name" placeholder="Nhập ngành nghề cần tuyển..." class="header__text-box2__find_name header__text-box2__find_text"/>
                                     </p>
                                </div>
                                <div>
                                    <p class="card_p card_p--luong"> <i class="fa fa-dollar-sign"> Lương</i>
                                        <input type="text" name="txtLuong" id="find_name" placeholder="Nhập lương..." class="header__text-box2__find_name header__text-box2__find_text"/>
                                     </p>
                                </div>
                                <div>
                                    <p class="card_p card_p--hinhthuc"><i class="fa fa-briefcase"> Hình Thức</i>
                                        <input type="text" name="txtHinhthuc" id="find_name" placeholder="Nhập hình thức tuyển dụng..." class="header__text-box2__find_name header__text-box2__find_text"/>
                                     </p>
                                </div>
                            </div>
                            <div class="col-1-of-2">
                                <div>
                                    <p  class="card_p card_p--capbac"><i class="fa fa-user"> Cấp Bậc</i>
                                        <input type="text" name="txtCapbac" id="find_name" placeholder="Nhập cấp bậc cần tuyển..." class="header__text-box2__find_name header__text-box2__find_text"/>
                                     </p>
                                </div>
                                <div>
                                    <p class="card_p card_p--kinhnghiem"><i class="fa fa-book-open"> Kinh Nghiệm</i>
                                        <input type="text" name="txtKinhnghiem" id="find_name" placeholder="Nhập yêu cầu kinh nghiệm..." class="header__text-box2__find_name header__text-box2__find_text"/>
                                     </p>
                                </div>
                                <div>
                                    <p class="card_p card_p--ngayhethan"><i class="fa fa-book-open"> Ngày Hết Hạn</i>
                                        <input type="date" name="txtNgayhethan" id="find_name" placeholder="Ngày hết hạn tuyển..." class="header__text-box2__find_name header__text-box2__find_text"/>
                                     </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info_job--details info_job--details--2">
                    <h2 class="info_job--details_title">Phúc Lợi</h2>
                    <div>
                        <textarea rows="20" cols="130" class="textarea" name="txtPhucloi" placeholder="Nhập phúc lợi công ty..."></textarea>
                    </div>
                </div>
                <div class="info_job--details info_job--details--3">
                    <h2 class="info_job--details_title">Mô Tả Công Việc</h2>
                    <div>
                        <textarea rows="20" cols="130" class="textarea" name="txtMota" placeholder="Mô tả vè công ty..."></textarea>
                    </div>
                </div>
                <div class="info_job--details info_job--details--4">
                    <h2 class="info_job--details_title">Yêu cầu công việc</h2>
                    <div>
                        <textarea rows="20" cols="130" class="textarea" name="txtYeucau" placeholder="Nhập các yêu cầu công việc..."></textarea>
                    </div>
                </div>
                <div class="info_job--details info_job--details--5">
                    <h2 class="info_job--details_title">Quyền Lợi</h2>
                    <div>
                        <textarea rows="20" cols="130" class="textarea" name="txtQuyenloi" placeholder="Nhập quyền lợi..."></textarea>
                    </div>
                </div>
                <div class="info_job--details info_job--details--6">
                    <h2 class="info_job--details_title">Lý do nên chọn công ty</h2>
                    <div>
                        <textarea rows="20" cols="130" class="textarea" name="txtLydo" placeholder="Lý do nên chọn công ty..."></textarea>
                    </div>
                </div>
                <div class="choose">
                    <input type="submit" class="email_background--content_insert email_background--content_insert--btn_2" name="btnEmail" id="btnEmail"  value="Hủy"/>
                    <input type="submit" class="email_background--content_insert email_background--content_insert--btn_2" name="btnEmail" id="btnEmail"  value="Đăng Ứng Tuyển"/>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection