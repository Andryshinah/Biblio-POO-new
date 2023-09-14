<?php
namespace App\Controller;

use App\Model\LivreModel;

Class LivreController extends Controller
{
    public $tab=array();
    public function Index()
    {
        $AffichageLivre=new LivreModel();
        $this->tab=$AffichageLivre->AfficherLivre(); 
        // var_dump($this->tab);
        $this->render("Livre.view",$this->tab);
    }
}
?>