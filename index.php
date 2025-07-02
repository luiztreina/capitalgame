<?php
require 'db.php';

$capitals = [
    "Brazil" => "Brasília",
    "USA" => "Washington, D.C.",
    "France" => "Paris",
    "Germany" => "Berlin",
    "Japan" => "Tokyo"
];

$capital = "";
if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["country"])) {
    $country = trim($_POST["country"]);
    $capital = $capitals[$country] ?? "Not found";

    // Log to RDS
    $stmt = $pdo->prepare("INSERT INTO lookups (country, capital) VALUES (?, ?)");
    $stmt->execute([$country, $capital]);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Country Capital Game</title>
</head>
<body>
<h1>Enter a country to get its capital</h1>
<form method="post">
    <input type="text" name="country" required>
    <input type="submit" value="Find Capital">
</form>
<?php if ($capital): ?>
    <p>Capital: <?= htmlspecialchars($capital) ?></p>
<?php endif; ?>
</body>
</html>
