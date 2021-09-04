<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Viva Volt</title>
</head>
<body>

  <div id="container"></div>
  <!--dropbox-->
  <script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="do0d2uue6oeqgiw"></script>

  <!--dropbox-->
</body></html>

<input type="file" onchange="previewFile()"><br>
<img src="" height="200" alt="Image preview...">
<script type="text/javascript">
    var fileUrl="";
    function previewFile() {
      const preview = document.querySelector('img');
      const file = document.querySelector('input[type=file]').files[0];
      const reader = new FileReader();

      reader.addEventListener("load", function () {
    // convert image file to base64 string
    preview.src = reader.result;
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
         myfunction(myimgurl);
     };
     reader.onerror = function (error) {
         console.log('Error: ', error);
     };
 }

// prints the base64 string
</script>


<script type="text/javascript">
function myfunction(myimgurl)
{

    var options = {
        files: [
        // You can specify up to 100 files.
        //{'url': 'https://dl.dropboxusercontent.com/s/deroi5nwm6u7gdf/advice.png', 'filename': 'test.png'},
        //{'url': "data:text/html,"+encodeURIComponent("Hello World 21"),'filename': 'dd.txt'},
        {'url': myimgurl,'filename': 'my.jpg'},
        //{'url': fileUrl,'filename': 'ddww.png'},

        
        ],

    // Success is called once all files have been successfully added to the user's
    // Dropbox, although they may not have synced to the user's devices yet.
    success: function () {
        // Indicate to the user that the files have been saved.
        alert("Success! Files saved to your Dropbox.");
    },

    // Progress is called periodically to update the application on the progress
    // of the user's downloads. The value passed to this callback is a float
    // between 0 and 1. The progress callback is guaranteed to be called at least
    // once with the value 1.
    progress: function (progress) {},

    // Cancel is called if the user presses the Cancel button or closes the Saver.
    cancel: function () {},

    // Error is called in the event of an unexpected response from the server
    // hosting the files, such as not being able to find a file. This callback is
    // also called if there is an error on Dropbox or if the user is over quota.
    error: function (errorMessage) {}
};
var button = Dropbox.createSaveButton(options);
document.getElementById("container").appendChild(button);
}
</script>