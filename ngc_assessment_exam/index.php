<?php
    $root = "http://".$_SERVER['HTTP_HOST']; //returns localhost or host name
    $root .= preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME'])).'/';
    $base_url = $root;
    
    require_once('C:\xampp\htdocs\ngc_assessment_exam\db_connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGC Technical Coding Exam</title>
    <link href="<?=$base_url?>/assets/theme/NiceAdminPro/dist/css/style.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: url('<?=$base_url?>assets/images/ngc.jpg') no-repeat center center fixed;
            background-size: cover;
            position: relative;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7); 
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .navbar {
            position: absolute;
            top: 0;
            right: 0;
            margin: 20px;
        }

        .navbar a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
            display: inline-block;
            border-radius: 4px;
            background-color: #ff6600; 
        }

        .content {
            text-align: center;
            color: white;
        }

        .content h1 {
            font-size: 4em;
            margin: 0 0 20px;
        }

        .content button {
            padding: 15px 30px;
            font-size: 1.2em;
            color: white;
            background-color: #ff6600;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .content button:hover {
            background-color: #ff3300;
        }
    </style>
</head>
<body>
    <div class="overlay">
        <div class="navbar">
            <a href="login.php">Login</a>
        </div>
        <div class="content">
            <h1>Bacolod Government Center</h1>
            <button onclick="window.location.href='signup.php'">Register Now</button>
        </div>
    </div>
</body>
</html>
