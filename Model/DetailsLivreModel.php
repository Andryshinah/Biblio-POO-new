<?php
namespace App\Model;


Class DetailsLivreModel extends Model
{

    private $reqExecute;
    public function __construct()
    {
        $this->table='livres';
    }
    
    public function AfficherLivredetails($id)
    {
        $this->reqExecute=$this->requete("SELECT `Id`, `Titre`, `nbPages`, `image`, `livre`, `Statut_de_suppression` FROM {$this->table} WHERE `Id` = {$id}")->fetch();
        return $this->reqExecute;
    }

 
   
   
}


?>