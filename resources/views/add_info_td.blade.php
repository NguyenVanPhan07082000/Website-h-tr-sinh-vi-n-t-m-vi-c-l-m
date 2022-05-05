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
            <form action="{{URL::to('/save-tuyen-dung')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h1>Thông tin cá nhân</h1>
                <div class="box">
                    <div class="input-box">
                        <span class="thuoctinh">Tên Công Ty  </span>
                        <input type="text" name="txtTenconty" placeholder="Nhập tên công ty" required>
                    </div>
                    <div class="input-box">
                        <span class="thuoctinh">Logo Công Ty </span>
                        <input type="file" name="hinhanh" required>
                    </div>
                    <div class="input-box">
                        <span class="thuoctinh">Email </span>
                        <input type="email" name="txtEmail" placeholder="Nhập địa chỉ email" required>
                    </div>
                    <div class="input-box">
                        <span class="thuoctinh">Link website hoặc facebook </span>
                        <input type="text" name="txtLink" placeholder="Nhập link website hoặc facebook hoặc link khác" required>
                    </div>
                    <div class="input-box">
                        <label for="ngaysinh">GiớI Thiệu về công ty</label>
                        <br>
                        <textarea rows="3" name="txtGioithieu" placeholder="Giới thiệu về công ty" required></textarea>
                    </div>

                <div class="input-box">
                    <label for="gioithieu">Địa Chỉ</label>
                    <br>
                    <textarea rows="3" name="txtDiachi" placeholder="Địa chỉ công ty" required></textarea>
                </div>
                <div class="input-box">
                    <span class="thuoctinh">Số điện thoại </span>
                    <input type="tel" pattern="[0-9]{10}" name="txtSDT" placeholder="Nhập địa số điện thoại" required>
                </div>                       
                    <button class="btn-1">
                            Save
                    </button>
            </form>
        </div>
    </body>
</html>