<?php

define('CHAR_SET', 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789');
function uniqueid_generator($id = 1, $length = 50)
{
    if (function_exists("random_bytes")) {
        $bytes = random_bytes(ceil($length / 2));
    } elseif (function_exists("openssl_random_pseudo_bytes")) {
        $bytes = openssl_random_pseudo_bytes(ceil($length / 2));
    } else {
        throw new Exception(NO_CRYPTO);
    }

    $random = substr(bin2hex($bytes), 0, $length);
    $unique_id = sha1($random . uniqid() . $id . date('y-m-d:h:i:s') . $random);

    return $unique_id;
}

function Salt($length=50)
{
    $result = "";
    $chars = CHAR_SET;
    $charArray = str_split($chars);
    
    for($i = 0; $i < $length; $i++)
    {
	    $randItem = array_rand($charArray);
	    $result .= "".$charArray[$randItem];
    }
    
    return $result;
}

function password_generator($password,$locker,$length=100){
    $result = "";    
    
    for($i = 0; $i < $length; $i++)
    {	    
	    $result .= "".strrev($password).$locker;
    }
    
    return $result;
}

?>