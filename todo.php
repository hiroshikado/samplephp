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

?>