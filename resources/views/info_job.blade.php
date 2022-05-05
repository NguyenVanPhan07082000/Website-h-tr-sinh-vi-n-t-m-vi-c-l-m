@extends('welcome')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('public/fontend/css/info-job.css')}}"/>
@endsection
@section('content')
<div class="info_job">
    <img src="{{asset('public/fontend/img/chamngon.jpg')}}" class="img_chamngon" alt="chamngon"/>
    @foreach ($info_job as $key => $i4 )
    <div class="info_job--name">
        <div class="row">
            <div class="job job--new ">
                <div class="col-1-of-4">
                    <img src="{{asset('public/fontend/img/company'.'/'.$i4->Hinhanh)}}" class="logo-company" alt="logo-company"/>
                </div>
                <div class="col-2-of-4 job_info job_info--new">
                    <p class="job_info job_info--name_job--new">
                        <p class="job_info--p">{{$i4->Nganhnghe}}</p>
                    </p>
                    <p class="job_info job_info--name_company--new">
                        {{$i4->Tencongty}}
                    </p>
                    <p class="job_info job_info--salary_new">
                        $ Lương: {{$i4->Luong}}
                    </p>
                    <p class="job_info job_info--address_new">
                        Địa chỉ: {{$i4->Diachi}}
                    </p>
                    
                </div>
                <div class="col-1-of-4 job_footer">
                    <a href="{{URL::to('/like-job'.'/'.$i4->idJob)}}" class="btnSaveJob" name="btnSaveJob" id="btnSaveJob"><i class="fa fa-heart"> Lưu Việc làm</i></a>
                    <i class="fa fa-calendar datetime"> {{$i4->Ngaycapnhat}}</i>
                </div>
            </div>
            <div class="col-2-of-3">
                <div class="info_job--details info_job--details--1">
                    <h2 class="info_job--details_title">Thông Tin Tuyển Dụng</h2>
                    <div class="info_job--details_info">
                        <div class="info_job--details_info--1">
                            <div class="col-1-of-2">
                                <div class="col-1-of-2">
                                    <p><i class="fa fa-user-md"> Ngàng Nghề</i></p>
                                </div>
                                <div class="col-1-of-2">
                                    <a href="#" class="job_info--a">{{$i4->Nganhnghe}}</a>
                                </div>
                                <div class="col-1-of-2">
                                    <p><i class="fa fa-usd"> Lương</i></p>
                                </div>
                                <div class="col-1-of-2">
                                    <p class="job_info--p1">{{$i4->Luong}}</p>
                                </div>
                                <div class="col-1-of-2">
                                    <p><i class="fa fa-briefcase"> Hình Thức</i></p>
                                </div>
                                <div class="col-1-of-2">
                                    <p class="job_info--p1">{{$i4->Hinhthuc}}</p>
                                </div>
                                <div class="col-1-of-2">
                                    <p><i class="fa fa-calendar"> ngày cập nhật</i></p>
                                </div>
                                <div class="col-1-of-2">
                                    <p class="job_info--p1"> {{$i4->Ngaycapnhat}}</p>
                                </div>
                            </div>
                            <div class="col-1-of-2">
                                <div class="col-1-of-2">
                                    <p><i class="fa fa-user"> Cấp Bậc</i></p>
                                </div>
                                <div class="col-1-of-2">
                                    <p class="info_job--details_info--1_capbac">{{$i4->Capbac}}</p>
                                </div>
                                <div class="col-1-of-2">
                                    <p><i class="fa fa-briefcase"> Kinh nghiệm</i></p>
                                </div>
                                <div class="col-1-of-2">
                                    <p class="info_job--details_info--1_capbac">{{$i4->Kinhnghiem}}</p>
                                </div>
                                <div class="col-1-of-2">
                                    <p><i class="fa fa-calendar"> Ngày hết hạn nộp</i></p>
                                </div>
                                <div class="col-1-of-2">
                                    <p class="info_job--details_info--1_capbac">{{$i4->Ngayhethan}}</p>
                                </div>
                                <div class="col-1-of-2">
                                    <p><i class="fa fa-envelope"> Email</i></p>
                                </div>
                                <div class="col-1-of-2">
                                    <p class="info_job--details_info--1_capbac">{{$i4->Email}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info_job--details info_job--details--2">
                    <h2 class="info_job--details_title">Phúc Lợi</h2>
                    <div class="col-1-of-2 info_job--details_phucloi">
                        <p class="job_info--p1">{{$i4->Phucloi}}</p>
                    </div>
                </div>
                <div class="info_job--details info_job--details--2 info_job--details--3">
                    <h2 class="info_job--details_title">Mô Tả Công Việc</h2>
                    <div class="info_job--details_mota">
                        <ul class="info_job--details_mota--1 info_job--details_mota--ul">
                            <li>{{$i4->Mota}}</li>
                        </ul>
                    </div>
                </div>
                <div class="info_job--details info_job--details--4">
                    <h2 class="info_job--details_title">Yêu cầu công việc</h2>
                    <div class="info_job--details_mota">
                        <ul class="info_job--details_mota--1 info_job--details_mota--ul">
                            <li>{{$i4->Yeucau}}</li>
                        </ul>
                    </div>
                </div>
                <div class="info_job--details info_job--details--5">
                    <h2 class="info_job--details_title">Quyền Lợi</h2>
                    <div class="info_job--details_mota">
                        <ul class="info_job--details_mota--1 info_job--details_mota--ul">
                            <li>{{$i4->Quyenloi}}</li>
                        </ul>
                    </div>
                </div>
                <div class="info_job--details info_job--details--6">
                    <h2 class="info_job--details_title">Lý do nên chọn công ty</h2>
                    <div class="info_job--details_mota">
                        <ul class="info_job--details_mota--1 info_job--details_mota--ul">
                            <li>{{$i4->Lydo}}</li>
                        </ul>
                    </div>
                </div>
                <div class="choose">
                    <a href="{{URL::to('/like-job'.'/'.$i4->idJob)}}" class="btnSaveJob" name="btnSaveJob" id="btnSaveJob"><i class="fa fa-heart"> Lưu Việc làm</i></a>
                    <button type="submit" class="btnSaveJob" name="btnSaveJob" id="btnSaveJob"><i class="fa fa-flag"> Báo cáo</i></button>
                    <a href="{{URL::to('/join-job'.'/'.$i4->idJob)}}" class="email_background--content_insert email_background--content_insert--btn_1">Nộp Đơn Ứng Tuyển</a>
                </div>
                <div class="info_company">
                    <h2 class="info_company--details">Giới Thiệu Về Công Ty</h2>
                    <div class="row">
                        <div class="job info_company--new ">
                            <div class="col-1-of-4">
                                <img src="{{asset('public/fontend/img/company'.'/'.$i4->Hinhanh)}}" class="logo-company" alt="logo-company"/>
                            </div>
                            <div class="col-3-of-4 job_info job_info--new">
                                <p class="job_info job_info--name_job--new">
                                    <a href="#" class="job_info--a">{{$i4->Tencongty}}</a>
                                </p>
                                <p class="job_info job_info--name_company--new--1">
                                    {{$i4->Gioithieu}}
                                </p>
                                <p class="job_info job_info--salary_new">
                                    Link:
                                    <a href="{{$i4->Link}}" class="job_info--a_1">{{$i4->Link}}</a>
                                </p>
                                <p class="job_info">
                                    <br><br><a href="#" class="info-job_a">Xem Thêm</a>
                                    <a href="{{URL::to('/like-job'.'/'.$i4->idJob)}}" class="email_background--content_insert email_background--content_insert--btn_1">Follow</a>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection