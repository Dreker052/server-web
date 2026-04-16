<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Headers Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <img src="https://mospolytech.ru/local/templates/main/dist/img/logos/mospolytech-logo-white.svg" alt="Логотип МосПолитех">
        <h1>Feedback form</h1>
        <div class="header-spacer"></div>
    </header>

    <main>
        <h2>Результат работы функции get_headers()</h2>
        
        <?php
            $url = 'https://httpbin.org';
            
            $headers = get_headers($url);
            
            if ($headers) {
                $headers_text = implode("\n", $headers);
            } else {
                $headers_text = "Не удалось получить заголовки.";
            }
        ?>

        <textarea class="result-box" readonly><?php echo htmlspecialchars($headers_text); ?></textarea>
        
        <br><br>
        <a href="index.html" class="btn">Вернуться к форме</a>
    </main>

    <footer>
        Задание для самостоятельной работы
    </footer>

</body>
</html>