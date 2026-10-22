<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.php");
    exit;
}
$name = htmlspecialchars($_POST["name"] ?? "");
$surname = htmlspecialchars($_POST["surname"] ?? "");
$age = htmlspecialchars($_POST["age"] ?? "");
$email = htmlspecialchars($_POST["email"] ?? "");

if ($name == "" || $surname == "" || $age == "" || $email == "") {
    echo "Будь ласка, заповніть усі поля!";
    exit;
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Профіль користувача</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="profile">
    <h2>Вітаємо, <?php echo $name; ?>!</h2>
    <p><strong>Ім'я:</strong> <?php echo $name; ?></p>
    <p><strong>Прізвище:</strong> <?php echo $surname; ?></p>
    <p><strong>Вік:</strong> <?php echo $age; ?></p>
    <p><strong>Електронна пошта:</strong> <?php echo $email; ?></p>

    <a href="index.php">Повернутися до реєстрації</a>
</div>
</body>
</html>