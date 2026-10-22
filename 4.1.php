
<?php
session_start();
if (!isset($_SESSION["number"])) {
    $_SESSION["number"] = rand(1, 100);
    $_SESSION["attempts"] = 0;
    $_SESSION["finished"] = false;
}
$message = "";
if (isset($_POST["guess"]) && !$_SESSION["finished"]) {
    $guess = (int) $_POST["guess"];
    $_SESSION["attempts"]++;

    if ($guess < $_SESSION["number"]) {
        $message = "Загадане число більше!";
    } elseif ($guess > $_SESSION["number"]) {
        $message = "Загадане число менше!";
    } else {
        $message = "Вітаю! Ти вгадав число!";
        $_SESSION["finished"] = true;
    }
}

if (isset($_POST["restart"])) {
    $_SESSION["number"] = rand(1, 100);
    $_SESSION["attempts"] = 0;
    $_SESSION["finished"] = false;
    $message = "Нову гру розпочато!";
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Угадай число</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #182435;
            color: #222;
            text-align: center;
            padding: 80px 15px;
        }
        .game {
            background: white;
            max-width: 350px;
            margin: auto;
            padding: 25px;
            border-radius: 12px;
        }
        input, button {
            padding: 10px;
            margin: 7px 0;
            width: 100%;
            box-sizing: border-box;
            border-radius: 6px;
        }
        input {
            border: 1px solid #ccc;
        }
        button {
            background: #315a9b;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #243b55;
        }
        .bars {
            color: #315a9b;
            font-size: 20px;
            overflow-wrap: anywhere;
        }
    </style>
</head>
<body>
<div class="game">
    <h2>🎯 Вгадай число</h2>
    <p>Я загадав число від 1 до 100.</p>
    <form method="POST">
        <input type="number" name="guess" min="1" max="100"
            placeholder="Введи число" required
            <?php if ($_SESSION["finished"]) echo "disabled"; ?>>

        <button type="submit"
            <?php if ($_SESSION["finished"]) echo "disabled"; ?>>
            Перевірити
        </button>
    </form>
    <p><?php echo htmlspecialchars($message); ?></p>
    <p>Номер спроби: <?php echo $_SESSION["attempts"]; ?></p>
    <div class="bars">
        <?php echo str_repeat("|", $_SESSION["attempts"]); ?>
    </div>
    <form method="POST">
        <button type="submit" name="restart">Нова гра</button>
    </form>
</div>
</body>
</html>
