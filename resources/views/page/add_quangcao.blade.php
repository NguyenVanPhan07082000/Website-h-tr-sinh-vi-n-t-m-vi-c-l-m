@extends('Admin')
@section('title')
    Thêm Quảng Cáo
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
        <a class="active" href="javascript:;">
            <i class="fa fa-tasks"></i>
            <span>Quảng Lý Quảng Cáo</span>
        </a>
        <ul class="sub">
            <li><a href="{{URL::to('/admin/tat-ca-quang-cao')}}">Tất Cả Quảng Cáo</a></li>
            <li><a class="active" href="{{URL::to('/admin/them-quang-cao')}}">Thêm Quảng Cáo</a></li>
        </ul>
    </li>
    <li class="sub-menu">
        <a href="javascript:;">
            <i class="fa fa-tasks"></i>
            <span>Quản Lý Admin </span>
        </a>
        <ul class="sub">
            <li><a href="{{URL::to('/admin/tat-ca-admin')}}">Tất Cả Thông Tin Admin</a></li>
            <li><a href="{{URL::to('/admin/them-admin')}}">Thêm Admin</a></li>
        </ul>
    </li>
</ul>
@endsection
@section('add-Admin')
<div class="position-center">
    <form role="form" action="{{URL::to('/admin/save-quangcao')}}" method="POST" enctype="multipart/form-data">
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
            <label for="exampleInputPassword1">Slogan Quảng Cáo</label>
            <textarea rows="4" class="form-control" name="txtSlogan" id="txtSlogan" placeholder="Giới thiệu về cẩm nang..." required></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Link</label>
            <input type="text" class="form-control" name="txtLink" id="txtLink" placeholder="Nhập tiêu đề cẩm nang..." required>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Hình Ảnh</label>
            <input type="file" name="hinhanh" id="exampleInputFile" required>
        </div>
        
        <button type="submit" class="btn btn-info">Lưu</button>
    </form>
</div>
@endsection