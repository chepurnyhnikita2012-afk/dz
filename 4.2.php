<?php
session_start();
$words = ["nikita", "hello", "kharkiv", "computer", "school"];
if (!isset($_SESSION["word"]) || isset($_POST["restart"])) {
    $_SESSION["word"] = $words[array_rand($words)];
    $_SESSION["letters"] = [];
    $_SESSION["mistakes"] = 0;
    $_SESSION["finished"] = false;
}
$word = $_SESSION["word"];
$message = "";
if (isset($_POST["letter"]) && !$_SESSION["finished"]) {
    $letter = strtolower(trim($_POST["letter"]));
    if (strlen($letter) == 1 &&
        ctype_alpha($letter) &&
        !in_array($letter, $_SESSION["letters"])) {
        $_SESSION["letters"][] = $letter;
        if (strpos($word, $letter) === false) {
            $_SESSION["mistakes"]++;
        }
    }
    if ($_SESSION["mistakes"] >= 6) {
        $_SESSION["finished"] = true;
        $message = "Ти програв! Слово: " . $word;
    }
}
$display = "";
$won = true;
$chars = str_split($word);
foreach ($chars as $char) {
    if (in_array($char, $_SESSION["letters"])) {
        $display .= $char . " ";
    } else {
        $display .= "_ ";
        $won = false;
    }
}
if ($won) {
    $_SESSION["finished"] = true;
    $message = "Вітаю! Ти вгадав слово!";
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Гра «Виселица»</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #182435;
            text-align: center;
            padding: 60px 15px;
        }

        .game {
            background: white;
            color: #222;
            max-width: 350px;
            margin: auto;
            padding: 25px;
            border-radius: 12px;
        }

        input, button {
            width: 100%;
            padding: 10px;
            margin: 7px 0;
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

        .word {
            font-size: 25px;
            letter-spacing: 4px;
            color: #315a9b;
        }
    </style>
</head>
<body>
<div class="game">
    <h2>🎯 Гра «Виселица»</h2>
    <p>Відгадай загадане слово!</p>
    <p class="word"><?php echo htmlspecialchars($display); ?></p>
    <p>Неправильні спроби: <?php echo $_SESSION["mistakes"]; ?> з 6</p>
    <p><?php echo htmlspecialchars($message); ?></p>
    <?php if (!$_SESSION["finished"]) { ?>
        <form method="POST">
            <input type="text" name="letter" maxlength="1"
                placeholder="Введи одну букву" required>
            <input type="hidden" name="letters"
                value="<?php echo htmlspecialchars(implode(",", $_SESSION["letters"])); ?>">

            <input type="hidden" name="mistakes"
                value="<?php echo $_SESSION["mistakes"]; ?>">
            <button type="submit">Перевірити</button>
        </form>
    <?php } ?>
    <form method="POST">
        <button type="submit" name="restart">Нова гра</button>
    </form>
</div>
</body>
</html>
