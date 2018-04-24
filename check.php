<?php
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $conn=mysqli_connect("localhost","root","") or die("Error connecting database");
    $sql="use testing;";
    if(mysqli_query($conn,$sql))
    {
    $sql="select * from user_info where username='".$user."' AND password='".$pass."';";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        session_start();
        $_SESSION['user']=$user;
        mysqli_close($conn);
        header("Location:welcome.php");
    }
    else
    {
        mysqli_close($conn);
        header("Location:register.php");
    }
    }
    else{echo "error";}
?>