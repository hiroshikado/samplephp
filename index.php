<!DOCTYPE html>
<html lang= "ja">
<head>
<title>PHP7技術者認定試験(初級)用</title>
</head>

<body>
  <h1>PHP7技術者認定試験(初級)用</h1>
  <section class= "main">
    <?php
      $url = "https://www.sejuku.net/blog/";
      
      //cURLセッションを初期化する
      $ch = curl_init();
        
      //URLとオプションを指定する
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
      //URLの情報を取得する
      $res =  curl_exec($ch);
        
      //結果を表示する
      var_dump($res);
        
      //セッションを終了する
      curl_close($conn);
     ?>
  </section>
</body>