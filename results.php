<html>
<head>
    <link rel="stylesheet" href="./assets/style.css">
    <title>The Quiz Results</title>
</head>

<body>
<div id="header">
    <span class="title">The Quiz Results</span>
</div>

<div id="container">
    <div id="wrapper">
        <?php
        session_start(); // To be able to use _SESSION superglobal
        $answers = array("B","C","B","A","D","D","C","D","A","B","A","D","A","B","C");

        for($x = 1, $score = 0; $x <= 15; $x++) {
            $user_answer = (empty($_POST["Q$x"]) ? "No Answer" : $_POST["Q$x"]); // Check if $_POST["Q$x"] is empty, if TRUE, then set as "No Answer", if FALSE then set as $_POST["Q$x"]
            $correct_answer = $answers[$x-1];

            /* Was used for testing, not really needed (Uncomment if you want ma'am)
            echo "Correct Answer: ", $correct_answer, "<br>";
            echo "Your Answer: ", $user_answer, "<br>";
            */

            if($user_answer == $correct_answer) { $score++; }
        }
        ?>
        <p class="big">You got: <br> <?php echo "$score/15" ?>!</p>
        <br><br>
        <p class="small">You started this quiz at <?php echo $_SESSION["start_time"] ?></p>
        <p class="small"><a href="homepage.php">Click here to go home</a></p>

        
    </div>
</div>
</body>

</html>