<?php
$apen[] = "Baviaan";
$apen[] = "Guereza";
$apen[] = "Langoer";
$apen[] = "Tamarin";
$apen[] = "Neusaap";
$apen[] = "Halfaap";
$apen[] = "Mandril";
$apen[] = "Oeakari";
$apen[] = "Faunaap";
$apen[] = "Hoelman";
$apen[] = "Meerkat";
$apen[] = "Oormaki";
$apen[] = "Gorilla";
$apen[] = "Kuifaap";
$apen[] = "Mensaap";
$apen[] = "Spinaap";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <title>Monkey Business</title>
</head>
<body>
<img src="img/monkey-business.jpg" alt="logo">
<h1>Select your monkey</h1>
<img src="img/monkey_swings%20(1).png" alt="hr">
<br>
<?php
foreach ($apen as $aap){ ?>
    <a href="https://www.google.nl/search?q=<?= $aap; ?>&tbm=isch"><?= $aap; ?></a>
    <br>
<?php } ?>
</body>
</html>