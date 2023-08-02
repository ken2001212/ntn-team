<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NTN l TEAM</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet" />
    <!-- Favicon -->
    <link href="images/favicon.ico" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{URL::asset('/manage/css/style.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('/manage/css/muti.css')}}" />

    <!-- Scripts -->

</head>

<body>

    <div class="container">

        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="{{URL::asset('/manage/images/logo.png')}}" />
                    <h2><span class="danger">NTN </span> TEAM</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp"> close </span>
                </div>
            </div>

            <div class="sidebar active">
                <a href="{{url('/home')}}">
                    <span class="material-icons-sharp"> dashboard </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="{{url('/newuser')}}">
                    <span class="material-icons-sharp"> person_outline </span>
                    <h3>เพิ่มบัญชีผู้ใช้</h3>
                </a>

                <a href="{{url('/sickleave')}}">
                    <span class="material-icons-sharp"> inventory </span>
                    <h3>ลางาน</h3>
                </a>

                <a href="{{url('/edituser')}}">
                    <span class="material-icons-sharp"> settings </span>
                    <h3>เเก้ไขโปรไฟล์</h3>
                </a>
                <!-- <a href="#">
            <span class="material-icons-sharp"> add </span>
            <h3>New Login</h3>
          </a> -->
                <a href="{{url('/show')}}">
                    <span class="material-icons-sharp"> phonelink </span>
                    <h3>เเสดงโปรไฟล์ในระบบ</h3>
                </a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                    <span class="material-icons-sharp"> logout </span>
                    <h3>Logout</h3>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </aside>
        <!-- End of Sidebar Section -->
        @yield('content')

        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp"> menu </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active"> light_mode </span>
                    <span class="material-icons-sharp"> dark_mode </span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>ยินดีต้อนรับคุณ, <b>Administer</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="{{URL::asset('/manage/images/profile-1.jpg')}}" />
                    </div>
                </div>
            </div>
            <!-- End of Nav -->

            <div class="user-profile">
                <div class="logo">
                    <img src="{{URL::asset('/manage/images/logo.png')}}" />
                    <h2>NTN TEAM</h2>
                    <p>Web Manager</p>
                </div>
            </div>

            <div class="reminders">
                <div class="header">
                    <h2>Reminders</h2>
                    <span class="material-icons-sharp"> notifications_none </span>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp"> volume_up </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>เวลาเข้างาน</h3>
                            <small class="text_muted"> 08:30 AM - 17:15 PM </small>
                        </div>
                        <span class="material-icons-sharp"> more_vert </span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp"> edit </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>ประชุมงาน</h3>
                            <small class="text_muted"> ทุกวันพุทธของทุกอาทิตย์ </small>
                        </div>
                        <span class="material-icons-sharp"> more_vert </span>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp"> add </span>
                        <h3>Add Reminder</h3>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script src="{{URL::asset('/manage/js/orders.js')}}"></script>
    <script src="{{URL::asset('/manage/js/index.js')}}"></script>
</body>

</html>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous">
</script>