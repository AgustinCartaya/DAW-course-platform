<?php

function defaultImage($type){
    switch (strtolower($type)){
        case "student":
            return W_IMAGES."/".W_IMG_STUDENT;
            break;
        case "course":
            return W_IMAGES."/".W_IMG_COURSE;
            break;
        case "resource":
            return W_IMAGES."/".W_IMG_RESOURCE;
            break;
    }
}

function defaultResourcePreview($type){
    switch (strtolower($type)){
        case "pdf":
            return W_IMAGES."/".W_IMG_PDF;
            break;
        case "image":
            return W_IMAGES."/".W_IMG_IMAGE;
            break;
        case "video":
            return W_IMAGES."/".W_IMG_VIDEO;
            break;
    }
}


function verifyImage($name, $type){
    if(!is_null($name) && file_exists(W_IMAGES."/".$name))
        return W_IMAGES."/".$name;
    return defaultImage($type);
}
