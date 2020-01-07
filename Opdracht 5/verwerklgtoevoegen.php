<?php

//POST ARRAY UITLEZEN
$leefgebied = $_POST['leefgebied'];

//DATA IN DATABASE STOPPEN
//1. Verbinding maken met de database
$dbc = mysqli_connect('localhost', 'root', 'root', 'apen') or die ('Error connecting.');
//2. Query schrijven voor de database
$query = "INSERT INTO leefgebied VALUES (0, '$leefgebied')";
//3. Query uitvoeren
$result = mysqli_query($dbc, $query) or die ('Error querying');
//4. Verbinding verbreken
mysqli_close($dbc);

//BEVESTIGEN DAT DE DATA MET SUCCES IS TOEGEVOEGD AAN DE DATABASE
if ($result){
    echo 'De volgende data is toegevoegd: <br>';
    echo $leefgebied;
} else {
    echo 'Er is iets mis gegaan. Probeer het opnieuw.';
}

