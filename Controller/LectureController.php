<?php
namespace App\Controller;
use App\Model\DetailsLivreModel;

Class LectureController extends Controller
{
    public $tab=array();
    public function Index()
    {
        $cheminFile=ROOT."/public/files/CorrectionTD2.pdf";
        $AffichageLivre = new DetailsLivreModel();
        $livreDetails = $AffichageLivre->AfficherLivredetails($_GET['Id']); 
        $this->tab = $livreDetails;
        $NomFile=$this->tab["Titre"].".pdf";
        $this->render("LectureExtrait.view",$this->tab);

}
}


?>