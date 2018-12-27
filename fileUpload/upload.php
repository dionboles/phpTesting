<?php
	if(isset($_FILES['file'])){
		$file = $_FILES['file'];
		$file_name = $file['name'];
		$file_temp = $file['tmp_name'];
		$file_size = $file['size'];
		$file_error = $file['error'];
		
		$file_ext = explode('.', $file_name);
		$file_ext = strtolower(end($file_ext));
		if($file_ext == "jpeg"){
			if($file_error === 0){
				if($file_size <= 2097152){
					$file_name_new = uniqid('',true).'.'.$file_ext;
					$file_destination =$file_name_new;
					$path = "./data/";
					echo "Working";
					move_uploaded_file($file_temp,$path.$file_destination);
				}
			}else{
				echo " error";
			}
		}else{
			echo "Not a jpeg";
		}
		
	}else{
		echo "Failed to upload";
	}
?>