<html>
<head>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
<div id="header">
    <span class="title">The Quiz Questions</span>
</div>

<div id="container">
    <div id="wrapper">
        <form action="quiz_results.php" method="POST">
        <p>1. What do you use when commenting SINGLE lines in PHP?</p>
            <div id="parent">
                <div id="child"><input type="radio" id="A" name="1">A. !- or !+</div>
                <div id="child"><input type="radio" id="B" name="1">B. // or #</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" id="C" name="1">C. -- or ++</div>
                <div id="child"><input type="radio" id="D" name="1">D. /* or */</div>
            </div>
        <br><br>
        <p>2. What is the data type that are a sequence of characters?</p>
            <div id="parent">
                <div id="child"><input type="radio" id="A" name="2">A. Float</div>
                <div id="child"><input type="radio" id="B" name="2">B. Integer</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" id="C" name="2">C. String</div>
                <div id="child"><input type="radio" id="D" name="2">D. Array</div>
            </div>
        <br><br>
        <p>3. What is the data type that only consists of whole numbers?</p>
            <div id="parent">
                <div id="child"><input type="radio" id="A" name="3">A. Float</div>
                <div id="child"><input type="radio" id="B" name="3">B. Integer</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" id="C" name="3">C. String</div>
                <div id="child"><input type="radio" id="D" name="3">D. Array</div>
            </div>
        <br><br>
        <p>4. What is the data type that only consists of numbers with decimal point?</p>
            <div id="parent">
                <div id="child"><input type="radio" id="A" name="4">A. Float</div>
                <div id="child"><input type="radio" id="B" name="4">B. Integer</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" id="C" name="4">C. String</div>
                <div id="child"><input type="radio" id="D" name="4">D. Array</div>
            </div>
        <br><br>
        <p>5. What is the data type that consists of multiple values?</p>
            <div id="parent">
                <div id="child"><input type="radio" id="A" name="5">A. Float</div>
                <div id="child"><input type="radio" id="B" name="5">B. Integer</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" id="C" name="5">C. String</div>
                <div id="child"><input type="radio" id="D" name="5">D. Array</div>
            </div>
        <br><br>
        <p>6. Which of the following functions should you use to get the length of the string "Hello World"?</p>
            <div id="parent">
                <div id="child"><input type="radio" id="A" name="6">A. lenstr("Hello World");</div>
                <div id="child"><input type="radio" id="B" name="6">B. len("Hello World");</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" id="C" name="6">C. str_len("Hello World");</div>
                <div id="child"><input type="radio" id="D" name="6">D. strlen("Hello World");</div>
            </div>
        <br><br>
        <p>7. Which of the following functions should you use to replace the word "Hello" in "Hello World" with "Hi" to output "Hi World"?</p>
            <div id="parent">
                <div id="child"><input type="radio" id="A" name="7">A. replacestr("Hello", "Hi", "Hello World");</div>
                <div id="child"><input type="radio" id="B" name="7">B. replace("Hello World", "Hello", "Hi");</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" id="C" name="7">C. str_replace("Hello", "Hi", "Hello World");</div>
                <div id="child"><input type="radio" id="D" name="7">D. strreplace("Hi", "Hello", "Hello World");</div>
            </div>
        <br><br>
        <p>8. Which of the following functions should you use to reverse the string "Hello World"?</p>
            <div id="parent">
                <div id="child"><input type="radio" id="A" name="8">A. revstr("Hello World");</div>
                <div id="child"><input type="radio" id="B" name="8">B. rev("Hello World");</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" id="C" name="8">C. str_rev("Hello World");</div>
                <div id="child"><input type="radio" id="D" name="8">D. strrev("Hello World");</div>
            </div>
        <br><br>
        <p>9. Which of the following functions should you use to get the number of words in the string "Hello World"?</p>
            <div id="parent">
                <div id="child"><input type="radio" id="A" name="9">A. str_word_count("Hello world");</div>
                <div id="child"><input type="radio" id="B" name="9">B. word_count_str("Hello world");</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" id="C" name="9">C. str_count("Hello world");</div>
                <div id="child"><input type="radio" id="D" name="9">D. count_str("Hello world");</div>
            </div>
        <br><br>
        <p>10. How would you define a constant named STRING with the value of "Hello World" that is case-insensitive using the define() function?</p>
            <div id="parent">
                <div id="child"><input type="radio" id="A" name="10">A. define("Hello World", "STRING", true);</div>
                <div id="child"><input type="radio" id="B" name="10">B. define("STRING", "Hello World", true);</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" id="C" name="10">C. define("Hello World", "STRING", insensitive);</div>
                <div id="child"><input type="radio" id="D" name="10">D. define("STRING", "Hello World", insensitive);</div>
            </div>
        <br><br>
        <p>11. Provided that $x is 2 and $y is 2.0, which of the following if() functions would be true?</p>
            <div id="parent">
                <div id="child"><input type="radio" id="A" name="11">A. if($x == $y)</div>
                <div id="child"><input type="radio" id="B" name="11">B. if($x === $y)</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" id="C" name="11">C. if($x != $y)</div>
                <div id="child"><input type="radio" id="D" name="11">D. if($x !== $y)</div>
            </div>
        <br><br>
        <p>12. Provided that $x is 2 and $y is 2.0, which if the following if() functions would be false?</p>
            <div id="parent">
                <div id="child"><input type="radio" id="A" name="12">A. if($x <= $y)</div>
                <div id="child"><input type="radio" id="B" name="12">B. if($x >= $y)</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" id="C" name="12">C. if($x != $y)</div>
                <div id="child"><input type="radio" id="D" name="12">D. if($x <> $y)</div>
            </div>
        <br><br>
        <p>13. Provided that $x and $y are true, and $z is false, which of the following if() functions would be true?</p>
            <div id="parent">
                <div id="child"><input type="radio" id="A" name="13">A. if(($x || $y) && $z)</div>
                <div id="child"><input type="radio" id="B" name="13">B. if(($x && $y) || $z)</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" id="C" name="13">C. if($x || ($y && $z))</div>
                <div id="child"><input type="radio" id="D" name="13">D. if($x && ($y || $z))</div>
            </div>
        <br><br>
        <p>14. Provided that $x and $y are false, and $z is true, which of the following if() functions would be true?</p>
        <div id="parent">
                <div id="child"><input type="radio" id="A" name="14">A. if(($x || $y) && $z)</div>
                <div id="child"><input type="radio" id="B" name="14">B. if(($x && $y) || $z)</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" id="C" name="14">C. if($x || ($y && $z))</div>
                <div id="child"><input type="radio" id="D" name="14">D. if($x && ($y || $z))</div>
            </div>
        <br><br>
        <p>15. What does PHP stand for?</p>
            <div id="parent">
                <div id="child"><input type="radio" id="A" name="15">A. PHP: Hypertext Pascalprocessor</div>
                <div id="child"><input type="radio" id="B" name="15">B. PHP: Hypertext Postprocessor</div>
            </div>
            <div id="parent">
                <div id="child"><input type="radio" id="C" name="15">C. PHP: Hypertext Preprocessor</div>
                <div id="child"><input type="radio" id="D" name="15">D. PHP: Hypertext Processor</div>
            </div>
        <br><br>
        <input type="reset" id="button" value="Reset">
        <input type="submit" id="button" value="Submit">
        </form>
    </div>
</div>
</body>

</html>