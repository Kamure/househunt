<?php



echo "Signup.php loaded<br>";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'mail.php';
require_once __DIR__ . '/includes/database.php';

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/ClassAutoLoad.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nameInput = $_POST['name'];
    $emailInput = $_POST['email'];
    $passwordInput = $_POST['password'];
require_once __DIR__ . '/includes/User.php';

    $newUser = new User($nameInput, $emailInput);

    if (!filter_var($newUser->email, FILTER_VALIDATE_EMAIL)) {
        die("Oops! That email doesn't look valid.");
    }
$hashedPassword = password_hash($passwordInput, PASSWORD_DEFAULT);

$insertQuery = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $insertQuery->execute([$newUser->name, $newUser->email, $hashedPassword]);

    $mailContent = [
        'email'   => $newUser->email,
        'name'    => $newUser->name,
        'subject' => "Welcome to Househunt!",
        'body'    => "<h1>Hi {$newUser->name}!</h1><p>Welcome to Househunt. We're thrilled to have you!</p>",
        'altbody' => "Hi {$newUser->name}, Welcome to Househunt!"
    ];

    sendWelcomeEmail($mailContent['email'], $mailContent['name']);

    echo "Signup successful. Welcome email sent!";
}
?>