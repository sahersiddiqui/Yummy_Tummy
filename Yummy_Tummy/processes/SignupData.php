<?php
session_start();
if(isset($_POST['SubmitSignup']))
{
    $_SESSION['email']=$_POST['email'];
    $mail=$_SESSION['email'];
    //echo ($mail);
    include_once('connection.php');
    $data="select * from signup";
    $result=mysqli_query($conn, $data);
    while($array=mysqli_fetch_array($result))
    {
        // echo ($array['Email']);
        if($array['Email']===$mail)
         {
             echo "<script>alert('User Already Exist');</script>";
             echo "<script>location.href='../index.php'</script>";
             break;
         }
    }   
$username= mysqli_real_escape_string($conn,$_POST['name']);
$mobile=mysqli_real_escape_string($conn,$_POST['mobile']);
$mail=mysqli_real_escape_string($conn,$_POST['email']);
$password= mysqli_real_escape_string($conn,md5($_POST['pass']));
$date= mysqli_real_escape_string($conn,date('d/m/y ,H:m '));
  $query1="insert into signup(Name,Mobile,Email,Password,Date) values('$username','$mobile','$mail','$password','$date' )";
   if(mysqli_query($conn,$query1))
    {
       $query2="insert into login(email,password,date,Lcount,UType) values('$mail','$password','$date','1','user')";
       mysqli_query($conn, $query2);
       echo "<script>alert('Signup Sccussfully'); location.href='../index.php'</script>";
       
    }
}
session_unset();
mysqli_close($conn);
?>