<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <title>Viva Volt</title>

  <script type="text/javascript">
    

    // The Browser API key obtained from the Google API Console.
    // Replace with your own Browser API key, or your own key.
    var developerKey = 'AIzaSyAz3K3wI24uLawM63ZDKJBI_LokaSHyKww';

    // The Client ID obtained from the Google API Console. Replace with your own Client ID.
    //var clientId = "4655950119-3h7kdlruim2lblef6gmcrmbok46uki85.apps.googleusercontent.com"
    var clientId="4655950119-k1u7qvfsr90g4ic42dv5grofihmf70kp.apps.googleusercontent.com"

    // Replace with your own project number from console.developers.google.com.
    // See "Project number" under "IAM & Admin" > "Settings"
    var appId = "drivedemo-314206";

    // Scope to use to access user's Drive items.
    var scope = ['https://www.googleapis.com/auth/drive.file'];

    var pickerApiLoaded = false;
    var oauthToken;

    // Use the Google API Loader script to load the google.picker script.
    function loadPicker() {
      gapi.load('auth', {'callback': onAuthApiLoad});
      gapi.load('picker', {'callback': onPickerApiLoad});
    }

    function onAuthApiLoad() {
      window.gapi.auth.authorize(
      {
        'client_id': clientId,
        'scope': scope,
        'immediate': false
      },
      handleAuthResult);
    }

    function onPickerApiLoad() {
      pickerApiLoaded = true;
      createPicker();
    }

    function handleAuthResult(authResult) {
      if (authResult && !authResult.error) {
        oauthToken = authResult.access_token;
        createPicker();
      }
    }

    // Create and render a Picker object for searching images.
    function createPicker() {
      if (pickerApiLoaded && oauthToken) {
        var view = new google.picker.View(google.picker.ViewId.DOCS);
        view.setMimeTypes("image/png,image/jpeg,image/jpg");
        var picker = new google.picker.PickerBuilder()
        .enableFeature(google.picker.Feature.NAV_HIDDEN)
        .enableFeature(google.picker.Feature.MULTISELECT_ENABLED)
        .setAppId(appId)
        .setOAuthToken(oauthToken)
        .addView(view)
        .addView(new google.picker.DocsUploadView())
        .setDeveloperKey(developerKey)
        .setCallback(pickerCallback)
        .build();
        picker.setVisible(true);
      }
    }

    // A simple callback implementation.
    function pickerCallback(data) {
      if (data.action == google.picker.Action.PICKED) {
        var fileId = data.docs[0].id;
        window.open("https://drive.google.com/file/d/"+fileId+"/view?usp=drivesdk");
        window.location.href = "<?php echo base_url();?>" +"/packsack";
      }
    }
  </script>
</head>
<body>
  <div id="result"></div>

  <!-- The Google API Loader script. -->
  <script type="text/javascript" src="https://apis.google.com/js/api.js?onload=loadPicker"></script>
</body>
</html>
