<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE HTML>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
  </head>
  <body>
      <script language="javascript" type="text/javascript">
        $(document).ready(function(){

            $.ajax({
              url: 'response.php',
              success: function(data) {
                $('#post').html(data);
              }
            });

        });
        var id;
        $(".clic").click(function(){
        alert("fff");
   
        });
        $(".click").click(function(){
            console.log(11111111111);
            $("#changeForm").css({"display" : "block"});
            id = $(this).attr('value');
            $.ajax({
              url: 'response.php',
              success: function(data) {
                $('#changeForm').html(data);
              }
            });

        });
    </script>
      <div id="post">
      <?PHP 
//        $post = mysql_query("SELECT * FROM messages"); 
//        while ($row = mysql_fetch_assoc($post)) {
//        $name = $row['name'];
//        $id = $row['id'];
//        $disc = $row['disc'];
//        // Writing bloc
//        echo "<div class='addField com'>
//                
//                <div class='nameM'>". $name ."</div><br />
//                <div class='textM h'>". $disc ."</div>
//                <form Method='POST' name='changeForm'>
//                <input type='hidden' value='". $id ."'>
//                </form>
//
//";
//                
//        }
        ?>
      </div>
      <div id="changeForm">
          
      </div>
    <div class="click"></div>
  </body>
</html>