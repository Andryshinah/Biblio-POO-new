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
        $this->reqExecute=$this->requete();
        return $this->reqExecute;
        
    }

 
   
   
}


?>