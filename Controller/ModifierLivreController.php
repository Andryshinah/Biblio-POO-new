<?php
namespace App\Controller;
use App\Model\DetailsLivreModel;
use App\Model\ModifierLivreModel;

Class ModifierLivreController extends Controller
{
    public $tab=array();

  public function Index()
  {
    $ModificationLivre=new ModifierLivreModel();
    $target_dir = "../public/images/";
    $target_dirFile = "../public/files/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $target_fichier = $target_dirFile . basename($_FILES["fichier"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $FileType = strtolower(pathinfo($target_fichier,PATHINFO_EXTENSION));

   
    if(isset($_POST["submit"])) 
      {
          $check = getimagesize($_FILES["image"]["tmp_name"]);
          $checkFile = filesize($_FILES["fichier"]["tmp_name"]);
          if($check !== false && $checkFile !==false) 
          {
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
          } 
          else 
          {
              echo "File is not an image and file cannot be uploaded";
              $uploadOk = 0;
          }
      }
        
        if (file_exists($target_file) && file_exists($target_dirFile)) 
        {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        
        if ($_FILES["image"]["size"] > 500000 && filesize($_FILES["fichier"]["tmp_name"])<100000000) 
        {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $FileType != "pdf" ) 
        {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed and if you upload file please respect pdf format";
            $uploadOk = 0;
        }
        
        if ($uploadOk == 0)
        {
            echo "Sorry, your file was not uploaded.";
       
          } 
        else 
        {
          if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["fichier"]["tmp_name"],$target_fichier)) 
          {
          echo "The file ". basename( $_FILES["fichier"]["name"]). " has been uploaded.";
          $this->tab=$ModificationLivre->ModifierLivre($_POST["Id"],$_POST['Titre'],$_POST['nbPages'],$_FILES["image"]["name"],$_FILES["fichier"]["name"],$_POST['statut']);
          $this->render("ResultatRequete.view");
          } 
          else 
          {
            echo "Sorry, there was an error uploading your file.";
          }
      }
      
  }
    
            
      
      


}
?>