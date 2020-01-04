<?php
session_start();
if(isset($_POST['logout']))
{header('location:../index.php');
    session_unset();
}
?>

