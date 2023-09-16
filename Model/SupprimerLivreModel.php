<?php
namespace App\Model;
use App\Autoloader;

Class SupprimerLivreModel extends Model
{

    private $reqExecute;
    public function __construct()
    {
        $this->table='livres';
    }
    
    public function SupprimerLivre($id)
    {
        $this->reqExecute=$this->requete("UPDATE {$this->table}  SET `Statut_de_suppression`=1 WHERE `Id`= {$id}",array($id));
        return $this->reqExecute;
    }

 
   
   
}


?>