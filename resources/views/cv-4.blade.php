@extends('welcome')
@section('css')
    <link rel="stylesheet" href="{{ asset('public/fontend/css/cv-4.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fontend/css/job.css') }}" />
@endsection
@section('content')
    @foreach ($myCV as $key => $cv)
        <img src="{{ asset('public/fontend/img/chamngon.jpg') }}" class="img_chamngon" alt="chamngon" />
        <p
            style="color: black;font-family: cursive; font-size: 50px; font-weight: bold; text-align: center; background-color: aqua; margin-top: -10px">
            CV CỦA TÔI</p>

        <div id="inner-nav"></div>
        <div id="container">
            <div id="profile">
                <div id="image">
                    <img id="profile-photo" src="http://mnnit.ac.in/ss/images/shashank.jpg" alt="Profile-Image">
                    <a href="#"><i class="fas fa-pen stroke-transparent"></i></a>
                </div>
                <p id="name" style="color: black; font-size: 3rem">{{ $cv->Hoten }}</p>
                <hr width="100%">
                <div id="about">
                    <p style="display:inline;">{{ $cv->Nganhnghe }}</p>
                </div>
                <p id="year-graduation"><i class='fa fa-birthday-cake'>&ensp;<strong>{{ $cv->Ngaysinh }}</strong></i></p>
                <p id="education"><i class='fa fa-transgender'>&ensp;&nbsp;<strong>{{ $cv->Gioitinh }}</strong></i></p>
                <p id="more-about"><i class='fa fa-mail-reply'>&ensp;&nbsp;<strong>{{ $cv->Email }}</strong></i></p>
                <p id="telephone"><i class='fa fa-phone'>&ensp;&nbsp;<strong>{{ $cv->SDT }}</strong></i></p>
                <p id="fax"><i class='fa fa-map-marker'>&ensp;&nbsp;<strong>{{ $cv->Diachi }}</strong></i></p>
                <div class="intro-section about">
                    <h1 class="title" style="margin-top: 30px">MỤC TIÊU</h1>
                    <p class="paragraph">
                        {{-- {{ $cv->Muctieu }} --}}{{ $cv->Muctieu }}
                    </p>
                </div>
    @endforeach
    <div class="intro-section about">
        <h1 class="title" style="margin-top: 30px">SỞ THÍCH</h1>
        <p class="paragraph">
            @foreach ($soThich as $key => $like)
                <span>{{ $like->tenSoThich }}</span>
            @endforeach
        </p>
    </div>
    <?php if ($thanhTich) {
        echo '<div class="intro-section about"><h1 class="title" style="margin-top: 30px">THÀNH TÍCH</h1>';
        foreach ($thanhTich as $key => $tt) {
            echo '<p>' . $tt->thanhTich . '</p>';
        }
        echo '</div>';
    } ?>
    </div>
    <div id="info-cards">
        <div class="card">
            <p><i class="fas fa-briefcase stroke-transparent"></i>&nbsp;&nbsp;&nbsp;KINH NGHIỆM</p>
            @foreach ($kinhNghiem as $key => $kn)
                <div>
                    <h1 class="text" style="font-size: 2rem; color: black; font-weight: bold">{{ $kn->tenCTY }}
                    </h1>
                    <p class="text" style="font-size: 1.4rem">{{ $kn->tuNgay }} - {{ $kn->denNgay }}</p>
                    <p class="text" style="font-size: 1.6rem">{{ $kn->moTa }}</p>
                </div>
            @endforeach
        </div>
        <div class="card">
            <p><i class="fa fa-laptop"></i>&nbsp;&nbsp;&nbsp;KỸ NĂNG</p>
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
        <div class="card">
            <p><i class="fas fa-graduation-cap stroke-transparent"></i>&nbsp;&nbsp;&nbsp;TRÌNH ĐỘ</p>
            @foreach ($education as $key => $edu)
                <div>
                    <h1 class="text" style="font-size: 2rem; color: black; font-weight: bold">
                        {{ $edu->tenTruong }}</h1>
                    <p class="text" style="font-size: 1.4rem">{{ $edu->ngayBatDau }} -
                        {{ $edu->ngayKetthuc }}/ Xếp loại: {{ $edu->xepLoai }}/ ĐTB:
                        {{ $edu->diemTB }}</p>
                    <p class="text" style="font-size: 1.6rem">{{ $edu->moTa }}</p>
                </div>
            @endforeach
        </div>
        <?php if ($hoatDong) {
            echo '<div class="card"><p><i class="far fa-calendar-times"></i>&nbsp;&nbsp;&nbsp;HOẠT ĐỘNG</p>';
            foreach ($hoatDong as $key => $hd) {
                echo '<p>' . $hd->hoatDong . '</p>';
            }
            echo '</div>';
        } ?>
    </div>
    </div>
@endsection
