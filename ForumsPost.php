<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    if ($message !== '') {
        file_put_contents('messages.txt', $message . PHP_EOL, FILE_APPEND);
    }
}

header('Location: ForumsTwo.php');
exit;
?>