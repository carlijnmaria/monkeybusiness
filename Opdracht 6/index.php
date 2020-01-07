<?php

// CONNECTIE MAKEN MET DE DATABASE
$dbc = mysqli_connect('localhost', 'root', 'root', 'apen') or die ('Error connecting.');

//QUERY SCHRIJVEN
$query = "SELECT * FROM leefgebied";
$query2 = "SELECT * FROM aap";

//QUERY UITVOEREN
$result = mysqli_query($dbc, $query) or die ('Error querying.');
$result2 = mysqli_query($dbc, $query2) or die ('Error querying.');


//REGEL VOOR REGEL IN BEELD BRENGEN
while ($row = mysqli_fetch_array($result)){
    echo $row['omschrijving'] . '<br>';
}

echo '<br>';

while ($row = mysqli_fetch_array($result2)){
    echo $row['soort'] . '<br>';
}

