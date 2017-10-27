<?php
$destination = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['HTTP_URI'] . "";
require_once('helper.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DB Bahn WIFI</title>
  <link rel="stylesheet" href="./assets/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="./assets/css/stylesheet.css" type="text/css" />
  <script src="./assets/js/jquery-2.1.4.min.js"></script>
  <script src="./assets/js/js.cookie.js"></script>
  <script src="./assets/js/bootstrap.min.js"></script>
  <script src="./assets/js/main.js"></script>
  <script type="text/javascript" src="./assets/js/language-select.js"></script>
  <script type="text/javascript">
    function redirect() {
      setTimeout(function() {
        window.location = "/captiveportal/index.php";
      }, 100);
    }
  </script>
</head>
<body>
<div class="container">
  <div class="header">
    <div class="logo">
    <img src="./assets/images/logo.svg" alt="Logo" data-image="/images/logo"></div>
    <div class="menu">
      <select class="language-select">
        <option value="/nl">Dutch</option>
        <option value="/en">English</option>
        <option value="/fr">French</option>
        <option value="/de" selected>German</option>
      </select>
    </div>
    </div>
    <div class="error" id="error-default" style="display:none">
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span data-slot="de: Error: default"><strong>Error:</strong>&nbsp;Entschuldigung, leider ist ein Fehler aufgetreten.</span>
      </div>
    </div>
    <div class="error" id="error-payment" style="display:none">
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span data-slot="de: Error: payment"><strong>Error:</strong>
          Payment failed.
        </span>
      </div>
    </div>
    <div class="error" id="error-create_voucher" style="display:none">
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span data-slot="de: Error: create voucher"><strong>Error:</strong>
          Failed to create voucher.
        </span>
      </div>
    </div>
    <div class="error" id="error-email" style="display:none">
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span data-slot="de: Error: invalid email"><strong>Error:</strong>
          Email is missing or invalid.
        </span>
      </div>
    </div>
    <div class="error" id="error-login" style="display:none">
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span data-slot="de: Error: login"><strong>Error:</strong>
          Error when logging in, please try again
        </span>
      </div>
    </div>
    <div class="error" id="error-logout" style="display:none">
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span data-slot="de: Error: logout"><strong>Error:</strong>
          Error when logging out, please try again
        </span>
      </div>
    </div>
    <div class="error" id="error-no_voucher" style="display:none">
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span data-slot="de: Error: missing voucher"><strong>Error:</strong>
          Voucher is missing
        </span>
      </div>
    </div>
    <div class="error" id="error-invalid_voucher" style="display:none">
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span data-slot="de: Error: invalid voucher"><strong>Error:</strong>&nbsp;&nbsp;Ein Fehler ist aufgetreten. Der Code ist abgelaufen, oder wurde bereits genutzt.</span>
      </div>
    </div>
    <div class="jumbotron">
      
      <div class="user-class-2">
        
        <div class="user-offline text-center">
        <img data-image="/images/2c_offline_cover_picture" class="img-responsive img-full" src="./assets/images/2c_offline_cover_picture.jpg"></div>
      </div>
      
      <div class="connectivity">
        <div class="user-offline content-container">
          <div class="user-class-2">
            <div class="user-offline">
              <h2 data-slot="de: 2 class: welcome header h2" data-module="2 class: welcome heading">Herzlich Willkommen!</h2>
              
              <div data-slot="de: 2 class: welcome text"><p>Vergn&uuml;gen Sie sich im kostenlosen Internetzugang &uuml;ber WLAN im ICE. Zus&auml;tzliche digitale Angebote und Videos finden Sie im ICE Portal unter portal.imICE.de.</p><p>Bitte bedenken Sie, dass Sie sich die verf&uuml;gbare Mobilfunkbandbreite mit allen anderen Fahrg&auml;sten teilen. Verzichten Sie auf datenhungrige Internetdienste wie Videostreaming und schalten Sie automatische Downloads bitte aus.</p><p>Gute Unterhaltung und viel Spa&szlig; beim Surfen w&uuml;nscht Ihnen Ihre Deutsche Bahn.</p></div>
            </div>
          </div>
          
          <div class="user-offline">
            <div class="wifi-info-link-container">
              <span data-slot="de: Wifi info text before">Mehr Informationen:&nbsp;</span><a href="/de/wifiinfo/" data-slot="de: Wifi info text">WIFIonICE</a>
            </div>
            <div class="terms-link-container">
              <span data-slot="de: Before Terms text">Ich akzeptiere die</span> <a href="/de/terms/" data-slot="de: Terms Link text">Nutzungsbedingungen</a> <span data-slot="de: After Terms text"> von Icomera AB.</span>
            </div>
            <div class="text-center btn-container">

              <form method="POST" action="/captiveportal/index.php" onsubmit="redirect()" class="form-signin">
                <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
                <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
                <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
                <input type="hidden" name="target" value="<?=$destination?>">
                <input type="hidden" name="login" value="true"><input type="hidden">
                <button id="connect" name="connect" class="btn btn-lg btn-primary connect" type="submit">
                  <span data-slot="de: 1 class: login button">Hier geht's ins Internet</span>
                </button>
              </form>
            </div>
          </div>
        </div>
        
        <div>
          
        </div>
      </div>
    </div>
    <div class="row">
      <div class="footer font-size-small">
        <div class="inner">
          <span data-slot="de: Footer: copyright">
            &copy; 2016 Icomera AB All Rights Reserved
          </span>
          <span>
            &nbsp;|&nbsp;
          </span>
          <span>
            <a href="/de/impressum/" data-slot="de: Footer: Impressum">Impressum</a>
          </span>
          <span>
            &nbsp;|&nbsp;
          </span>
          <span>
            <a href="/de/terms/" data-slot="de: Footer: terms and conditions">AGB</a>
          </span>
          <span>
            &nbsp;|&nbsp;
          </span>
          <span>
            <a href="http://www.icomera.com" data-slot="de: Footer: about Icomera">&Uuml;ber Icomera</a>
          </span>
          <span>
            &nbsp;|&nbsp;
          </span>
          <span>
            <a href="http://www.bahn.de" data-slot="de: Footer: bahn link">Bahn.de</a>
          </span>
          <div id="powered_by">
            <span>
            <img src="./assets/images/powered_by_icomera.gif" alt="Powered by Icomera"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>