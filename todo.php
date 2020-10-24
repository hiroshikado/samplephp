<?php

function h($v){
  return htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
}

$FILE = 'todo.txt';
$id = uniqid();

date_default_timezone_set('Japan');
$date = date('Y年m月d日H時i分');

$text = '';
$DATA = [];
$BOARD = [];

if(file_exists($FILE)) {
  $BOARD = json_decode(file_get_contents($FILE));
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  if(!empty($_POST['txt'])){
      $text = $_POST['txt'];
      $DATA = [$id, $date, $text];
      $BOARD[] = $DATA;

      file_put_contents($FILE, json_encode($BOARD));

  }else if(isset($_POST['del'])){
      $NEWBOARD = [];

      foreach($BOARD as $DATA){
          if($DATA[0] !== $_POST['del']){
              $NEWBOARD[] = $DATA;
          }
      }
      file_put_contents($FILE, json_encode($NEWBOARD));
  }
  
  header('Location: '.$_SERVER['SCRIPT_NAME']);
  exit;
}

?>

<!DOCTYPE html>
<html lang= "ja">
<head>
    <meta name= "viewport" content= "width=device-width, initial-scale= 1.0">
    <meta http-equiv= "content-type" charset= "utf-8">
    <link rel="stylesheet"  href="style.css">
    <title>ToDoApp</title>
</head>
<body>
  <h1>ToDoアプリ</h1>

  <section class= "main">
      <h2>ToDoAppに投稿する</h2>

      <form method= "post">
          <input type= "text" name= "txt">
          <input type= "submit" value= "投稿">
      </form>    

      <table style= "border-collapse: collapse">
      <?php foreach((array)$BOARD as $DATA): ?>
      <tr>
      <form method= "post">
          <td>
              <?php echo h($DATA[2]); ?>
          </td>
          <td>
              <?php echo $DATA[1]; ?>
          </td>
          <td>
              <input type= "hidden" name= "del" value= "<?php echo $DATA[0]; ?>">
              <input type= "submit" value= "削除">
          </td>
      </form>
        <label><input type="radio" name="sex" value="0">男性</label>
		<label><input type="radio" name="sex" value="1">女性</label>
      </tr>
      <?php endforeach; ?>
      </table>
  </section>
</body>