<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тестовое задание - 2 задание</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<?php
    include 'utils/functions.php';

    $products = array();

    if ($_FILES) {
        $CSVFile = uploadFile('csvFile', 'text/csv');

        try {
            $products = getCSV($CSVFile);
        } catch (Exception $e) {
            echo "Ошибка - {$e->getMessage()}";
        }
    }

    function getCSV($file): array
    {
        $arrayDataFile = array();

        $handle = fopen($file, 'r');

        while (($line = fgetcsv($handle, 0, ',')) !== FALSE) {
            $arrayDataFile[] = $line;
        }

        fclose($handle);

        return $arrayDataFile;
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
                        <a class="nav-link active" aria-current="page" href="#">2 - задание</a>
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
        <h2 class="my-5">Задание 2. Вывод таблицы из csv файла</h2>

        <form class="mb-5" action="" method="post" enctype="multipart/form-data">
            <div class="form-file mb-3">
                <input type="file" name="csvFile" class="form-file-input" id="customFile">
            </div>
            <button type="submit" class="btn btn-primary">Загрузить</button>
        </form>

        <?php
            if ($products) {
        ?>
                <table class="table">
                    <thead>
                        <tr>
                            <?php
                            foreach ($products[0] as $productTitle) {
                                echo "<th scope=\"col\">{$productTitle}</th>";
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        for ($i = 1; $i < count($products); $i++) {
                    ?>
                        <tr>
                            <?php
                                foreach ($products[$i] as $product) {
                            ?>
                                <td><?php echo $product?></td>
                            <?php
                                }
                            ?>
                        </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
        <?php
            } else {
                echo 'Вы не загрузили файл';
            }
        ?>
    </div>
</main>
</body>
</html>
