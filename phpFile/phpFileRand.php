<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>隨機檔案</title>
</head>

<body>
<?php

if(isset($_POST['randBtn'])){
	$num=array();
	$a=rand(0,10);
	 $num[]='$a';
	 echo $a."</br>";
	 echo "array is".$num[]=$a;
	 
	}
?>
<form action="" method="post">
<input name="randBtn" type="submit" value="guess">

</form>
</body>
</html>