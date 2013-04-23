<!DOCTYPE HTML>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
  </head>
  <body>
      
      <div id="post">
      </div>
      <div id="changeForm">
          
      </div>
      <script language="javascript" type="text/javascript">
        $(document).ready(function(){

            $.ajax({
              url: 'response.php',
              success: function(data) {
                $('#post').html(data);
              }
            });

        });
    </script>
  </body>
</html>