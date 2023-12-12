<?php
namespace App\Model;
use App\Autoloader;

Class VerificateurIdentiteModel extends Model
{
    private $req;

    public function __construct()
    {
        $this->table='identite utilisateur';
    }
    
    public function Verificateur()
    {
        // $this->req=$this->requete('SELECT `Id Utilisateur`, `Nom`, `Mot de passe` FROM `identite utilisateur` WHERE `Nom` = ?',array($Nom));
        $this->req=$this->requete("SELECT * FROM `identite utilisateur`");
        return $this->req->fetchAll();
        
   
        

    }


}

?>