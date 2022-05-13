@extends('welcome')
@section('css')
    <link rel="stylesheet" href="{{ asset('public/fontend/css/cv-1.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fontend/css/job.css') }}" />
@endsection
@section('content')
    @foreach ($myCV as $key => $cv)
        <img src="{{ asset('public/fontend/img/chamngon.jpg') }}" class="img_chamngon" alt="chamngon" />
        <p
            style="color: black; font-size: 50px; font-weight: bold; text-align: center; background-color: aqua; margin-top: -10px">
            CV của {{ $cv->Hoten }}</p>
        <div class="resume-wrapper">
            <section class="profile section-padding">
                <div class="container">
                    <div class="picture-resume-wrapper">
                        <div class="picture-resume">
                            <span><img src="{{ asset('public/fontend/img/cv' . '/' . $cv->Hinhanh) }}" alt="" /></span>
                            <svg version="1.1" viewBox="0 0 350 350">

                                <defs>
                                    <filter id="goo">
                                        <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
                                        <feColorMatrix in="blur" mode="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -9" result="cm" />
                                    </filter>
                                </defs>
                                <g filter="url(#goo)">
                                    <circle id="main_circle" class="st0" cx="171.5" cy="175.6" r="130" />
                                    <circle id="circle" class="bubble0 st1" cx="171.5" cy="175.6" r="122.7" />
                                    <circle id="circle" class="bubble1 st1" cx="171.5" cy="175.6" r="122.7" />
                                    <circle id="circle" class="bubble2 st1" cx="171.5" cy="175.6" r="122.7" />
                                    <circle id="circle" class="bubble3 st1" cx="171.5" cy="175.6" r="122.7" />
                                    <circle id="circle" class="bubble4 st1" cx="171.5" cy="175.6" r="122.7" />
                                    <circle id="circle" class="bubble5 st1" cx="171.5" cy="175.6" r="122.7" />
                                    <circle id="circle" class="bubble6 st1" cx="171.5" cy="175.6" r="122.7" />
                                    <circle id="circle" class="bubble7 st1" cx="171.5" cy="175.6" r="122.7" />
                                    <circle id="circle" class="bubble8 st1" cx="171.5" cy="175.6" r="122.7" />
                                    <circle id="circle" class="bubble9 st1" cx="171.5" cy="175.6" r="122.7" />
                                    <circle id="circle" class="bubble10 st1" cx="171.5" cy="175.6" r="122.7" />
                                </g>
                            </svg>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="name-wrapper">
                        <h1 class="title-name">{{ $cv->Hoten }}</h1>
                        <h3>{{ $cv->Nganhnghe }}</h3><!-- YOUR NAME AND LAST NAME  -->
                    </div>
                    <div class="clearfix"></div>
                    <div class="contact-info clearfix">
                        <ul class="list-titles">
                            <li>Ngày sinh</li>
                            <li>Giới tính</li>
                            <li>Số điện thoại</li>
                            <li>Email</li>
                            <li>Địa chỉ</li>
                            <li>Tài khoản MXH</li>
                        </ul>
                        <ul class="list-content ">
                            <li>{{ $cv->Ngaysinh }}</li> <!-- YOUR PHONE NUMBER  -->
                            <li>{{ $cv->Gioitinh }}</li> <!-- YOUR EMAIL -->
                            <li>{{ $cv->SDT }}</li> <!-- YOUR STATE AND COUNTRY  -->
                            <li>{{ $cv->Email }}</li>
                            <li>{{ $cv->Diachi }}</li>
                            <li><a href="{{ URL::to($cv->LinkTKMXH) }}">{{ $cv->TKMXH }}</a></li>
                            <!-- YOUR WEBSITE  -->
                        </ul>
                    </div>
                    <div class="contact-presentation">
                        <h2>MỤC TIÊU</h2>
                        <p>{{ $cv->Muctieu }}</p>
                    </div>
    @endforeach
    <div class="detail-section edu">
        <div class="detail-title intro-section">
            <div class="title-icon">
                <i class="fas fa-user-graduate"></i>
            </div>
            <span class="title">TRÌNH ĐỘ HỌC VẤN</span>
        </div>
        <div class="detail-content">
            @foreach ($education as $key => $edu)
                <div class="timeline-block">
                    <h2>{{ $edu->tenTruong }}</h2>
                    <time>{{ $edu->ngayBatDau }} - {{ $edu->ngayKetthuc }}/ Xếp loại: {{ $edu->xepLoai }}/
                        ĐTB:
                        {{ $edu->diemTB }}</time>
                    <p>{{ $edu->moTa }}</p>

                </div>
            @endforeach
        </div>
    </div>
    </div>
    </section>

    <section class="experience section-padding">
        <div class="container">
            <h3 class="experience-title">Kinh nghiệm</h3>
            @foreach ($kinhNghiem as $key => $kn)
                <div class="experience-wrapper">
                    <div class="company-wrapper clearfix">
                        <div class="experience-title">{{ $kn->tenCTY }}</div> <!-- NAME OF THE COMPANY YOUWORK WITH  -->
                        <div class="time">{{ $kn->tuNgay }} - {{ $kn->denNgay }}</div>
                        <!-- THE TIME YOU WORK WITH THE COMPANY  -->
                    </div>

                    <div class="job-wrapper clearfix">
                        <div class="company-description">
                            <p>{{ $kn->moTa }}</p> <!-- JOB DESCRIPTION  -->
                        </div>
                    </div>
                </div>
            @endforeach
            <!--Skill experience-->

            <div class="section-wrapper clearfix" style="text-align: left">
                <h3 class="section-title">Kỹ Năng</h3> <!-- YOUR SET OF SKILLS  -->
                <div class="detail-content" style="padding: 1.5rem; padding-left: 2rem; user-select: none;">
                    <ul class="pg-list" style="padding: 0;list-style: none;">
                        @foreach ($kyNang as $key => $skill)
                            <li style="margin: 1rem 0;display: flex; align-items: center;">
                                <span>{{ $skill->tenKyNang }}</span>
                                <div class="sb-skeleton"
                                    style="position: relative;flex: 1 0 auto;height: 2px;background-color: var(--color-gray-dark-3);">
                                    <div class="skillbar"
                                        style="--pgbar-length: <?php echo $skill->mucDo; ?>%; position: absolute;left: 0;top: -1px;width: var(--pgbar-length);height: 4px;background-color: var(--profile-theme);">
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="section-wrapper clearfix">
                <h3 class="section-title">Sở thích</h3> <!-- DESCRIPTION OF YOUR HOBBIES -->
                @foreach ($soThich as $key => $like)
                    <p>{{ $like->tenSoThich }}</p>
                @endforeach
            </div>

            <?php if ($hoatDong) {
                echo '<div class="section-wrapper clearfix intro-section"><div class="title-icon"></div><h3 class="section-title">Hoạt động</h3>';
                foreach ($hoatDong as $key => $hd) {
                    echo '<p>' . $hd->hoatDong . '</p>';
                }
                echo '</div>';
            } ?>
            <?php if ($thanhTich) {
                echo '<div class="section-wrapper clearfix intro-section"><div class="title-icon"></div><h3 class="section-title">Thành tích</h3>';
                foreach ($thanhTich as $key => $tt) {
                    echo '<p>' . $tt->thanhTich . '</p>';
                }
                echo '</div>';
            } ?>
        </div>
    </section>

    <div class="clearfix"></div>
@endsection
