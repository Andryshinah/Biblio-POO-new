<?php
ob_start();
?>
<div class="row">
    <form method='POST' action='VerificateurIdentité' >
    <p class="card-text">
    <a href ="CreationCompte">Pas membre,creer un compte utilisateur?</a>
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Identifiant </label>
        <input type="text" name="Id" class="form-control" value="" >
    </div>
    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Mot de passe</label>
        <input type="text" name="Titre" class="form-control" value="">
    </div>
   <div> <button type="submit" class="btn btn-info" name='submit' style= "margin: 5% 13% 10% 29%;width: 41%;">Sauvegarder Changement</button>
   
  </div>
   
</form>
  </div>
  </div>
</div>

<?php
$content = ob_get_clean();
 $titre="Formulaire de verification";
require  ROOT."/Template.php";
?>