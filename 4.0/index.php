<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Реєстрація користувача</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Реєстрація користувача</h2>
<form action="profile.php" method="POST">
    <label>Ім'я:</label>
    <input type="text" name="name" placeholder="Введіть ім'я" required>
    <label>Прізвище:</label>
    <input type="text" name="surname" placeholder="Введіть прізвище" required>
    <label>Вік:</label>
    <input type="number" name="age" placeholder="Введіть вік" min="1" required>
    <label>Електронна пошта:</label>
    <input type="email" name="email" placeholder="Введіть email" required>
    <button type="submit">Зареєструватися</button>
</form>
</body>
</html>
