<!DOCTYPE html>
<html lang= "ja">
<head>
<title>PHP7技術者認定試験(初級)用</title>
</head>

<body>
  <h1>PHP7技術者認定試験(初級)用</h1>
  <section class= "main">
    <?php
        function test() {
            $foo = "ローカル変数";

            echo '$foo in global scope: ' . $GLOBALS["foo"] . "<br>";
            echo '$foo in current scope: ' . $foo . "<br>";
        }

        $foo = "Example content";
        test();
    ?>
  </section>
</body>