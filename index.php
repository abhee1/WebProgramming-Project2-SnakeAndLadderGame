<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>MyWebsite</title>
        <meta charset='utf-8' />
        <link rel = 'stylesheet' href="./styles/style.css">
        <style>
            body{
                font-family: cursive;
            }
            .welcome{
                font-size: 40px;
                margin-top: 3%;
            }
            .snake{
                font-size: 50px;
            }


        .button-2 {
        background-color: rgba(51, 51, 51, 0.05);
        border-radius: 8px;
        border-width: 0;
        color: #333333;
        cursor: pointer;
        display: inline-block;
        font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        font-weight: 500;
        line-height: 20px;
        list-style: none;
        margin: 0;
        padding: 10px 12px;
        text-align: center;
        transition: all 200ms;
        vertical-align: baseline;
        white-space: nowrap;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        }
        </style>

    </head>

    <body>
        <h1 class='snake'>Snake and Ladder Game!</h1>
        <h1 class='welcome'>Welcome!</h1>
        <form method="POST" action = "check_login.php">
            <?php 
                if(isset($_SESSION['msg']))
                {
                    echo "<p>". $_SESSION['msg'] . "</p>";
                }
            ?>
            <p>
                Your account:<input type='text' name='u'>
            </p>
            <p>
                Your password:<input type='password' name='p'>
            </p>
            <p>
                <button class="button-2" type='submit' role="button">Log In</button>
            </p>     
        </form>   


        <p>
            <a href='register.php'>Not Registered? Register Here!</a>
        </p>


        <img class='welcome_img' src="./images/dice.gif" alt='' />

        
    </body>
</html>