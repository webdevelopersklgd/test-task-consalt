<?php
    include 'utils/functions.php';
    $userName = $_POST['nameInputField'];
    $userMessage = $_POST['messageTextArea'];
    $userEmail = $_POST['emailInputField'];

    if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        $imgPath = uploadFile('picture', 'image/jpeg');

        writeMessageToFile($userName, $userMessage, $imgPath);
    } else {
        echo getStatusInJson('danger', 'Почта не проходит проверку');
    }

    function writeMessageToFile(string $userName, string $userMessage, string $pathImg): void
    {
        $message = "Сообщение - {$userMessage} \nПуть к картинке - {$pathImg}";
        $fd = fopen("files/{$userName} - Message.txt", "w");
        fwrite($fd, $message);
        fclose($fd);
        echo getStatusInJson('success', 'Файл успешно загружен');
    }

    function getStatusInJson(string $status, string $text): string
    {
        return json_encode(['status' => $status, 'text' => $text]);
    }

