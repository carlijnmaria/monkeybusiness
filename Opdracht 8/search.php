<?php

// 1. Contact maken met de database
$dbc = mysqli_connect('localhost', 'root', 'root', 'apen') or die ("Error connecting");

// 2. Query schrijven waarmee ik zoek op deze zoekterm
$term = "%" . $_GET['term'] . "%";

$query = "SELECT * FROM aap a
              JOIN aap_has_leefgebied ahl on a.idaap = ahl.idaap
              JOIN leefgebied l ON l.idleefgebied = ahl.idleefgebied
              WHERE soort LIKE '$term'";

// 3. Als ik iets gevonden heb data uit de database tonen
$result = mysqli_query($dbc, $query) or die ("Error querying");


if(mysqli_num_rows ($result)) {

    echo "Dit hebben wij gevonden!";

    while($row = mysqli_fetch_array($result)) {

        $soort = $row['soort'];
        $omschrijving = $row['omschrijving'];
        ?>

        <ul>
            <li><?php echo $soort; ?></li>
            <li><?php echo $omschrijving; ?></li>
        </ul>

        <?php
    }
} else {
    header("Location: home.php");
}
