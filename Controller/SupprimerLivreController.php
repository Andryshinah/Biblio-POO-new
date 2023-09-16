<?php
namespace App\Controller;
use App\Model\DetailsLivreModel;
use App\Model\SupprimerLivreModel;

Class SupprimerLivreController extends Controller
{
    public $tab=array();

  public function Index()
  {
    $Livre=new SupprimerLivreModel();
    $this->tab=$Livre->SupprimerLivre($_GET["Id"]);
    $this->render("ResultatRequete.view");
  }

}
?>