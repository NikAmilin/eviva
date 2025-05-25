<?php
require_once 'model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $errors = validateForm($name, $email, $message);

    if (empty($errors)) {
        saveMessage($name, $email, $message);
        $successMessage = "Thank you, $name. Your message has been received.";
    }
}
include 'view.php';
?>