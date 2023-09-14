<?php
namespace App\Controller;

Class MainController extends Controller
{
    public function Index()
    {
        include_once ROOT."./View/Accueil.view.php";
    }
}
?>