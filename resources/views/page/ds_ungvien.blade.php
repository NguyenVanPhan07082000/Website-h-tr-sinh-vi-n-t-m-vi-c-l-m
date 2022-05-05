@extends('welcome')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('public/fontend/css/job.css')}}"/>
@endsection
@section('content')
<img src="{{asset('public/fontend/img/chamngon.jpg')}}" class="img_chamngon" alt="chamngon"/>
<div class="page_job row">
    <div class="col-2-of-3">
        <div class="row title">
            <div class="col-1-of-2">
                <h2 class="title_name">Danh sách ứng viên</h2>
            </div>
            <div class="col-1-of-2">
                <h2 class="title_number">x ứng viên</h2>
            </div>
        </div>
        <div class="main">
            <div class="job_all">
                @foreach ($timuv as $key => $uv)
                    <div class="job job--new ">
                        <div class="col-1-of-4">
                            <img src="{{asset('public/fontend/img/avatar'.'/'.$uv->Hinhanh)}}" class="logo-company" alt="logo-company"/>
                        </div>
                        <div class="col-2-of-4 job_info job_info--new">
                            <p class="job_info job_info--name_job--new">
                                <a href="{{URL::to('/profile'.'/'.$uv->idUser)}}" class="job_info--a"> {{$uv->Hoten}}</a>
                            </p>
                            <p class="job_info job_info--address_new">
                                Ngày Sinh: {{$uv->Ngaysinh}}
                            </p>
                            <p class="job_info job_info--salary_new">
                                Số Điện Thoại: {{$uv->SDT}}
                            </p>
                            <p class="job_info job_info--name_company--new">
                                {{$uv->Chuyennganh}}
                            </p>
                            <p class="job_info job_info--rights_new">
                                Giới Thiệu: {{$uv->Gioithieu}}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
            
        </div>
    </div>
</div>
@endsection