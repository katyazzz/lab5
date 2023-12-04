<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            display: inline-block;
            margin: 5px;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Number Operations</h1>

    <form action="#" method="post" id="numberForm">
        <label for="operation">Выберите операцию:</label>
        <select id="operation" name="operation">
            <option value="even">Четные числа</option>
            <option value="odd">Нечетные числа</option>
            <option value="prime">Простые числа</option>
            <option value="composite">Составные числа</option>
        </select>

        <br>

        <label for="limit">Введите N (максимальное число):</label>
        <input type="text" id="limit" name="limit" required>

        <br>

        <input type="submit" value="Показать числа">
    </form>

    <h2>Результат:</h2>

    <ul id="resultList"></ul>

    <script>
        document.getElementById('numberForm').addEventListener('submit', function (event) {
            event.preventDefault();

            document.getElementById('resultList').innerHTML = '';

            var operation = document.getElementById('operation').value;
            var limit = parseInt(document.getElementById('limit').value, 10);

            if (isNaN(limit) || limit <= 0) {
                alert('Пожалуйста, введите положительное число.');
                return;
            }

            switch (operation) {
                case 'even':
                    for (var i = 2; i <= limit; i += 2) {
                        appendToList(i);
                    }
                    break;
                case 'odd':
                    for (var i = 1; i <= limit; i += 2) {
                        appendToList(i);
                    }
                    break;
                case 'prime':
                    for (var i = 2; i <= limit; i++) {
                        if (isPrime(i)) {
                            appendToList(i);
                        }
                    }
                    break;
                case 'composite':
                    for (var i = 4; i <= limit; i++) {
                        if (!isPrime(i)) {
                            appendToList(i);
                        }
                    }
                    break;
            }
        });

        function isPrime(num) {
            for (var i = 2; i < num; i++) {
                if (num % i === 0) {
                    return false;
                }
            }
            return num !== 1;
        }

        function appendToList(num) {
            var li = document.createElement('li');
            li.textContent = num;
            document.getElementById('resultList').appendChild(li);
        }
    </script>
</body>
</html>
