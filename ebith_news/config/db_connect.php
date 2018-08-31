<?php

$con = mysql_connect('localhost','ayikpujianto','pujianto190295');
$db  = mysql_select_db('ebith_news',$con);

if(!$db){
  echo"Database Tidak Ditemukan";
}
?>
