<html>
<head>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<?php date_default_timezone_set("Asia/Manila"); // Set timezone to Philippine Time
session_start(); // To be able to use _SESSION superglobal
$_SESSION["start_time"] = date("M d,Y H:i:s");

?>

<body>
<div id="header">
    <span class="title">The Quiz Questions</span>
</div>

<div id="container">
    <div id="wrapper">
        <form action="quiz_results.php" method="POST">
        <p>1. What do you use when commenting SINGLE lines in PHP?</p>
            <div id="parent">
                <div id="child"><input type="radio" name="Q1" value="A">A. !- or !+</div>
                <div id="child"><input type="radio" name="Q1" value="B">B. // or #</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" name="Q1" value="C">C. -- or ++</div>
                <div id="child"><input type="radio" name="Q1" value="D">D. /* or */</div>
            </div>
        <br><br>
        <p>2. What is the data type that are a sequence of characters?</p>
            <div id="parent">
                <div id="child"><input type="radio" name="Q2" value="A">A. Float</div>
                <div id="child"><input type="radio" name="Q2" value="B">B. Integer</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" name="Q2" value="C">C. String</div>
                <div id="child"><input type="radio" name="Q2" value="D">D. Array</div>
            </div>
        <br><br>
        <p>3. What is the data type that only consists of whole numbers?</p>
            <div id="parent">
                <div id="child"><input type="radio" name="Q3" value="A">A. Float</div>
                <div id="child"><input type="radio" name="Q3" value="B">B. Integer</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" name="Q3" value="C">C. String</div>
                <div id="child"><input type="radio" name="Q3" value="D">D. Array</div>
            </div>
        <br><br>
        <p>4. What is the data type that only consists of numbers with decimal point?</p>
            <div id="parent">
                <div id="child"><input type="radio" name="Q4" value="A">A. Float</div>
                <div id="child"><input type="radio" name="Q4" value="B">B. Integer</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" name="Q4" value="C">C. String</div>
                <div id="child"><input type="radio" name="Q4" value="D">D. Array</div>
            </div>
        <br><br>
        <p>5. What is the data type that consists of multiple values?</p>
            <div id="parent">
                <div id="child"><input type="radio" name="Q5" value="A">A. Float</div>
                <div id="child"><input type="radio" name="Q5" value="B">B. Integer</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" name="Q5" value="C">C. String</div>
                <div id="child"><input type="radio" name="Q5" value="D">D. Array</div>
            </div>
        <br><br>
        <p>6. Which of the following functions should you use to get the length of the string "Hello World"?</p>
            <div id="parent">
                <div id="child"><input type="radio" name="Q6" value="A">A. lenstr("Hello World");</div>
                <div id="child"><input type="radio" name="Q6" value="B">B. len("Hello World");</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" name="Q6" value="C">C. str_len("Hello World");</div>
                <div id="child"><input type="radio" name="Q6" value="D">D. strlen("Hello World");</div>
            </div>
        <br><br>
        <p>7. Which of the following functions should you use to replace the word "Hello" in "Hello World" with "Hi" to output "Hi World"?</p>
            <div id="parent">
                <div id="child"><input type="radio" name="Q7" value="A">A. replacestr("Hello", "Hi", "Hello World");</div>
                <div id="child"><input type="radio" name="Q7" value="B">B. replace("Hello World", "Hello", "Hi");</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" name="Q7" value="C">C. str_replace("Hello", "Hi", "Hello World");</div>
                <div id="child"><input type="radio" name="Q7" value="D">D. strreplace("Hi", "Hello", "Hello World");</div>
            </div>
        <br><br>
        <p>8. Which of the following functions should you use to reverse the string "Hello World"?</p>
            <div id="parent">
                <div id="child"><input type="radio" name="Q8" value="A">A. revstr("Hello World");</div>
                <div id="child"><input type="radio" name="Q8" value="B">B. rev("Hello World");</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" name="Q8" value="C">C. str_rev("Hello World");</div>
                <div id="child"><input type="radio" name="Q8" value="D">D. strrev("Hello World");</div>
            </div>
        <br><br>
        <p>9. Which of the following functions should you use to get the number of words in the string "Hello World"?</p>
            <div id="parent">
                <div id="child"><input type="radio" name="Q9" value="A">A. str_word_count("Hello world");</div>
                <div id="child"><input type="radio" name="Q9" value="B">B. word_count_str("Hello world");</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" name="Q9" value="C">C. str_count("Hello world");</div>
                <div id="child"><input type="radio" name="Q9" value="D">D. count_str("Hello world");</div>
            </div>
        <br><br>
        <p>10. How would you define a constant named STRING with the value of "Hello World" that is case-insensitive using the define() function?</p>
            <div id="parent">
                <div id="child"><input type="radio" name="Q10" value="A">A. define("Hello World", "STRING", true);</div>
                <div id="child"><input type="radio" name="Q10" value="B">B. define("STRING", "Hello World", true);</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" name="Q10" value="C">C. define("Hello World", "STRING", insensitive);</div>
                <div id="child"><input type="radio" name="Q10" value="D">D. define("STRING", "Hello World", insensitive);</div>
            </div>
        <br><br>
        <p>11. Provided that $x is 2 and $y is 2.0, which of the following if() functions would be true?</p>
            <div id="parent">
                <div id="child"><input type="radio" name="Q11" value="A">A. if($x == $y)</div>
                <div id="child"><input type="radio" name="Q11" value="B">B. if($x === $y)</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" name="Q11" value="C">C. if($x != $y)</div>
                <div id="child"><input type="radio" name="Q11" value="D">D. if($x !== $y)</div>
            </div>
        <br><br>
        <p>12. Provided that $x is 2 and $y is 2.0, which if the following if() functions would be false?</p>
            <div id="parent">
                <div id="child"><input type="radio" name="Q12" value="A">A. if($x <= $y)</div>
                <div id="child"><input type="radio" name="Q12" value="B">B. if($x >= $y)</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" name="Q12" value="C">C. if($x != $y)</div>
                <div id="child"><input type="radio" name="Q12" value="D">D. if($x <> $y)</div>
            </div>
        <br><br>
        <p>13. Provided that $x and $y are true, and $z is false, which of the following if() functions would be true?</p>
            <div id="parent">
                <div id="child"><input type="radio" name="Q13" value="A">A. if(($x || $y) && $z)</div>
                <div id="child"><input type="radio" name="Q13" value="B">B. if(($x && $y) || $z)</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" name="Q13" value="C">C. if($x || ($y && $z))</div>
                <div id="child"><input type="radio" name="Q13" value="D">D. if($x && ($y || $z))</div>
            </div>
        <br><br>
        <p>14. Provided that $x and $y are false, and $z is true, which of the following if() functions would be true?</p>
            <div id="parent">
                <div id="child"><input type="radio" name="Q14" value="A">A. if(($x || $y) && $z)</div>
                <div id="child"><input type="radio" name="Q14" value="B">B. if(($x && $y) || $z)</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" name="Q14" value="C">C. if($x || ($y && $z))</div>
                <div id="child"><input type="radio" name="Q14" value="D">D. if($x && ($y || $z))</div>
            </div>
        <br><br>
        <p>15. What does PHP stand for?</p>
            <div id="parent">
                <div id="child"><input type="radio" name="Q15" value="A">A. PHP: Hypertext Pascalprocessor</div>
                <div id="child"><input type="radio" name="Q15" value="B">B. PHP: Hypertext Postprocessor</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" name="Q15" value="C">C. PHP: Hypertext Preprocessor</div>
                <div id="child"><input type="radio" name="Q15" value="D">D. PHP: Hypertext Processor</div>
            </div>
        <br><br>
            <div id="parent">
                <div id="child"><input type="reset" id="button" value="Click here to Reset"></div>
                <div id="child"><input type="submit" id="button" value="Click here to Submit"></div>
            </div>
        </form>
    </div>
</div>
</body>

</html>