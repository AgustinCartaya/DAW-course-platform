<?php
function getLocalPath(){
    return $_SERVER["DOCUMENT_ROOT"]."/L3-DAW/project/website";
}

function getImagesPath(){
    return getLocalPath()."/src/assets/img";
}

function makeImageCopy($name, $tmpName, $errorName){
    //la imagen que seleccionemos la movemos a la carpeta img
    $date=new DateTime();
    $fileName=($name!="")? $date->getTimestamp()."_".$name: $errorName;
    // echo "Hola ".$name." ".$tmpName;
    if($tmpName!=""){
        $imagesFolder=getImagesPath()."/";
        move_uploaded_file($tmpName, $imagesFolder.$fileName);
        
    }
    return $fileName;
}

