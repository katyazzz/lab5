<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    if ($num1 > $num2) {
        echo "Большее число: $num1";
    } elseif ($num1 < $num2) {
        echo "Большее число: $num2";
    } else {
        echo "Числа равны";
    }
}
?>
