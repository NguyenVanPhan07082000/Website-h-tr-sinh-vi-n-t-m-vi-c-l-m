<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="http://code.jquery.com/jquery-3.4.1.min.js"></script>		
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="{{asset('fontend/css/register.css')}}">
        <title>Register</title>
    </head>
    <body>
        <h2>Register</h2>
            <div class="container">
                <?php
                    $messenger = Session()->get('messenger');
                    if($messenger)
                    {
                        echo '<script> alert("'.$messenger.'"); </script>';
                        session()->put('messenger', null);
                    }
                ?>
                <form action="/save-account" class="form" method="POST">
                    {{ csrf_field() }}
                    <div class="form-register">
                        <input type="text" name="txtUser" placeholder="User Name" />
                    </div>
                    <div class="form-register">
                        <input type="email" name="txtEmail" placeholder="Email" />
                    </div>
                    <div class="form-register">
                        <input type="password" name="txtPass" placeholder="Password" />
                    </div>
                    <div class="form-register">
                        <input type="password" name="txtNhaplai" placeholder="Re-enter Password" />
                    </div>
                    <div>
                        <a href="{{URL::to('/login')}}" class="btn">Thoát</a>
                        <button>Đăng Ký</button>
                    </div>                           
                </form>
            </div>
        </div>
    </body>
</html>