<html>
<body>

<?php  
$x = 2;
$y = 2.0;
$z = ($x <> $y ? TRUE : FALSE);
echo var_dump($z);

if((FALSE && FALSE) || TRUE) {
    echo "TRUE";
} else
echo "FALSE";
?>

</body>
</html>