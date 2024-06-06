<?php
    $root = "http://".$_SERVER['HTTP_HOST']; //returns localhost or host name
    $root .= preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME'])).'/';
    $base_url = $root;
    
?>

<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=$base_url?>assets/theme/NiceAdminPro/assets/images/favicon.png">
    <title>Morancil_NGC Assessment</title>
    <!-- Custom CSS -->
    <link href="<?=$base_url?>assets/theme/NiceAdminPro/dist/css/style.min.css" rel="stylesheet">
    <link href="<?=$base_url?>/assets/theme/NiceAdminPro/assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?=$base_url?>assets/theme/NiceAdminPro/assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box">
                <div>
                    <div class="logo">
                        <span class="db"><img src="<?=$base_url?>assets/theme/NiceAdminPro/assets/images/bcd-logo.png" alt="logo" /></span>
                        <h5 class="font-medium m-b-20">Sign Up</h5>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <!-- <form class="form-horizontal m-t-20"> -->
                                <div class="form-group row ">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="text" required=" " id="fname" placeholder="First Name" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="text" id="mname" placeholder="Middle Name">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="text" required=" " id="lname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <select class="custom-select mr-sm-2" id="gender">
                                            <option selected>Gender...</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="text" required=" " id="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="password" required=" " id="password1"  placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="password" required=" " id="password2" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 ">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">I agree to all <a href="javascript:void(0)">Terms</a></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center ">
                                    <div class="col-xs-12 p-b-20 ">
                                        <button class="btn btn-block btn-lg btn-info "id="btnSignUp">SIGN UP</button>
                                    </div>
                                </div>
                                <div class="form-group m-b-0 m-t-10 ">
                                    <div class="col-sm-12 text-center ">
                                        Already have an account? <a href="<?=$base_url?>login.php" class="text-info m-l-5 "><b>Sign In</b></a>
                                    </div>
                                </div>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <script src="<?=$base_url?>assets/theme/NiceAdminPro/assets/libs/jquery/dist/jquery.min.js "></script>
    <script src="<?=$base_url?>assets/theme/NiceAdminPro/assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="<?=$base_url?>assets/theme/NiceAdminPro/assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <script src="<?=$base_url?>/assets/theme/NiceAdminPro/assets/libs/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="<?=$base_url?>/assets/theme/NiceAdminPro/assets/libs/sweetalert2/sweet-alert.init.js"></script>
   
    <script>
    $('[data-toggle="tooltip "]').tooltip();
    $(".preloader ").fadeOut();
    </script>
</body>

</html>

<script src="<?php echo $base_url?>/assets/js/signup.js"></script>
<script>
    var base_url = <?php echo json_encode($base_url)?>
</script>