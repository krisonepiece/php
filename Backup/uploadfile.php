<?php
	$root = $_POST['root'];
	
    if($_FILES['attachment']['tmp_name']){		
        move_uploaded_file($_FILES['attachment']['tmp_name'],'photo/test.jpg');
        echo "Upload files success!".$root;
    }
    else{
        echo "Uploading file failed!";
    }
?>