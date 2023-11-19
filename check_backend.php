<?php
    session_start();

    if (isset($_SESSION['is_login']) && $_SESSION['is_login'] && $_SESSION['cur_user']){
        header("Location:backend.php");
    }
    else{
        header('Location:index.php');
    }
?>