<?php
// jika belum login 


if(isset($_SESSION['log'])){
    // header('location:index.php');
} else {
    header('location:login.php');
}
?>