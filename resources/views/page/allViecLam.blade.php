@extends('Admin')
@section('title')
    Tất Cả Việc Làm
@endsection
@section('menu')
<ul class="sidebar-menu" id="nav-accordion">
    <li class="sub-menu">
        <a class="active" href="javascript:;">
            <i class="fa fa-book"></i>
            <span>Quản Lý Việc Làm</span>
        </a>
        <ul class="sub">
            <li><a class="active" href="{{URL::to('/admin/tat-ca-viec-lam')}}">Tất Cả Việc Làm</a></li>
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
@section('allViecLam')
<div class="form">
    <?php
        $messenger = Session()->get('messenger');
        if($messenger)
        {
            echo '<script> alert("'.$messenger.'"); </script>';
            session()->put('messenger', null);
        }
    ?>
    <form class="cmxform form-horizontal " id="signupForm" method="POST" action="" novalidate="novalidate">
        <div class="quanly_table">
            <table class="table_quanly">
                <tr class="table_rows">
                    <th class="th td_stt">ID</th>
                    <th class="th td_tct">Tên Công Ty</th>
                    <th class="th td_tvl">Tên Việc Làm</th>
                    <th class="th td_tgd">Thời Gian Đăng</th>
                    <th class="th td_sk">Sự Kiện</th>
                </tr>
                @foreach ($all_Job as $key => $all_job)
                    <tr class="table_rows table_row-content">
                        <td class="td td_stt">{{$all_job->idJob}}</td>
                        <td class="td td_tct">{{$all_job->Tencongty}}</td>
                        <td class="td td_tvl"><a href="#" class="card_a-job">{{$all_job->Nganhnghe}}</a></td>
                        <td class="td td_tgd">{{$all_job->Ngaycapnhat}}</td>
                        <td class="td td_sk">
                            <a onclick="return confirm('Bạn có chắc muốn xoá?')" href="{{URL::to('/admin/delete-job/'.$all_job->idJob)}}" class="btn-new">Xoá</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </form>
</div>
@endsection