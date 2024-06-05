<?php
    $root = "http://".$_SERVER['HTTP_HOST']; //returns localhost or host name
    $root .= preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME'])).'/';
    $base_url = $root;
    
    require_once('C:\xampp\htdocs\ngc_assessment_exam\db_connection.php');

?>

<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=$base_url?>/assets/theme/NiceAdminPro/assets/images/favicon.png">
    <title>NGC Technical Coding Exam</title>
    <link href="<?=$base_url?>/assets/theme/NiceAdminPro/dist/css/style.min.css" rel="stylesheet">
    <link href="<?=$base_url?>/assets/theme/NiceAdminPro/assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?=$base_url?>/assets/theme/NiceAdminPro/assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box">
                <div id="loginform">
                    <div class="logo">
                        <span class="db"><img src="<?=$base_url?>/assets/theme/NiceAdminPro/assets/images/logo-icon.png" alt="logo" /></span>
                        <h5 class="font-medium m-b-20">Sign In</h5>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- <form class="form-horizontal m-t-20" id="loginform" action="index.html"> -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" id="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg" id="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                                </div>
                                <div class="form-group text-center">
                                    <div class="col-xs-12 p-b-20">
                                        <button class="btn btn-block btn-lg btn-info" id="btnLogin">Log In</button>
                                    </div>
                                </div>
                                <div class="form-group m-b-0 m-t-10">
                                    <div class="col-sm-12 text-center">
                                        Don't have an account? <a href="<?=$base_url?>/signup.php" class="text-info m-l-5"><b>Sign Up</b></a>
                                    </div>
                                </div>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=$base_url?>/assets/theme/NiceAdminPro/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?=$base_url?>/assets/theme/NiceAdminPro/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?=$base_url?>/assets/theme/NiceAdminPro/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=$base_url?>/assets/theme/NiceAdminPro/assets/libs/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="<?=$base_url?>/assets/theme/NiceAdminPro/assets/libs/sweetalert2/sweet-alert.init.js"></script>

    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    </script>
</body>

</html>

<script src="<?php echo $base_url?>/assets/js/login.js"></script>
<script>
    var base_url = <?php echo json_encode($base_url)?>
</script>