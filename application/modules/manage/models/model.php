<?php
function validateForm($name, $email, $message) {
    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email is required.";
    }
    if (empty($message)) {
        $errors[] = "Message cannot be empty.";
    }

    return $errors;
}

function saveMessage($name, $email, $message) {
    // Placeholder for database save logic
    // Example: 
    // $db = new mysqli('host', 'username', 'password', 'database');
    // $stmt = $db->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
    // $stmt->bind_param("sss", $name, $email, $message);
    // $stmt->execute();
}
?>
