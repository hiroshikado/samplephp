<!DOCTYPE html>
<html lang= "ja">
<head>
<title>PHP7技術者認定試験(初級)用</title>
</head>

<body>
  <h1>PHP7技術者認定試験(初級)用</h1>
  <section class= "main">
    <?php
      if (isset($_COOKIE["visited"])){
          $count = $_COOKIE["visited"] + 1;
      }else{
          $count = 1;
      }

      $flag = setcookie("visited", $count, time() + 180);
    ?>

    <html>
    <head><title>PHP TEST</title></head>
    <body>

    <?php
        print('<p>訪問回数は'.$count.'回目です</p>');
    ?>
  </section>
</body>