# TP 02 —

**Module : Programmation Web 2 — Année universitaire 2026/2027**  


## Objectifs

- Écrire et tester des scripts PHP intégrés à des pages HTML.
- Manipuler les variables, constantes, types, opérateurs, conditions et boucles.
- Exploiter les tableaux et traiter des formulaires GET/POST.
- Créer un compte GitHub et un dépôt, le cloner dans VS Code et publier ses modifications.
- Remettre uniquement le lien du dépôt GitHub sur Google Classroom.

## A. Préparation obligatoire : GitHub et VS Code

Cette préparation précède les 10 exercices de programmation.

### 1. Vérifier les outils

Installer **Git**, puis ouvrir un terminal dans VS Code et vérifier :

```bash
git --version
```

Sous Windows, si PHP n'est pas reconnu et que XAMPP est installé à son emplacement habituel, utiliser dans PowerShell :

```powershell
& "C:\xampp\php\php.exe" -v
```

### 2. Créer son compte GitHub

1. Ouvrir https://github.com et créer un compte si nécessaire.
2. Valider l'adresse électronique utilisée pour l'inscription.
3. Conserver son nom d'utilisateur : il servira dans l'adresse du dépôt.

### 3. Créer le dépôt distant

1. Sur GitHub, choisir **New repository**.
2. Nommer le dépôt `TP02-PHP-NOM-PRENOM` en remplaçant NOM et PRENOM.
3. Ajouter la description : `TP 02 PHP — Programmation Web 2 — 2026/2027`.
4. Choisir **Public** pour que je puisse consulter le travail avec le seul lien.
5. Cocher l'option de création du fichier `README.md`, puis créer le dépôt.
6. Copier son URL HTTPS, de la forme :

```text
https://github.com/VOTRE-IDENTIFIANT/TP02-PHP-NOM-PRENOM.git
```

Utiliser uniquement des données fictives dans les exercices. Ne publier aucun mot de passe ou jeton d'accès.

### 4. Cloner le dépôt dans VS Code

Dans VS Code :

1. Ouvrir la palette de commandes avec `Ctrl + Shift + P`.
2. Exécuter **Git: Clone**.
3. Coller l'URL HTTPS du dépôt.
4. Choisir un dossier local, puis ouvrir le dépôt cloné.

Autre méthode, dans un terminal ouvert dans le dossier qui accueillera le projet :

```bash
git clone https://github.com/VOTRE-IDENTIFIANT/TP02-PHP-NOM-PRENOM.git
cd TP02-PHP-NOM-PRENOM
code .
```

Remplacer les valeurs d'exemple par les vôtres. Si `code .` n'est pas reconnu, ouvrir le dossier avec **Fichier → Ouvrir le dossier**.

### 5. Configurer Git et organiser le projet

Dans le terminal du dépôt, configurer l'identité associée aux commits :

```bash
git config user.name "Votre nom"
git config user.email "Votre adresse GitHub ou votre adresse noreply GitHub"
```

Créer à la racine les fichiers suivants :

| Fichier | Utilisation |
|---|---|
| `README.md` | Présentation, instructions d'exécution et réponses courtes |
| `index.php` | Page d'accueil avec un lien vers chacun des 10 exercices |
| `ex01.php` à `ex09.php` | Solutions des exercices 1 à 9 |
| `ex10_get.html` et `ex10_get.php` | Formulaire GET et son traitement |
| `ex10_post.html` et `ex10_post.php` | Formulaire POST et son traitement |

Dans le README, indiquer le nom, le prénom, le groupe, le titre du TP et la liste des exercices. Ne pas y indiquer de coordonnées personnelles.

### 6. Exécuter PHP localement

Depuis la racine du dépôt, lancer :

```bash
php -S localhost:8000
```

Avec XAMPP sous Windows, si PHP n'est pas dans le PATH :

```powershell
& "C:\xampp\php\php.exe" -S localhost:8000
```

Ouvrir ensuite **http://localhost:8000/index.php** dans le navigateur. Arrêter le serveur avec `Ctrl + C`.

**Attention :** ouvrir directement un fichier PHP par double-clic ou utiliser Live Server ne permet pas d'exécuter PHP. Le dépôt GitHub conserve le code ; les pages PHP se testent sur le serveur local.

### 7. Enregistrer et publier la préparation

```bash
git status
git add .
git commit -m "Initialisation du TP PHP"
git push origin main
```

Ces commandes supposent que la branche du dépôt est `main`. Vérifier son nom avec `git branch --show-current` et adapter si nécessaire. Lors de la première publication, suivre la connexion GitHub proposée par VS Code ou le gestionnaire d'identifiants de Git ; ne pas saisir son mot de passe GitHub comme mot de passe Git.

## B. Les 10 exercices PHP

**Consigne commune :** utiliser la balise `<?php`, des noms de variables explicites, des commentaires utiles et un affichage HTML lisible. Tester chaque exercice avant de le publier. Après chaque exercice terminé, réaliser un commit distinct et un push en suivant la procédure de la partie C.

### Exercice 1

**Fichier : `ex01.php` — Notions : balises, HTML/PHP, commentaires, echo.**

