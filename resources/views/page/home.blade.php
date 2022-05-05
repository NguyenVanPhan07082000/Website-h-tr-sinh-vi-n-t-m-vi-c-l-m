@extends('welcome')
@section('header')
<header class="header">
    {{-- <div class="header__logo-box">
        <img src="{{asset('public/fontend/img/logo.png')}}" class="header__logo-box__logo" alt="logo"/>
    </div> --}}
    <div class="header__text-box">
        <h3 class="heading-primary">
            <span class="heading-primary_main">WELCOME TO</span>
            <span class="heading-primary_sub">Blue Star Website</span>
        </h3>
    </div>
    <form class="header__text-box2" action="{{URL::to('/tim-kiem')}}" method="POST">
        {{ csrf_field() }}
            <input type="text" name="chucvu" id="find_name" placeholder="Nhập chức vụ ứng tuyển..." class="header__text-box2__find_name header__text-box2__find_text"/>
            <input type="text" name="diadiem" id="find_type" placeholder="Nhập địa điểm..." class="header__text-box2__find_type header__text-box2__find_text"/>
            <input type="submit" name="submit" class="btn-login btn-white btn-animated" value="Search Now">
    </form>
    {{-- <div class="header__logo-box">
        <img src="{{asset('public/fontend/img/logo.png')}}" class="header__logo-box__logo" alt="logo"/>
    </div> --}}
    {{-- @if(session()->get('name') != null && session()->get('id')!=null)
    
    <div class="header__profile">
        <a href="{{URL::to('/profile')}}" class="btn-name btn-profile"><img src="{{asset('public/fontend/img/avatar/phan.jpg')}}" class="header__profile__avatar" align="middle" alt="avatar" />Phần Nguyễn</a>
        
    </div>
    
    @endif --}}
    {{-- <div class="header__login">
        <a href="#" class="btn-login btn-white">Đăng Ký</a>
        <a href="./project/login/login.html" class="btn-login btn-white">Đăng nhập</a>
    </div> --}}
    <!-- <div class="header__login">
        <a href="#" class="btn-login btn-white">Đăng Ký</a>
        <a href="./project/login/login.html" class="btn-login btn-white">Đăng nhập</a>
    </div> -->
</header>
@endsection
@section("css")
    <link rel="stylesheet" href="{{asset('public/fontend/css/main.css')}}"/>
@endsection
@section('content')
<div class="heading-menu">
    <h2>
        THÔNG TIN TUYỂN DỤNG
    </h2>
