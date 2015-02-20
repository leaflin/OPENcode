<?php
	
if(!empty($HTTP_POST_FILES['fileUpload'])){
	if(is_uploaded_file($HTTP_POST_FILES['fileUpload']['tmp_name']) && $HTTP_POST_FILES['fileUpload']['error'] == 0){
		$_file_ = $HTTP_POST_FILES['fileUpload'];
		$errStr = "";
		$_name_ = $_file_['name'];
		$_type_ = $_file_['type'];
		$_tmp_name_ = $_file_['tmp_name'];
		$_size_ = $_file_['size'];
	}
}
?>