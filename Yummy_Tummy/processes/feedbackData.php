<?php
include_once './connection.php';
if(isset($_POST['submit']))
{
    $username= $_POST['username'];
    $email=  $_POST['email'];
     $mobile = $_POST['mobileno'];
    $message= $_POST['message'];  
    date_default_timezone_set("Asia/Kolkata");
   // echo $username,$email,$message,$mobile;
    $date= date('d-m-y h:i:s A');
    $query="insert into feedback(Name,Email,ContactNo,Message,date) values('$username','$email','$mobile','$message','$date')";
  if(mysqli_query($conn,$query))
          {
      echo "<script>alert('Your data submitted successfully'); location.href='../index.php'</script>";
     
  }
  else{
      echo "<script>alert('Data can not submited'); location.href='../index.php'</script>";

  }
}
