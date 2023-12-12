<?php
ob_start();

?>
<div class="row">
  <div class="col-6">
    <img src="../public/images/<?= $this->tab["image"]?>" style="width: 258px; height: 400px; border-radius: 10px;">
  </div>
  <div class="col-6">
    <p style="font-weight: bolder;font-size: 131%;">Titre : <?= $this->tab["Titre"] ?></p>
    <p style="font-weight: bolder;font-size: 131%;">Nombre de pages :<?= $this->tab["nbPages"] ?></p>
    
  </div>
</div>

    
 



<?php
$content = ob_get_clean();
 $titre=$this->tab["Titre"];
require  ROOT."/Template.php";
?>