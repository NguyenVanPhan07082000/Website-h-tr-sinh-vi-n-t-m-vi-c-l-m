@extends('welcome')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fontend/css/job.css') }}" />
@endsection
@section('content')
    <img src="{{ asset('public/fontend/img/chamngon.jpg') }}" class="img_chamngon" alt="chamngon" />
    <div class="page_job row">
        <div class="col-2-of-3">
            <div class="row title">
                <div class="col-1-of-2">
                    <h2 class="title_name">Tất cả việc làm</h2>
                </div>
                <div class="col-1-of-2">
                    @foreach ($countalljob as $key => $count)
                        <h2 class="title_number">{{ $count->tongso }} việc làm</h2>
                    @endforeach
                </div>
            </div>
            <div class="main">
                <div class="job_all">
                    @foreach ($newjob as $key => $nj)
                        <div class="job job--new ">
                            <div class="col-1-of-4">
                                <img src="{{ asset('public/fontend/img/company' . '/' . $nj->Hinhanh) }}" class="logo-company"
                                    alt="logo-company" />
                            </div>
                            <div class="col-2-of-4 job_info job_info--new">
                                <p class="job_info job_info--name_job--new">
                                    <a href="{{ URL::to('/info-job' . '/' . $nj->idJob) }}" class="job_info--a">
                                        {{ $nj->Nganhnghe }} </a>
                                </p>
                                <p class="job_info job_info--name_company--new">
                                    {{ $nj->Tencongty }}
                                </p>
                                <p class="job_info job_info--salary_new">
                                    $ Lương: {{ $nj->Luong }}
                                </p>
                                <p class="job_info job_info--address_new">
                                    Địa chỉ: {{ $nj->Diachi }}
                                </p>
                                <p class="job_info job_info--rights_new">
                                    Quyền Lợi: {{ $nj->Quyenloi }}
                                </p>
                            </div>
                            <div class="col-1-of-4 job_footer">
                                <a href="{{ URL::to('/like-job' . '/' . $nj->idJob) }}" class="btnSaveJob--1"
                                    name="btnSaveJob" id="btnSaveJob"><i class="fa fa-heart"> Lưu Việc làm</i></a>
                                <i class="fa fa-calendar datetime--1"> {{ $nj->Ngaycapnhat }}</i>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </div>
        <div class="col-1-of-3">
            <div class="row">
                <h2 class="info_job--details_title--1 h2">Việc làm nổi bậc</h2>
                @foreach ($jobnoibac as $key => $jb)
                    <div class="job job--1">
                        <div class="col-1-of-4">
                            <img src="{{ asset('public/fontend/img/company' . '/' . $jb->Hinhanh) }}"
                                class="logo-company_new--1" alt="logo-company" />
                        </div>
                        <div class="col-3-of-4 job_info--1 job_info--1_new">
                            <p class="job_info--name_job--new_2">
                                <a href="{{ URL::to('/info-job' . '/' . $jb->idJob) }}" class="job_info--a">
                                    {{ $jb->Nganhnghe }} </a>
                            </p>
                            <p class="job_info--name_company--new_2">
                                {{ $jb->Tencongty }}
                            </p>
                            <p class="job_info--salary_new--1">
                                $ Lương: {{ $jb->Luong }}
                            </p>
                            <p class="job_info--address_new--1">
                                Địa chỉ: {{ $jb->Diachi }}
                            </p>
                            <p class="job_info--rights_new--1">
                                Quyền Lợi: {{ $jb->Quyenloi }}
                            </p>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    </div>
@endsection
