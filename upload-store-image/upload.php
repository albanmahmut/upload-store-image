<?php
/**
 * Created by PhpStorm.
 * User: MAMI
 * Date: 5/17/2018
 * Time: 3:43 PM
 */

// inkludera databas config mapp
include 'dbConfig.php';
$statusMsg = '';

//fil uppladnind path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    //tilllåten filtyper
    $allowTypes = array('jpg','png','jpeg','pdf');
    if(in_array($fileType, $allowTypes)){

        // ladda upp filer till servern
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

            // infoga bildnamname till databasen
            $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            }
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Status meddelande
echo $statusMsg;
?>
