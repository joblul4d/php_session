<?php
session_start();
if(isset($_SESSION['email'])){
    echo "Welcome". " ".$_SESSION['name'];
} else {
    Header("Location:index.php");
}


?>