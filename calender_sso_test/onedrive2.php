<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Viva volt</title>
</head>
<body>
	<input id="fileUploadControl" name="fileUploadControl" type="file" />
<button onclick="launchSaveToOneDrive()">Save to OneDrive</button>
	<script type="text/javascript" src="https://js.live.net/v7.2/OneDrive.js"></script>
	<script type="text/javascript">

		function launchSaveToOneDrive(){
			var odOptions = {
				clientId: "56f5349c-a6cf-4342-96aa-8d1295f323c4",
				action: "save",
				sourceInputElementId: "fileUploadControl",
				sourceUri: "",
				fileName: "file.jpg",
				openInNewWindow: true,
				advanced: {},
			success: function(files) { 
			alert(files);/* success handler */ },
			progress: function(percent) { /* progress handler */ },
			cancel: function() { /* cancel handler */ },
			error: function(error) { /* error handler */
			alert(error); }
}
OneDrive.save(odOptions);
}
</script>



</body>
</html>