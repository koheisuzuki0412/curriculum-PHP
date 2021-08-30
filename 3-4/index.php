<?php
$username = $_POST['username'];
date_default_timezone_set('Asia/Tokyo');
require_once("getData.php");
// include "getData.php";
// $getdata = new getData();
// $getdata->getUserDate();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>checktest4</title>
  </head>
  <body>
    <header>
      <div class="h-left">
        <img src="yi_logo.png" alt="Y＆IのLOGO">
      </div>
      <div class="h-right">
        <div class="top-h">
          <p>ようこそ<?php echo $username; ?>さん</p>
        </div>
        <div class="bottom-h">
          <p>最終ログイン日：<?php echo date("Y-m-d H:i:s"); ?></P>
        </div>
      </div>
    </header>
    
    <article>
      <?php 
      $getdata = new getData;
      $stmt->execute();
      $all = $stmt->fetchAll();
      foreach($all as $loop) {
        echo $loop;
      }
      ?>
      <div><?php echo $getdata->getUserData; ?></div>
    </article>

    <footer>

    </footer>
  </body>
</html>