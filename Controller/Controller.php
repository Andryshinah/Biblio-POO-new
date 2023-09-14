<?php
namespace App\Controller;

abstract class Controller


{
    private $id;
    private $titre;
    private $nbPage;
    private $image;

    public function setId($id)
    {
        $this->id=$id;
    }
    public function getID ()
    {
        return $this->id;
    }

    public function setTitre($titre)
    {
        $this->titre=$titre;
    }
    public function getTitre ()
    {
        return $this->titre;
    }
    
    public function setNbPage($nbPage)
    {
        $this->nbPage=$nbPage;
    }
    public function getNbpage ()
    {
       return  $this->nbPage;
    }

    public function setImage($image)
    {
       $this->image=$image;
    }
    public function getImage ()
    {
        return $this->image;
    }
    public function render(string $fichier,array $donnees=[])
    {
      extract($donnees);
      require_once ROOT.'/View/'.$fichier.'.php';
    }


}
?>