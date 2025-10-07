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
<body class="text-center">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="form_page.php">Main page(Form)</a>
                    <a class="nav-item nav-link" href="table_page.php">Second page(Table)</a>
                </div>
            </div>
        </nav>

    <div class="container mt-5">

        <div class="d-flex justify-content-center">
        <form action="send_form.php" method="POST" style="width: 26rem;">

            <div data-mdb-input-init class="form-outline mb-4">
                <input required type="text" id = 'firstName' name="firstName" class="form-control" />
                <label class="form-label" for="firstName">FirstName</label>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <input required type="text" id = 'lastName' name="lastName" class="form-control" />
                <label class="form-label" for="lastName">LastName</label>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
                <input required type="text" id = 'phone' name="phone" class="form-control" />
                <label class="form-label" for="phone">Phone</label>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <input required type="email" id = 'email' name="email" class="form-control" />
                <label class="form-label" for="email">Email</label>
            </div>

            <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">створити</button>
        </form>
        </div>

<!--old form-->
<!--        <h1>Form </h1>-->
<!--        <form action="send_form.php" method="POST">-->
<!--            <div class="form-group">-->
<!--                <label for="firstName"> firstName</label>-->
<!--                <input  type="text" id="firstName" name="firstName" required>-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label for="lastName"> lastName</label>-->
<!--                <input type="text" id="lastName" name="lastName" required>-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label for="phone"> phone</label>-->
<!--                <input type="tel" id="phone" name="phone" required>-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label for="email">Email</label>-->
<!--                <input type="email" id="email" name="email" required>-->
<!--            </div>-->
<!--            <button type="submit">Отправить</button>-->
<!--        </form>-->

    </div>
</body>
</html>