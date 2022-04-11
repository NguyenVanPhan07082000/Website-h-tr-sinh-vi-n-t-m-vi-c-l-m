<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="http://code.jquery.com/jquery-3.4.1.min.js"></script>		
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="{{asset('fontend/css/changepw.css')}}">
        <title>Change Password</title>
    </head>
    <body>
        <div class="changepw">
            <?php
            $messenger = Session()->get('messenger');
            if($messenger)
            {
                echo '<script> alert("'.$messenger.'"); </script>';
                session()->put('messenger', null);
            }
            ?>
            <form action="{{URL::to('/doi-mat-khau/luu-mat-khau')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h1>Change Password</h1>
                <div class="form-change">
                    <i class="fas fa-unlock"></i>
                    <input type="password" name="txtPass" placeholder="Mật Khẩu Mới"required>
                </div>
                <div class="form-change">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="txtNhaplai" placeholder="Nhập Lại Mật Khẩu Mới"required>
                </div>
                <a href="{{URL::to('/trang-chu')}}" class="btn btn-white btn-animated">Thoát</a>
                <input type="submit" name="btnsubmit" class="btn btn-white btn-animated" value="Save"/>
            </form>       
        </div>   
    </body>
    </html>