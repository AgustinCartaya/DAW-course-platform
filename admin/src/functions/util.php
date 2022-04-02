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
    if(!is_null($name)  && file_exists(W_IMAGES."/".$name))
        unlink(W_IMAGES."/".$name)
}

