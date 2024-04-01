<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тестовое задание - 4 задание</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
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
                        <a class="nav-link" href="third_task.php">3 - задание</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active" aria-current="page" href="#">4 - задание</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container">
            <h2 class="my-5">Задание 4. SQL запрос</h2>
            <code>
                SELECT user.user_id, user.firstName, user.lastName, city.city
                FROM user
                JOIN city
                ON user.city_id=city.city_id;
            </code>
        </div>
    </main>
</header>
</body>
</html>