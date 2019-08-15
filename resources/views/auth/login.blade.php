<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GREENTEA LOGIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Fira+Sans");

        html, body {
            position: relative;
            min-height: 90vh;
            /*background-color: #E1E8EE;*/
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Fira Sans", Helvetica, Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            background: #eee url(http://sdh.gtnlu.site/public/img/sativa.png);
        }

        .form-structor {
            background-color: #222;
            border-radius: 15px;
            height: 650px;
            width: 350px;
            position: relative;
            overflow: hidden;
        }

        .form-structor::after {
            content: '';
            opacity: .8;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-repeat: no-repeat;
            background-position: left bottom;
            background-size: 500px;
            background-image: url("https://images.unsplash.com/photo-1503602642458-232111445657?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bf884ad570b50659c5fa2dc2cfb20ecf&auto=format&fit=crop&w=1000&q=100");
        }

        .form-structor .signup {
            position: absolute;
            top: 40%;
            left: 50%;
            right:50%;
            -webkit-transform: translate(-50%, -50%);
            width: 65%;
            z-index: 5;
            -webkit-transition: all .3s ease;
        }

        .form-structor .signup.slide-up {
            top: 5%;
            -webkit-transform: translate(-50%, 0%);
            -webkit-transition: all .3s ease;
        }

        .form-structor .signup.slide-up .form-holder, .form-structor .signup.slide-up .submit-btn {
            opacity: 0;
            visibility: hidden;
        }

        .form-structor .signup.slide-up .form-title {
            font-size: 1em;
            cursor: pointer;
        }

        .form-structor .signup.slide-up .form-title span {
            margin-right: 5px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all .3s ease;
        }

        .form-structor .signup .form-title {
            color: #fff;
            font-size: 1.7em;
            text-align: center;
        }

        .form-structor .signup .form-title span {
            color: rgba(0, 0, 0, 0.4);
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all .3s ease;
        }

        .form-structor .signup .form-holder {
            border-radius: 15px;
            background-color: #fff;
            border: 1px solid #6b92a4;
            overflow: hidden;
            margin-top: 50px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all .3s ease;
        }

        .form-structor .signup .form-holder .input {
            border: 0;
            outline: none;
            box-shadow: none;
            display: block;
            height: 30px;
            line-height: 30px;
            padding: 8px 15px;
            border-bottom: 1px solid #6b92a4;
            width: 100%;
            font-size: 13px;
            color: #6b92a4;
            box-sizing: content-box !important;
        }

        .form-structor .signup .form-holder .input:last-child {
            border-bottom: 0;
        }

        .form-structor .signup .form-holder .input::-webkit-input-placeholder {
            color: rgba(0, 0, 0, 0.4);
        }

        .form-structor .signup .submit-btn {
            background-color: rgba(0, 0, 0, 0.4);
            color: rgba(255, 255, 255, 0.7);
            border: 0;
            border-radius: 15px;
            display: block;
            margin: 15px auto;
            padding: 15px 45px;
            width: 100%;
            font-size: 13px;
            font-weight: bold;
            cursor: pointer;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all .3s ease;
        }

        .form-structor .signup .submit-btn:hover {
            transition: all .3s ease;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .form-structor .login {
            position: absolute;
            top: 20%;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #fff;
            z-index: 5;
            -webkit-transition: all .3s ease;
        }

        .form-structor .login::before {
            content: '';
            position: absolute;
            left: 50%;
            top: -20px;
            -webkit-transform: translate(-50%, 0);
            background-color: #fff;
            width: 200%;
            height: 250px;
            border-radius: 50%;
            z-index: 4;
            -webkit-transition: all .3s ease;
        }

        .form-structor .login .center {
            position: absolute;
            top: calc(50% - 10%);
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            width: 65%;
            z-index: 5;
            -webkit-transition: all .3s ease;
        }

        .form-structor .login .center .form-title {
            color: #000;
            font-size: 1.7em;
            text-align: center;
        }

        .form-structor .login .center .form-title span {
            color: rgba(0, 0, 0, 0.4);
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all .3s ease;
        }

        .form-structor .login .center .form-holder {
            border-radius: 15px;
            background-color: #fff;
            border: 1px solid #6b92a4;
            overflow: hidden;
            margin-top: 50px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all .3s ease;
        }

        .form-structor .login .center .form-holder .input {
            border: 0;
            outline: none;
            box-shadow: none;
            display: block;
            height: 30px;
            line-height: 30px;
            padding: 8px 15px;
            border-bottom: 1px solid #6b92a4;
            width: 100%;
            font-size: 13px;
            color: #6b92a4;
            box-sizing: content-box !important;
        }

        .form-structor .login .center .form-holder .input:last-child {
            border-bottom: 0;
        }

        .form-structor .login .center .form-holder .input::-webkit-input-placeholder {
            color: rgba(0, 0, 0, 0.4);
        }

        .form-structor .login .center .submit-btn {
            background-color: #6B92A4;
            color: rgba(255, 255, 255, 0.7);
            border: 0;
            border-radius: 15px;
            display: block;
            margin: 15px auto;
            padding: 15px 45px;
            width: 100%;
            font-size: 13px;
            font-weight: bold;
            cursor: pointer;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all .3s ease;
        }

        .form-structor .login .center .submit-btn:hover {
            transition: all .3s ease;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .form-structor .login.slide-up {
            top: 90%;
            -webkit-transition: all .3s ease;
        }

        .form-structor .login.slide-up .center {
            top: 10%;
            -webkit-transform: translate(-50%, 0%);
            -webkit-transition: all .3s ease;
        }

        .form-structor .login.slide-up .form-holder, .form-structor .login.slide-up .submit-btn {
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all .3s ease;
        }

        .form-structor .login.slide-up .form-title {
            font-size: 1em;
            margin: 0;
            padding: 0;
            cursor: pointer;
            -webkit-transition: all .3s ease;
        }

        .form-structor .login.slide-up .form-title span {
            margin-right: 5px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all .3s ease;
        }
    </style>
</head>
<body>
<div class="form-structor">

    <form action="{{route('signup')}}" method="post">
        @csrf
    <div class="signup slide-up">
        <h2 class="form-title" id="signup"><span>or</span>Sign up </h2>
        @if ($errors->signup->any())
            <div class="alert alert-danger">
                @foreach ($errors->signup->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div class="form-holder">
            <input name="name" type="text" class="input" placeholder="Name"/>
            <input name="email" type="email" class="input" placeholder="Email"/>
            <input name="password" type="password" class="input" placeholder="Password"/>
            <input name="password_confirmed" type="password" class="input" placeholder="Re-Password"/>
            <input name="phone" type="text" class="input" placeholder="Phone"/>
            <input name="gender" type="text" class="input" placeholder="Nam/Nữ"/>

        </div>
        <button class="submit-btn">Sign up</button>
    </div>
    </form>
    <div class="login ">
        <div class="center">
            <h2 class="form-title" id="login"><span>or</span>Log in</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                </div>
            @endif
            <form method="post">
                @csrf
                <div class="form-holder">

                    <input type="email" name="email" class="input" value="{{old('email')}}" placeholder="Email"/>
                    <input type="password" name="pass" class="input" placeholder="Password"/>

                </div>
                <button class="submit-btn">Log in</button>
            </form>
        </div>
    </div>
</div>

<script>
    console.clear();

    const loginBtn = document.getElementById('login');
    const signupBtn = document.getElementById('signup');

    loginBtn.addEventListener('click', (e) => {
        let parent = e.target.parentNode.parentNode;
        Array.from(e.target.parentNode.parentNode.classList).find((element) => {
            if (element !== "slide-up") {
                parent.classList.add('slide-up')
            } else {
                signupBtn.parentNode.classList.add('slide-up')
                parent.classList.remove('slide-up')
            }
        });
    });

    signupBtn.addEventListener('click', (e) => {
        let parent = e.target.parentNode;
        Array.from(e.target.parentNode.classList).find((element) => {
            if (element !== "slide-up") {
                parent.classList.add('slide-up')
            } else {
                loginBtn.parentNode.parentNode.classList.add('slide-up')
                parent.classList.remove('slide-up')
            }
        });
    });
</script>

</body>
</html>