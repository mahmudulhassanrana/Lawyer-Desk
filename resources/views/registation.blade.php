<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.harnishdesign.net/html/oxyy/register-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 23:17:37 GMT -->
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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
          rel="stylesheet"/>
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet"/>

    <!-- PLUGINS CSS STYLE -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="assets/plugins/toaster/toastr.min.css" rel="stylesheet"/>
    <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet"/>
    <link href="assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
    <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet"/>
    <link href="assets/plugins/ladda/ladda.min.css" rel="stylesheet"/>
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
    <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet"/>

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css"/>
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
<!-- Preloader End -->

<div id="main-wrapper" class="oxyy-login-register h-100 d-flex flex-column bg-transparent">
    <div class="container my-auto">
        <div class="row">
            <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                <div class="bg-white shadow-md rounded p-4 px-sm-5 mt-4">
                    <div class="logo"><a class="d-flex justify-content-center"><img src="assets/img/lawyerdesk.png"></a>
                    </div>
                    <hr class="mx-n4 mx-sm-n5">
                    <form method="POST" action="/register">
                        {{ csrf_field() }}
                        <h2 style="text-align: center;">Please Registation</h2>
                        <br>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user-circle"></i> </span>
                            </div>
                            <select name="usertype" class="form-control">
                                <option value=""> Select User type</option>
                                <option value="1">User</option>
                                <option value="2">Lawyer</option>
                            </select>
                        </div>
                        <!-- form-group end.// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="name" class="form-control" placeholder="Full name" type="text">
                        </div> <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            </div>
                            <input name="email" class="form-control" placeholder="Email address" type="email">
                        </div>
                        <div>{{ $errors->first('email') }}</div><!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-address-book"></i> </span>
                            </div>
                            <input name="address" class="form-control" placeholder="Address" type="text">
                        </div> <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-address-card"></i> </span>
                            </div>
                            <input name="nid" class="form-control" placeholder="NID number" type="text">
                        </div>
                        <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
                            </div>
                            <input name="bar_id" class="form-control" placeholder="Bar council ID (Lawyer only) "
                                   type="text">
                        </div>
                        <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                            </div>
                            <input name="phone" class="form-control" placeholder="Phone Number" type="text">
                        </div>

                        <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input name="password" class="form-control" placeholder="Create password" type="password">
                        </div>
                        <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input class="form-control" name="password_confirmation" placeholder="Repeat password"
                                   type="password">
                            <div>{{ $errors->first('password') }}</div>

                        </div>
                        <!-- form-group// -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Create Account</button>
                        </div>
                    </form>
                    <!-- form-group// -->
                    <p class="text-center">Have an account? <a href="/">Log In</a></p>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-3">
        <p class="text-center text-2 text-muted mb-0">Copyright © 2020 Mahmud Rana.</p>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/toaster/toastr.min.js"></script>
<script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/charts/Chart.min.js"></script>
<script src="assets/plugins/ladda/spin.min.js"></script>
<script src="assets/plugins/ladda/ladda.min.js"></script>
<script src="assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/jekyll-search.min.js"></script>
<script src="assets/js/sleek.js"></script>
<script src="assets/js/chart.js"></script>
<script src="assets/js/date-range.js"></script>
<script src="assets/js/map.js"></script>
<script src="assets/js/custom.js"></script>
</body>

<!-- Mirrored from demo.harnishdesign.net/html/oxyy/register-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 23:17:37 GMT -->
</html>
