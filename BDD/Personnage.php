<?php


// Dev By Fresi et Wantelez
class Personnage
{

    private $_Id;
    private $_Pseudo;
    private $_Vie;
    private $_Attaque;
    private $_Bdd;


    public function __construct($IdDuPseudo,$Bdd)
    {
        $this->_Bdd = $Bdd;
        $DataPersonnage = $this->_Bdd->query("SELECT * from personnage where id =".$IdDuPseudo."");
        $TabDataPersonnage = $DataPersonnage->fetch();
        $this->_Id = $IdDuPseudo;
        $this->_Vie = $TabDataPersonnage['vie'];
        $this->_Attaque = $TabDataPersonnage['attaque']; 

        //go to base chercher les info du personnages par id


        //verifier que id est coorrect sinon simulé un perso

        $this->_Pseudo = "Perso Simulé N°" . $IdDuPseudo;
        $this->_Vie = 50;  // La vie sera prédéfini à celle du niveau 1.
        $this->_Attaque = 5;  // L'attaque sera défini à celle du niveau 1.
    }

    // Dev By Fresi
    //Accesseur
    function GetID()
    {
        return $this->_Id;
    }

    // Dev By Fresi
    // Fonction qui renvoie la valeur de la vie
    function GetVie()
    {
        return $this->_Vie;
    }

    // Dev By Fresi
    // Fonction pour changer de Pseudo
    function SetPseudo($NouveauSpoeudo)
    {
        return $this->_Pseudo = $NouveauSpoeudo;
    }

    // Dev By Fresi
    // Fonction qui affiche les statistiques d'un personnage
    public function AfficherStats()
    {

        echo "Votre pseudo est " . $this->_pseudo . " Vous avez " . $this->_vie . " point de vie et " . $this->_attaque . " d'attaque";
    }
}
