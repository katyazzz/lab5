<?php
$result = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    if (!is_numeric($num1) || !is_numeric($num2)) {
        $error = "Пожалуйста, введите числа.";
    } else {
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $error = "На ноль делить нельзя.";
                }
                break;
            default:
                $error = "Выберите операцию.";
                break;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        form {
            display: inline-block;
            text-align: left;
        }

    </style>
</head>
<body>
    <h1>Калькулятор</h1>
    
    <?php if (!empty($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="num1">Введите первое число:</label>
        <input type="text" id="num1" name="num1" required value="<?php echo isset($num1) ? $num1 : ''; ?>">

        <label for="num2">Введите второе число:</label>
        <input type="text" id="num2" name="num2" required value="<?php echo isset($num2) ? $num2 : ''; ?>">

        <label for="operation">Выберите операцию:</label>
        <select id="operation" name="operation">
            <option value="add">Сложение</option>
            <option value="subtract">Вычитание</option>
            <option value="multiply">Умножение</option>
            <option value="divide">Деление</option>
        </select>

        <input type="submit" value="Выполнить операцию">
    </form>

    <?php if (!empty($result)): ?>
        <h2>Результат: <?php echo $result; ?></h2>
    <?php endif; ?>
</body>
</html>
