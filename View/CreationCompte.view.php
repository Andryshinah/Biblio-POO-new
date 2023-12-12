<?php
ob_start();
?>
<div class="row">
    <form method='POST' action='CreationCompteData' >
    <p class="card-text">
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Nom </label>
        <input type="text" name="Nom" class="form-control" value="" >
    </div>
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Mot de passe pour votre compte</label>
        <input type="text" name="Mtp" class="form-control" value="">
    </div>
   <div> <button type="submit" class="btn btn-info" name='submit' style= "margin: 5% 13% 10% 29%;width: 41%;">Sauvegarder Changement</button>
   
  </div>
   
</form>
  </div>
  </div>
</div>

<?php
$content = ob_get_clean();
 $titre="Formulaire d'adhesion pour membre";
require  ROOT."/Template.php";
?>