<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST["username"];

    $registeredUsernames = ["katya", "admin", "noname"];

    if (in_array($enteredUsername, $registeredUsernames)) {
        echo "Здравствуйте, " . getUsernameInfo($enteredUsername) . "!";
    } else {
        echo "Вы не зарегистрированный пользователь!";
    }
}

function getUsernameInfo($username) {
    $usernamesInfo = [
        "katya" => "Зубова Екатерина Дмитриевна",
        "admin" => "Администратор",
        "noname" => "Никто"
    ];

    return $usernamesInfo[$username];
}
?>
