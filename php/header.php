<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site vitrine</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1><?php echo $h1 ?? "titre1 par défaut" ?></h1>
        <!-- menu de navigation -->
        <nav>
            <ul>
                <li><a href="index.php">accueil</a></li>
                <li><a href="galerie.php">galerie</a></li>
                <li><a href="contact.php">contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
