<?php

function uploadFile($inputName, $validTypeFile): string
{
    $filesDir = $_SERVER['DOCUMENT_ROOT'] . '/files/';

    if (!$_FILES[$inputName]['name'])
        return '';

    if (!file_exists($filesDir)) {
        mkdir($filesDir, 0777);
        mkdir($filesDir . 'img');
    }

    $uploadFile = ($_FILES[$inputName]['type'] === 'image/jpeg' ? $filesDir . 'img/' : $filesDir)
        . basename($_FILES[$inputName]['name']);

    if (isValidType($_FILES[$inputName]['type'], $validTypeFile) && move_uploaded_file($_FILES[$inputName]['tmp_name'], $uploadFile)) {
        return $uploadFile;
    } else {
        return "Файл не был загружен - {$_FILES[$inputName]['error']}";
    }
}

function isValidType($file, $validTypeFile): bool
{
    return $file === $validTypeFile;
}