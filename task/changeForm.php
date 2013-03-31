<!DOCTYPE HTML>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="jquery.validate.min.js"></script>
    <script type="text/javascript" src="validate.js"></script>
  </head>
  <body>
    <div class="contentM">
      <?php

        include ("connect.php");
        
        $id = mysql_real_escape_string($_POST['id']);
        $sql = mysql_query("SELECT * FROM `messages` WHERE id='". $id ."'");
        $row = mysql_fetch_assoc($sql);
        $name = $row['name'];
        $fullText = $row['text'];
        $short = $row['short'];
      
      if (!isset($_SESSION['id'])) { 
        echo '<div class="addField">
            <span class="sText">Редагування записа</span>
            <hr />
            <form Name="message" Method="POST" ACTION="saveForm.php" name="form" id="form">
              <span class="sText">Назва</span>  
              <label class="errorShortTxt">(2-60 символів)</label>
              <textarea name="name1" class="field name">'. $name .'</textarea>
              <span class="sText">Короткий текст</span>
              <label class="errorShortTxt">(5-100 символів)</label>
              <textarea name="sText" class="field smallTxt" id="e">'. $short .'</textarea>
              <span class="sText">Текст</sp *an>  
              <label class="errorShortTxt">(10-600 символів)</label>
              <textarea name="text" class="field" id="e">'. $fullText .'</textarea>
              <input type="hidden" name="uid" value="'. $uid .'" >
              <input type="hidden" name="id" value="'. $id .'">
              <input type="submit" value="Обновити" class="submit">
            </form>
            <form Name="message" Method="POST" ACTION="deleteForm.php" name="form" id="form">
              <input type="hidden" name="uid" value="'. $uid .'" >
              <input type="hidden" name="id" value="'. $id .'">
              <input type="submit" value="Видалити" class="submit delete">
            </form>
          </div>';
      }
      ?>
    </div>
  </body>
</html> 