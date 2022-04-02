<?php include("../templates/header.php"); ?>
<?php 
//update course
include_once(APP_FUNCTIONS."/db-course-CRUD.php");
if($_POST){//cuando terminamos de editar el curso lo guardamos en la db (posiblemente esto no va aqui)

    $action=(isset($_POST['action']))?$_POST['action']:"";

    switch($action){
        case "save":
            updateCourse($_POST['courseId'], $_POST['courseTitle'], $_POST['courseType'], $_POST['courseLevel'], $_POST['courseDescription'], $_POST['courseThumbnail']);
            header("Location:courses.php");
            break;

        case "cancel":
            header("Location:courses.php");
            break;    

        case "delete":
            deleteImage($_POST['courseThumbnail']);
            deleteCourseResources($_POST['courseId']):
            deleteCourse($_POST['courseId']);
            header("Location:courses.php");
            break;    

        case "addResource":
            echo $_POST['courseId'];
            echo $_POST['resourceName'];
            echo $_POST['resourceType'];
            echo $_POST['resourceUrl'];
            createResource($_POST['courseId'], $_POST['resourceName'], $_POST['resourceType'], $_POST['resourceUrl']);
            break;  
    }
}
//show course information to edit
else if($_GET){
    $courseId=$_GET['courseId'];

    //cours information
    $course=getCourseById($courseId);

    //resources information
    $resources=getCourseResources($courseId);

    if(isset($course)){
        include("../views/course-edition.php");
    } 
}
?>
<?php include("../templates/footer.php"); ?>