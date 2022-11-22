<?php
include ('connection_db.php');
session_start();
if(isset($_POST['username']))
{
    if(empty($_POST['username'])||empty($_POST['password']))
    {
        header("location:registra.php?Empty= Please Fill in the Blank");
    }

    else
    {
        $query="SELECT * FROM user WHERE username='".$_POST['username']."' and password='".$_POST['password']."'";
        $result=mysqli_query($con,$query);
        if(mysqli_fetch_assoc($result))
        {
            $_SESSION['User']=$_POST['username'];
            header("location:index.php");
        }
        else
        {
            header("location:login.php?Invalid=Please Enter Correct Username Name and Password");
        }
    }
}
else
{
    echo 'Not working now';
}
?>