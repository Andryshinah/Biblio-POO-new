<?php
namespace App\Controller;
use App\Model\DetailsLivreModel;

Class DetailsLivreController extends Controller
{
    public $tab=array();

    public function Index()
{
    $AffichageLivre = new DetailsLivreModel();
    $livreDetails = $AffichageLivre->AfficherLivredetails($_GET['Id']); 
    $this->tab = $livreDetails;
    $this->render("LivreDetail.view", $this->tab);
}

}
?>