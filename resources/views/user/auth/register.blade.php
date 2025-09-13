<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="{{ asset('includes/css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body data-aos="zoom-in-up">
    <div class="container">
        <div class="container-register" data-aos="flip-left">
            <div class="form-register">
                <h1>สมัครสมาชิก</h1>
                <form action="">
                    @csrf
                    <label for="username" id="username">ชื่อผู้ใช้งาน</label>
                    <input type="text" name="username" id="username" class="register-input">

                    <label for="password" id="password">รหัสผ่าน</label>
                    <input type="password" name="password"  class="register-input">

                    <label for="confirmPassword" id="password">ยืนยันรหัสผ่าน</label>
                    <input type="password" name="confirmPassword" " class="register-input">

                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="register-input">

                    <div class="buttom-rgister">
                        <a href="{{ route('formLogin') }}">เข้าสู่ระบบ</a>
                        <input type="submit" value="สมัครสมาชิก"></input>
                    </div>
                </form>


            </div>
            <img src="{{ asset('includes//image/food-register.jpg') }}" alt="image-register" width="730px"
                height="730px" class="image-register">
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>