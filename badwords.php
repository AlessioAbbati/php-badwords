<?php
$def_text = 'Hai inserito:' ;
$user_text = $_GET['text'];

$censure = $_GET['censure'];
$def_censure = 'Ora il tuo testo è:';
$text_censored = str_replace($censure, '***', $user_text) ;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>

<body>
    <h1><?= $def_text ?></h1>
    <p><?= $user_text ?></p>

    <h2><?= $def_censure ?></h2>
    <p><?= $text_censored ?></p>
</body>

</html>