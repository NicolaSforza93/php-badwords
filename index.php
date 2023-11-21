<?php
$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$replace = $_POST['replace_word'];
$script = $_POST['script'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Stampo il testo -->
    <p><?php echo $text; ?></p>
    <!-- Stampo la lunghezza del testo -->
    <p>Il testo è lungo <?php echo strlen($text); ?> caratteri</p>
    <!-- Salvo il testo censurato in una variabile -->
    <p><?php $censored = str_replace($replace, '***', $script); ?></p>
    <!-- Stampo il testo censurato -->
    <p><?php echo $censored; ?></p>
    <!-- Stampo la lunghezza del testo censurato -->
    <p>Il testo è lungo <?php echo strlen($censored); ?> caratteri</p>

    <?php

    // var_dump($text);

    ?>

</body>

</html>