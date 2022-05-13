@extends('Admin')
@section('title')
    Tất Cả Admin
@endsection
@section('menu')
    <ul class="sidebar-menu" id="nav-accordion">
        <li class="sub-menu">
            <a href="javascript:;">
                <i class="fa fa-book"></i>
                <span>Quản Lý Việc Làm</span>
            </a>
            <ul class="sub">
                <li><a href="{{ URL::to('/admin/tat-ca-viec-lam') }}">Tất Cả Việc Làm</a></li>
                <li><a href="{{ URL::to('/admin/viec-lam-cho-duyet') }}">Việc Làm Chờ Duyệt</a></li>
                <li><a href="{{ URL::to('/admin/viec-lam-het-han') }}">Việc Làm Hết Hạn</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a href="javascript:;">
                <i class="fa fa-th"></i>
                <span>Quản Lý Cẩm Nang</span>
            </a>
            <ul class="sub">
                <li><a href="{{ URL::to('/admin/tat-ca-cam-nang') }}">Tất Cả Cẩm Nang</a></li>
                <li><a href="{{ URL::to('/admin/them-cam-nang') }}">Thêm Cẩm Nang</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a href="javascript:;">
                <i class="fa fa-tasks"></i>
                <span>Quảng Lý Quảng Cáo</span>
            </a>
            <ul class="sub">
                <li><a href="{{ URL::to('/admin/tat-ca-quang-cao') }}">Tất Cả Quảng Cáo</a></li>
                <li><a href="{{ URL::to('/admin/them-quang-cao') }}">Thêm Quảng Cáo</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a class="active" href="javascript:;">
                <i class="fa fa-tasks"></i>
                <span>Quản Lý Admin </span>
            </a>
            <ul class="sub">
                <li><a class="active" href="{{ URL::to('/admin/tat-ca-admin') }}">Tất Cả Thông Tin Admin</a></li>
                <li><a href="{{ URL::to('/admin/them-admin') }}">Thêm Admin</a></li>
            </ul>
        </li>
        <li class="sub-menu"><a href="{{ URL::to('/admin/danh-sach-email-dang-ky') }}">Danh
                sách email
                đăng ký</a></li>
    </ul>
@endsection
@section('allViecLam')
    <?php
    $messenger = Session()->get('messenger');
    if ($messenger) {
        echo '<script> alert("' . $messenger . '"); </script>';
        session()->put('messenger', null);
    }
    ?>
    <div class="form">
        <form class="cmxform form-horizontal " id="signupForm" method="get" action="" novalidate="novalidate">
            <div class="quanly_table">
                <table class="table_quanly">
                    <tr class="table_rows">
                        <th class="th td_stt">ID</th>
                        <th class="th td_user">user</th>
                        <th class="th td_ten">Tên</th>
                        <th class="th td_ns">Ngày Sinh</th>
                        <th class="th td_mail">Email</th>
                        <th class="th td_sdt">SĐT</th>
                        <th class="th td_dc">Địa Chỉ</th>
                        <th class="th td_sk">Sự Kiện</th>
                    </tr>
                    @foreach ($all_Job as $key => $all_job)
                        <tr class="table_rows table_row-content">
                            <td class="td td_stt">{{ $all_job->idAdmin }}</td>
                            <td class="td td_user">{{ $all_job->User }}</td>
                            <td class="td td_ten">{{ $all_job->HotenAdmin }}</td>
                            <td class="td td_ns">{{ $all_job->Ngaysinh }}</td>
                            <td class="td td_mail">{{ $all_job->Email }}</td>
                            <td class="td td_sdt">{{ $all_job->SDT }}</td>
                            <td class="td td_dc">{{ $all_job->Diachi }}</td>
                            <td class="td td_sk">
                                <a onclick="return confirm('Bạn có chắc muốn xoá?')"
                                    href="{{ URL::to('/admin/delete-admin/' . $all_job->idAdmin) }}"
                                    class="btn-new">Xoá</a>
                                <a href="{{ URL::to('/admin/edit-admin/' . $all_job->idAdmin) }}"
                                    class="btn-new">Sửa</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </form>
    </div>
@endsection
