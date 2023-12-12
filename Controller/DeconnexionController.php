<?php
namespace App\Controller;

use App\Core\SessionManager;

class DeconnexionController extends Controller 
{
    private $session;

    public function Index()
    {
        $this->session = new SessionManager();
        $this->session->FinSession();
        $this->render("Accueil.view");
    }
}
?>