@extends('welcome')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fontend/css/add-cv.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lw4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndỌK28anvf" rossorigin="anonymous">
    <script type="text/javascript" src="{{ asset('public/fontend/js/jquery-1.9.1.min.js') }}"> </script>
    <script type="text/javascript" src="{{ asset('public/fontend/js/Slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/fontend/js/jquery.js') }}"></script>
@endsection
@section('content')
    <div class="info_job info_job--1">
        <img src="{{ asset('public/fontend/img/background_re.png') }}" class="img_chamngon" alt="chamngon" />
        <h2 class="title-dangtin">Tạo CV</h2>
        <form action="{{ URL::to('/save-dang-tuyen') }}" method="POST">
            {{ csrf_field() }}
            <div class="info_job--name">
                <div class="row">
                    <div class="info_job--details info_job--details--1">
                        <h2 class="info_job--details_title info_job--details_title--new">Thông Tin Liên Hệ:</h2>
                        <div class="info_job--details_info">
                            <div class="info_job--details_info--1">
                                <div class="col-1-of-2">
                                    <div>
                                        <p class="card_p card_p--name"><i class="fa fa-user-md"> Họ và tên:</i>
                                            <input type="text" name="txtName" id="find_name" placeholder="Họ và tên..."
                                                class="header__text-box2__find_name header__text-box2__find_text" />
                                        </p>
                                    </div>
                                    <div>
                                        <p class="card_p card_p--nganhnghe"><i class="fa fa-user-md"> Vị trí ứng tuyển:</i>
                                            <input type="text" name="txtNganhnghe" id="find_name"
                                                placeholder="Vị trí ứng tuyển..."
                                                class="header__text-box2__find_name header__text-box2__find_text" />
                                        </p>
                                    </div>
                                    <div>
                                        <p class="card_p card_p--ngaysinh"><i class="fa fa-book-open"> Ngày sinh:</i>
                                            <input type="date" name="txtNgaysinh" id="find_name"
                                                class="header__text-box2__find_name header__text-box2__find_text" />
                                        </p>
                                    </div>
                                    <div>
                                        <p class="card_p card_p--gioitinh"><i class="fa fa-user"> Giới tính:</i>
                                            <select name="txtGioitinh"
                                                class="header__text-box2__find_name header__text-box2__find_text">
                                                <option value="Nam">Nam</option>
                                                <option value="Nữ">Nữ</option>
                                                <option value="Khác">Khác</option>
                                            </select>
                                            {{-- <input type="text" name="txtGioitinh" id="find_name"
                                                placeholder="Nhập cấp bậc cần tuyển..."
                                                class="header__text-box2__find_name header__text-box2__find_text" /> --}}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-1-of-2">
                                    <div>
                                        <p class="card_p card_p--sdt"><i class="fa fa-user"> Số Điện Thoại:</i>
                                            <input type="text" name="txtSdt" id="find_name" placeholder="Số điện thoại..."
                                                class="header__text-box2__find_name header__text-box2__find_text" />
                                        </p>
                                    </div>
                                    <div>
                                        <p class="card_p card_p--email"><i class="fa fa-book-open"> Email:</i>
                                            <input type="text" name="txtEmail" id="find_name" placeholder="Email..."
                                                class="header__text-box2__find_name header__text-box2__find_text" />
                                        </p>
                                    </div>

                                    <div>
                                        <p class="card_p card_p--taikhoan"><i class="fa fa-book-open"> Tài khoản MXH:</i>
                                            <input type="text" name="txtTaikhoan" id="find_name"
                                                placeholder="Link tài khoản mạng xã hội..."
                                                class="header__text-box2__find_name header__text-box2__find_text" />
                                        </p>
                                    </div>
                                    <div>
                                        <p class="card_p card_p--diachi"><i class="fa fa-book-open"> Địa chỉ:</i>
                                            <textarea rows="3" cols="130" class="textarea-infor" name="txtMota" placeholder="Mô tả vè công ty..."></textarea>
                                            {{-- <input type="textarea" name="txtNgayhethan" id="find_name"
                                                placeholder="Ngày hết hạn tuyển..."
                                                class="header__text-box2__find_name header__text-box2__find_text" /> --}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="info_job--details info_job--details--2">
                        <h2 class="info_job--details_title">SỞ THÍCH</h2>
                        <div>
                            <textarea rows="10" cols="130" class="textarea" name="txtSothich"
                                placeholder="Sở thích của bạn là gì?"></textarea>
                        </div>
                    </div>
                    <div class="info_job--details info_job--details--3">
                        <h2 class="info_job--details_title">KỸ NĂNG</h2>
                        <div>
                            <textarea rows="10" cols="130" class="textarea" name="txtMota"
                                placeholder="Những kỹ năng nào liên quan đến công việc mà bạn đang có và những kỹ năng cá nhân."></textarea>
                        </div>
                    </div>
                    <div class="info_job--details info_job--details--4">
                        <h2 class="info_job--details_title">TRÌNH ĐỘ HỌC VẤN</h2>
                        <div>
                            <textarea rows="10" cols="130" class="textarea" name="txtYeucau"
                                placeholder="Nhập tên trường, năm học, sếp loại, điểm trung bình và những chức vụ bạn từng làm khi đi học. Chú ý xuống hàng mỗi ý để CV bạn đẹp hơn"></textarea>
                        </div>
                    </div>
                    <div class="info_job--details info_job--details--4">
                        <h2 class="info_job--details_title">THÀNH TÍCH</h2>
                        <div>
                            <textarea rows="10" cols="130" class="textarea" name="txtYeucau"
                                placeholder="Nêu các thành tích mà bạn đạt được khi đi học, nếu không có có thể bỏ trống"></textarea>
                        </div>
                    </div>
                    <div class="info_job--details info_job--details--5">
                        <h2 class="info_job--details_title">KINH NGHIỆM LÀM VIỆC</h2>
                        <div>
                            <textarea rows="10" cols="130" class="textarea" name="txtQuyenloi"
                                placeholder="Bạn đã làm ở công ty nào? từ khi nào đến khi nào? bạn làm gì ở đó? chú ý xuống dòng mỗi ý"></textarea>
                        </div>
                    </div>
                    <div class="info_job--details info_job--details--6">
                        <h2 class="info_job--details_title">HOẠT ĐỘNG XÃ HỘI</h2>
                        <div>
                            <textarea rows="10" cols="130" class="textarea" name="txtLydo"
                                placeholder="Bạn tham gia những hoạt động tình nguyện nào mà có giấy chứng nhận? nếu không có có thể bỏ trống"></textarea>
                        </div>
                    </div>
                    <div class="info_job--details info_job--details--6">
                        <h2 class="info_job--details_title">MỤC TIÊU VÀ NGUYỆN VỌNG</h2>
                        <div>
                            <textarea rows="10" cols="130" class="textarea" name="txtLydo"
                                placeholder="Mục tiêu mà bạn hướng tới trong công việc và trong tương lai là gì?"></textarea>
                        </div>
                    </div>
                    <div class="info_job--details info_job--details--6">
                        <h2 class="info_job--details_title">MỤC TIÊU VÀ NGUYỆN VỌNG</h2>
                        <input type="radio" id="html" name="fav_language" value="HTML">
                        <img src="https://st.quantrimang.com/photos/image/2021/03/10/Hinh-nen-dep-cute-2.jpg" for="html" />
                    </div>
                    <div class="choose">
                        <input type="submit"
                            class="email_background--content_insert email_background--content_insert--btn_2" name="btnEmail"
                            id="btnEmail" value="Hủy" />
                        <input type="submit"
                            class="email_background--content_insert email_background--content_insert--btn_2" name="btnEmail"
                            id="btnEmail" value="Đăng Ứng Tuyển" />
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
