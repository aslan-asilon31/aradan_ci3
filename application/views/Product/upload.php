<?php 
    if(!empty($_FILES['file'])){ 
        //  output files folder
        $targetDir = "uploads/"; 
        
        // set any name or remain the same name
        $fileName = basename($_FILES['file']['name']); 
        $targetFilePath = $targetDir.$fileName; 
        
        if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)){ 
        echo 'File Uploaded';
        } 
    
    } 
    ?>