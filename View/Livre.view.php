<?php

use App\Core\SessionManager;

ob_start();
for($i=0;$i<count($this->tab);$i++){
?>

<form method="POST" action="SuppressionMulti">
    <table class="table table-hover ">
        <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Titres</th>
                <th scope="col">Fichier</th>
                <th scope="col">Nombres de pages</th>
                <th scope="col" colspan="2" class="align-middle">Actions</th>
            </tr>
        </thead>
            <tr class="table-active">
                
                <td class="align-middle"><img src="../public/images/<?= $this->tab[$i]["image"] ?>" style="width: 100px;height: 145px; border-radius:10px;"></td>
                <td class="align-middle"><a href="DetailsLivre?Id=<?= $this->tab[$i]["Id"] ?>"><?= $this->tab[$i]["Titre"] ?></a></td>
                <td class="align-middle"><?= $this->tab[$i]["livre"] ?></td>
                <td class="align-middle"><?= $this->tab[$i]["nbPages"] ?></td>
                <td class="align-middle"><a href="ModifierLivreFormulaire?Id=<?= $this->tab[$i]["Id"] ?>"><button type="button" class="btn btn-primary">Modifier</button></a></td>
                <td class="align-middle"><a href="../public/files/<?= $this->tab[$i]["livre"] ?>" download="<?= $this->tab[$i]["livre"] ?>"><button type="button" class="btn btn-info">Telecharger</button></a></td>
                <td class="align-middle"><a href="Lecture?Id=<?= $this->tab[$i]["Id"] ?>"><button type="button" class="btn btn-success">Lire l'extrait</button></a></td>
                <td class="align-middle"><a href="SupprimerLivre?Id=<?= $this->tab[$i]["Id"] ?>"><button type="button" class="btn btn-warning">Supprimer</button></a></td>
            </tr>
            <td><input type="checkbox" name="Livre_selection[]" value="<?=  $this->tab[$i]["Id"];?>" style="margin:69px 10px 10px 28px;"></td>
       
    </table>
    <?php
}
?>
    <div class="d-grid gap-2" style="margin: 9px 10px 10px 5px;">
    <button type="submit" name="SuppressionMulti" class="btn  btn-lg btn-danger">Supprimer ceux selectionées</button>
    </div>
</form>
<a href="AjoutLivre">
    <div class="d-grid gap-2">
        <button class="btn btn-lg btn-primary" type="button">Ajouter</button>
    </div>
</a>

<?php

$content = ob_get_clean();
$session=new SessionManager();
$titre= "Bonjour:". $session->getSessionVariable("name");
require  ROOT."/Template.php";
?>