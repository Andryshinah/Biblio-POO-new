<?php
namespace App\Controller;



Class CreationCompteController extends Controller
{
    public $tab=array();
    public function Index()
    {
       
        $this->render("CreationCompte.view");
    }
}
?>