<?php
if(!isset($_SESSION))
{
    session_name('GaiaEHR');
    session_start();
    session_cache_limiter('private');

}
date_default_timezone_set($_SESSION['site']['timezone']);
include "config/config.php";
include "lib/Controller.php"; 
include "lib/mvcController.php"; 
 
mvcController::init();