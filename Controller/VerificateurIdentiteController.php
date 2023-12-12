<?php
namespace App\Controller;

use App\Core\SessionManager;
use App\Model\VerificateurIdentiteModel;

class VerificateurIdentiteController extends Controller
{
    public $error= array();
   

    public function Index()
    {
        $Compte = new VerificateurIdentiteModel();
        $found=false;
        
          
        if (isset($_POST["Identifiant"])&& !empty($_POST["Identifiant"]) && isset($_POST["Mtp"]) && !empty($_POST["Mtp"]))
        {

            $isVerified = $Compte->Verificateur();
            for ($i=0; $i <count($isVerified) ; $i++) 
            { 
                if($_POST['Identifiant']==$isVerified[$i]["Nom"] && $_POST["Mtp"] == $isVerified[$i]["Mot de passe"]) {
                    $Livre=new LivreController();
                    $Livre->Index();
                    $found = true; 
                    $session=new SessionManager;
                    $session->setSessionVariable("name",$isVerified[$i]["Nom"]);
                    break; 
                }                                                 
            }

        }
        if (!$found) 
        {
            $message="fournissez l'identifiant correct ou mot de passe correct";
            $this->render("Accueil.view",$this->error=["message"=>$message]);
        }
       
    }
}
?>