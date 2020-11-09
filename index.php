<!DOCTYPE html>
<html lang= "ja">
<head>
<title>PHP7技術者認定試験(初級)用</title>
</head>

<body>
  <h1>PHP7技術者認定試験(初級)用</h1>
  <section class= "main">
    <?php
class Goods
      {
          //商品名プロパティ
          private $name = "";
          //商品価格プロパティ
          private $price = 0;
          //コンストラクタ。商品名と商品価格を設定する
          public function __construct(string $name, int $price)
          {
              $this->name = $name;
              $this->price = $price;
          }
          //商品名と価格を表示するメソッド
          public function printPrice(): void
          {
              print($this->name."の価格: ￥".$this->price."<br>");
          }
          //商品名のゲッタ
          public function getName(): string
          {
              return $this->name;
          }
          //商品価格のゲッタ
          public function getPrice(): int
          {
              return $this->price;
          }
      }
    ?>
  </section>
</body>