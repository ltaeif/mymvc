<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 04/02/14
 * Time: 11:05
 */
/* Logon Screen Window
 * Description: Obviously the Logon Window. I think every WebApp has one.
 *
 * author: GI Technologies, 2011
 * Version 0.0.3
 * Revision: N/A
 */
if(!defined('_GaiaEXEC')) die('No direct access allowed.');
$lang = (isset($_SESSION['site']['localization']) ? $_SESSION['site']['localization'] : 'fr_ALL');
$site = (isset($_SESSION['site']['dir']) ? $_SESSION['site']['dir'] : false);
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>DanteEHR Logon Screen</title>

    <!-- Bootstrap core CSS -->
    <link href="ressources/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="ressources/bootstrap/css/signin.css">
    <link rel="stylesheet" type="text/css" href="ressources/bootstrap/css/custom_app.css">

    <link rel="shortcut icon" href="favicon.ico">
    <script src="JSrouter.php"></script>
    <script src="data/api.php"></script>
    <script type="text/javascript">
        var app, site = '<?php print $site ?>', localization = '<?php print $lang ?>';
        function i18n(key){ return lang[key] || key; }
        function say(a){ console.log(a); }
        //console.log(globals);
    </script>
</head>

<body id="login">

    <div class="container">

      <form class="form-signin" role="form" >
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="email" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->

    <div id="copyright">DanteEHR | <a href="javascript:void(0)" onClick="">Copyright Notice</a></div>

    <!-- Bootstrap core JavaScript
      ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="ressources/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="ressources/bootstrap/docs/assets/js/docs.min.js"></script>
  </body>
</html>