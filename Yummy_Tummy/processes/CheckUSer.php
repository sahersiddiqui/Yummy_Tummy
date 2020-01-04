<?php
session_start();
$mail=$_SESSION['email'];
//echo ($mail);
@include_once('connection.php');
$query="select * from signup";
$result=mysqli_query($conn, $query);
while($array=mysqli_fetch_array($result))
{
   // echo ($array['Email']);
   if($array['Email']===$mail)

    {
        echo "<script>alert('Already Exist USer');</script>";
        echo "<script>location.href='index.php'</script>";
        
    }
    
}
session_abort();
