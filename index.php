<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тестовое задание</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header">
    <nav class="navbar navbar-expand-xxl  navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Тестовое задание</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">1 - задание</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="two-task.php">2 - задание</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="third_task.php">3 - задание</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fourth_task.php">4 - задание</a>
                    </li>
                </ul>
            </div>
        </div>
</header>
<main class="main">
    <div class="container">
        <h2 class="my-5">Задание 1. Форма обратной связи</h2>
        <form class="mx-auto mt-5" id="feedbackForm"  style="max-width: 600px">
            <div class="row mb-3">
                <label for="nameInputField" class="col-sm-2 col-form-label">Имя:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nameInputField"  name="nameInputField" placeholder="Укажите ваше имя" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="emailInputField" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="emailInputField" name="emailInputField" placeholder="Укажите вашу почту, например: example@mail.ru" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="messageTextArea" class="col-sm-2 col-form-label">Сообщение:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="messageTextArea" name="messageTextArea" rows="3" required></textarea>
                </div>
            </div>

            <div class="form-file mb-4">
                <input type="file" name="picture" class="form-file-input" id="customFile">
            </div>
            <button type="submit" class="btn btn-primary">Записать</button>
        </form>
        <div class="alert" role="alert"></div>
    </div>
</main>

<script src="js/script.js"></script>
</body>
</html>