1. Créer une page HTML avec un titre et l'encodage UTF-8.
2. Afficher avec PHP : « Bienvenue dans mon TP PHP ».
3. Afficher un nom et un prénom fictifs ainsi que votre groupe.
4. Ajouter un commentaire sur une ligne et un commentaire sur plusieurs lignes.
5. Afficher une dernière phrase avec la syntaxe courte `<?= ... ?>`.

**Vérification :** les informations apparaissent sur des lignes distinctes ; les commentaires ne sont pas affichés.

### Exercice 2 

**Fichier : `ex02.php` — Notions : variables, casse, concaténation, opérateur `.=`.**

1. Déclarer `$nom`, `$prenom`, `$age` et `$formation` avec des données fictives.
2. Construire une phrase de présentation en utilisant la concaténation `.`.
3. Compléter cette phrase avec `.=` pour ajouter « J'apprends PHP ».
4. Déclarer `$note = 12` et `$Note = 16`, puis afficher les deux valeurs.
5. Dans le README, expliquer pourquoi ces deux variables sont différentes et identifier les noms valides parmi `$a`, `$_a`, `$a_a`, `$AAA`, `$a!`, `$1a`, `$a1`.

**Vérification :** les deux notes sont distinctes. Ne pas insérer les noms de variables invalides dans du code exécuté.

### Exercice 3 

**Fichier : `ex03.php` — Notions : constantes, calculs, affectation composée.**

1. Définir la constante `TAUX_TVA` à `20` et la constante `DEVISE` à `"MAD"`.
2. Déclarer un prix unitaire HT de `60` et une quantité de `3`.
3. Calculer le total HT, le montant de TVA et le total TTC.
4. Ajouter `15 MAD` de frais de livraison au total TTC avec `+=`.
5. Afficher un récapitulatif HTML et vérifier l'existence de `TAUX_TVA` avec `defined()`.

**Vérification :** total HT = 180 MAD ; TVA = 36 MAD ; total TTC = 216 MAD ; montant final = 231 MAD. Le taux est une donnée de l'exercice.

### Exercice 4 

**Fichier : `ex04.php` — Notions : int, float, string, bool, null, conversion.**

1. Déclarer les valeurs suivantes : `42`, `"42"`, `15.8`, `true`, `false`, `null` dans six variables.
2. Examiner leurs types et leurs valeurs avec `var_dump()`, dans une balise HTML `<pre>`.
3. Convertir `"42"` en entier, `15.8` en entier et `42` en chaîne ; afficher les résultats avec leurs types.
4. Afficher `true` et `false` avec `echo`, puis avec `var_dump()`.
5. Convertir `0`, `"0"`, `"PHP"` et un tableau vide en booléens.
6. Expliquer dans le README la différence d'affichage de `false` entre `echo` et `var_dump()`.

**Vérification :** la conversion de `15.8` en entier donne `15` ; chaque conversion est identifiable dans la page.

### Exercice 5 

**Fichier : `ex05.php` — Notions : if, elseif, else, opérateurs de comparaison.**

1. Déclarer une variable `$moyenne`.
2. Vérifier que sa valeur est comprise entre 0 et 20 ; sinon afficher « Note invalide ».
3. Pour une valeur valide, afficher :

| Moyenne | Message |
|---|---|
| Inférieure à 10 | Non validé |
| De 10 inclus à 12 exclu | Passable |
| De 12 inclus à 14 exclu | Assez bien |
| De 14 inclus à 16 exclu | Bien |
| De 16 à 20 inclus | Très bien |

4. Tester successivement `-1`, `9`, `10`, `12`, `14`, `16` et `21` en changeant la variable.
5. Consigner dans le README les valeurs testées et les messages obtenus.

**Vérification :** les valeurs limites sont correctement traitées ; une note invalide ne reçoit pas de mention.

### Exercice 6 

**Fichier : `ex06.php` — Notions : switch, case, break, default, date().**

1. Déclarer `$numeroMois = 3`.
2. Utiliser `switch` pour afficher le nom français correspondant aux nombres de 1 à 12.
3. Prévoir un cas `default` affichant « Numéro de mois invalide ».
4. Tester `1`, `3`, `12` et `15`.
5. Remplacer ensuite la valeur fixe par `(int) date("m")` pour afficher le mois courant du serveur.

**Vérification :** 3 donne « Mars », 12 donne « Décembre » et 15 donne le message d'erreur.

### Exercice 7 

**Fichier : `ex07.php` — Notions : for, compteur, boucles imbriquées.**

1. Déclarer `$nombre = 7` et afficher sa table de multiplication de 1 à 10.
2. Utiliser deux boucles `for` imbriquées pour produire une pyramide de six lignes, comportant respectivement 1, 2, 3, 4, 5 et 6 étoiles.
3. Présenter les deux résultats dans deux sections HTML distinctes.

**Vérification :** la table se termine par `7 × 10 = 70` ; la pyramide comporte exactement six lignes. Utiliser `<br>` ou `<pre>` pour conserver les retours à la ligne dans le navigateur.

### Exercice 8 

