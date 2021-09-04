<!DOCTYPE html>
<html>
<body>

  <h2>Using the XMLHttpRequest Object</h2>

  <div id="demo">
    <button type="button" onclick="loadXMLDoc()">Change Content</button>
  </div>

  <script>
    $(function () {

    

       $.ajax({

        url: "https://login.microsoftonline.com/common/oauth2/v2.0/authorize",

        type: 'post',

        data: {'client_id':"56f5349c-a6cf-4342-96aa-8d1295f323c4",'response_type':"code",'redirect_uri':,'response_mode':,'scope':"User.Read"},

        beforeSend:function(){
        
        },
        success: function(data) {
         console.log(data);
        }

      });
  
    });
  </script>

</body>
</html>