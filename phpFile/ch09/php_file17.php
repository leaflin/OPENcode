<?php
$filename = fopen("php_file13.htm","r");	
echo "<b>�ϥ� fpassthru() Ū���ɮסG</b><br />";
fpassthru($filename);
$filename = fopen("php_file13.htm","r");	
echo "<b>�ϥ� stream_get_contents() Ū���ɮסG</b><br />";
echo stream_get_contents($filename);
fclose($filename);
?>