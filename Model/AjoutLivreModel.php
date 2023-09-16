<?php
namespace App\Model;


Class AjoutLivreModel extends Model
{

    private $reqExecute;
    public function __construct()
    {
        $this->table='livres';
    }
    
    public function AjoutLivre($titre,$nbPage,$image,$livre,$statut)
    {
        $this->reqExecute=$this->requete("INSERT INTO {$this->table}(`Id`, `Titre`, `nbPages`, `image`, `livre`, `Statut_de_suppression`) VALUES (Null,?,?,?,?,?)",array($titre,$nbPage,$image,$livre,$statut));
        
        return $this->reqExecute;
    }

 
   
   
}


?>