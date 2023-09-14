<?php
namespace App\Controller;

Class AccueilController extends Controller
{
    public function Index()
    {
        include_once ROOT."./View/Accueil.view.php";
    }
}
?>