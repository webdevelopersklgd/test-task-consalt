<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тестовое задание - 3 задание</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<?php
$sumNumber = 0;

for ($j = 0; $j < 1000; $j++) {
    if ($j % 5 === 0 || $j % 3 === 0) $sumNumber += $j;
}
?>
<header class="header">
    <nav class="navbar navbar-expand-xxl  navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Тестовое задание</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">1 - задание</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="two-task.php">2 - задание</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">3 - задание</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fourth_task.php">4 - задание</a>
                    </li>
                </ul>
            </div>
        </div>
</header>

<main>
    <div class="container">
        <h2 class="my-5">Задание 3. Натуральные числа</h2>
            <p>Сумма чисел меньше 1000 и кратное 3 или 5 - <?php echo $sumNumber ?></p>
</main>

</body>
</html>