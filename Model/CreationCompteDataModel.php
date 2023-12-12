<?php
namespace App\Model;


Class CreationCompteDataModel extends Model
{

    private $reqExecute;
    
    public function AjoutCompte($Nom,$Mtp)
    {
        $this->reqExecute=$this->requete("INSERT INTO `identite utilisateur`(`Id Utilisateur`, `Nom`, `role`, `Mot de passe`) VALUES (Null,?,?,?)",array($Nom,"client",$Mtp));
        return $this->reqExecute;
    }

 
   
   
}


?>