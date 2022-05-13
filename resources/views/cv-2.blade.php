@extends('welcome')
@section('css')
    <link rel="stylesheet" href="{{ asset('public/fontend/css/cv-2.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fontend/css/job.css') }}" />
@endsection
@section('content')
    @foreach ($myCV as $key => $cv)
        <img src="{{ asset('public/fontend/img/chamngon.jpg') }}" class="img_chamngon" alt="chamngon" />
        <p
            style="color: black;font-family: cursive; font-size: 50px; font-weight: bold; text-align: center; background-color: aqua; margin-top: -10px">
            CV CỦA {{ $cv->Hoten }}</p>
        <div class="wrapper">
            <div class="intro">
                <div class="profile">
                    <div class="photo">
                        <img src="{{ asset('public/fontend/img/cv' . '/' . $cv->Hinhanh) }}">
                    </div>
                    <div class="bio">
                        <h1 class="name">{{ $cv->Hoten }}</h1>
                        <p class="profession">{{ $cv->Nganhnghe }}</p>
                    </div>
                </div>
                <div class="intro-section about">
                    <h1 class="title">MỤC TIÊU</h1>
                    <p class="paragraph">
                        {{ $cv->Muctieu }}
                    </p>
                </div>
                <div class="intro-section contact">
                    <h1 class="title">THÔNG TIN LIÊN LẠC</h1>
                    <div class="info-section">
                        <i class="fas fa-birthday-cake"></i>
                        <span>{{ $cv->Ngaysinh }}</span>
                    </div>
                    <div class="info-section">
                        <i class="fas fa-transgender"></i>
                        <span>{{ $cv->Gioitinh }}</span>
                    </div>
                    <div class="info-section">
                        <i class="fas fa-phone"></i>
                        <span>{{ $cv->SDT }}</span>
                    </div>
                    <div class="info-section">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>{{ $cv->Diachi }}</span>
                    </div>
                    <div class="info-section">
                        <i class="fas fa-paper-plane"></i>
                        <span>{{ $cv->Email }}</span>
                    </div>
                    <div class="info-section link">
                        <i class="fab fa-facebook"></i>
                        <a target="_blank" rel="author" href="{{ URL::to($cv->LinkTKMXH) }}">
                            <span>{{ $cv->TKMXH }}</span>
                        </a>
                    </div>
                </div>
            </div>
    @endforeach
    <div class="detail">
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
                        <h1>{{ $edu->tenTruong }}</h1>
                        <time>{{ $edu->ngayBatDau }} - {{ $edu->ngayKetthuc }}/ Xếp loại: {{ $edu->xepLoai }}/
                            ĐTB:{{ $edu->diemTB }}</time>
                        <p>{{ $edu->moTa }}</p>

                    </div>
                @endforeach
            </div>
        </div>
        <div class="detail-section edu">
            <div class="detail-title intro-section">
                <div class="title-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <span class="title">KINH NGHIỆM LÀM VIỆC</span>
            </div>
            <div class="detail-content">
                @foreach ($kinhNghiem as $key => $kn)
                    <div class="timeline-block">
                        <h1>{{ $kn->tenCTY }}</h1>
                        <time>{{ $kn->tuNgay }} - {{ $kn->denNgay }}</time>
                        <p>{{ $kn->moTa }}</p>

                    </div>
                @endforeach
            </div>
        </div>
        <div class="detail-section pg-skill">
            <div class="detail-title intro-section">
                <div class="title-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <span class="title">KỸ NĂNG</span>
            </div>
            <div class="detail-content">
                <ul class="pg-list">
                    @foreach ($kyNang as $key => $skill)
                        <li>
                            <span>{{ $skill->tenKyNang }}</span>
                            <div class="sb-skeleton">
                                <div class="skillbar" style="--pgbar-length: <?php echo $skill->mucDo; ?>%"></div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <?php if ($hoatDong) {
            echo '<div class="section-wrapper clearfix intro-section"><div class="title-icon"><i class="fab fa-galactic-republic"></i></div><span class="title">Hoạt động</span>';
            foreach ($hoatDong as $key => $hd) {
                echo '<p>' . $hd->hoatDong . '</p>';
            }
            echo '</div>';
        } ?>
        <?php if ($thanhTich) {
            echo '<div class="section-wrapper clearfix intro-section"><div class="title-icon"><i class="fas fa-award"></i></div><span class="title">THÀNH TÍCH</span>';
            foreach ($thanhTich as $key => $tt) {
                echo '<p>' . $tt->thanhTich . '</p>';
            }
            echo '</div>';
        } ?>
        <div class="detail-section interests">
            <div class="detail-title intro-section">
                <div class="title-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <span class="title">Sở thích</span>
            </div>
            <div class="detail-content">
                <div class="outer-frame">
                    <ul class="favor-list">
                        @foreach ($soThich as $key => $like)
                            <li>
                                <span>{{ $like->tenSoThich }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
