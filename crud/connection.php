<?php 
$host = "localhost";
$database = "crud";
$user = "root";
$password = "";

$mysqli = new mysqli($host, $user, $password, $database);

function dateFormat($date){
    $birthday = implode("/" , array_reverse(explode('-', $date)));
    return $birthday;
}

function phoneFormat($phone){
    $ddd = substr ($phone, 0, 2);
    $slice2 = substr ($phone, 2, 5);
    $slice3 = substr ($phone, 7);
    return "($ddd) $slice2-$slice3";
}

?>