<?php
ob_start();
?>
<div class="row">
  <div class="col-3">
    <img src="../public/images/<?= $this->tab["image"] ?>" style="width: 258px; height: 400px; border-radius: 10px;">
  </div>
  <div class="col-6">
    <p style="font-weight: bolder;font-size: 131%;">Titre : <?= $this->tab["Titre"] ?></p>
    <p style="font-weight: bolder;font-size: 131%;">Nombre de pages :<?= $this->tab["nbPages"] ?></p>
  </div>
  <div class="col-9" style="margin: -41% 0% 0% 29%;width: 91%;">
  <div class="card bg-secondary mb-3 " style="max-width: 20rem;margin: 70px 100px 100px 458px;">
  <div class="card-header"><h4 class="card-title">Formulaire de modification</h4> </div>
  <div class="card-body">
    <form method='POST' action='ModifierLivre' enctype="multipart/form-data">
    <p class="card-text">
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Identifiant Livre</label>
        <input type="number" name="Id" class="form-control" value="<?= $this->tab["Id"]?>" readonly="">
    </div>
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Titre</label>
        <input type="text" name="Titre" class="form-control" value="<?= $this->tab["Titre"]?>">
    </div>
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Nombre de pages</label>
        <input type="text" name="nbPages" class="form-control" value="<?= $this->tab["nbPages"]?>" >
    </div>
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault"></label>
        <input type="file" name="image" class="form-control">
    </div>
    <div class="form-group">
        <input type="hidden" name="statut" class="form-control" value="<?= $this->tab["Statut_de_suppression"]?>">
    </div>
   <div> <button type="submit" class="btn btn-info" name='submit' style= "margin: 5% 13% 10% 29%;width: 41%;">Sauvegarder Changement</button>
   </div>
</form>
  </div>
  </div>
</div>

<?php
$content = ob_get_clean();
 $titre=$this->tab["Titre"];
require  ROOT."/Template.php";
?>