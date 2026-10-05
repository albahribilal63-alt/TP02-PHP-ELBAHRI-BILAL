<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8</title>
</head>
<body>

<h1>Exercice 8</h1>

<h2>Partie 1 : nombres pairs</h2>

<?php

$nombre = 0;

while ($nombre <= 20) {

    if ($nombre == 10) {
        echo "<strong>10</strong><br>";
    } else {
        echo $nombre . "<br>";
    }

    $nombre += 2;
}

?>

<h2>Partie 2 : while et do-while</h2>

<?php

$compteur = 5;
$executionsWhile = 0;

while ($compteur < 5) {
    $executionsWhile++;
    $compteur++;
}

echo "Nombre d'exécutions avec while : " . $executionsWhile . "<br>";

$compteur = 5;
$executionsDoWhile = 0;

do {
    $executionsDoWhile++;
    $compteur++;
} while ($compteur < 5);

echo "Nombre d'exécutions avec do-while : " . $executionsDoWhile . "<br>";

?>

<h2>Partie 3 : continue et break</h2>

<?php

for ($i = 1; $i <= 20; $i++) {

    if ($i % 3 == 0) {
        continue;
    }

    if ($i >= 16) {
        break;
    }

    echo $i . "<br>";
}

?>

</body>
</html>