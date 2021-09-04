<script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="do0d2uue6oeqgiw"></script>
<style type="text/css">
    h1 {
  font-family: 'open-sans'; 
}
#img_list {
  background-color: #ccc;
  min-width: 100%;
  min-height: 50px;
}
#img_list li {
    list-style-type: none;
    display: inline;
}
#img_list img {
    max-width: 200px;
}
</style>

<div class="row">
  <div class="small-12 columns">
    <h1>Dropbox Chooser Demo</h1>
    <div id="dropbox-container"></div>
    <hr>
    <ul id="img_list" class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">

    </ul>
  </div>
</div>
<script type="text/javascript">
    /**
 * Chooser (Drop Box)
 * https://www.dropbox.com/developers/dropins/chooser/js
 */
options = {
    success: function(files) {
      files.forEach(function(file) {
        add_img_to_list(file);
      });
    },
    cancel: function() {
      //optional
    },
    linkType: "preview", // "preview" or "direct"
    multiselect: true, // true or false
    extensions: ['.png', '.jpg','.pdf', '.doc', '.docx','.csv','.xls'],
};

var button = Dropbox.createChooseButton(options);
document.getElementById("dropbox-container").appendChild(button);

function add_img_to_list(file) {
  var li  = document.createElement('li');
  var a   = document.createElement('a');
  a.href = file.link;
  var img = new Image();
  var src = file.thumbnailLink;
  src = src.replace("bounding_box=75", "bounding_box=256");
  src = src.replace("mode=fit", "mode=crop");
  img.src = src;
  img.className = "th"
  document.getElementById("img_list").appendChild(li).appendChild(a).appendChild(img);
}
</script>