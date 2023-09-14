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
    
    public function ModifierLivre($id,$Titre,$nbPage,$image,$statut)
    {
        $this->reqExecute=$this->requete("UPDATE {$this->table}  SET `Id`= ?,`Titre`=?,`nbPages`=?,`image`=?,`Statut_de_suppression`=? WHERE `Id`= {$id}",array($id,$Titre,$nbPage,$image,$statut));
        return $this->reqExecute;
        
    }

 
   
   
}


?>