<?php

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
<!--    <link rel="stylesheet" href="style.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div style="background: aquamarine">
            <nav >
                <a style="margin: 15px" href="form_page.php" >Main page(Form)</a>
                <a style="margin: 15px" href="table_page.php" >Second page(Table)</a>
            </nav>
        </div>

        <div style="margin: 100px">

        <h1>Form </h1>
        <form action="send_form.php" method="POST">
            <div class="form-group">
                <label for="firstName"> firstName</label>
                <input  type="text" id="firstName" name="firstName" required>
            </div>
            <div class="form-group">
                <label for="lastName"> lastName</label>
                <input type="text" id="lastName" name="lastName" required>
            </div>
            <div class="form-group">
                <label for="phone"> phone</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <button type="submit">Отправить</button>
        </form>
        </div>
    </div>
</body>
</html>