<?php
if ( ! defined( 'APP_ROOT' ) ) {
    include_once(  $_SERVER["DOCUMENT_ROOT"] . '/DAW-project/config.php' );
}

include_once(APP_FUNCTIONS."/db-course-CRUD.php");
if($_POST){
    $action=(isset($_POST['action']))?$_POST['action']:"";
    switch($action){
        case 'addResource':
            $resourceUrl=(isset($_FILES['resourceUrl']['name']))?$_FILES['resourceUrl']['name']:NULL;
            createResource($_POST['courseId'], $_POST['resourceName'], $_POST['resourceType'], $resourceUrl);
            $resources=getCourseResources($_POST['courseId']);
            echo json_encode($resources);
            break;

        case 'deleteResource':
            deleteResource($_POST['resourceId']);
            $resources=getCourseResources($_POST['courseId']);
            echo json_encode($resources);
            break;

        case 'editResource':
            $resourceUrl=(isset($_FILES['resourceUrl']['name']))?$_FILES['resourceUrl']['name']:NULL;
            updateResource($_POST['resourceId'], $_POST['resourceName'], $_POST['resourceType'], $resourceUrl);
            $resources=getCourseResources($_POST['courseId']);
            echo json_encode($resources);
            break;
    }
}
