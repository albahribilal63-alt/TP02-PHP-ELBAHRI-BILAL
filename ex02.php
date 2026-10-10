<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<body>

<h1>Exercice 2</h1>

<?php

$nom = "ELBAHRI";
$prenom = "BILAL";
$age = 18;
$formation = "Informatique";

$phrase = "Je m'appelle " . $prenom . " " . $nom .
          ", j'ai " . $age . " ans et je suis en formation " . $formation . ".";

$phrase .= " J'apprends PHP.";

echo $phrase . "<br><br>";

$note = 12;
$Note = 16;

echo "note = " . $note . "<br>";
echo "Note = " . $Note . "<br>";

?>

</body>
</html>