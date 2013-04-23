<?php
include 'connect.php';
if (empty($_GET['id'])) {
 $post = mysql_query("SELECT * FROM post"); 

        while ($row = mysql_fetch_assoc($post)) {
        $name = $row['name'];
        $id = $row['id'];
        $disc = $row['disc'];
        
        echo "<div class='addField com'>
                
                <div class='nameM'>". $name ."</div><br />
                <div class='textM h'>". $disc ."</div>
                <span class='click' value='". $id ."'>Change</span>
                </div>";
        }
} else {
    $uid = $_GET['id'];
    $post = mysql_query("SELECT * FROM post WHERE id=". $uid); 

        $row = mysql_fetch_assoc($post);
        $name = $row['name'];
        $id = $row['id'];
        $disc = $row['disc'];
        
        echo "<div class='addField com'>
                <form action='updateForm.php' id='form' method='post'>
                    <input type='textfield' class='nameM' name='name' value='". $name ."'><br />
                    <input type='textfield' class='textM h' name='disc' value='". $disc ."'><br />
                    <input type='hidden' class='id' name='id' value='". $id ."'>
                    <input type='submit' class='update' value='update'>
                </form>
              </div>";
        
}

?>

<script language="javascript" type="text/javascript">

        var id;
        $(".click").click(function(){
            $("#changeForm").css({"display" : "block"});
            id = $(this).attr('value');
            $.ajax({
              url: 'response.php?id='+id,
              success: function(data) {
                $('#changeForm').html(data);
              }
            });

        });
        $('#form').submit(function() {
        
            var $form = $( this ),
            name = $form.find( 'input[name="name"]' ).val(),
            disc = $form.find( 'input[name="disc"]' ).val(),
            id = $form.find( 'input[name="id"]' ).val(),
            url = $form.attr( 'action' );

            // Send the data using post
            var posting = $.post( url, { n: name, d: disc, i: id } );

        });
    </script>