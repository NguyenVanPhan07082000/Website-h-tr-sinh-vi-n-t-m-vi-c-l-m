@extends('welcome')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/css/job.css')}}"/>
@endsection
@section('content')
<img src="{{asset('fontend/img/chamngon.jpg')}}" class="img_chamngon" alt="chamngon"/>
<div class="page_job row">
    <div class="col-2-of-3">
        <div class="row title">
            <div class="col-1-of-2">
                <h2 class="title_name">Kết quả tìm kiếm</h2>
            </div>
            <div class="col-1-of-2">
                <h2 class="title_number"></h2>
            </div>
        </div>
        <div class="main">
            <div class="job_all">
                @foreach ($search as $key => $tk)
                    <div class="job job--new ">
                        <div class="col-1-of-4">
                            <img src="{{asset('fontend/img/company'.'/'.$tk->Hinhanh)}}" class="logo-company" alt="logo-company"/>
                        </div>
                        <div class="col-2-of-4 job_info job_info--new">
                            <p class="job_info job_info--name_job--new">
                                <a href="info-job.html" class="job_info--a"> {{$tk->Nganhnghe}} </a>
                            </p>
                            <p class="job_info job_info--name_company--new">
                                {{$tk->Tencongty}}
                            </p>
                            <p class="job_info job_info--salary_new">
                                $ Lương: {{$tk->Luong}}
                            </p>
                            <p class="job_info job_info--address_new">
                                Địa chỉ: {{$tk->Diachi}}
                            </p>
                            <p class="job_info job_info--rights_new">
                                Quyền Lợi: {{$tk->Quyenloi}}
                            </p>
                        </div>
                        <div class="col-1-of-4 job_footer">
                            <button type="submit" class="btnSaveJob--1" name="btnSaveJob" id="btnSaveJob"><i class="fa fa-heart"> Lưu Việc làm</i></button>
                            <i class="fa fa-calendar datetime--1"> {{$tk->Ngaycapnhat}}</i>
                        </div>
                    </div>
                @endforeach
                
                
            </div>
            
        </div>
    </div>
</div>
@endsection