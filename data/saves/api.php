<?php
if(!isset($_SESSION)) {
    session_name('GaiaEHR');
    session_start();
    session_cache_limiter('private');
}
if(isset($_SESSION['install']) && $_SESSION['install'] != true){
    include_once($_SESSION['root'] . '/dataProvider/Modules.php');
    $m = new Modules();
}
/*
 * getREMOTING_API
 */
function getREMOTING_API($API, $moduleDir = false)
{
    $actions = array();
    foreach ($API as $aname => &$a) {
        $methods = array();
        foreach ($a['methods'] as $mname => &$m) {
            if (isset($m['len'])) {
                $md = array(
                    'name' => $mname,
                    'len' => $m['len']
                );
            } else {
                $md = array(
                    'name' => $mname,
                    'params' => $m['params']
                );
            }
            if (isset($m['formHandler']) && $m['formHandler']) {
                $md['formHandler'] = true;
            }
            $methods[] = $md;
        }
        $actions[$aname] = $methods;
    }
    $url = ($moduleDir === false ? 'data/router.php' : "data/router.php?module=$moduleDir");
    return json_encode(array(
        'url' => $url,
        'type' => 'remoting',
        'actions' => $actions,
        'timeout' => 7600000
    ));
}

require ('config.php');
// convert API config to Ext.Direct spec
header('Content-Type: text/javascript');
echo '

//class App Using Function and prototype
   /* function app (data) {
        this.data = data;
    }

    App.prototype.getData = function() {
        return this.data ;
    };

    App.prototype.setData = function() {
        return this.data ;
    };*/




//class App using Singleton function

function app () {
    this.data =  new Array();

    this.getData = function () {
        return this.data ;
    };
}



//class App Using object literals
/*var app = {
    data:  new Array(),

    getData: function () {
        return this.data;
    }
}
*/
';
echo '
var App = new app();
App.data = [];';
echo 'App.data.push(' . getREMOTING_API($API) . ');';
echo 'console.log(App);';
if(isset($_SESSION['install']) && $_SESSION['install'] != true){
    foreach ($m->getEnabledModules() AS $module) {
        echo 'App.data.push(' . getREMOTING_API($module['actionsAPI'], $module['dir']) . '); console.log(App);';

    }
}

