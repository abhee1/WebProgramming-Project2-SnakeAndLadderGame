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
            .myscore{
                margin-top: 5%;
            }
            .levelselect{
                margin-top:5%;
            }
            
            .leadboard{
                border-style:dotted;
                border-color:RGB(153, 41, 0);
                border-width: 0.4cm;
                margin:auto;
                width:40%;
            }

            .button-29 {
            align-items: center;
            appearance: none;
            background-image: radial-gradient(100% 100% at 100% 0, #5adaff 0, #5468ff 100%);
            border: 0;
            border-radius: 6px;
            box-shadow: rgba(45, 35, 66, .4) 0 2px 4px,rgba(45, 35, 66, .3) 0 7px 13px -3px,rgba(58, 65, 111, .5) 0 -3px 0 inset;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-flex;
            font-family: "JetBrains Mono",monospace;
            height: 48px;
            justify-content: center;
            line-height: 1;
            list-style: none;
            overflow: hidden;
            padding-left: 16px;
            padding-right: 16px;
            position: relative;
            text-align: left;
            text-decoration: none;
            transition: box-shadow .15s,transform .15s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            white-space: nowrap;
            will-change: box-shadow,transform;
            font-size: 18px;
            }

            .button-29:focus {
            box-shadow: #3c4fe0 0 0 0 1.5px inset, rgba(45, 35, 66, .4) 0 2px 4px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
            }

            .button-29:hover {
            box-shadow: rgba(45, 35, 66, .4) 0 4px 8px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
            transform: translateY(-2px);
            }

            .button-29:active {
            box-shadow: #3c4fe0 0 3px 7px inset;
            transform: translateY(2px);
            }
        </style>

    </head>
    <body>
        <?php
            $current_user = $_SESSION['cur_user'];
            $file = fopen("./data/members.txt", "r");
            $name_score = array(); 
            while (!feof($file)) {
                $line = fgets($file);
                $data = explode(",", $line);
                $score = $data[2];
                $name = $data[0];
                $name_score[$name] = $score;
            }
            fclose($file);
            arsort( $name_score );


            $file = fopen("./data/members.txt", "r");
            while (!feof($file)) {
                $name = $_SESSION['cur_user'];
                $line = fgets($file);
                $data = explode(",", $line);
                $score = $data[2];
                $name = $data[0];
                if ($name == $current_user) {
                    echo "<div class='myscore'>";
                    echo "<h2>Hi  " . $name . "! Your Score is: ";
                    echo "<span style='color: blue;'>" . $score . "</span>";
                    echo "</h2>";
                    echo "</div>";
                    fclose($file);
                    break;
                }
            }
            echo '<div class="leadboard">';
            echo '<h2> Leader Board</h2>';
            echo '<table class="scorerank">';
            echo '<tr>
            <th>Name</th>
            <th>Score</th>
            </tr>';
            foreach($name_score as $n=>$s){
                echo '<tr>';
                echo '<td>' . $n . '</td>';
                echo '<td>' . $s . '</td>';
            }
            echo '</table></div>';
            
        ?>
        <div class='levelselect'>
        <form action="./snake-ladder/mysnake.php" method="POST">
            <h2>Select a difficulty level:</h2>
                <div>
                <input type="radio" id="level1" name="level" value="easy"
                        checked>
                <label for="level1">Easy</label>
                </div>

                <div>
                <input type="radio" id="level2" name="level" value="medium">
                <label for="level2">Medium</label>
                </div>

                <div>
                <input type="radio" id="level3" name="level" value="hard">
                <label for="level3">Hard</label>
                </div>
            <button class="button-29" type='submit' role="button">Play Game!</button>
            <!-- < type="submit" value="Play Game!" /> -->
        </form>
        </div>
        <p><a href='logout.php'> LOG ME OUT</a></p>
        <p> 
    </body>
</html>