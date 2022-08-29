<?php

$my_paragraph = 'Hi, I\'m Mr.Unlucky and yesterday I had nightmare,so this morning I don\'t hear the shit alarm and shit, I wake up too late so shit,I go to work late as well. After today I think life is a shit.';
$word = $_GET['word'];
$my_censored_paragraph = str_replace($word, '****', $my_paragraph);


$paragraph_length = strlen($my_paragraph);

$censored_paragraph_length = strlen($my_censored_paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY FIRST PHP DEMO</title>
</head>
<body>
  <p> <?= $my_censored_paragraph ?> </p>
  <div> Lunghezza primo paragrafo: <?= $paragraph_length ?> </div>
  <div> Lunghezza secondo paragrafo: <?= $censored_paragraph_length ?> </div>
</body>
</html>