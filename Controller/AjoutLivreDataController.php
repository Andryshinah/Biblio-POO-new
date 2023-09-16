<?php
namespace App\Controller;

use App\Model\AjoutLivreModel;

Class AjoutLivreDataController extends Controller
{
    public function Index()
    {
        // var_dump($_FILES["newimage"]);
        // var_dump($_FILES["newfichier"]);
        $Livre=new AjoutLivreModel();
        $target_dir = "../public/images/";
    $target_dirFile = "../public/files/";
    $target_file = $target_dir . basename($_FILES["newimage"]["name"]);
    $target_fichier = $target_dirFile . basename($_FILES["newfichier"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $FileType = strtolower(pathinfo($target_fichier,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) 
      {
          $check = getimagesize($_FILES["newimage"]["tmp_name"]);
          $checkFile = filesize($_FILES["newfichier"]["tmp_name"]);
          if($check !== false && $checkFile !== false) 
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
        // Check if file already exists
        if (file_exists($target_file) && file_exists($target_dirFile)) 
        {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["newimage"]["size"] > 500000 && filesize($_FILES["newfichier"]["tmp_name"])<1000000000) 
        {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $FileType != "pdf" ) 
        {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed and if you upload file please respect pdf format";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0)
        {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
          } 
        else 
        {
          if (move_uploaded_file($_FILES["newimage"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["newfichier"]["tmp_name"],$target_fichier)) 
          {
          echo "The file ". basename( $_FILES["newfichier"]["name"]). " has been uploaded.";
          $Livre->AjoutLivre($_POST['Titre'],$_POST['nbPages'],$_FILES["newimage"]["name"],$_FILES["newfichier"]["name"],$_POST["statut"]);
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