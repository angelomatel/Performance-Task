<html>
<body>

<?php
// 11.
echo ("<br>");
$x = 2;
$y = 2.0;

$a = ($x == $y ? "TRUE" : "FALSE"); // $x IS EQUAL TO $y = TRUE
$b = ($x === $y ? "TRUE" : "FALSE"); // $x IS EQUAL AND SAME TYPE AS $y = FALSE
$c = ($x != $y ? "TRUE" : "FALSE"); // $x IS NOT EQUAL TO $y = FALSE
$d = ($x <> $y ? "TRUE" : "FALSE"); // $x IS NOT EQUAL TO $y = FALSE
echo ("A. $a <br>B. $b <br>C. $c <br>D. $d<br>");

// 12.
echo ("<br>");
$x = 2;
$y = 2.0;

$a = ($x <= $y ? "TRUE" : "FALSE"); // $x IS LESS THAN OR EQUAL TO $y = TRUE
$b = ($x >= $y ? "TRUE" : "FALSE"); // $x IS GREATER THAN OR EQUAL TO $y = TRUE
$c = ($x == $y ? "TRUE" : "FALSE"); // $x IS EQUAL TO $y = TRUE
$d = ($x <> $y ? "TRUE" : "FALSE"); // $x IS NOT EQUAL TO $y = FALSE
echo ("A. $a <br>B. $b <br>C. $c <br>D. $d<br>");

// 13.
echo ("<br>");
$x = $y = TRUE;
$z = FALSE;

$a = (($x || $y) && $z ? "TRUE" : "FALSE"); // (TRUE) AND FALSE = FALSE
$b = (($x && $y) || $z ? "TRUE" : "FALSE"); // (TRUE) OR FALSE = TRUE
$c = ($x || ($y && $z) ? "TRUE" : "FALSE"); // TRUE OR (FALSE) = TRUE
$d = ($x && ($y || $z) ? "TRUE" : "FALSE"); // TRUE AND (TRUE) = TRUE
echo ("A. $a <br>B. $b <br>C. $c <br>D. $d<br>");

// 14.
echo ("<br>");
$x = $y = FALSE;
$z = TRUE;

$a = (($x || $y) && $z ? "TRUE" : "FALSE"); // (FALSE) AND TRUE = FALSE
$b = (($x && $y) || $z ? "TRUE" : "FALSE"); // (FALSE) OR TRUE = TRUE
$c = ($x || ($y && $z) ? "TRUE" : "FALSE"); // FALSE OR (FALSE) = FALSE
$d = ($x && ($y || $z) ? "TRUE" : "FALSE"); // FALSE AND (FALSE) = FALSE
echo ("A. $a <br>B. $b <br>C. $c <br>D. $d<br>");

?>

</body>
</html>