</div>
<div>
    <!-- Tab items -->
    <div class="tabs">
      <div class="tab-item active">
        Việc Làm Nổi Bật
      </div>
      <div class="tab-item">
        Việc làm VIP
      </div>
      <div class="tab-item">
        Việc Làm Đã Lưu Gần Đây
      </div>
      <div class="tab-item">
        Việc Làm Đã Ứng Tuyển Gần Đây
      </div>
      <div class="line"></div>
    </div>
  
    <!-- Tab content -->
    <div class="tab-content">
      <div class="tab-pane active">
        <div class="row">
                @foreach ($jobnoibac as $key=>$jobnb)
                    <div class="job job--1">
                        <div class="col-1-of-4">
                            <img src="{{asset('public/fontend/img/company'.'/'.$jobnb->Hinhanh)}}" class="logo-company" alt="logo-company"/>
                        </div>
                        <div class="col-3-of-4 job_info">
                            <p class="job_info--name_job">
                                <a href="{{URL::to('/info-job'.'/'.$jobnb->idJob)}}" class="job_info--a"> {{$jobnb->Nganhnghe}} </a>
                            </p>
                            <p class="job_info--name_company">
                                {{$jobnb->Tencongty}}
                            </p>
                            <p class="job_info--salary">
                                $ Lương: {{$jobnb->Luong}}
                            </p>
                            <p class="job_info--rights">
                                Quyền Lợi: {{$jobnb->Quyenloi}}
                            </p>
                        </div>
                    </div>
                @endforeach
                
        </div>
      </div>
      <div class="tab-pane">
        <div class="row">
            @foreach ($jobvip as $key=>$jobnb)
                <div class="job job--1">
                    <div class="col-1-of-4">
                        <img src="{{asset('public/fontend/img/company'.'/'.$jobnb->Hinhanh)}}" class="logo-company" alt="logo-company"/>
                    </div>
                    <div class="col-3-of-4 job_info">
                        <p class="job_info--name_job">
                            <a href="{{URL::to('/info-job'.'/'.$jobnb->idJob)}}" class="job_info--a"> {{$jobnb->Nganhnghe}} </a>
                        </p>
                        <p class="job_info--name_company">
                            {{$jobnb->Tencongty}}
                        </p>
                        <p class="job_info--salary">
                            $ Lương: {{$jobnb->Luong}}
                        </p>
                        <p class="job_info--rights">
                            Quyền Lợi: {{$jobnb->Quyenloi}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
      <div class="tab-pane">
        <div class="row">
            @foreach ($jobsave as $key=>$jobnb)
                <div class="job job--1">
                    <div class="col-1-of-4">
                        <img src="{{asset('public/fontend/img/company'.'/'.$jobnb->Hinhanh)}}" class="logo-company" alt="logo-company"/>
                    </div>
                    <div class="col-3-of-4 job_info">
                        <p class="job_info--name_job">
                            <a href="{{URL::to('/info-job'.'/'.$jobnb->idJob)}}" class="job_info--a"> {{$jobnb->Nganhnghe}} </a>
                        </p>
                        <p class="job_info--name_company">
                            {{$jobnb->Tencongty}}
                        </p>
                        <p class="job_info--salary">
                            $ Lương: {{$jobnb->Luong}}
                        </p>
                        <p class="job_info--rights">
                            Quyền Lợi: {{$jobnb->Quyenloi}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
      <div class="tab-pane">
        <div class="row">
            @foreach ($jobjoin as $key=>$jobnb)
                <div class="job job--1">
                    <div class="col-1-of-4">
                        <img src="{{asset('public/fontend/img/company'.'/'.$jobnb->Hinhanh)}}" class="logo-company" alt="logo-company"/>
                    </div>
                    <div class="col-3-of-4 job_info">
                        <p class="job_info--name_job">
                            <a href="{{URL::to('/info-job'.'/'.$jobnb->idJob)}}" class="job_info--a"> {{$jobnb->Nganhnghe}} </a>
                        </p>
                        <p class="job_info--name_company">
                            {{$jobnb->Tencongty}}
                        </p>
                        <p class="job_info--salary">
                            $ Lương: {{$jobnb->Luong}}
                        </p>
                        <p class="job_info--rights">
                            Quyền Lợi: {{$jobnb->Quyenloi}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
  </div>
  <script>
            const $ = document.querySelector.bind(document);
            const $$ = document.querySelectorAll.bind(document);

            const tabs = $$(".tab-item");
            const panes = $$(".tab-pane");

            const tabActive = $(".tab-item.active");
            const line = $(".tabs .line");

            line.style.left = tabActive.offsetLeft + "px";
            line.style.width = tabActive.offsetWidth + "px";

            tabs.forEach((tab, index) => {
                const pane = panes[index];

                tab.onclick = function () {
                    $(".tab-item.active").classList.remove("active");
                    $(".tab-pane.active").classList.remove("active");

                line.style.left = this.offsetLeft + "px";
                line.style.width = this.offsetWidth + "px";

                this.classList.add("active");
                pane.classList.add("active");
            };
        });
  </script>
<div class="heading-menu heading-menu--2">
    <h2>
        CÁC NHÀ TUYỂN DỤNG HÀNG ĐẦU
    </h2>
</div>
<div class="company">
<div class="row">
    <div class="col-1-of-3 company_main company_main--1">
        <img src="{{asset('public/fontend/img/slogan_job.png')}}" class="company_main--slogan" alt="slogan"/>
    </div>
    <div class="col-2-of-3 company_main company_main--2">
        @foreach ($company as $key =>$cp)
            <div class="col-1-of-3 card">
                <div class="card_side card_side--font">
                    <img src="{{asset('public/fontend/img/company'.'/'.$cp->Hinhanh)}}" class="company_main--logo_img" alt="logo_img"/>
                </div>
                <div class="card_side card_side--back">
                    <a href="{{URL::to('/profile_td'.'/'.$cp->idCompany)}}" class="info-job_a--card"> Xem Thông Tin </a>
                    <div class="card_side--info">
                        <p class="card_side--info_title">{{$cp->Tencongty}}</p>
                        <p>{{$cp->Diachi}}</p>
                        <p>{{$cp->SDT}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</div>
<div class="email">
    <img src="{{asset('public/fontend/img/job.jpg')}}" class="email_background" alt="email"/>
    <div class="email_background--content">
        <p class="email_background--content_title">
            Đăng Ký Theo Dõi Để Nhận Cập Nhật Về Cơ Hội Việc Làm Mới Và Phù Hợp Nhất
        </p>
        <form>
            <input type="email" class="email_background--content_insert email_background--content_insert--inp" name="email" id="email" placeholder="Nhập email của bạn..."/>
            <input type="submit" class="email_background--content_insert email_background--content_insert--btn" name="btnEmail" id="btnEmail"  value="Đăng Ký"/>
        </form>
        
    </div>
</div>
<div class="camnan">
    <div class="review camnan_content">
        <div class="header-content">
            <h2 class="title-camnan">Cẩm Nang Nghề nghiệp</h2>
            <div class="nav">
                <i class="fas fa-chevron-left btnLeft"></i
                ><i class="fas fa-chevron-right btnRight"></i>
            </div>
        </div>
        <div class="review-box">
          @foreach ($camnan as $key => $cn)
          <div class="box">
            <div class="image">
                <img
                    src="{{asset('public/fontend/img/Camnan'.'/'.$cn->Hinhanh)}}"
                    alt="img"
                    />
            </div>
            <div class="name">{{$cn->Tencamnan}}</div>
            <div class="designation">{{$cn->Tieude}}</div>
            <div class="text">
                {{$cn->Gioithieu}}
            </div>
            </div>
          @endforeach
          <!-- end box -->
        </div>
    </div>
</div>
<script src="{{asset('public/fontend/js/main.js')}}"></script>
@endsection