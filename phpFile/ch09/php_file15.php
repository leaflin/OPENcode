<?php
$filename = fopen("test.txt","w+");	
if (flock($filename,LOCK_EX|LOCK_NB)){
  fwrite($filename,"�o�O�s���ɮפ��e!!");
  flock($filename,LOCK_UN);
}else{
  echo "���~�A�ɮפw�D��L��w�ϥΡC";
}
fclose($filename);
echo "�ɮ׼g�J���\�A���e�p�U�G<br />";
readfile("test.txt");
?>