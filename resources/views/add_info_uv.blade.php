<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{asset('public/fontend/css/infor.css')}}" rel="stylesheet" type="text/css"/>
        <title>Thông tin cá nhân</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            function chooseFile(fileInput) {
                if (fileInput.files && fileInput.files[0]){
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        </script>
    </head>
    <body>
        <div class="infor-form">
            <form action="{{URL::to('/save-ung-vien')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h1>Thông tin cá nhân</h1>
                <div class="box">
                    <div class="input-box">
                        <span class="thuoctinh">Họ và tên </span>
                        <input type="text" name="txtUser" placeholder="Nhập họ và tên" required>
                    </div>
                    <div class="input-box">
                        <span class="thuoctinh">Số điện thoại </span>
                        <input type="tel" pattern="[0-9]{10}" name="txtSDT" placeholder="Nhập số điện thoại" required>
                    </div>
                    <div class="input-box">
                        <span class="thuoctinh">Địa Chỉ </span>
                        <input type="text" name="txtDiachi" placeholder="Nhập địa Chỉ" required>
                    </div>
                    <div class="input-box">
                        <label for="ngaysinh">Ngày sinh</label>
                        <br>
                        <input type="date" name="txtNgaysinh" id="ngaysinh" required/>
                    </div>
                    <div class="input-box">                                   
                        <label for="gioitinh">Giới tính</label>
                        <br>
                        <select id="gioitinh" name="txtGioitinh">
                            <option value="Nam">Nam</option>
                            <option value="Nu">Nữ</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="thuoctinh">Chuyên ngành</span>
                        <input type="text" name="txtChuyenganh" placeholder="Nhập chuyên ngành" required>
                    </div>
                    <div class="input-box">
                        <label for="trinhdo">Trình độ học vấn</label>
                        <br>
                        <select id="trinhdo"name="txtTrinhdo">
                            <option value="daihoc">Đại Học</option>
                            <option value="caodang">Cao Đẳng</option>
                            <option value="trungcap">Trung Cấp</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="thuoctinh">Ảnh đại diện </span>
                        <input type="file" name="hinhanh" id=imageFile onchange="chooseFile(this)" accept="image/ipeg, image/png, image/jpg, image/gif" required>
                    </div>
                    <div class="input-box">
                        <img src="" alt="" id="image" width="100" height="100">
                    </div>
                </div>
                <div class="input-box">
                    <label for="gioithieu">Giới thiệu bản thân</label>
                    <br>
                    <textarea id="gioithieu" name="txtGioithieu" required></textarea>
                </div>                       
                    <button>
                    <span></span>
                    <span></span>
                        Save
                    </button>
            </form>
        </div>
    </body>
</html>