<?php
require_once 'api_funcs.php';
$filter = [
    "date_from" => "2025-01-01 00:00:00",
       "date_to" => "2025-05-31 23:59:59",];
$statuses = getstatuses($filter);

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

            <p class="mt-4">Класс <code>.table-bordered</code> Bootstrap </p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">FTD</th>
                </tr>
                </thead>

                <tbody>

                <?php foreach ($statuses as $status): ?>

                    <tr>
                        <th scope="row"><?= $status['id'] ?></th>
                        <td><?= $status['email'] ?></td>
                        <td><?= $status['status'] ?></td>
                        <td><?= $status['ftd'] ?></td>
                    </tr>

                <?php endforeach; ?>


                </tbody>
            </table>
        </div>
    </div>
</body>
</html>