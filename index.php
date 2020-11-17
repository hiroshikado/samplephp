<!DOCTYPE html>
<html lang= "ja">
<head>
<title>PHP7技術者認定試験(初級)用</title>
</head>

<body>
  <h1>PHP7技術者認定試験(初級)用</h1>
  <section class= "main">
    <?php
      /* 文字列を定義 */
      $str = "AbCdEfG";
      $mb_str = "pHp 入門！";
      
      /* 大文字に変換 */
      var_dump( strtoupper($str) );
      echo "<br />";
      var_dump( mb_strtoupper($mb_str) );
      echo "<br />";

      /* 小文字に変換 */
      var_dump( strtolower($str) );
      echo "<br />";
      var_dump( strtolower($mb_str) );
      echo "<br />";
    ?>
  </section>
</body>