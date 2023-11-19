<?php
    session_start();
    // phpinfo();


    if(isset($_POST['u']) && isset($_POST['p']) && $_POST['u']!="" && $_POST['p']!=""){
        $file = fopen("./data/members.txt", "r");
        $found = False;
        $name = $_POST['u'];
        $pw = $_POST['p'];
        while (!feof($file)) {
            $line = fgets($file);
            $data = explode(",", $line);
            if ($name == $data[0] and ($pw==$data[1])) {
                $_SESSION['is_login'] = True;
                header('Location: check_backend.php');
                fclose($file);
                $_SESSION['cur_user'] = $name;
                $found = True;
                break;
            }
        }
        if ($found==False){
            fclose($file);
            $_SESSION['is_login'] = False;
            $_SESSION['msg'] = 'Please check your account and password.';
            header('Location: index.php');
        }

    }
    else{
        if ($_SESSION['is_login']){
            header('Location: backend.php');
        }
        else{
            header("Location:index.php");
        }
    }
?>