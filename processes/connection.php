<?php
$host='localhost';
$username='root';
$password='root';
$dbname='hungrypet';
$conn=@mysqli_connect($host,$username,$password,$dbname);
if(!$conn)
    die("Connection Error");
?>

