<!DOCTYPE html>
<html lang= "ja">
<head>
<title>PHP7技術者認定試験(初級)用</title>
</head>

<body>
  <h1>PHP7技術者認定試験(初級)用</h1>
  <section class= "main">
    <?php
      setcookie(‘username’,’山田’,time()+60*60*24*7);
      echo $_COOKIE[‘username’];
    ?>
  </section>
</body>