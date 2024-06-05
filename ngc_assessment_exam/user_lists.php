<?php
 $root = "http://".$_SERVER['HTTP_HOST']; //returns localhost or host name
 $root .= preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME'])).'/';
 $base_url = $root;

 require_once('C:\xampp\htdocs\ngc_assessment_exam\db_connection.php');

 $result = mysqli_query($mysqli, "SELECT * FROM tbl_users ORDER BY ID Desc");
 $registered = mysqli_num_rows($result);

 $male = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_users WHERE `Gender` = 'Male'"));
 $female = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_users WHERE `Gender` = 'Female'"));

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=$base_url?>/assets/theme/NiceAdminPro/assets/images/favicon.png">
    <title>NGC Technical Coding Exam</title>
    <link href="<?=$base_url?>/assets/theme/NiceAdminPro/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="<?=$base_url?>/assets/theme/NiceAdminPro/dist/css/style.min.css" rel="stylesheet">
  
</head>

<body>
    <div class="page-wrapper">
        <div class="page-breadcrumb">
        <div class="d-flex align-items-center justify-content-end">
                <a href="<?=$base_url?>" type="button" class="btn btn-primary btn-sm ">Logout</i></a>
            </div>
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">List of Registered Users</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">List of Registered Users</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <p class="font-16 m-b-5">Registered Clients</p>
                                </div>
                                <div class="ml-auto">
                                    <h1 class="font-light text-right"><?=$registered?></h1>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <p class="font-16 m-b-5">Registered <b>MALE</b></p>
                                </div>
                                <div class="ml-auto">
                                    <h1 class="font-light text-right"><?=$male?></h1>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <p class="font-16 m-b-5">Registered <b>FEMALE</b></p>
                                </div>
                                <div class="ml-auto">
                                    <h1 class="font-light text-right"><?=$female?></h1>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
           
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of Registered Users</h4>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Gender</th>
                                            <th>Username</th>
                                            <th>Date Created</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            // Fetch the next row of a result set as an associative array
                                            while ($res = mysqli_fetch_assoc($result)) {
                                                echo "<tr>";
                                                echo "<td>".ucfirst($res['First_name']  )."</td>";
                                                echo "<td>".ucfirst($res['Middle_name'] )."</td>";
                                                echo "<td>".ucfirst($res['Last_name']   )."</td>";	
                                                echo "<td>".$res['Gender']."</td>";	
                                                echo "<td>".$res['Username']."</td>";	
                                                echo "<td>".date("M d, Y - h:ia", strtotime($res['Date_created']))."</td>";	
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <script src="<?=$base_url?>/assets/theme/NiceAdminPro/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?=$base_url?>/assets/theme/NiceAdminPro/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?=$base_url?>/assets/theme/NiceAdminPro/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=$base_url?>/assets/theme/NiceAdminPro/dist/js/app.min.js"></script>
    <script src="<?=$base_url?>/assets/theme/NiceAdminPro/dist/js/app.init.js"></script>
    <script src="<?=$base_url?>/assets/theme/NiceAdminPro/dist/js/app-style-switcher.js"></script>
    <script src="<?=$base_url?>/assets/theme/NiceAdminPro/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?=$base_url?>/assets/theme/NiceAdminPro/assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="<?=$base_url?>/assets/theme/NiceAdminPro/dist/js/waves.js"></script>
    <script src="<?=$base_url?>/assets/theme/NiceAdminPro/dist/js/sidebarmenu.js"></script>
    <script src="<?=$base_url?>/assets/theme/NiceAdminPro/dist/js/custom.min.js"></script>
    <script src="<?=$base_url?>/assets/theme/NiceAdminPro/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="<?=$base_url?>/assets/theme/NiceAdminPro/dist/js/pages/datatable/datatable-basic.init.js"></script>
</body>

</html>