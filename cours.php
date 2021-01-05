<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Objet</title>
    <!--<link rel="stylesheet" href="cours.css">-->
</head>
<body>
    <h1> Titre principal</h1>


<!-- ////////////////////////////////////////////////////////////////////////
    CLASSES, OBJETS ET INSTANCE-->
    <?php /* require 'utilisateur.class.php';



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

    <form action = 'cours.php' method='post'>

        <label for ='nom'> Nom d'utilisateur : </label>
        <input type = 'text' name ='nom' id='nom'><br>
        
        <label for ='pass'> Choisissez un mot de passe.</label>
        <input type = 'password' name = 'pass' id ='pass'><br>
        <input type='submit' value='Envoyer'>

    </form>

    <?php 
        /*require 'utilisateur.class.php';

        $pierre = new utilisateur($_POST['nom'], $_POST['pass']);
        echo $pierre->getNom().'<br>';*/

    ?>    

    -->
<!-- ////////////////////////////////////////////////////////////////////////-->

    <!-- HERITAGE-->
    <?php 
        require 'utilisateur.php';
        require 'admin.php';

        $pierre = new admin ('Pierre', 'abcdef', 'Sud');
        $mathilde = new admin ('Mathilde', 123456, 'Nord');
        $florian = new utilisateur('Florian', 'mdp', 'Ouest');

        $pierre->setPrixAbo();
        $mathilde->setPrixAbo();
        $florian->setPrixAbo();

        $u = 'utilisateur'; // en PHP, on peut stocker une classe dans une variable (en l'occurence, $u stock la class utilisateur)
        echo 'Valeur de ABONNEMENT dans utilisateur : ' .$u::ABONNEMENT.'<br>';
        echo 'Valeur de ABONNEMENT dans administrateur : ' .admin::ABONNEMENT.'<br>';

        echo 'Prix de ABONNEMENT pour ';
        $pierre->getNom();
        echo ' : ';
        $pierre->getPrixAbo();

        echo '<br>';

        echo 'Prix de ABONNEMENT pour ';
        $mathilde->getNom();
        echo ' : ';
        $mathilde->getPrixAbo();

        echo '<br>';
        
        echo 'Prix de ABONNEMENT pour ';
        $florian->getNom();
        echo ' : ';
        $florian->getPrixAbo();

        echo '<br>';

        $pierre->setBan('Paul');
        $pierre->setBan('Jacques');
        echo $pierre->getBan();

    ?>


    <p> Un paragraphe </p>
</body>
</html>