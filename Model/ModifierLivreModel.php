<?php
namespace App\Model;
use App\Autoloader;

Class ModifierLivreModel extends Model
{

    private $reqExecute;
    public function __construct()
    {
        $this->table='livres';
    }
    
    public function ModifierLivre($id,$Titre,$nbPage,$image,$fichier,$statut)
    {
        $this->reqExecute=$this->requete("UPDATE {$this->table}  SET `Id`= ?,`Titre`=?,`nbPages`=?,`image`=?,`livre`=?,`Statut_de_suppression`=? WHERE `Id`= {$id}",array($id,$Titre,$nbPage,$image,$fichier,$statut));
        return $this->reqExecute;
        
    }

 
   
   
}


?>