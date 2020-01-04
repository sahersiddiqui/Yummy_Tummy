<?php
@include_once 'Connection.php';
session_start();
$_SESSION['user']=" ";
if(isset($_POST['login']))
{
    $user=$_POST['email'];
    $pswd= md5($_POST['pass']);
//       echo ($array['Email']);
    if($user=='admin1995@gmail.com')
    {
        $_SESSION['user']=$user;
        header('location:../adminZone/adminHome.php');
    }
    else
    {
       $query="select * from signup where Email='$user'";
       $result= mysqli_query($conn, $query);
       $row= mysqli_fetch_array($result);
       //echo ($row['Password']);
        if($row['Password']==$pswd && $row['Email']==$user)
        {
            
           $date=date('d/m/Y, H:s');
            $query1="update login set date='$date', LCount=LCount+1 where email='$user'";
            if(mysqli_query($conn,$query1))
            {
            //echo ($row['Name']);
            $_SESSION['user']=$row['Name'];
            header('location:../userZone/UserProfile.php');
            }
            else
                echo "<script>alert('cant login');</script>";
           
        }
         else 
         {
            echo "<script>alert('wrong Passwrod');</script>";
            header('location:../index.php');
            
         }
    }
}

