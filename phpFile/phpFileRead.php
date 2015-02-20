<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>檔案讀取</title>
</head>

<body>
<?php
//$_SERVER['DOCUMENT_ROOT'];
//is_file #is file
//is_dir  #is Folder
rr();
function rr(){
	$root='../ajax/';
	$fileResourse=opendir($root);
	$num=array();
function aa($a){echo 'array 0 is'.$a;	}

	while($fileList = readdir($fileResourse)){
		if(is_file($root.'\\'.$fileList)){
			
			echo $num[]=$fileList."<br />";
			aa($num[0]);
			 
			}
			
}
	
closedir($fileResourse);

}
?>
</body>
</html>