**Fichier : `ex08.php` — Notions : boucles et contrôle des itérations.**

Réaliser trois parties indépendantes :

1. Avec `while`, afficher les nombres pairs de 0 à 20 inclus et mettre uniquement 10 en gras.
2. Initialiser un compteur à 5. Avec la condition « compteur inférieur à 5 », comparer une boucle `while` et une boucle `do-while`. Réinitialiser le compteur avant chaque boucle et compter les exécutions de leur corps.
3. Parcourir les entiers de 1 à 20. Utiliser `continue` pour ignorer les multiples de 3 et `break` pour arrêter la boucle dès que le compteur atteint 16, avant son affichage.

**Vérification :** dans la partie 2, `while` réalise 0 exécution et `do-while` en réalise 1. Dans la partie 3, ni les multiples de 3 ni les valeurs supérieures ou égales à 16 ne sont affichés.

### Exercice 9 

**Fichier : `ex09.php` — Notions : tableau associatif, foreach, accumulation, conditions.**

Utiliser ce jeu de données fictives :

```php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];
```

1. Afficher les étudiants et leurs notes dans un tableau HTML avec `foreach`.
2. Ajouter une colonne « Validé » ou « Non validé », avec un seuil de 10.
3. Calculer la somme des notes et la moyenne de la classe.
4. Compter les étudiants ayant validé.
5. Déterminer la meilleure note et le nom de l'étudiant correspondant en parcourant le tableau.

**Vérification :** moyenne = 12 ; 4 étudiants ont validé ; Sara possède la meilleure note, égale à 16.

### Exercice 10 

**Fichiers : `ex10_get.html`, `ex10_get.php`, `ex10_post.html`, `ex10_post.php`.**

**Partie A — GET**

1. Créer un formulaire avec les champs `nom`, `prenom` et un menu `groupe` (G1, G2, G3, G4).
2. Envoyer les données à `ex10_get.php` avec la méthode GET.
3. Récupérer les données avec `$_GET` et afficher un message de bienvenue contenant les trois informations.
4. Observer l'URL après l'envoi et expliquer dans le README où apparaissent les valeurs.

**Partie B — POST**

1. Créer un second formulaire avec les mêmes champs.
2. Envoyer les données à `ex10_post.php` avec la méthode POST.
3. Récupérer les données avec `$_POST` et afficher le même message.
4. Comparer l'URL obtenue avec celle de la partie GET.

**Partie C — Vérifications**

1. Vérifier côté PHP la présence des trois champs et refuser les valeurs vides.
2. Ouvrir directement les deux pages de traitement sans soumettre de formulaire : afficher un message explicatif sans avertissement « Undefined array key ».
3. Tester un formulaire complet et un formulaire incomplet.
4. Avant d'afficher une donnée saisie dans la page HTML, l'échapper avec `htmlspecialchars()`.

**Aides :** `isset()` vérifie la présence d'une clé ; `trim()` permet de repérer une chaîne composée seulement d'espaces ; `htmlspecialchars($valeur, ENT_QUOTES, 'UTF-8')` protège l'affichage HTML. Utiliser des noms de champs identiques dans le formulaire et dans le traitement.

**Vérification :** les deux méthodes fonctionnent ; les champs vides sont signalés ; les pages de traitement restent lisibles lorsqu'elles sont ouvertes directement.

## C. Publier progressivement sur GitHub

Après chaque exercice : enregistrer les fichiers dans VS Code, tester dans le navigateur, puis exécuter depuis la racine du dépôt :

```bash
git status
git add .
git commit -m "Exercice 01 : affichage PHP"
git push origin main
```

Adapter le message au numéro et au contenu de l'exercice. Pour l'exercice 10, publier les quatre fichiers dans le même commit.

- **Enregistrer** conserve le fichier sur l'ordinateur.
- **Commit** enregistre une version dans l'historique Git local.
- **Push** envoie les commits vers GitHub.

Après un push, consulter le dépôt dans le navigateur pour vérifier la présence des fichiers. En fin de travail, contrôler :

```bash
git status
git log --oneline
```


## E. Remise sur Google Classroom

Dans le devoir correspondant à ce TP :

1. Ajouter **uniquement le lien du dépôt GitHub** avec l'option de pièce jointe de type lien.
2. Utiliser l'adresse de la page du dépôt, par exemple :

```text
https://github.com/VOTRE-IDENTIFIANT/TP02-PHP-NOM-PRENOM
```

3. Cliquer sur **Remettre** pour valider la remise.

**Ne joindre ni fichiers PHP, ni archive ZIP, ni captures d'écran sur Classroom. Je vais consulter le code, le README et les commits à partir du seul lien GitHub.**


## Ressources utiles

- Création d'un dépôt : https://docs.github.com/en/repositories/creating-and-managing-repositories/creating-a-new-repository
- Clonage d'un dépôt : https://docs.github.com/en/repositories/creating-and-managing-repositories/cloning-a-repository
- Publication des commits : https://docs.github.com/en/get-started/using-git/pushing-commits-to-a-remote-repository
- PHP dans VS Code : https://code.visualstudio.com/docs/languages/php