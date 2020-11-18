<!DOCTYPE html>
<html lang= "ja">
<head>
<title>PHP7技術者認定試験(初級)用</title>
</head>

<body>
  <h1>PHP7技術者認定試験(初級)用</h1>
  <section class= "main">
    <?php
      // ２つの引数の合計値を返却する
      function sum($num1, $num2) {
        // 引数が数値かを判定する
        if (is_numeric($num1) && is_numeric($num2)) {
            return $num1 + $num2;
        }

        // いずれかの引数が数値以外の場合
        throw new InvalidArgumentException('引数には数値以外を設定しないでください');
      }

      // 引数がどちらも正常なので 1+2 の結果である3が表示されます
      echo sum(1, 2).PHP_EOL;
      echo "<br />";

      // 引数に数値以外を指定すると例外が発生するので、それをキャッチしてエラーメッセージを表示します
      try {
        sum('ABC', 2).PHP_EOL;
      } catch (InvalidArgumentException $e) {
        echo $e->getMessage().PHP_EOL;
      }
    ?>
  </section>
</body>