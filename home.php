<?php
session_start();
if(isset($_SESSION['email'])){
    echo "Welcome". " ".$_SESSION['name'];
} else {
    Header("Location:index.php");
}


?>
<a href="page2.php">Go to page two.</a>
<a href="logout.php">Logout</a>