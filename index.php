<?php
session_start();
$con = mysqli_connect("localhost","root","","practice") or
die ("Failed to connect to database");

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con,$sql);
    $data = mysqli_fetch_array($result);
    if($email == $data['email'] && $password == $data['password']){
        $_SESSION['email'] = $data['email'];
        $_SESSION['name'] = $data['name'];
    } else {
        echo "<script>";
        echo "alert('Please try again')";
        echo "</script>";
    }
}
if(isset($_SESSION['email'])){
    Header("Location:home.php");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <input type="text" name="email" id="email" placeholder="Enter your name here" required><br><br>
        <input type="password" name="password" id="password" placeholder="Enter your password." required><br><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>