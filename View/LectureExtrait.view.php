<?php
ob_start();

?>


    
 



<?php
$content = ob_get_clean();

require  ROOT."/Template.php";
?>