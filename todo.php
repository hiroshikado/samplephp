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