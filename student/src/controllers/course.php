<?php include("../templates/header.php"); ?>
<?php 
include_once(APP_FUNCTIONS."/db-course-CRUD.php");

if($_REQUEST){
    $courseId=$_REQUEST['courseId'];

    //cours information
    $course=getCourseById($courseId);

    //resources information
    $resources=getCourseResources($courseId);

    if(isset($course)){
        include("../views/course-content.php");
    } 
}
?>
<?php include("../templates/footer.php"); ?>