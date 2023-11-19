<?php
    session_start();

    if($_POST['ru']!="" && $_POST['rp']!=""){
        // $file = fopen("./data/members.txt", "r");
        $name = $_POST['ru'];
        $pw = $_POST['rp'];
        $score = 0;
        $line = $name . "," . $pw .  ","  .  $score . "\n";
        file_put_contents("./data/members.txt", $line, FILE_APPEND);
        header("Location:index.php");
    }
    else{
        header("Location:register.php");
    }
?>