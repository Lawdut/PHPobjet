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

    <?php /* require 'utilisateur.php';

<!-- ////////////////////////////////////////////////////////////////////////-->
    // CLASSES, OBJETS ET INSTANCE

    $pierre = new utilisateur();
    $mathilde = new utilisateur();

    //$pierre->user_name = 'Pierre';
    //$pierre->user_pass = 'abcdef';

    $pierre->setNom('Pierre');
    $pierre->setPass('abcdef');
    


    $mathilde->setNom('Mathilde');
    $mathilde->setPass(123456);

    echo $pierre->getNom().'<br>';
    echo $mathilde->getNom().'<br>';

    */?>
<!-- ////////////////////////////////////////////////////////////////////////-->
    <!-- CONSTRUCTEUR ET DESTRUCTEUR D'OBJETS

    <form action = 'index.php' method='post'>

        <label for ='nom'> Nom d'utilisateur : </label>
        <input type = 'text' name ='nom' id='nom'><br>
        
        <label for ='pass'> Choisissez un mot de passe.</label>
        <input type = 'password' name = 'pass' id ='pass'><br>
        <input type='submit' value='Envoyer'>

    </form>

    <?php 
        require 'utilisateur.class.php';

        $pierre = new utilisateur($_POST['nom'], $_POST['pass']);
        echo $pierre->getNom().'<br>';*/

    ?>    

    -->
<!-- ////////////////////////////////////////////////////////////////////////-->




    <p> Un paragraphe </p>
</body>
</html>