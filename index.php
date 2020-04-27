<?php

include "header.php";
include "config.php";
include "BDD/User.php";



/*if(isset($_GET['map'])){
        echo "vous êtes sur la map N°".$_GET['map'];

        echo 'go plus loin <a href="?map=768676">768676</a>';

    }else{
        echo "vous etes perdu ";
    }
*/

?>
<<<<<<< HEAD

=======
<<<<<<< HEAD

<form method="post" action="">
    <h3>Log In</h3>
=======
>>>>>>> 4f4572d32f174caafd8ca042c5847ceb48c7f8ee
<html>

<head>
    <link rel="stylesheet" type="text/css" href="IHM/bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="IHM/index.css">
<<<<<<< HEAD
</head>

<body>

    <?php

    if (isset($isconnect)) {
        if ($isconnect == true){
        echo "<div>vous etes sur le site</div>";
    } else {
        include "IHM/formulaire.php";
    }
}

    ?>

</body>

=======
    </head>

    <body>

<<<<<<< HEAD
    <div class="container" align="center">
    <div class="col-lg-7 formulaire">

    <form method="post" action="">
    <p><h1>Projet Fullstack</h1></p>
>>>>>>> d41ec3a754ab7d9da198275137b2e83faf15ad69
    <fieldset>
        <div class="col-lg-12 mail"><p><input class="text" type="text" name="email" placeholder="Adresse Mail" autofocus required></p></div>
        <div class="col-lg-12 password"><p><input class="text" type="text" name="password" placeholder="Mot de passe" required></p></div>
    </fieldset>
    <fieldset>
    <div class="row">
    <div class="col-md-3">
=======
<div class="container" align="center">
<div class="row">

    <div class="col-lg-12 fullstack">
        <h1>Projet Fullstack</h1>
>>>>>>> cc279f94576efb7a1690670e6bf48211a8dc335b
    </div>

    <div class="col-lg-5 connexion" align="center">
        <div class="col-xs-12" align="center">
            
                <h1 id="modif2">Vous connectez</h1>
                    <form action="index.php" method="POST"> 
                    <p><label><h3>Adresse Mail</h3></label>
                    <input type="text" name="NDC_2" class="text"/></p>
                    <p><label><h3>Mot De Passe</h3></label>
                    <input type="password" name="MDP_2" class="text"/></p>
                    <p> </p>
                    <input type="submit" name="valider2" value="connexion" class="button"/>
                    </form>
           
        </div>
    </div>
<<<<<<< HEAD
    </fieldset>
<<<<<<< HEAD
=======
   
    </div> 
>>>>>>> d41ec3a754ab7d9da198275137b2e83faf15ad69
    
    <?php
    if ($connect == true) {
        echo "<p><h1>je suis connecter</h1></p>";
    } else if ($connect == false) {
    }
    ?>
=======

    <div class="col-lg-2">
>>>>>>> cc279f94576efb7a1690670e6bf48211a8dc335b
    </div>

    <div class="col-lg-5 inscription" align="center">
        <div class="col-xs-12" align="center">
            
                <h1 id="modif1">Creer votre compte</h1> 
                    <form action="index.php" method="POST"> 
                    <p><label><h3>Pseudo</h3></label>
                    <input type="text" name="NDC_1" class="text"/></p>
                    <p><label><h3>Adresse Mail</h3></label>
                    <input type="text" name="NDC_1" class="text"/></p>
                    <p><label><h3>Mot De Passe</h3></label>
                    <input type="password" name="MDP_1" class="text"/></p>
                    <p> </p>
                    <input type="submit" name="valider1" value="s'inscrire" class="button"/>
                    </form>
            
        </div>
    </div>

    <div class="col-lg-12 presentation">
        salut ca va
    </div>

</div>
</div>

    </body>
>>>>>>> 4f4572d32f174caafd8ca042c5847ceb48c7f8ee
</html>

<?php
//$Perso1 = new Hero(0, $Bdd);


include "footer.php";
