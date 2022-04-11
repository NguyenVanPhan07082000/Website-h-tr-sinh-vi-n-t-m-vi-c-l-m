@extends('Admin')
@section('title')
    Thêm Admin
@endsection
@section('menu')
<ul class="sidebar-menu" id="nav-accordion">
    <li class="sub-menu">
        <a href="javascript:;">
            <i class="fa fa-book"></i>
            <span>Quản Lý Việc Làm</span>
        </a>
        <ul class="sub">
            <li><a href="{{URL::to('/admin/tat-ca-viec-lam')}}">Tất Cả Việc Làm</a></li>
            <li><a href="{{URL::to('/admin/viec-lam-cho-duyet')}}">Việc Làm Chờ Duyệt</a></li>
            <li><a href="{{URL::to('/admin/viec-lam-het-han')}}">Việc Làm Hết Hạn</a></li>
        </ul>
    </li>
    <li class="sub-menu">
        <a href="javascript:;">
            <i class="fa fa-th"></i>
            <span>Quản Lý Cẩm Nang</span>
        </a>
        <ul class="sub">
            <li><a href="{{URL::to('/admin/tat-ca-cam-nang')}}">Tất Cả Cẩm Nang</a></li>
            <li><a href="{{URL::to('/admin/them-cam-nang')}}">Thêm Cẩm Nang</a></li>
        </ul>
    </li>
    <li class="sub-menu">
        <a href="javascript:;">
            <i class="fa fa-tasks"></i>
            <span>Quảng Lý Quảng Cáo</span>
        </a>
        <ul class="sub">
            <li><a href="{{URL::to('/admin/tat-ca-quang-cao')}}">Tất Cả Quảng Cáo</a></li>
            <li><a href="{{URL::to('/admin/them-quang-cao')}}">Thêm Quảng Cáo</a></li>
        </ul>
    </li>
    <li class="sub-menu">
        <a class="active" href="javascript:;">
            <i class="fa fa-tasks"></i>
            <span>Quản Lý Admin </span>
        </a>
        <ul class="sub">
            <li><a href="{{URL::to('/admin/tat-ca-admin')}}">Tất Cả Thông Tin Admin</a></li>
            <li><a class="active" href="{{URL::to('/admin/them-admin')}}">Thêm Admin</a></li>
        </ul>
    </li>
</ul>
@endsection
@section('add-Admin')
<div class="position-center">
    <form role="form" action="{{URL::to('/admin/save-admin')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <?php
            $messenger = Session()->get('messenger');
            if($messenger)
            {
                echo '<script> alert("'.$messenger.'"); </script>';
                session()->put('messenger', null);
            }
        ?>
        <div class="form-group">
            <label for="exampleInputEmail1">Tài Khoản</label>
            <input type="text" class="form-control" name="txtTk" id="txtTk" placeholder="Nhập tên tài khoản..." required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mật Khẩu</label>
            <input type="password" class="form-control" name="txtPass" id="txtPass" placeholder="Nhập mật khẩu..." required>
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Họ Và Tên</label>
            <input type="text" class="form-control" name="txtTen" id="txtTen" placeholder="Nhập tên người dùng..." required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Ngày Sinh</label>
            <input type="date" class="form-control" name="txtNgaysinh" id="txtNgaysinh" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Giới Tính</label>
            <select name="gioitinh">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
                <option value="Khác">Khác</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Nhập email..." required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Số Điện Thoại</label>
            <input type="tel" class="form-control" pattern="[0-9]{10}" name="txtSDT" id="txtSDT" placeholder="Nhập số điện thoại..." required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Địa Chỉ</label>
            <textarea rows="4" class="form-control" name="txtDiachi" id="txtDiachi" placeholder="Giới địa chỉ..." required></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Hình Ảnh</label>
            <input type="file" name="hinhanh" id="exampleInputFile" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Quyền Quản Trị</label>
            <select name="quyenquantri">
                <option value="1">Quản Trị Viên</option>
                <option value="0">Cộng Tác Viên</option>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-info">Submit</button>
    </form>
</div>
@endsection