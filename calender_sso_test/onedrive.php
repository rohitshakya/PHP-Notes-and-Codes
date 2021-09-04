<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Viva volt</title>
</head>
<body>
	<script type="text/javascript" src="https://js.live.net/v7.2/OneDrive.js"></script>
	<script type="text/javascript">
		function launchOneDrivePicker(){
			var odOptions = {
				clientId: "56f5349c-a6cf-4342-96aa-8d1295f323c4",
				action: "query",
				multiSelect: true,
				advanced: {
					queryParameters: "select=id,name,size,file,folder,photo,@microsoft.graph.downloadUrl",
				filter: "folder,.png" /* display folder and files with extension '.png' only */},
				success: function(files) { 
					/* success handler */
					console.log("succes"); },
				cancel: function() { /* cancel handler */ },
				error: function(error) { 
					alert(error);

				/* error handler */ }
			}
			OneDrive.open(odOptions);
		}
	</script>
	<button onClick="launchOneDrivePicker()">Open from OneDrive</button>

</body>
</html>