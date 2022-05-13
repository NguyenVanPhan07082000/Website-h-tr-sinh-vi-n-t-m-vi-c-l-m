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
        @foreach ($myCV as $key => $cv)
            <form action="{{ URL::to('/edit-ung-vien/' . $cv->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
        @endforeach
        <div class="info_job--name">
            <div class="row">
                <div class="info_job--details info_job--details--1">
                    <h2 class="info_job--details_title info_job--details_title--new">Thông Tin Liên Hệ:</h2>
                    <div class="info_job--details_info">
                        @foreach ($myCV as $key => $cv)
                            <div class="info_job--details_info--1">
                                <div class="col-1-of-2">
                                    <div>
                                        <p class="card_p card_p--name"><i class="fa fa-user-md"> Họ và tên:</i>
                                            <input type="text" value="{{ $cv->Hoten }}" name="txtName" id="find_name"
                                                placeholder="Họ và tên..."
                                                class="header__text-box2__find_name header__text-box2__find_text" required>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="card_p card_p--nganhnghe"><i class="fa fa-user-md"> Vị trí ứng
                                                tuyển:</i>
                                            <input type="text" name="txtNganhnghe" id="find_name"
                                                placeholder="Vị trí ứng tuyển..." value="{{ $cv->Nganhnghe }}"
                                                class="header__text-box2__find_name header__text-box2__find_text"
                                                required />
                                        </p>
                                    </div>
                                    <div>
                                        <p class="card_p card_p--ngaysinh"><i class="fa fa-book-open"> Ngày
                                                sinh:</i>
                                            <input type="date" value="{{ $cv->Ngaysinh }}" name="txtNgaysinh"
                                                id="find_name"
                                                class="header__text-box2__find_name header__text-box2__find_text"
                                                required />
                                        </p>
                                    </div>
                                    <div>
                                        <p class="card_p card_p--gioitinh"><i class="fa fa-user"> Giới tính:</i>
                                            <select name="txtGioitinh"
                                                class="header__text-box2__find_name header__text-box2__find_text" required>
                                                @if ($cv->Gioitinh == 'Nữ')
                                                    {
                                                    <option value="Nam">Nam</option>
                                                    <option selected value="Nữ">Nữ</option>
                                                    <option value="Khác">Khác</option>
                                                    }
                                                @elseif($cv->Gioitinh == 'Khác')
                                                    {
                                                    <option value="Nam">Nam</option>
                                                    <option value="Nữ">Nữ</option>
                                                    <option selected value="Khác">Khác</option>
                                                    }
                                                @else
                                                    {
                                                    <option value="Nam">Nam</option>
                                                    <option value="Nữ">Nữ</option>
                                                    <option value="Khác">Khác</option>
                                                    }
                                                @endif
                                            </select>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="card_p card_p--ngaysinh"><i class="fa fa-book-open"> Hình ảnh:</i>
                                            <input type="file" value="{{ $cv->Hinhanh }}" name="hinhanh" required>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-1-of-2">
                                    <div>
                                        <p class="card_p card_p--sdt"><i class="fa fa-user"> Số Điện Thoại:</i>
                                            <input type="text" name="txtSdt" id="find_name" placeholder="Số điện thoại..."
                                                value="{{ $cv->SDT }}"
                                                class="header__text-box2__find_name header__text-box2__find_text"
                                                required />
                                        </p>
                                    </div>
                                    <div>
                                        <p class="card_p card_p--email"><i class="fa fa-book-open"> Email:</i>
                                            <input type="text" name="txtEmail" id="find_name" placeholder="Email..."
                                                class="header__text-box2__find_name header__text-box2__find_text"
                                                value="{{ $cv->Email }}" required />
                                        </p>
                                    </div>

                                    <div>
                                        <p class="card_p card_p--taikhoan"><i class="fa fa-book-open"> Tài khoản
                                                MXH:</i>
                                            <input type="text" name="txtTaikhoan" id="find_name"
                                                value="{{ $cv->TKMXH }}"
                                                placeholder="Tên tài khoản mạng xã hội của bạn là gì?"
                                                class="header__text-box2__find_name header__text-box2__find_text"
                                                required />
                                        </p>
                                    </div>
                                    <div>
                                        <p class="card_p card_p--taikhoan"><i class="fa fa-book-open"> Link TK
                                                MXH:</i>
                                            <input type="text" name="txtLinkTK" id="find_name"
                                                value="{{ $cv->LinkTKMXH }}"
                                                placeholder="Link tài khoản mạng xã hội của bạn"
                                                class="header__text-box2__find_name header__text-box2__find_text"
                                                required />
                                        </p>
                                    </div>

                                    <div>
                                        <p class="card_p card_p--diachi"><i class="fa fa-book-open"> Địa chỉ:</i>
                                            <textarea rows="3" cols="130" class="textarea-infor" name="txtDiachi" placeholder="Địa chỉ hiện nay..."
                                                required>{{ $cv->Diachi }}</textarea>
                                            {{-- <input type="textarea" name="txtNgayhethan" id="find_name"
                                                placeholder="Ngày hết hạn tuyển..."
                                                class="header__text-box2__find_name header__text-box2__find_text" /> --}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="info_job--details info_job--details--2">
                    <h2 class="info_job--details_title">SỞ THÍCH</h2>
                    <div id="field_div">
                        <div id="dynamic_field">
                            <div class="form-row">
                                @foreach ($soThich as $sothich => $like)
                                    <input type="text" value="{{ $like->tenSoThich }}"
                                        class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtSothich[]" placeholder="Sở thích của bạn" required>
                                    <input type="text" value="{{ $like->id }}" name="txtID[]"
                                        style="visibility: hidden;"><br />
                                @endforeach
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
                                @foreach ($kyNang as $kynang => $skill)
                                    <input type="text" value="{{ $skill->tenKyNang }}"
                                        class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtTenKyNang[]" placeholder="Tên kỹ năng" required>
                                    <input type="number" value="{{ $skill->mucDo }}"
                                        class="header__text-box2__find_name header__text-box2__find_text" name="txtMucDo[]"
                                        placeholder="% hiểu biết của bạn về nó" required><br />
                                    <input type="text" value="{{ $skill->id }}" name="txtID[]"
                                        style="visibility: hidden;"><br />
                                @endforeach
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
                                @foreach ($education as $trinhdo => $edu)
                                    <input type="text" value="{{ $edu->tenTruong }}"
                                        class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtTentruong[]" placeholder="Tên trường" required>
                                    <input type="text" value="{{ $edu->ngayBatDau }}"
                                        class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtNgayBatDau[]" placeholder="Ngày bắt đầu" required>
                                    <input type="text" value="{{ $edu->ngayKetthuc }}"
                                        class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtNgayKetThuc[]" placeholder="Ngày tốt nghiệp" required>
                                    <input type="text" value="{{ $edu->xepLoai }}"
                                        class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtXepLoai[]" placeholder="Xếp loại" required>
                                    <input type="number" value="{{ $edu->diemTB }}" step="any" min="0" max="10"
                                        class="header__text-box2__find_name header__text-box2__find_text" name="txtDiemTB[]"
                                        placeholder="Điểm trung bình" required>
                                    <input type="text" value="{{ $edu->moTa }}"
                                        class="header__text-box2__find_name header__text-box2__find_text" name="txtMota[]"
                                        placeholder="Bạn đã làm gì khi ở đó?" required>
                                    <input type="text" value="{{ $edu->id }}" name="txtID[]"
                                        style="visibility: hidden;"><br />
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info_job--details info_job--details--4">
                    <h2 class="info_job--details_title">THÀNH TÍCH</h2>
                    <div id="field_div">
                        <div id="dynamic_field5">
                            <div class="form-row">
                                @foreach ($thanhTich as $thanhtich => $tt)
                                    <input type="text" value="{{ $tt->thanhTich }}"
                                        class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtThanhTich[]" placeholder="Thành tích mà bạn đã đạt được khi đi học là gì?">
                                    <input type="text" value="{{ $tt->id }}" name="txtID[]"
                                        style="visibility: hidden;"><br />
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info_job--details info_job--details--5">
                    <h2 class="info_job--details_title">KINH NGHIỆM LÀM VIỆC</h2>
                    <div>
                        <div id="dynamic_field4">
                            <div class="form-row">
                                @foreach ($kinhNghiem as $kinhnghiem => $exp)
                                    <input type="text" value="{{ $exp->tenCTY }}"
                                        class="header__text-box2__find_name header__text-box2__find_text" name="txtTenCTY[]"
                                        placeholder="Tên công ty" required>
                                    <input type="text" value="{{ $exp->tuNgay }}"
                                        class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtNgayBatDau[]" placeholder="Ngày bắt đầu" required>
                                    <input type="text" value="{{ $exp->denNgay }}"
                                        class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtNgayKetThuc[]" placeholder="Ngày nghỉ việc" required>
                                    <input type="text" value="{{ $exp->moTa }}"
                                        class="header__text-box2__find_name header__text-box2__find_text" name="txtMota[]"
                                        placeholder="Mô tả" required>
                                    <input type="text" value="{{ $exp->id }}" name="txtIDCT[]" id="txtCTY"
                                        class="header__text-box2__find_name header__text-box2__find_text"
                                        style="visibility: hidden;"><br />
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info_job--details info_job--details--6">
                    <h2 class="info_job--details_title">HOẠT ĐỘNG XÃ HỘI</h2>
                    <div id="field_div">
                        <div id="dynamic_field6">
                            <div class="form-row">
                                @foreach ($hoatDong as $hoatdong => $hd)
                                    <input type="text" value="{{ $hd->hoatDong }}"
                                        class="header__text-box2__find_name header__text-box2__find_text"
                                        name="txtHoatDong[]" placeholder="Hoạt động tình nguyện bạn đã tham gia là gì?">
                                    <input type="text" value="{{ $hd->id }}" name="txtID[]"
                                        style="visibility: hidden;"><br />
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($myCV as $key => $cv)
                    <div class="info_job--details info_job--details--6">
                        <h2 class="info_job--details_title">MỤC TIÊU VÀ NGUYỆN VỌNG</h2>
                        <div>
                            <textarea rows="10" cols="130" class="textarea" name="txtMuctieu"
                                placeholder="Mục tiêu mà bạn hướng tới trong công việc và trong tương lai là gì?"
                                required>{{ $cv->Muctieu }}</textarea>
                        </div>
                    </div>
                    <div class="info_job--details info_job--details--6">
                        <h2 class="info_job--details_title">Chọn mẫu CV bạn thích</h2>
                        @if ($cv->CV == 1)
                            {
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
                            }
                        @elseif($cv->CV == 2)
                            {
                            <input type="radio" id="mau_1" name="cv" value="1">
                            <img src="{{ asset('public/fontend/img/mau_cv/mau_1.jpg') }}" class="mau_cv"
                                for="mau_1" />
                            <input type="radio" id="mau_2" name="cv" value="2" checked>
                            <img src="{{ asset('public/fontend/img/mau_cv/mau_2.jpg') }}" class="mau_cv"
                                for="mau_2" />
                            <input type="radio" id="mau_3" name="cv" value="3">
                            <img src="{{ asset('public/fontend/img/mau_cv/mau_4.jpg') }}" class="mau_cv"
                                for="mau_3" />
                            <input type="radio" id="mau_4" name="cv" value="4">
                            <img src="{{ asset('public/fontend/img/mau_cv/mau_5.jpg') }}" class="mau_cv"
                                for="mau_4" />
                            }
                        @elseif($cv->CV == 3)
                            {
                            <input type="radio" id="mau_1" name="cv" value="1">
                            <img src="{{ asset('public/fontend/img/mau_cv/mau_1.jpg') }}" class="mau_cv"
                                for="mau_1" />
                            <input type="radio" id="mau_2" name="cv" value="2">
                            <img src="{{ asset('public/fontend/img/mau_cv/mau_2.jpg') }}" class="mau_cv"
                                for="mau_2" />
                            <input type="radio" id="mau_3" name="cv" value="3" checked>
                            <img src="{{ asset('public/fontend/img/mau_cv/mau_4.jpg') }}" class="mau_cv"
                                for="mau_3" />
                            <input type="radio" id="mau_4" name="cv" value="4">
                            <img src="{{ asset('public/fontend/img/mau_cv/mau_5.jpg') }}" class="mau_cv"
                                for="mau_4" />
                            }
                        @else{
                            <input type="radio" id="mau_1" name="cv" value="1">
                            <img src="{{ asset('public/fontend/img/mau_cv/mau_1.jpg') }}" class="mau_cv"
                                for="mau_1" />
                            <input type="radio" id="mau_2" name="cv" value="2">
                            <img src="{{ asset('public/fontend/img/mau_cv/mau_2.jpg') }}" class="mau_cv"
                                for="mau_2" />
                            <input type="radio" id="mau_3" name="cv" value="3">
                            <img src="{{ asset('public/fontend/img/mau_cv/mau_4.jpg') }}" class="mau_cv"
                                for="mau_3" />
                            <input type="radio" id="mau_4" name="cv" value="4" checked>
                            <img src="{{ asset('public/fontend/img/mau_cv/mau_5.jpg') }}" class="mau_cv"
                                for="mau_4" />
                            }
                        @endif
                    </div>
                @endforeach
                <div class="choose">
                    <a href="{{ URL::to('/trang-chu') }}"
                        class="email_background--content_insert email_background--content_insert--btn_2 a--huy">Huỷ</a>
                    <input type="submit" class="email_background--content_insert email_background--content_insert--btn_2"
                        name="btnEmail" id="btnEmail" value="Lưu CV" />
                </div>
            </div>
        </div>
        </form>
    </div>
@endsection
