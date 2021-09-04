<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>upload</title>
</head>
<body>

	<i class="fa fa-dropbox" aria-hidden="true"></i>
	<input type="file" onchange="previewFile()"><br>
	<div id="container1"></div>

</body>
</html>

<!--script library for one drive-->
<script type="text/javascript" src="https://js.live.net/v7.2/OneDrive.js"></script>
<!--script library for one drive-->

<!--dropbox-->
<script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="do0d2uue6oeqgiw"></script>

<script type="text/javascript">
	var fileUrl="";
	function previewFile() {

		const file = document.querySelector('input[type=file]').files[0];
		const reader = new FileReader();
		reader.addEventListener("load", function () {

		}, false);

		if (file) {
			fileUrl=getBase64(file);
			reader.readAsDataURL(file);
		}
	}
</script>
<script type="text/javascript">
	var myimgurl='';
</script>
<script type="text/javascript">
	function getBase64(file) {
		var reader = new FileReader();
		reader.readAsDataURL(file);
		reader.onload = function () {
			myimgurl=reader.result;    
			console.log(reader.result);
			myfunction(myimgurl,file.name);
		};
		reader.onerror = function (error) {
			console.log('Error: ', error);
		};
	}

// prints the base64 string
</script>
<script type="text/javascript">
	function myfunction(myimgurl,filename)
	{

		var options = {
			files: [
			{'url': myimgurl,'filename':filename},
			],
    // Success is called once all files have been successfully added to the user's
    // Dropbox, although they may not have synced to the user's devices yet.
    success: function () {
        // Indicate to the user that the files have been saved.
        alert("Success! Files saved to your Dropbox.");
    },

    progress: function (progress) {},
    cancel: function () {},
    error: function (errorMessage) {}
};
var button = Dropbox.createSaveButton(options);
document.getElementById("container1").appendChild(button);
}
</script>



<input id="fileUploadControl" name="fileUploadControl" type="file" />
<a class="sidebar-header " href="javascript:;"  onclick="launchSaveToOneDrive()"> <span class="m-0"><img
	src="<?=base_url('assets')?>/schoolassets/images/cloud.jpg"></span>
</a>

<script type="text/javascript" src="https://js.live.net/v7.2/OneDrive.js"></script>
<script type="text/javascript">


	$('#fileUploadControl').change(function() {
		var file = $('#fileUploadControl')[0].files[0].name;
	});


	function launchSaveToOneDrive(file){


		var odOptions = {
			clientId: "56f5349c-a6cf-4342-96aa-8d1295f323c4",
			action: "save",
			sourceInputElementId: "fileUploadControl",
			sourceUri: "",
			fileName: file,
			openInNewWindow: true,
			advanced: {},
			success: function(files) { 
				confirm("File uploaded successfully");
				window.location.href = "<?=base_url('/packsack');?>";
			/* success handler */ },
		progress: function(percent) { /* progress handler */ },
	cancel: function() { /* cancel handler */ },
	error: function(error) { /* error handler */
		alert(error); }
	}
	OneDrive.save(odOptions);
}
</script>