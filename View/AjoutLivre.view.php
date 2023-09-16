<?php ob_start();

?>
<div class="col-9" style="margin: -4% 0% 0% -26%;width: 115%;">

  <div class="card bg-secondary mb-3 " style="max-width: 43rem;margin: 70px 100px 100px 458px;">
  <div class="card-header"><h4 class="card-title" style="margin: 14px 10px 10px 208px;">Formulaire d'Ajout'</h4> </div>
  <div class="card-body">
    <form method='POST' action='AjoutLivreData' enctype="multipart/form-data">
    <p class="card-text">
    <div class="form-group">
        <input type="hidden" name="Id" class="form-control"  >
    </div>
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Titre</label>
        <input type="text" name="Titre" class="form-control" >
    </div>
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Nombre de pages</label>
        <input type="text" name="nbPages" class="form-control">
    </div>
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Image</label>
        <input type="file" name="newimage" class="form-control">
    </div>
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Fichier</label>
        <input type="file" name="newfichier" class="form-control">
    </div>
    <div class="form-group">
        <input type="hidden" name="statut" class="form-control" value=0>
    </div>
   <div> <button type="submit" class="btn btn-info" name='submit' style= "margin: 5% 13% 10% 29%;width: 41%;">Ajouter</button>
   </div>
</form>
<?php
$content = ob_get_clean();
$titre="Les livres de sciences,representent la connaissance ";
require ROOT."/Template.php"
?>