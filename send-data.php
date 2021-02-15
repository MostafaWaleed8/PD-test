<?php
session_start();
include("CONN.php");
$email = mysqli_real_escape_string($conn,trim($_POST['email']));
if (mysqli_real_escape_string($conn,trim($_POST['formid'])) == "signup")
{
    $emailc=mysqli_query($conn,"SELECT * FROM register where Email='$email'");
    if(mysqli_num_rows($emailc)>0)
    {
        echo "userEX"; 
    	exit;
    }
        $name = mysqli_real_escape_string($conn,trim($_POST['name']));
        $phone  = mysqli_real_escape_string($conn,trim($_POST['phone']));
        $password  = md5(mysqli_real_escape_string($conn,trim($_POST['password'])));


        $query="INSERT INTO register(Name, Email, Password, phone ) VALUES ('$name', '$email', '$password', '$phone')";
        $sql=mysqli_query($conn,$query);
        echo "susec";
    

} elseif (mysqli_real_escape_string($conn,trim($_POST['formid'])) == "signin"){
    $email = mysqli_real_escape_string($conn,trim($_POST['email']));
    $password  = md5(mysqli_real_escape_string($conn,trim($_POST['password'])));
    $sql=mysqli_query($conn,"SELECT * FROM register where Email='$email' and Password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["ID"] = $row['ID'];
        $_SESSION["Email"]=$row['Email'];
        echo "sisec";
    }
    else
    {
        echo "sifail";
    }

}

?>