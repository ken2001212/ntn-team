<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet" />
    <!-- Favicon -->
    <link href="images/favicon.ico" rel="icon">
    <link rel="stylesheet" href="{{URL::asset('/manage/css/login.css')}}">

    <title>Manager | NTNTEAM</title>
</head>

<body>
    <script src="https://kit.fontawesome.com/ab00d86059.js" crossorigin="anonymous"></script>
    <img class="wave"
        src="https://raw.githubusercontent.com/Jhonierpc/WebDevelopment/master/Login%20Responsive/img/wave.png"
        alt="" />
    <div class="container">
        <div class="img">
            <img src="{{URL::asset('/manage/images/loginlogo.png')}}">

        </div>
        <div class="login-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <img class="avatar" src="images/logo.png" alt="" />
                <div stlye=""></div>
                <h2>Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Username</h5>
                        <input class="input @error('firstName_eng') is-invalid @enderror" name="firstName_eng"
                            type="text" />

                    </div>

                </div>
                @error('firstName_eng')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input class="input  @error('password') is-invalid @enderror" type="password" name="password" />

                    </div>

                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <a href="#">Forgot Pasword</a>
                <input class="btn" type="submit" value="Login" />
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{URL::asset('/manage/js/main.js')}}"></script>

</body>

</html>