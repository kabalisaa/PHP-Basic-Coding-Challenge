<!DOCTYPE html>
<html>
<body>

<?php

$a = 5;
$b = 10;

echo "Before swap: \n";
echo "a = $a \n";
echo "b = $b \n\n";

$temp = $a;
$a = $b;
$b = $temp;

echo "After swap: \n";
echo "a = $a \n\n";
echo "b = $b \n\n";

?>

</body>
</html>