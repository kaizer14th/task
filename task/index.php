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
      <div class="login">
        <?PHP
          session_start();

          if(!isset($_SESSION['uid'])) {
          echo '<form method="POST" action="login.php">
              Login: <br /> <input name="login" type="text"><br />
              Password: <br /> <input name="password" type="password"><br />
              <input name="submit" type="submit" value="Sign in">
              <a href="register.php"><input type="button" value="Register"></a>
            </form>';
          } else {
            echo "hi, ". $_SESSION["login"] ."<form method=\"POST\" action=\"exit.php\">
              <input name='end' type='hidden' value='1'>
              <a href='editProfile.php'>Edit Profile </a>
              <input name=\"submit\" type=\"submit\" value=\"Log out\"></form>";
          }
        ?>
      </div>
      <?php  
      // Loading all comments via function while
      include ("connect.php");

      if (empty($itemsPerPage)) {
        $itemsPerPage = 3;
      } else {
        $itemsPerPage = $_GET['ipp'];
      }

      if (!isset($one)) {
        $one = 0;
      } 

      $rangePages = 4;
      $sql = mysql_fetch_assoc(mysql_query("SELECT COUNT(*) FROM messages "));
      $items = $sql['COUNT(*)'];
      $pageCount = ceil($items / $itemsPerPage) + 1;
      $i = 1;
      $one = $_GET['page'];
      $thr = $rangePages--;

      if ($one > $thr) {
        echo "<a href='index.php?page=1'> << ... </a>";
      }

      $two = $one + $rangePages;

      if ($two >= $pageCount) $two = $pageCount;

      $i = $one - $rangePages; 

      if ($i < 1 ) $i = 1;

      while ($i < $two) {
        echo "<a href='index.php?page=". $i ."'>". $i ."</a> ";
        $i++;
      }

      if ($one < $rangePages) {
        while ($i < $rangePages) {
          echo "<a href='index.php?page=". $i ."'>". $i ."</a> ";
          $i++;
        }
      }

      if ($pageCount > $rangePages and $one < $pageCount - $rangePages) {
        echo " ... ";
        $pageCount--;
        echo "<a href='index.php?page=". $pageCount ."'> >> </a>";
      }

      $one--;
      $pageOne = $one * $itemsPerPage;
      $comments = mysql_query("SELECT * FROM messages LIMIT ". $pageOne .", ". $itemsPerPage); 
      // Fetching array from query    
      while ($row = mysql_fetch_assoc($comments)) {
        $name = $row['name'];
        $id = $row['id'];
        $uid = $row['user_id'];
        $fullText = $row['text'];
        $time = $row['changeTime'];
        $sText = $row['short'];
        // Writing bloc
        echo "<div class='addField com'>
                <div > <img src='avatar/". $uid .".jpg' width='100' alt='avatar'> </div>
                <div class='nameM'>". $name ."</div><br />
                <div class='textN g'>". $sText ."</div>
                <div class='textM h'>". $fullText ."</div>
                <div class='time'>". $time ."</div>";
                if ($uid == $_SESSION['uid']) {
                  echo "<form Method='POST' name='changeForm' action='changeForm.php'>
                  <input type='submit' class='changeB' value='Редагувати' >
                  <input type='hidden' value='". $uid ."' >
                  <input type='hidden' name='id' value='". $id ."' >
                </form>";}
        echo "</div>";
      }
      
      if (isset($_SESSION['uid'])) {
       echo '<div class="addField">
            <span class="sText">Додати новий запис</span>
            <hr />
            <form Name="message" Method="POST" ACTION="addForm.php" name="form" id="form">
              <span class="smText">Назва</span>  
              <label class="error1 ">(2-60 символів)</label>
              <textarea name="name1" class="field name"id=""></textarea>
              <span class="smText">Короткий текст</span>
              <label class="error2">(5-100 символів)</label>
              <textarea name="sText" class="field smallTxt errorShortTxt"id="e"></textarea>
              <span class="smText">Текст</span>
              <label class="error3">(10-600 символів)</label>
              <textarea name="text" class="field errorTxt"id="e"></textarea>
              <input type="hidden" value="'. $_SESSION['uid'].'" name="id">
              <input type="submit" value="Додати" class="submit">
            </form>
          </div>';
      }
      ?>
    </div>
  </body>
</html> 