<?php

// CONNECTIE MAKEN MET DE DATABASE
$dbc = mysqli_connect('localhost', 'root', 'root', 'apen') or die ('Error connecting.');

//QUERY SCHRIJVEN
$query = "SELECT * FROM leefgebied";

//QUERY UITVOEREN
$result = mysqli_query($dbc, $query) or die ('Error querying.');

//REGEL VOOR REGEL IN BEELD BRENGEN
while ($row = mysqli_fetch_array($result)){
    echo $row['omschrijving'] . '<br>';
}