<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <meta charset='utf-8' />
        <link rel = 'stylesheet' href="./styles/style.css">
        <style>
            body{
                font-family: cursive;
            }
            .snake{
                font-size: 50px;
                margin-top: 5%;
            }
        </style>

    </head>
    <body>
        <h1 class='snake'>Snake and Ladder Game!</h1>
        <h1 class='snake'>REGISTRATION</h1>
        <h1>Registration</h1>
        <form method="POST" action = "register_submit.php">
            <p>
                Set your account:<input type='text' name='ru'>
            </p>
            <p>
                Set your password:<input type='password' name='rp'>
            </p>
            <p>
                <button type='submit'>Register</button>
            </p>     
        </form>   
    </body>
</html>