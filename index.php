<!DOCTYPE html>
<html lang= "ja">
<head>
<title>PHP7技術者認定試験(初級)用</title>
</head>

<body>
  <h1>PHP7技術者認定試験(初級)用</h1>
  <section class= "main">
    <?php
      $str = '10時20分';
      $str_len = strlen($str);
      $str_mblen = mb_strlen($str);

      print($str.' の文字列の長さは'.$str_len.'です<br>');
      print($str.' の文字数は'.$str_mblen.'です<br><br>');
     ?>
  </section>
</body>