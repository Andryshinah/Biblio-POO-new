<?php
namespace App\Model;

Class SuppressionMultiModel extends Model
{

    private $reqExecute;
    public function __construct()
    {
        $this->table='livres';
    }
    
    public function SuppressionMulti(array $id)
    {
        $ids = array_map('intval', $id);
        $idString = implode(', ', $ids);
    
        $this->reqExecute = $this->requete(
            "UPDATE {$this->table} SET `Statut_de_suppression`=1 WHERE `Id` IN ({$idString})"
        );
    
        return $this->reqExecute;
    }
  
}


?>