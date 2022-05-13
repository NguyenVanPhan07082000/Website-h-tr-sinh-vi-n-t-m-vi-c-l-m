@extends('Admin')
@section('title')
    Tất Cả Cẩm Nang
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
            <a class="active" href="javascript:;">
                <i class="fa fa-th"></i>
                <span>Quản Lý Cẩm Nang</span>
            </a>
            <ul class="sub">
                <li><a class="active" href="{{ URL::to('/admin/tat-ca-cam-nang') }}">Tất Cả Cẩm Nang</a></li>
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
            <a href="javascript:;">
                <i class="fa fa-tasks"></i>
                <span>Quản Lý Admin </span>
            </a>
            <ul class="sub">
                <li><a href="{{ URL::to('/admin/tat-ca-admin') }}">Tất Cả Thông Tin Admin</a></li>
                <li><a href="{{ URL::to('/admin/them-admin') }}">Thêm Admin</a></li>
            </ul>
        </li>
        <li class="sub-menu"><a href="{{ URL::to('/admin/danh-sach-email-dang-ky') }}">Danh
                sách email
                đăng ký</a></li>
    </ul>
@endsection
@section('all_camnang')
    <div class="form">
        <?php
        $messenger = Session()->get('messenger');
        if ($messenger) {
            echo '<script> alert("' . $messenger . '"); </script>';
            session()->put('messenger', null);
        }
        ?>
        <form class="cmxform form-horizontal " id="signupForm" method="get" action="" novalidate="novalidate">
            <div class="quanly_table">
                <table class="table_quanly">
                    <tr class="table_rows">
                        <th class="th td_stt">ID</th>
                        <th class="th td_tcn">Tên Cẩm Nang</th>
                        <th class="th td_td">Tiêu Đề</th>
                        <th class="th td_ha">Hình Ảnh</th>
                        <th class="th td_gt">Giới Thiệu</th>
                        <th class="th td_sk">Sự Kiện</th>
                    </tr>
                    @foreach ($all_Job as $key => $all_job)
                        <tr class="table_rows table_row-content">
                            <td class="td td_stt">{{ $all_job->idCamnan }}</td>
                            <td class="td td_tcn">{{ $all_job->Tencamnan }}</td>
                            <td class="td td_td">{{ $all_job->Tieude }}</td>
                            <td class="td td_ha"><img
                                    src="{{ asset('public/fontend/img/camnan') . '/' . $all_job->Hinhanh }}"
                                    class="img_camnan" alt="img"></td>
                            <td class="td td_gt">{{ $all_job->Gioithieu }}</td>
                            <td class="td td_sk">
                                <a onclick="return confirm('Bạn có chắc muốn xoá?')"
                                    href="{{ URL::to('/admin/delete-camnang/' . $all_job->idCamnan) }}"
                                    class="btn-new">Xoá</a>
                                <a href="{{ URL::to('/admin/edit-camnang/' . $all_job->idCamnan) }}"
                                    class="btn-new">Sửa</a>
                            </td>
                        </tr>
                    @endforeach
                    {{-- <tr class="table_rows table_row-content">
                    <td class="td td_stt">1</td>
                    <td class="td td_tcn">ABC</td>
                    <td class="td td_td">
                    Depveloper a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a
                    </td>
                    <td class="td td_ha"><img src="./images/g5.jpg" class="img_camnan" alt="img"></td>
                    <td class="td td_gt">10/06/2000</td>
                    <td class="td td_sk">
                        <input type="BUTTON" class="btn-new" name="btnXoa" id="btnXoa" value="Xoá"/>
                        <a href="#" class="btn-1">Thêm</a>
                    </td>
                </tr> --}}
                </table>
            </div>
        </form>
    </div>
@endsection
