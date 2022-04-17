<?php
function makeImageCopy($name, $tmpName, $errorName){
    //la imagen que seleccionemos la movemos a la carpeta img
    $date=new DateTime();
    $fileName=($name!="")? $date->getTimestamp()."_".$name: $errorName;
    // echo "Hola ".$name." ".$tmpName;
    if($tmpName!=""){
        move_uploaded_file($tmpName, APP_IMAGES."/".$fileName);
        
    }
    return $fileName;
}

function deleteImage($name){
    if(!is_null($name) && !empty($name) && file_exists(APP_IMAGES."/".$name)){
        unlink(APP_IMAGES."/".$name);
    }
        
}

function createStudentUserName($name, $lastName, $date){
    $date = str_replace(["/","-"],"", $date);
    return strtolower($name.$date.$lastName);
}

