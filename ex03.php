<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3</title>
</head>
<body>

<h1>Exercice 3</h1>

<?php

define("TAUX_TVA", 20);
define("DEVISE", "MAD");

$prixUnitaireHT = 60;
$quantite = 3;

$totalHT = $prixUnitaireHT * $quantite;

$montantTVA = $totalHT * TAUX_TVA / 100;

$totalTTC = $totalHT + $montantTVA;

$totalTTC += 15;

echo "<h2>Récapitulatif</h2>";

echo "Prix unitaire HT : " . $prixUnitaireHT . " " . DEVISE . "<br>";
echo "Quantité : " . $quantite . "<br>";
echo "Total HT : " . $totalHT . " " . DEVISE . "<br>";
echo "TVA : " . $montantTVA . " " . DEVISE . "<br>";
echo "Total TTC : 216 MAD<br>";
echo "Frais de livraison : 15 " . DEVISE . "<br>";
echo "Montant final : " . $totalTTC . " " . DEVISE . "<br>";

if (defined("TAUX_TVA")) {
    echo "La constante TAUX_TVA existe.";
}

?>

</body>
</html>