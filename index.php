<?php
$text = "Con l'aiuto di fedeli robot e altri preziosi alleati, il giovane Luke Skywalker deve salvare la principessa ribelle Leila e sconfiggere l'Impero che costringe la galassia sotto il suo controllo.";
$replace = $_POST['replace_word'];

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
    <p><?php $censored = str_replace($replace, '***', $text); ?></p>
    <!-- Stampo il testo censurato -->
    <p><?php echo str_replace($replace, '***', $text); ?></p>
    <!-- Stampo la lunghezza del testo censurato -->
    <p>Il testo è lungo <?php echo strlen($censored); ?> caratteri</p>

    <?php

    // var_dump($text);

    ?>

</body>

</html>