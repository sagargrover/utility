<?php

function baseurl() {
    return "http://localhost/RedC/";
}

$con = mysql_connect('localhost', 'root','sagar');
if (!$con) {
    echo '<font color=red>' . mysql_error() . '</font>';
}
$db = mysql_select_db('RedC');
if (!$db) {
    echo '<font color=blue>' . mysql_error() . '</font>';
}

session_start();
//$_SESSION['usertype']="Admin";
ob_start();

@date_default_timezone_set(@date_default_timezone_get());
?>
