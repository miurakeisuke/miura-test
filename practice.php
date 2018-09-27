<?php
  date_default_timezone_set('japan');
  echo '<p>', date('Y/m/d H:i:s'), '</p>';
  echo '<p>', date('Y年m月d日 H時i分s秒'), '</p>';
?>
<!-- date_default_timezone_set 引数に現在地や取得したいタイムゾーンを入れることで、設定できる -->
