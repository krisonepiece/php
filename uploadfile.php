<?php

	$root = $_POST['root'];	
	$path = $_POST['path'];

    if(!file_exists($path))
    {
    	mkdir($path,'0777'); //建立資料夾!!!!
    }
    if($_FILES['attachment']['tmp_name']){		
        move_uploaded_file($_FILES['attachment']['tmp_name'],$root);
        echo "Upload files success!";
    }
    else{
        echo "Uploading file failed!";
    }
?>