<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>

<h1>Exercice 4</h1>

<pre>

<?php

$entier = 42;
$chaine = "42";
$flottant = 15.8;
$trueValue = true;
$falseValue = false;
$nullValue = null;

echo "=== Types et valeurs ===\n";

var_dump($entier);
var_dump($chaine);
var_dump($flottant);
var_dump($trueValue);
var_dump($falseValue);
var_dump($nullValue);

echo "\n=== Conversions ===\n";

$chaineEnEntier = (int) $chaine;
$flottantEnEntier = (int) $flottant;
$entierEnChaine = (string) $entier;

var_dump($chaineEnEntier);
var_dump($flottantEnEntier);
var_dump($entierEnChaine);

echo "\n=== echo et booléens ===\n";

echo "true avec echo : ";
echo true;

echo "\nfalse avec echo : ";
echo false;

echo "\n\ntrue avec var_dump : ";
var_dump(true);

echo "false avec var_dump : ";
var_dump(false);

echo "\n=== Conversion en booléen ===\n";

var_dump((bool) 0);
var_dump((bool) "0");
var_dump((bool) "PHP");
var_dump((bool) []);

?>

</pre>

</body>
</html>