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
      
      $ch = curl_init();
        
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
      $res =  curl_exec($ch);
        
      var_dump($res);
        
      curl_close($conn);
     ?>
  </section>
</body>