<?php
namespace App\Controller;

use App\Model\LivreModel;
use App\Core\SessionManager;

Class LivreController extends Controller
{
    public $tab=array();
    public function Index()
    {
    
        $AffichageLivre=new LivreModel();
        $this->tab=$AffichageLivre->AfficherLivre(); 
        $session=new SessionManager();
        $this->render("Livre.view",$this->tab);
    }
}
?>