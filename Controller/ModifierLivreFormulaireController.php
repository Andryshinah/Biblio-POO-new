<?php
namespace App\Controller;
use App\Model\DetailsLivreModel;
use App\Model\ModifierLivreModel;

Class ModifierLivreFormulaireController extends Controller
{
    public $tab=array();

  public function Index()
  {
    $Livre=new DetailsLivreModel();
    $this->tab=$Livre->AfficherLivredetails($_GET["Id"]);
    $this->render("ModifierLivre.view",$this->tab);
  }

}
?>