<?php
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['mobil'])){
    include 'connection_db.php';

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    $email = validate($_POST['email']);
    $address = validate($_POST['address']);
    $mobil = validate($_POST['mobil']);


    if(empty($username) || empty($password) || empty($email) || empty($address) || empty($mobil))
    {

        header("Location:registra.php");

    }
    else{
        $sql= "INSERT INTO user(username, password, email, address, mobil) VALUES('$username', '$password', '$email', '$address', '$mobil')";
        $res=mysqli_query($con, $sql);
        if($res){
            header("location:registra.php?Invalid2=login successful! switch left to singIn");
        }
        else{
            header("location:registra.php?Invalid2=Please Enter Correct Username Name and Password");

        }
    }

}
else
{
    header("Location:index.php");
}


?>