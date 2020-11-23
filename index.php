<!DOCTYPE html>
<html lang= "ja">
<head>
<title>PHP7技術者認定試験(初級)用</title>
</head>

<body>
  <h1>PHP7技術者認定試験(初級)用</h1>
  <section class= "main">
    <?php
      $sports = [
        'Baseball',
        'Badminton',
        'Basketball'
        ];
      print_r($sports);

      echo "<br />";

      $fruits = ['item1' => 'apple', 'item2' => 'orange', 'item3' => 'melon'];
      //TRUEを指定してprint_rの結果を取得する
      $result = print_r($fruits, TRUE);
      echo $result
    ?>
  </section>
</body>