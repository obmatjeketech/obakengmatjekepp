<?php require 'config.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $stmt = $pdo->prepare("INSERT INTO contacts (name, email, phone, message) VALUES (?,?,?,?)");
    $stmt->execute([$name, $email, $phone, $message]);
    // Optional: Send email notification to Obakeng
    // mail(SITE_EMAIL, "New contact from website", "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message");
    header("Location: index.php?msg=sent");
}
?>