<?php

use App\Core\Main;
use App\Autoloader;
use App\Core\SessionManager;
define('ROOT',dirname(__DIR__));
require_once ROOT."/Autoloader.php";
Autoloader::Register();
$session=new SessionManager();
$session->DebutSession();
$app=new Main;
$app->start();

?>
