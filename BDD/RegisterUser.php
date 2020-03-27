<html>

<head>
    <title>S'inscrire</title>
</head>

<body>
    <h1>Inscription</h1>
    <form method="post" action="RegisterUser.php">
       
        Nom : <input type="text" name="nom" required>
      
        Adresse mail : <input type="text" name="email" required>
      
        Mot de passe : <input type="text" name="password" required>
       
        Confirmer mot de passe : <input type="text" name="confirmPassword" required>

        <input type="submit" value="Confirmer votre inscription" required>
    </form>
</body>

</html>

<?php 

    $bdd = new PDO('mysql:host=??; dbname=??; charset=utf8', '?', '?');

    if(isset($_POST['email']) && isset($_POST['password'])){
    $mailconnect = $_POST['email'];
    $mdpconnect = $_POST['password'];

    $requser = $bdd->prepare("SELECT * FROM User WHERE e_mail = ? AND mot_de_passe = ?");
    $requser->execute(array($mailconnect, $mdpconnect));

    $userexist = $requser->rowCount();
    $userinfo = $requser->fetch();

        
        if(){

            echo "Vous êtes maintenant inscrit. ";
        }
    }
    else{

            echo "Adresse mail ou mot de passe incorrect.";

        }  
        
        $bdd = new PDO('mysql:host=??; dbname=??; charset=utf8', '?', '?');
        $sign = $bdd->prepare("INSERT INTO pade_sene_client (nom, e_mail, mot_de_passe) VALUES(?, ?, ?)");
        $sign->execute(array($_POST['nom'], $_POST['email'] ,$_POST['password'],));
        ?>    

        