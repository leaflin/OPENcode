<?php
$filename = fopen("php_file19.gif","rb");	
echo fread($filename,filesize("php_file19.gif"));
fclose($filename);
?>