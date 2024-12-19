<?php
$number1 = 4;
$number2=5;

echo "the numbers are " . $number1 . "and " . $number2 . "<br>";
echo "the sum of " . $number1 . "+" . $number2 . "=" . ($number1 + $number2) . "<br>";
echo "the substraction of " . $number1 . "-" . $number2 . "=" . ($number1 - $number2) . "<br>";
echo "the division of " . $number1 . "/" . $number2 . "=" . ($number1/$number2) . "<br>";


if ($number1>$number2) {
    # code...
    echo "the number " . $number1 . " is the gratest number " . $number2 . "<br>";
    
} else if ($number1<$number2) {
    # code...
    echo "the number " . $number1 . " is the gratest number " . $number2 . "<br>";
    
}else{
    # code...
    echo "the numbers are equal" . "<br>";
}


// Si las dos variables son valores superiores a 1.
if ($number1 >1 && $number2 >1) {
    # code...
    echo "the area" . ($number1*$number2/2) . "<br>";
}
?>