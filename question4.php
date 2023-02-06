<!DOCTYPE html>
<html>
<body>

<?php

$array = array(1,2,3,2,1,2,3,4,5,3,2);
$element = 2;
$count = 0;

foreach ($array as $value) {
  if ($value == $element) {
    $count++;
  }
}

echo "The number of repetition of $element in the array is $count";

?>


</body>
</html>