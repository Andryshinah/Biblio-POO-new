<?php
namespace App\Controller;

use App\Model\LivreModel;
use App\Core\SessionManager;

Class VerificateurController extends Controller
{
    public $tab;
    public function Index()
    {

        $session=new SessionManager();
        if($session->getSessionVariable("name") !== null) 
        {
            $AffichageLivre=new LivreModel();
            $this->tab=$AffichageLivre->AfficherLivre(); 
            $this->render("Livre.view",$this->tab);
        }
        else
        {
            include_once ROOT."./View/Verificateur.view.php";
        }
       
    }
}
?>