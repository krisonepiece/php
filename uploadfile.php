<?php

	$root = $_POST['root'];	

    if($_FILES['attachment']['tmp_name']){		
        move_uploaded_file($_FILES['attachment']['tmp_name'],$root);
        echo "Upload files success!";
    }
    else{
        echo "Uploading file failed!";
    }
?>