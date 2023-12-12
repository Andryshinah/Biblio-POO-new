<?php
namespace App\Controller;

use App\Model\LivreModel;
use App\Core\SessionManager;
use App\Model\DetailsLivreModel;

Class LectureController extends Controller
{
    public $tab=array();
    public function Index()
    {
    
    
    $AffichageLivre = new DetailsLivreModel();
    $livreDetails = $AffichageLivre->AfficherLivredetails($_GET['Id']); 
    $this->tab = $livreDetails;
    $cheminFile=ROOT."/public/files/";
    // $NomFile=$this->tab["Titre"].".pdf";
    $NomFile="CorrectionTD2.pdf";
    $fichier=$cheminFile.$NomFile;
    echo $fichier;
    if(file_exists($fichier))
    {
    $lecture=file_get_contents($fichier);
    $lecture_decode = base64_decode($lecture);
       $lecture_latin = iconv("ISO-8859-1", "Windows-1252", $lecture_decode);
    echo ( $lecture_latin);
    }
    $this->render("LectureExtrait.view",$this->tab);
       
    }
}
?>