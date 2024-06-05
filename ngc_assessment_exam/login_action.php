<?php
// Include the database connection file
require_once("db_connection.php");
require_once("encryption_helper.php");

$username = $_POST['username'];
$password = $_POST['password'];



$result = mysqli_query($mysqli, "SELECT * FROM tbl_users WHERE `Username` = '$username'");

if ($result) {
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        if($row['Password'] !== sha1(password_generator($password,$row['Salt'])) ){
            echo json_encode([
                "status" => "error",
                "message" => "Invalid password."
            ]);
        } else{
            echo json_encode([
                "status" => "success",
                "message" => "Login Successful."
            ]);
        }
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Invalid username."
        ]);
    }
} else {
    echo "Error executing query: " . mysqli_error($mysqli);
}

?>