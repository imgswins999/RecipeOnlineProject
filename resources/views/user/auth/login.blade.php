<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <link rel="stylesheet" href="{{ asset('includes/css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body data-aos="zoom-in-up">
    <div class="container">
        <div class="container-login" data-aos="flip-right">
            <img src="{{ asset('includes/image/food-login.jpg') }}" alt="login-image" width="740px" height="740px" class="image-login">
            <div class="login-form">
                <img src="{{ asset('includes/image/logo.png') }}" alt="logo" width="400px" >
                <h1>เข้าสู่ระบบ</h1>
                <form action="{{ route('login') }}"  method="POST">
                    @csrf
                    @if (session('login'))
                        <p style="color:red">{{session('login')}}</p>
                    @endif
                    <label for="username">ชื่อผู้ใช้งาน</label>
                    <input type="text" name="username" id="username" class="login-input">

                    <label for="password" style="margin-top:20px">รหัสผ่าน</label>
                    <input type="password" name="password" id="password" class="login-input">
                    <div class="button-login">
                        <a href="{{ route('formRegister') }}">สมัครสมาชิก</a>
                        <input type="submit" value="เข้าสู่ระบบ">
                    </div>
                    
                </form>
            </div>
        </div>

    </div>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>