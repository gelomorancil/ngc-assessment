<?php
// Include the database connection file
require_once("db_connection.php");
require_once("encryption_helper.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mname = $_POST['mname'];
$gender = $_POST['gender'];
$username = $_POST['username'];
$password1 = $_POST['password1'];
$U_ID = uniqueid_generator();
$Salt = Salt();
$password_hashed = sha1(password_generator($password1, $Salt));  ;

if(
    empty($fname)||
    empty($lname)||
    empty($gender)||
    empty($username)||
    empty($password1)
){
    echo json_encode([
        "status" => "error",
        "message" => "Please input required field/s."
    ]);
}
else{


$result = mysqli_query($mysqli, "INSERT INTO tbl_users (`First_name`, `Last_name`, `Middle_name`, `Username`, `Gender`, `Password`, `U_ID`, `Salt`) VALUES ('$fname', '$lname', '$mname', '$username', '$gender', '$password_hashed', '$U_ID', '$Salt')");

if ($result) {
    echo json_encode([
        "status" => "success",
        "message" => "Date saved successfuly."
    ]);
}
 else {
    echo json_encode([
        "status" => "success",
        "message" => "Error inserting data: " . mysqli_error($mysqli)
    ]);
}
}

?>