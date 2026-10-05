<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9</title>
</head>
<body>

<h1>Exercice 9</h1>

<?php

$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$somme = 0;
$nombreValides = 0;

$meilleureNote = -1;
$meilleurEtudiant = "";

echo "<table border='1' cellpadding='8'>";
echo "<tr>";
echo "<th>Étudiant</th>";
echo "<th>Note</th>";
echo "<th>Résultat</th>";
echo "</tr>";

foreach ($notes as $etudiant => $note) {

    $somme += $note;

    if ($note >= 10) {
        $resultat = "Validé";
        $nombreValides++;
    } else {
        $resultat = "Non validé";
    }

    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $etudiant;
    }

    echo "<tr>";
    echo "<td>" . $etudiant . "</td>";
    echo "<td>" . $note . "</td>";
    echo "<td>" . $resultat . "</td>";
    echo "</tr>";
}

echo "</table>";

$moyenne = $somme / count($notes);

echo "<p>Somme des notes : " . $somme . "</p>";
echo "<p>Moyenne : " . $moyenne . "</p>";
echo "<p>Nombre d'étudiants validés : " . $nombreValides . "</p>";
echo "<p>Meilleure note : " . $meilleureNote . "</p>";
echo "<p>Meilleur étudiant : " . $meilleurEtudiant . "</p>";

?>

</body>
</html>