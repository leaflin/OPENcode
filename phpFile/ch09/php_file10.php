<?php
	$i=count($_FILES["fileUpload"]["name"]);
	for ($j=0;$j<$i;$j++){
		if($_FILES["fileUpload"]["error"][$j]==0){
			if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"][$j], "./".$_FILES["fileUpload"]["name"][$j])){
				echo $_FILES["fileUpload"]["name"][$j]."�W�Ǧ��\!<br />";
			}else{
				echo $_FILES["fileUpload"]["name"][$j]."�W�ǥ���!<br />";
			}
		}
	}
?>