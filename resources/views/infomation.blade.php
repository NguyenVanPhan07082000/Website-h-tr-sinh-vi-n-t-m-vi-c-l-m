<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('fontend/css/infor2.css')}}">
    <title>Thông tin cá nhân</title>
</head>
<body>
    <form>
        @foreach ($profile as $key=>$pf)
            <div class="container">
                <div class="containerinfo">
                    <div>
                    <img src="{{asset('fontend/img/avatar'.'/'.$pf->Hinhanh)}}" alt="" id="image" width="200" height="280">
                    </div>
                    <li>
                    <p>{{$pf->Hoten}}</p>
                    </li>
                </div>
                <div class="containerForm">
                <h2>Thông tin cá nhân</h2>
                    <div class="formBox">
                    <div class="thongtin">
                        <span class="title">Email: </span>
                        <p class="content">{{$pf->Email}}</p>
                    </div>
                    <div class="thongtin">
                        <span class="title">Số Điện Thoại: </span>
                        <p class="content">{{$pf->SDT}}</p>
                    </div>
                    <div class="thongtin">
                        <span class="title">Địa Chỉ: </span>
                        <p class="content">{{$pf->Diachi}}</p>
                    </div>
                    <div class="thongtin">
                        <span class="title">Ngày Sinh: </span>
                        <p class="content">{{$pf->Ngaysinh}} </p>
                    </div>
                    <div class="thongtin">
                        <span class="title">Giới Tính: </span>
                        <p class="content">{{$pf->Gioitinh}}</p>
                    </div>
                    <div class="thongtin">
                        <span class="title">Chuyên Ngành: </span>
                        <p class="content">{{$pf->Chuyennganh}}</p>
                    </div>
                    <div class="thongtin">
                        <span class="title">Trình Độ Học Vấn: </span>
                        <p class="content">{{$pf->Trinhdo}}</p>
                    </div>
                    <div class="thongtin">
                        <span class="title">Giới Thiệu Bản Thân: </span>
                        <p class="content">{{$pf->Gioithieu}}</p>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach
    </form>
</body>
</html>