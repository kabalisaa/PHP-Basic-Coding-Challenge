<!DOCTYPE html>
<html>
<body>

<?php

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$even_sum = 0;
$even_product = 1;
$odd_sum = 0;
$odd_product = 1;

foreach ($numbers as $number) {
  if ($number % 2 == 0) {
    $even_sum += $number;
    $even_product *= $number;
  } else {
    $odd_sum += $number;
    $odd_product *= $number;
  }
}

echo "Sum of even numbers: $even_sum\n";
echo "Product of even numbers: $even_product\n";
echo "Sum of odd numbers: $odd_sum\n";
echo "Product of odd numbers: $odd_product\n";

?>



</body>
</html>