@extends('welcome')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fontend/css/add-cv.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lw4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndỌK28anvf" rossorigin="anonymous">
    <script type="text/javascript" src="{{ asset('public/fontend/js/jquery-1.9.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/fontend/js/Slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/fontend/js/jquery.js') }}"></script>
@endsection
@section('content')
    <script>
        function chooseFile(fileInput) {
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image').attr('src', e.target.result);
                }
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    </script>
    <div class="info_job info_job--1">
        <img src="{{ asset('public/fontend/img/background_re.png') }}" class="img_chamngon" alt="chamngon" />
        <h2 class="title-dangtin">Tạo CV</h2>
        <form action="{{ URL::to('/save-ung-vien') }}" method="POST" enctype="multipart/form-data">
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
                                                class="header__text-box2__find_name header__text-box2__find_text" required>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="card_p card_p--nganhnghe"><i class="fa fa-user-md"> Vị trí ứng tuyển:</i>
                                            <input type="text" name="txtNganhnghe" id="find_name"
                                                placeholder="Vị trí ứng tuyển..."
                                                class="header__text-box2__find_name header__text-box2__find_text"
                                                required />
                                        </p>
                                    </div>
                                    <div>
                                        <p class="card_p card_p--ngaysinh"><i class="fa fa-book-open"> Ngày sinh:</i>
                                            <input type="date" name="txtNgaysinh" id="find_name"
                                                class="header__text-box2__find_name header__text-box2__find_text"
                                                required />
                                        </p>
                                    </div>
                                    <div>
                                        <p class="card_p card_p--gioitinh"><i class="fa fa-user"> Giới tính:</i>
                                            <select name="txtGioitinh"
                                                class="header__text-box2__find_name header__text-box2__find_text" required>
                                                <option value="Nam">Nam</option>
                                                <option value="Nữ">Nữ</option>
                                                <option value="Khác">Khác</option>
                                            </select>
                                            {{-- <input type="text" name="txtGioitinh" id="find_name"
                                                placeholder="Nhập cấp bậc cần tuyển..."
                                                class="header__text-box2__find_name header__text-box2__find_text" /> --}}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="card_p card_p--ngaysinh"><i class="fa fa-book-open"> Hình ảnh:</i>
                                            <input type="file" name="hinhanh" required>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-1-of-2">
                                    <div>
                                        <p class="card_p card_p--sdt"><i class="fa fa-user"> Số Điện Thoại:</i>
                                            <input type="text" name="txtSdt" id="find_name" placeholder="Số điện thoại..."
                                                class="header__text-box2__find_name header__text-box2__find_text"
                                                required />
                                        </p>
                                    </div>
                                    <div>
                                        <p class="card_p card_p--email"><i class="fa fa-book-open"> Email:</i>
                                            <input type="text" name="txtEmail" id="find_name" placeholder="Email..."
                                                class="header__text-box2__find_name header__text-box2__find_text"
                                                required />
                                        </p>
                                    </div>

                                    <div>
                                        <p class="card_p card_p--taikhoan"><i class="fa fa-book-open"> Tài khoản MXH:</i>
                                            <input type="text" name="txtTaikhoan" id="find_name"
                                                placeholder="Tên tài khoản mạng xã hội của bạn là gì?"
                                                class="header__text-box2__find_name header__text-box2__find_text"
                                                required />
                                        </p>
                                    </div>
                                    <div>
                                        <p class="card_p card_p--taikhoan"><i class="fa fa-book-open"> Link TK MXH:</i>
                                            <input type="text" name="txtLinkTK" id="find_name"
                                                placeholder="Link tài khoản mạng xã hội của bạn"
                                                class="header__text-box2__find_name header__text-box2__find_text"
                                                required />
                                        </p>
                                    </div>

                                    <div>
                                        <p class="card_p card_p--diachi"><i class="fa fa-book-open"> Địa chỉ:</i>
                                            <textarea rows="3" cols="130" class="textarea-infor" name="txtDiachi" placeholder="Địa chỉ hiện nay..."
                                                required></textarea>
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
                        <div id="field_div">
                            <div id="dynamic_field">
                                <div class="form-row">
                                    <input type="text" class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtSothich[]" placeholder="Sở thích của bạn" required>
                                    <button type="button" name="add" id="add" class="btn-success btnAddHabbit"><i
                                            class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="info_job--details info_job--details--3">
                        <h2 class="info_job--details_title">KỸ NĂNG</h2>
                        <div id="field_div">
                            <p class="card_p card_p--name"><i class="fa fa-user-md">Kỹ năng:</i>
                            <div id="dynamic_field2">
                                <div class="form-row">
                                    <input type="text" class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtTenKyNang[]" placeholder="Tên kỹ năng" required>
                                    <input type="number" class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtMucDo[]" placeholder="% hiểu biết của bạn về nó" required>
                                    <button type="button" name="add" id="add2" class="btn-success btnAddHabbit"><i
                                            class="fa fa-plus"></i></button>
                                </div>
                            </div>
                            </p>
                        </div>
                    </div>
                    <div class="info_job--details info_job--details--4">
                        <h2 class="info_job--details_title">TRÌNH ĐỘ HỌC VẤN</h2>
                        <div>
                            <div id="dynamic_field3">
                                <div class="form-row">
                                    <input type="text" class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtTentruong[]" placeholder="Tên trường" required>
                                    <input type="text" class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtNgayBatDau[]" placeholder="Ngày bắt đầu" required>
                                    <input type="text" class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtNgayKetThuc[]" placeholder="Ngày tốt nghiệp" required>
                                    <input type="text" class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtXepLoai[]" placeholder="Xếp loại" required>
                                    <input type="number" step="any" min="0" max="10"
                                        class="header__text-box2__find_name header__text-box2__find_text" name="txtDiemTB[]"
                                        placeholder="Điểm trung bình" required>
                                    <input type="text" class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtMota[]" placeholder="Bạn đã làm gì khi ở đó?" required>
                                    <button type="button" name="add" id="add3" class="btn-success btnAddHabbit"><i
                                            class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="info_job--details info_job--details--4">
                        <h2 class="info_job--details_title">THÀNH TÍCH</h2>
                        <div id="field_div">
                            <div id="dynamic_field5">
                                <div class="form-row">
                                    <input type="text" class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtThanhTich[]" placeholder="Thành tích mà bạn đã đạt được khi đi học là gì?">
                                    <button type="button" name="add" id="add5" class="btn-success btnAddHabbit"><i
                                            class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="info_job--details info_job--details--5">
                        <h2 class="info_job--details_title">KINH NGHIỆM LÀM VIỆC</h2>
                        <div>
                            <div id="dynamic_field4">
                                <div class="form-row">
                                    <input type="text" class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtTenCTY[]" placeholder="Tên công ty" required>
                                    <input type="text" class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtNgayBatDau[]" placeholder="Ngày bắt đầu" required>
                                    <input type="text" class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtNgayKetThuc[]" placeholder="Ngày nghỉ việc" required>
                                    <input type="text" class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtMota[]" placeholder="Mô tả" required>
                                    <button type="button" name="add" id="add4" class="btn-success btnAddHabbit"><i
                                            class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="info_job--details info_job--details--6">
                        <h2 class="info_job--details_title">HOẠT ĐỘNG XÃ HỘI</h2>
                        <div id="field_div">
                            <div id="dynamic_field6">
                                <div class="form-row">
                                    <input type="text" class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtHoatDong[]" placeholder="Hoạt động tình nguyện bạn đã tham gia là gì?">
                                    <button type="button" name="add" id="add6" class="btn-success btnAddHabbit"><i
                                            class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="info_job--details info_job--details--6">
                        <h2 class="info_job--details_title">MỤC TIÊU VÀ NGUYỆN VỌNG</h2>
                        <div>
                            <textarea rows="10" cols="130" class="textarea" name="txtMuctieu"
                                placeholder="Mục tiêu mà bạn hướng tới trong công việc và trong tương lai là gì?"
                                required></textarea>
                        </div>
                    </div>
                    <div class="info_job--details info_job--details--6">
                        <h2 class="info_job--details_title">Chọn mẫu CV bạn thích</h2>
                        <input type="radio" id="mau_1" name="cv" value="1" checked>
                        <img src="{{ asset('public/fontend/img/mau_cv/mau_1.jpg') }}" class="mau_cv"
                            for="mau_1" />
                        <input type="radio" id="mau_2" name="cv" value="2">
                        <img src="{{ asset('public/fontend/img/mau_cv/mau_2.jpg') }}" class="mau_cv"
                            for="mau_2" />
                        <input type="radio" id="mau_3" name="cv" value="3">
                        <img src="{{ asset('public/fontend/img/mau_cv/mau_4.jpg') }}" class="mau_cv"
                            for="mau_3" />
                        <input type="radio" id="mau_4" name="cv" value="4">
                        <img src="{{ asset('public/fontend/img/mau_cv/mau_5.jpg') }}" class="mau_cv"
                            for="mau_4" />
                    </div>
                    <div class="choose">
                        <a href="{{ URL::to('/trang-chu') }}"
                            class="email_background--content_insert email_background--content_insert--btn_2 a--huy">Huỷ</a>
                        <input type="submit"
                            class="email_background--content_insert email_background--content_insert--btn_2" name="btnEmail"
                            id="btnEmail" value="Lưu CV" />
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            var i = 1;
            $('#add').click(function() {
                i++;
                $('#dynamic_field').append('<div class="form-row" id="row' + i +
                    '"><input type="text" class="header__text-box2__find_name header__text-box2__find_text" name="txtSothich[]" placeholder="Sở thích"> <td><button type="button" name="add" class="btnAddHabbit btn-danger btn_remove" id="' +
                    i + '"><i class="fa fa fa-trash"></i></button></td> </div>');
            });
            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");

                $('#row' + button_id + '').remove();
            });



            $('#add2').click(function() {
                i++;
                $('#dynamic_field2').append('<div class="form-row"  id="row2' + i +
                    '"> <input type="text" class="header__text-box2__find_name header__text-box2__find_text" name="txtTenKyNang[]" placeholder="Tên kỹ năng"><input type="number" class="header__text-box2__find_name header__text-box2__find_text" name="txtMucDo[]" placeholder="% hiểu biết của bạn về nó"> <td><button type="button" name="add" class="btnAddHabbit btn-danger btn_remove2" id="' +
                    i + '"><i class="fa fa fa-trash"></i></button></td> </div>');
            });
            $(document).on('click', '.btn_remove2', function() {
                var button_id = $(this).attr("id");

                $('#row2' + button_id + '').remove();
            });


            $('#add3').click(function() {
                i++;
                $('#dynamic_field3').append('<div class="form-row" id="row3' + i +
                    '"> <input type="text" class="header__text-box2__find_name header__text-box2__find_text" name="txtTentruong[]" placeholder="Tên trường"> <input type="text" class="header__text-box2__find_name header__text-box2__find_text" name="txtNgayBatDau[]" placeholder="Ngày bắt đầu"><input type="text" class="header__text-box2__find_name header__text-box2__find_text" name="txtNgayKetThuc[]" placeholder="Ngày tốt nghiệp"><input type="text" class="header__text-box2__find_name header__text-box2__find_text" name="txtXepLoai[]" placeholder="Xếp loại"><input type="number" step="any" min="0" max="10" class="header__text-box2__find_name header__text-box2__find_text" name="txtDiemTB[]" placeholder="Điểm trung bình"><input type="text" class="header__text-box2__find_name header__text-box2__find_text" name="txtMota[]" placeholder="Mô tả"> <td><button type="button" name="add"  class="btnAddHabbit btn-danger btn_remove3" id="' +
                    i + '"><i class="fa fa fa-trash"></i></button></td> </div>');
            });
            $(document).on('click', '.btn_remove3', function() {
                var button_id = $(this).attr("id");

                $('#row3' + button_id + '').remove();
            });

            $('#add4').click(function() {
                i++;
                $('#dynamic_field4').append('<div class="form-row"  id="row4' + i +
                    '"> <input type="text" class="header__text-box2__find_name header__text-box2__find_text" name="txtTenCTY[]" placeholder="Tên công ty"><input type="text" class="header__text-box2__find_name header__text-box2__find_text" name="txtNgayBatDau[]" placeholder="Ngày bắt đầu"><input type="text" class="header__text-box2__find_name header__text-box2__find_text" name="txtNgayKetThuc[]" placeholder="Ngày nghỉ việc"><input type="text" class="header__text-box2__find_name header__text-box2__find_text" name="txtMota[]" placeholder="Mô tả"> <td><button type="button" name="add" class="btnAddHabbit btn-danger btn_remove4" id="' +
                    i + '"><i class="fa fa fa-trash"></i></button></td> </div>');
            });
            $(document).on('click', '.btn_remove4', function() {
                var button_id = $(this).attr("id");

                $('#row4' + button_id + '').remove();
            });

            $('#add5').click(function() {
                i++;
                $('#dynamic_field5').append('<div class="form-row" id="row5' + i +
                    '"><input type="text" class="header__text-box2__find_name header__text-box2__find_text" name="txtThanhTich[]" placeholder="Thành tích mà bạn đã đạt được khi đi học là gì?"> <td><button type="button" name="add" class="btnAddHabbit btn-danger btn_remove5" id="' +
                    i + '"><i class="fa fa fa-trash"></i></button></td> </div>');
            });
            $(document).on('click', '.btn_remove5', function() {
                var button_id = $(this).attr("id");

                $('#row5' + button_id + '').remove();
            });

            $('#add6').click(function() {
                i++;
                $('#dynamic_field6').append('<div class="form-row" id="row6' + i +
                    '"><input type="text" class="header__text-box2__find_name header__text-box2__find_text" name="txtHoatDong[]" placeholder="Hoạt động tình nguyện bạn đã tham gia là gì?"> <td><button type="button" name="add" class="btnAddHabbit btn-danger btn_remove6" id="' +
                    i + '"><i class="fa fa fa-trash"></i></button></td> </div>');
            });
            $(document).on('click', '.btn_remove6', function() {
                var button_id = $(this).attr("id");

                $('#row6' + button_id + '').remove();
            });


        });
    </script>
@endsection
