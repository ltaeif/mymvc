<?php
/* Main Screen Application
 *
 * Description: This is the main application file, all the global
 * vars are defined here inluding "var app" witch refers to
 * the applciation Viewport.
 *
 * version 1.0.0
 * revision: N/A
 * author: GI Technologies, 2011
 * modified: Ernesto J Rodriguez (Certun)
 *
 * @namespace App.data.REMOTING_API
 */
if (!defined('_GaiaEXEC')) die('No direct access allowed.');
?>
<html>
	<head>
		<script type="text/javascript">
			var app,
				acl = {},
				user = {},
				settings = {},
				globals = {},
				requires;
		</script>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="favicon.ico">
        <title>DanteEHR :: (Electronic Health Records)</title>
        <!-- Bootstrap core CSS -->
        <link href="ressources/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="resources/bootstrap/css/dashboard.css">
        <link rel="stylesheet" type="text/css" href="resources/bootstrap/css/style_newui.css">
        <link rel="stylesheet" type="text/css" href="resources/bootstrap/css/custom_app.css">


    </head>
	<body>
		<!-- Loading Mask -->
		<div id="mainapp-loading-mask" class="x-mask mitos-mask"></div>
		<div id="mainapp-x-mask-msg">
			<div id="mainapp-loading" class="x-mask-msg mitos-mask-msg">
				<div>
					Loading DanteEHR...
				</div>
			</div>
		</div>
		<!-- slide down message div -->
		<span id="app-msg" style="display:none;"></span>

		<!-- JSrouter and Ext.deirect API files -->
		<script src="JSrouter.php"></script>

		<script type="text/javascript">
			function i18n(key){	return lang[key] || '*'+key+'*'; }
			function say(a){ console.log(a); }


            /**
			 * Function to Copy to the clip board.
			 * This function is consumable in all the application.
			 */
            function copyToClipBoard(token){
                alert('Sweet!', token + ' copied to clipboard, Ctrl-V or Paste where need it.');
                if(window.clipboardData){
                    window.clipboardData.setData('text', token);
                    return null;
                }else{
                    return (token);
                }
            }
            /**
			 * onWebCamComplete
			 * ???
			 */
            function onWebCamComplete(msg){
                app.onWebCamComplete(msg);
            }
            /**
			 * Function to pop-up a Window and enable the user to print the QR Code.
			 */
            function printQRCode(pid){
                var src = settings.site_url + '/patients/' + app.patient.pid + '/patientDataQrCode.png?';
                app.QRCodePrintWin = window.open(src, 'QRCodePrintWin', 'left=20,top=20,width=800,height=600,toolbar=0,resizable=0,location=1,scrollbars=0,menubar=0,directories=0');

                /*Ext.defer(function(){
                    app.QRCodePrintWin.print();
                }, 1000);*/
            }
            /**
			 * Jquery OnReady Event
			 * When all the JS code is loaded execute the entire code once.
			 */

		</script>

        <!-- Bootstrap core JavaScript
       ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="ressources/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="ressources/bootstrap/docs/assets/js/docs.min.js"></script>
	</body>
</html>