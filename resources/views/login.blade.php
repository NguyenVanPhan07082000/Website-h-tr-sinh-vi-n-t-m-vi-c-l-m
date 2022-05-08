<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('public/fontend/css/login.css')}}">
    <script>
        function chooseFile(fileInput) {
            if (fileInput.files && fileInput.files[0]){
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image').attr('src', e.target.result);
                }
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    </script>
</head>
<body>
    <div class="container">
            <div class="blueBg">
                <div class="box signin">
                    <h2>Already Have an Account ?</h2>
                    <button class="signinBtn">Sign In</button>
                </div>
                <div class="box signup">
                    <h2>Don't Have an Account ?</h2>
                    <button class="signupBtn">Sign Up</button>
                </div>
            </div>
            <div class="formBx">
                <div class="formdata signinForm">
                    <form action="{{URL::to('/login-success')}}" class="form" method="POST" >
                        {{ csrf_field() }}
                        <h3 class="header-sign">Sign In</h3>
                        <?php
                            $messenger = session()->get('fail');
                            if($messenger)
                            {
                                echo '<script> alert("'.$messenger.'"); </script>';
                                session()->put('fail', null);
                            }
                        ?>
                        <input type="text" placeholder="Username" name="loginUser" id="loginUser" required>
                        <input type="password" placeholder="Password" name="loginPwd" id="loginPwd" required>
                        <input type="submit" value="Login" class="button">
                        <a href="#" class="forgot button">Forgot Password</a>
                    </form>
                </div>
                <div class="formdata signupForm">
                    <?php
                    $messenger = Session()->get('messenger');
                    if($messenger)
                    {
                        echo '<script> alert("'.$messenger.'"); </script>';
                        session()->put('messenger', null);
                    }
                ?>
                    <form action="{{URL::to('/save-account')}}" class="form" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <h3 class="header-sign">Sign Up</h3>
                        <input type="text" name="txtName" placeholder="Full Name">
                        <input type="text" name="txtUser" placeholder="User name">
                        <input type="password" name="txtPass" placeholder="Password">
                        <input type="password" name="txtNhaplai" placeholder="Confirm Password">
                        <input type="file" name="hinhanh" id=imageFile onchange="chooseFile(this)" accept="image/png, image/jpeg">
                        <select name="permission" class="select-permission">
                            <option value='0'>Ứng viên</option>
                            <option value='1'>Nhà tuyển dụng</option>
                        </select>
                        <input type="submit" value="Register">
                    </form>
                </div>
            </div>
    </div>
    <script>
        const signinBtn = document.querySelector('.signinBtn');
        const signupBtn = document.querySelector('.signupBtn');
        const formBx = document.querySelector('.formBx');
        const body = document.querySelector('body');
        signupBtn.onclick = function() {
            formBx.classList.add('active')
            body.classList.add('active')
        }
        signinBtn.onclick = function() {
            formBx.classList.remove('active')
            body.classList.remove('active')
        }
        
    </script>
</body>
</html>