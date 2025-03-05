<?php

require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST['type'];
    $category = $_POST['category'];
    $amount = $_POST['amount'];
    $date = date('Y-m-d'); 

    $stmt = $conn->prepare("INSERT INTO transaction (type, category, amount, date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssds", $type, $category, $amount, $date);

    if ($stmt->execute() === TRUE) {
        echo "<div class='notification is-success'>Transaction added successfully!</div>";
    } else {
        echo "<div class='notification is-danger'>Error: " . $conn->error . "</div>";
    }

    $stmt->close();
}
?>