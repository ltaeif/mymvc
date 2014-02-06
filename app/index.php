<?php
if(!isset($_SESSION))
{
    session_name('GaiaEHR');
    session_start();
    session_cache_limiter('private');
}

include "config/config.php";
include "lib/Controller.php"; 
include "lib/mvcController.php"; 
 
mvcController::init();