<!DOCTYPE html>
<html lang= "ja">
<head>
<title>PHP7技術者認定試験(初級)用</title>
</head>

<body>
  <h1>PHP7技術者認定試験(初級)用</h1>
  <section class= "main">
    <?php
      // 連想配列($array)
      $array = array(
        "name" => "あらゆ" ,
        "gender" => "男" ,
        "blog" => array(
          "name" => "SYNCER" ,
          "published" => "2014-06-10" ,
          "url" => "https://syncer.jp/" ,
        ),
      );

      // 連想配列($array)をJSONに変換(エンコード)する
      $json = json_encode( $array ) ;
    ?>
  </section>
</body>