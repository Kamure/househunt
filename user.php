<?php
require_once 'config.php';
require_once 'includes/database.php';
require_once 'includes/ClassAutoLoad.php';

$layout = new Layouts();
$layout->heading($conf);
?>

<h2>Registered Users</h2>
<?php
$stmt = $pdo->query("SELECT username, email FROM users ORDER BY id ASC");
$users = $stmt->fetchAll();

if (count($users) > 0) {
    echo "<ol>";
    foreach ($users as $user) {
        echo "<li>{$user['username']} ({$user['email']})</li>";
    }
    echo "</ol>";
} else {
    echo "<p>No users have signed up yet.</p>";
}
?>

<?php
$layout->footer($conf);
?>