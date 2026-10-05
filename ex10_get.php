<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement GET</title>
</head>
<body>

<h1>Résultat GET</h1>

<?php

if (
    !isset($_GET["nom"]) ||
    !isset($_GET["prenom"]) ||
    !isset($_GET["groupe"])
) {
    echo "Veuillez remplir et envoyer le formulaire.";
    exit;
}

$nom = trim($_GET["nom"]);
$prenom = trim($_GET["prenom"]);
$groupe = trim($_GET["groupe"]);

if ($nom === "" || $prenom === "" || $groupe === "") {

    echo "Erreur : tous les champs sont obligatoires.";

} else {

    $nom = htmlspecialchars($nom, ENT_QUOTES, "UTF-8");
    $prenom = htmlspecialchars($prenom, ENT_QUOTES, "UTF-8");
    $groupe = htmlspecialchars($groupe, ENT_QUOTES, "UTF-8");

    echo "Bienvenue " . $prenom . " " . $nom .
         " ! Vous êtes dans le groupe " . $groupe . ".";
}

?>

</body>
</html>