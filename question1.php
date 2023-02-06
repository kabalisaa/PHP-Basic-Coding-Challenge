<!DOCTYPE html>
<html>
<body>

<?php

$array = array(1,2,3,6,7);
$expected = range(1,10);
$missing = array_diff($expected, $array);

if (empty($missing)) {
    echo "No missing numbers";
} else {
    echo "Missing numbers: " . implode(',', $missing);
}

?>


</body>
</html>