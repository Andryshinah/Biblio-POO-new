<?php
namespace App\Model;
use App\Autoloader;

Class LivreModel extends Model
{

    private $reqExecute;
    public function __construct()
    {
        $this->table='livres';
    }
    
    public function AfficherLivre()
    {
        $this->reqExecute=$this->requete('SELECT * FROM '.$this->table);
        return $this->reqExecute->fetchAll();
        
    }

 
   
   
}


?>