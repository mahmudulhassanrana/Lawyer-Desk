<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.harnishdesign.net/html/oxyy/login-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 23:18:04 GMT -->
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="assets/img/lawyerdesk.png" rel="icon"/>
    <title>Lawyer Desk</title>
    <meta name="description" content="Login and Register Form Html Template">
    <meta name="author" content="harnishdesign.net">

    <!-- Web Fonts
    ========================= -->
    <link rel='stylesheet'
          href='https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i'
          type='text/css'>

    <!-- Stylesheet
    ========================= -->
    <link rel="stylesheet" type="text/css"
          href="http://demo.harnishdesign.net/html/oxyy/vendor/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="http://demo.harnishdesign.net/html/oxyy/vendor/font-awesome/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="http://demo.harnishdesign.net/html/oxyy/css/stylesheet.css"/>
    <!-- Colors Css -->
    <link id="color-switcher" type="text/css" rel="stylesheet" href="#"/>
</head>
<body>

<!-- Preloader -->
<div class="preloader">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>


<div id="main-wrapper" class="oxyy-login-register h-100 d-flex flex-column bg-transparent">
    <div class="container my-auto">
        <div class="row">
            <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                <div class="bg-white shadow-md rounded p-4 px-sm-5 mt-4">
                    <div class="logo"><a class="d-flex justify-content-center" title="Oxyy"><img
                                src="assets/img/lawyerdesk.png"></a></div>
                    <hr class="mx-n4 mx-sm-n5">
                    <p class="lead text-center">
                    <h2 style="text-align: center;">Please login.</h2></p>
                    <form method="POST" action="/login">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="emailAddress">Email Address</label>
                            <input type="email" class="form-control" name="email" required
                                   placeholder="Enter Your Email">
                        </div>
                        <div>
                            @if(session('error'))
                                {{session('error') }}
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="loginPassword">Password</label>
                            <input type="password" class="form-control" name="password" required
                                   placeholder="Enter Password">
                        </div>

                        <div>

                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <div class="form-check custom-control custom-checkbox">
                                    <input id="remember-me" name="remember" class="custom-control-input"
                                           type="checkbox">
                                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                                </div>
                            </div>
                            {{--                            <div class="col-sm text-right"><a class="btn-link" href="">Forgot Password ?</a></div>--}}
                            {{--                        </div>--}}
                            <button class="btn btn-primary btn-block my-4" type="submit">Sign In</button>
                    </form>
                    <p class="text-muted text-center mb-2">Don't have an account? <a class="btn-link" href="register">Sign
                            Up</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-3">
        <p class="text-center text-2 text-muted mb-0">Copyright © 2020 Mahmud Rana</p>
    </div>
</div>

<!-- Styles Switcher -->
<div id="styles-switcher" class="left">
    <h5>Color Switcher</h5>
    <hr>
    <ul class="mb-0">
        <li class="blue" data-toggle="tooltip" title="Blue" data-path="#"></li>
        <li class="indigo" data-toggle="tooltip" title="Indigo"
            data-path="http://demo.harnishdesign.net/html/oxyy/css/color-indigo.css"></li>
        <li class="purple" data-toggle="tooltip" title="Purple"
            data-path="http://demo.harnishdesign.net/html/oxyy/css/color-purple.css"></li>
        <li class="pink" data-toggle="tooltip" title="Pink"
            data-path="http://demo.harnishdesign.net/html/oxyy/css/color-pink.css"></li>
        <li class="red" data-toggle="tooltip" title="Red"
            data-path="http://demo.harnishdesign.net/html/oxyy/css/color-red.css"></li>
        <li class="orange" data-toggle="tooltip" title="Orange"
            data-path="http://demo.harnishdesign.net/html/oxyy/css/color-orange.css"></li>
        <li class="yellow" data-toggle="tooltip" title="Yellow"
            data-path="http://demo.harnishdesign.net/html/oxyy/css/color-yellow.css"></li>
        <li class="teal" data-toggle="tooltip" title="Teal"
            data-path="http://demo.harnishdesign.net/html/oxyy/css/color-teal.css"></li>
        <li class="green" data-toggle="tooltip" title="Green"
            data-path="http://demo.harnishdesign.net/html/oxyy/css/color-green.css"></li>
        <li class="cyan" data-toggle="tooltip" title="Cyan"
            data-path="http://demo.harnishdesign.net/html/oxyy/css/color-cyan.css"></li>
        <li class="brown" data-toggle="tooltip" title="Brown"
            data-path="http://demo.harnishdesign.net/html/oxyy/css/color-brown.css"></li>
    </ul>
    <button class="btn switcher-toggle"><i class="fas fa-cog"></i></button>
</div>
<!-- Styles Switcher End -->

<!-- Script -->
<script src="http://demo.harnishdesign.net/html/oxyy/vendor/jquery/jquery.min.js"></script>
<script src="http://demo.harnishdesign.net/html/oxyy/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Style Switcher -->
<script src="http://demo.harnishdesign.net/html/oxyy/js/switcher.min.js"></script>
<script src="http://demo.harnishdesign.net/html/oxyy/js/theme.js"></script>
</body>

<!-- Mirrored from demo.harnishdesign.net/html/oxyy/login-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 23:18:04 GMT -->
</html>
