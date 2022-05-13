@extends('welcome')
@section('css')
    <link rel="stylesheet" href="{{ asset('public/fontend/css/cv-5.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fontend/css/job.css') }}" />
@endsection
@section('content')
    @foreach ($myCV as $key => $cv)
        <img src="{{ asset('public/fontend/img/chamngon.jpg') }}" class="img_chamngon" alt="chamngon" />
        <p
            style="color: black;font-family: cursive; font-size: 50px; font-weight: bold; text-align: center; background-color: aqua; margin-top: -10px">
            CV {{ $cv->Hoten }}</p>

        <div class="contOut clearfix">
            <div class="contIn">
                <div class="section top clearfix">
                    <div class="logoCont"><img class="logo"
                            src="{{ asset('public/fontend/img/cv' . '/' . $cv->Hinhanh) }}" /></div>
                    <h1>{{ $cv->Hoten }}</h1>
                    <div class="moreInfo">
                        <p>{{ $cv->Ngaysinh }}&ensp;<i class="fas fa-birthday-cake"></i><br />{{ $cv->Gioitinh }}&ensp;<i
                                class="fas fa-transgender"></i><br />{{ $cv->SDT }}&ensp;<i
                                class="fas fa-phone"></i><br />{{ $cv->Diachi }}&ensp;<i
                                class="fas fa-map-marker-alt"></i><br />{{ $cv->Email }}&ensp;<i
                                class="fas fa-paper-plane"></i><br /><a href="{{ URL::to($cv->LinkTKMXH) }}"
                                target="_blank">{{ $cv->TKMXH }}&ensp;<i class="fab fa-facebook"></i></a></p>
                    </div>
                    <p class="tagline">{{ $cv->Nganhnghe }}</p>
                </div>
                <div class="divider"></div>
            </div>
        </div>
        <div class="contOut clearfix">
            <div class="contIn">
                <div class="section middle clearfix">
                    <div class="job">
                        <h2>MỤC TIÊU<i class="fa fa-minus openBtn open"></i></h2>
                        <p>{{ $cv->Muctieu }}</p>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    @endforeach
    <div class="contOut clearfix">
        <div class="contIn">
            <div class="section middle clearfix">
                <div class="job">
                    <h2>TRÌNH ĐỘ HỌC VẤN<i class="fa fa-plus openBtn"></i></h2>
                    @foreach ($education as $key => $edu)
                        <div>
                            <h3>{{ $edu->tenTruong }}</h3>
                            <p>{{ $edu->ngayBatDau }} - {{ $edu->ngayKetthuc }}/ Xếp loại: {{ $edu->xepLoai }}/
                                ĐTB:{{ $edu->diemTB }}<br /><span class="brag">{{ $edu->moTa }}</span></p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="divider"></div>
        </div>
    </div>
    <div class="contOut clearfix">
        <div class="contIn">
            <div class="section middle clearfix">
                <div class="job">
                    <h2>KINH NGHIỆM<i class="fa fa-plus openBtn"></i></h2>
                    @foreach ($kinhNghiem as $key => $kn)
                        <div>
                            <h3>{{ $kn->tenCTY }}</h3>
                            <p>{{ $kn->tuNgay }} - {{ $kn->denNgay }}<br /><span
                                    class="brag">{{ $kn->moTa }}</span></p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="divider"></div>
        </div>
    </div>
    <?php if ($thanhTich) {
        echo '<div class="contOut clearfix"><div class="contIn"><div class="section middle clearfix"><div class="job"><h2>THÀNH TÍCH<i class="fa fa-plus openBtn"></i></h2>';
        foreach ($thanhTich as $key => $tt) {
            echo '<p><span class="brag">' . $tt->thanhTich . '</span></p>';
        }
        echo '</div></div><div class="divider"></div></div></div>';
    } ?>
    <?php if ($hoatDong) {
        echo '<div class="contOut clearfix"><div class="contIn"><div class="section middle clearfix"><div class="job"><h2>HOẠT ĐỘNG<i class="fa fa-plus openBtn"></i></h2>';
        foreach ($hoatDong as $key => $hd) {
            echo '<p><span class="brag">' . $hd->hoatDong . '</span></p>';
        }
        echo '</div></div><div class="divider"></div></div></div>';
    } ?>
    <div class="contOut clearfix half">
        <div class="contIn">
            <div class="section middle clearfix">
                <div class="skills code odd">
                    <h3 style="color: black">KỸ NĂNG<i class="fa fa-code"></i></h3>
                    <ul>
                        @foreach ($kyNang as $key => $skill)
                            <li class="prim">{{ $skill->tenKyNang }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="skills software">
                    <h3 style="color: black">SỞ THÍCH<i class="fa fa-laptop"></i></h3>
                    <ul>
                        @foreach ($soThich as $key => $like)
                            <li class="prim">{{ $like->tenSoThich }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="divider"></div>
        </div>
    </div>
@endsection
