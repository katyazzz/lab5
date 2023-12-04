<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат анкеты</title>
</head>
<body>
    <?php
        $name = $_POST['name'];
        $points = 0;

        // Суммируем баллы
        $points += ($_POST['q3'] == 'yes') ? 1 : 0;
        $points += ($_POST['q9'] == 'yes') ? 1 : 0;
        $points += ($_POST['q10'] == 'yes') ? 1 : 0;
        $points += ($_POST['q13'] == 'yes') ? 1 : 0;
        $points += ($_POST['q14'] == 'yes') ? 1 : 0;
        $points += ($_POST['q19'] == 'yes') ? 1 : 0;

        $points -= ($_POST['q1'] == 'yes') ? 1 : 0;
        $points -= ($_POST['q2'] == 'yes') ? 1 : 0;
        $points -= ($_POST['q4'] == 'yes') ? 1 : 0;
        $points -= ($_POST['q5'] == 'yes') ? 1 : 0;
        $points -= ($_POST['q6'] == 'yes') ? 1 : 0;
        $points -= ($_POST['q7'] == 'yes') ? 1 : 0;
        $points -= ($_POST['q8'] == 'yes') ? 1 : 0;
        $points -= ($_POST['q11'] == 'yes') ? 1 : 0;
        $points -= ($_POST['q12'] == 'yes') ? 1 : 0;
        $points -= ($_POST['q15'] == 'yes') ? 1 : 0;
        $points -= ($_POST['q16'] == 'yes') ? 1 : 0;
        $points -= ($_POST['q17'] == 'yes') ? 1 : 0;
        $points -= ($_POST['q18'] == 'yes') ? 1 : 0;

        // Выводим результат
        echo "<p>Имя: $name</p>";
        echo "<p>Сумма баллов: $points</p>";

        if ($points > 15) {
            echo "<p>Результат: У Вас покладистый характер</p>";
        } elseif ($points >= 8 && $points <= 15) {
            echo "<p>Результат: Вы не лишены недостатков, но с вами можно ладить</p>";
        } else {
            echo "<p>Результат: Вашим друзьям можно посочувствовать</p>";
        }
    ?>
</body>
</html>
