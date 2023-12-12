<?php
namespace App\Controller;

use App\Model\CreationCompteDataModel;



Class CreationCompteDataController extends Controller
{
    
    public function Index()
    {
       
        if(isset($_POST["Nom"]) && isset($_POST["Mtp"]))
        {
            $Compte=new CreationCompteDataModel();
            $Compte->AjoutCompte($_POST["Nom"],$_POST["Mtp"]);
            $this->render("Accueil.view");
            
        }
    }
}
?>