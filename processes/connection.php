<?php
$host='localhost';
$username='phpdb';
$password='root';
$dbname='hungrypet';
$conn=@mysqli_connect($host,$username,$password,$dbname);
if(!$conn)
    die("Connection Error");
?>

