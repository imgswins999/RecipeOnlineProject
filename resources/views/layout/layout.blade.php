<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('includes/css/pageStyle.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

<body>

    <!-- แถบแมนูสำหรับผู้ใช้งานสมาชิก -->
    @if (!empty($userStatus) && $userStatus == true)

        <nav data-aos="fade-down">
            <!-- แถบเมนูต่างๆ -->
            <ul tab-link>
                <li><a href="{{ route('home') }}">หน้าแรก</a></li>
                <li>สูตรอาหาร</li>
                <li>เมนูยอดนิยม</li>
            </ul>

            <!-- โลโก้ -->
            <ul class="logo-link">
                <a href="#" onclick="location.reload();">
                    <img src="{{ asset('includes/image/logo.png') }}" alt="logo-link" width="200px">
                </a>
            </ul>


            <!-- จัดการข้อมูลผู้ใช้งานต่างๆ -->
            <ul>
                <!-- ค้นหา -->
                <a href="">
                    <img src="{{ asset('includes/image/search.png') }}" alt="NotificationIMAGE" width="40px">
                </a>

                <!-- แจ้งเตือน -->
                <a href="">
                    <img src="{{ asset('includes/image/notification.png') }}" alt="NotificationIMAGE" width="40px">
                </a>

                <!-- เขียน -->
                <a href="{{ route('createRecipe') }}">
                    <img src="{{ asset('includes/image/writing.png') }}" alt="NotificationIMAGE" width="40px">
                </a>

                <!-- ผู้ใช้งาน -->
                <a href="">
                    <img src="{{ asset('includes/image/user.png') }}" alt="NotificationIMAGE" width="40px">
                </a>
                <!-- ออกจากระบบ -->
                <form action="{{route('logout')  }}" method="post">
                     @csrf
                    <button type="submit">
                        <img src="{{ asset('includes/image/logout.png') }}" alt="NotificationIMAGE" width="40px">
                    </button>
                </form>




            </ul>

        </nav>

    @endif


    <!-- แถบเมนูสำหรับผู้เข้าชม -->
    @if ($userStatus == false)
        <nav data-aos="fade-down">

            <!-- แถบเมนูต่างๆ -->
            <ul tab-link>
                <li>หน้าแรก</li>
                <li>สูตรอาหาร</li>
                <li>เมนูยอดนิยม</li>
            </ul>

            <!-- โลโก้ -->
            <ul class="logo-link">
                <a href="#" onclick="location.reload();">
                    <img src="{{ asset('includes/image/logo.png') }}" alt="logo-link" width="200px">
                </a>
            </ul>

            <!-- แถบสมัครสมาชิกและเข้าสู่ระบบ -->
            <ul class="login-link">
                <li><a href="{{ route('formLogin') }}">เข้าสู่ระบบ</a></li>
                <p>/</p>
                <li><a href="{{ route('formRegister') }}">สมัครสมาชิก</a></li>
            </ul>

        </nav>
    @endif

    <!-- ข้อมูลต่างๆ -->
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- script สำหรับการเคลื่อนไหว -->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>