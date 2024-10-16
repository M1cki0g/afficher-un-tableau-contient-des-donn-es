<?php
$personnes = array(
        'mdupond' => array('prenom' => 'Martin', 'nom' => 'Dupond', 'age' => 25, 'ville' => 'Paris'),
        'jm'      => array('prenom' => 'Jean', 'nom' => 'Martin', 'age' => 20, 'ville' => 'Villetaneuse'),
        'toto'    => array('prenom' => 'Tom', 'nom' => 'Tonge', 'age' => 18, 'ville' => 'Epinay'),
        'arn'     => array('prenom' => 'Arnaud', 'nom' => 'Dupond', 'age' => 33, 'ville' => 'Paris'),
        'email'   => array('prenom' => 'Emilie', 'nom' => 'Ailta', 'age' => 46, 'ville' => 'Villetaneuse'),
        'dask'    => array('prenom' => 'Damien', 'nom' => 'Askier', 'age' => 7, 'ville' => 'Villetaneuse')
    );

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Prenom</th>";
    echo "<th>Nom</th>";
    echo "<th>Age</th>";
    echo "<th>Ville</th>";
    echo "</tr>";
    foreach ($personnes as $personne) {
        echo "<tr>";
        foreach ($personne as $key => $val) {
            echo "<td>$val</td>";
        }
    }
    // foreach ($personnes as $key => $val) {
    //     echo "<td>$key</td>";
    // }
    echo "</tr>";
    echo "</table>";
    ?>

    <h1>EXO6</h1><br>

    <?php
