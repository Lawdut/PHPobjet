<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Objet</title>
    <link rel="stylesheet" href="cours.css">
</head>
<body>
    <h1> Titre principal</h1>

    <?php require 'classes/utilisateur.class.php';

    $pierre = new utilisateur();
    $mathilde = new utilisateur();

    $pierre->user_name = 'Pierre';
    $pierre->user_pass = 'abcdef';

    $mathilde->user_name = 'Mathilde';
    $mathilde->user_pass = 123456;
    ?>

    <p> Un paragraphe </p>
</body>
</html>