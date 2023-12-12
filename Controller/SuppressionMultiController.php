<?php
namespace App\Controller;

use App\Model\SuppressionMultiModel;

Class SuppressionMultiController extends Controller
{
    public $tab=array();

    public function Index()
    {
      //asio boucle foreach rehefa mamadika ila y caractère ho las int amzay int no raisina any
      if (isset($_POST['Livre_selection']) && !empty($_POST['Livre_selection'])) 
      {
        // $ids = array_map('intval', explode(',', $_POST['Livre_selection']));
        foreach ($_POST['Livre_selection'] as  $value) 
        {
          $ids=array(intval($value));
          $LivreSuppressionMultiple = new SuppressionMultiModel();
          $LivreSuppressionMultiple->SuppressionMulti($ids);
        }

        
    }
    
      
    }

}
?>