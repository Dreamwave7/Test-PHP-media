<?php
require_once 'api_funcs.php';


$defaultDateTo = $_GET['date_from'] ?? date('Y-m-d');
$defaultDateFrom = $_GET['date_to'] ??date('Y-m-d',strtotime('- 3 days'));

if ($defaultDateFrom < $defaultDateTo){

    $filter = [
        "date_from" => $defaultDateFrom,
           "date_to" => $defaultDateTo];

    $statuses = getstatuses($filter);
}
else
{
    $statuses = [];
//    TEST STATUSES
//    $statuses = [
//        ['id' => 123, 'email' => 'test@test.com', 'status' => 'oke', 'ftd' => ok],
//        ['id' => 4523, 'email' => 'test@test.com', 'status' => 'oke', 'ftd' => true],
//        ['id' => 5, 'email' => 'test@test.com', 'status' => 'okeoke', 'ftd' => false]
//    ];
}


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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="form_page.php">Main page(Form)</a>
            <a class="nav-item nav-link" href="table_page.php">Second page(Table)</a>
        </div>
    </div>
</nav>


<div class="container">

    <div class="container mt-5">
        <form action="table_page.php" method="GET" >
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="date" name="date_from" id="date_from" class="form-control" />
                <label class="form-date_from" for="date_from">Date from</label>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <input type="date" id="date_to" name="date_to" class="form-control" />
                <label class="form-date_from" for="date_to">Date To</label>
            </div>

            <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block">пошук</button>
        </form>
    </div>

        <div class="container mt-5" >

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