<?php 
require '../cs230-lab/includes/header.php'
?>

<main>
    <link rel="stylesheet" href="../cs230-lab/css/signup.css">

    <?php
    if(isset($_SESSION['uid'])){
        include 'html/profile.html';
    }
    else{
        header("Location: login.php");
        exit();
    }
    ?>

</main>