<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hello!</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- import the webpage's stylesheet -->
    <link rel="stylesheet" href="{{ asset('webapp/style.css') }}">
    <!-- Manifest -->
    <link rel="manifest" href="{{ asset('webapp/manifest.json') }}">
  </head>  
  <body>
    <h1>
      InstallableR
    </h1>
    
    <p class="hidden">
      <b>STOP!</b> This page <b>must</b> be served over HTTPS.
      Please <a>reload this page via HTTPS</a>.
    </p>
    
    <p>
      Make me installable, follow the 
      <a href="https://web.dev/codelab-make-installable/">instructions</a> here.
    </p>
    
    <!-- Install button, hidden by default -->
    <div id="installContainer" class="hidden">
      <button id="butInstall" type="button">
        Install
      </button>
    </div>

    <!-- import the webpage's javascript file -->
    <script src="{{ asset('webapp/script.js')" defer></script>
    
    <!-- include the Glitch button to show what the webpage is about and
          to make it easier for folks to view source and remix -->
    <div class="glitchButton" style="position:fixed;top:20px;right:20px;"></div>
    <script src="https://button.glitch.me/button.js"></script>
  </body>
</html>
