<!DOCTYPE html>
<html lang= "ja">
<head>
<title>PHP7技術者認定試験(初級)用</title>
</head>

<body>
  <h1>PHP7技術者認定試験(初級)用</h1>
  <section class= "main">
    <?php
      <form action="#" method="post">
      <input type="text" name="mail" />
      <input type="submit" name="" value="送信">
      </form>

      $mail = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
      var_dump($mail);
     ?>
  </section>
</body>