<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="http://code.jquery.com/jquery-3.4.1.min.js"></script>		
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="{{asset('public/fontend/css/login.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
        <title>Login</title>
    </head>
    <body>
        <div class="login">
            <form action="{{URL::to('/login-success')}}" method="POST" class="form">
                {{ csrf_field() }}
                <img src="https://printgo.vn/uploads/media/788346/tong-hop-30-hinh-anh-logo-doan-thanh-nien-cap-nhap-moi-nhat_1615378602.jpg" alt="img">
                <h2>Sign In</h2>
                <?php
                    $messenger = session()->get('fail');
                    if($messenger)
                    {
                        echo '<script> alert("'.$messenger.'"); </script>';
                        session()->put('fail', null);
                    }
                ?>
                <div class="input-lg">
                    <input type="text" name="loginUser" id="loginUser" required>
                    <label for="loginUser">User Name</label>
                </div>
                <div class="input-lg">
                    <input type="password" name="loginPwd" id="loginPwd" required>
                    <label for="loginPwd">Password</label>
                    <div id="mat" onclick="showPassword()"></div>
                </div>
                <a href="{{URL::to('/trang-chu')}}" class="btn-1">Cancel</a>
                <input type="submit" value="Login" class="btn-new"><br/><br/>
                <div class="query">                                                         
                    <p>Forgot <a href="#forgot-pwd" class="forgot-pwd">Password</a>?</p>                                     
                    <p>Create an <a href="{{URL::to('/create-account')}}" class="register">Account</a>?</p>
                </div>
            </form>       
            <div id="forgot-pwd">
                <form action="" class="form">
                    <a href="#" class="close">&times;</a>
                    <h2>Reset Password</h2>
                    <div class="input-lg">
                        <input type="email" name="email" id="email" required>
                        <label for="email">Enter your Email</label>
                    </div>
                    <input type="submit" value="Submit" class="btn">
                </form>
            </div>
        </div>   
    </body>
    <script>
        const loginPwd = document.getElementById('loginPwd')
        const mat = document.getElementById('mat');      
        function showPassword(){
            if(loginPwd.type === 'password'){
                loginPwd.setAttribute('type','text');
                mat.classList.add('hide');
            }
            else{
                loginPwd.setAttribute('type','password');
                mat.classList.remove('hide');
            }
        }
    </script>
    </html>