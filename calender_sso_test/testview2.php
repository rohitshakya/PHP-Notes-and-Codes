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
document.getElementById("container").appendChild(button);
}
</script>
<script type="text/javascript">
