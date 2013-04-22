<?php
include 'connect.php';

 $post = mysql_query("SELECT * FROM post"); 

        while ($row = mysql_fetch_assoc($post)) {
        $name = $row['name'];
        $id = $row['id'];
        $disc = $row['disc'];
        
        echo "<div class='addField com'>
                
                <div class='nameM'>". $name ."</div><br />
                <div class='textM h'>". $disc ."</div>
                <div class='click' value='". $id ."'>Change</div>
                </div>";
        }
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

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
        $(".click").click(function(){
            $("#changeForm").css({"display" : "block"});
            id = $(this).attr('value');
            $.ajax({
              url: 'responseCH.php',
              success: function(data) {
                $('#changeForm').html(data);
              }
            });

        });
    </script>