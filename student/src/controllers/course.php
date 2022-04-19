<?php include("../templates/header.php"); ?>
<?php 
include_once(APP_FUNCTIONS."/db-course-CRUD.php");
include_once(APP_FUNCTIONS."/db-admin-CRUD.php");
include_once(APP_FUNCTIONS."/db-student-course-CRUD.php");
if($_REQUEST){
    $courseId=$_REQUEST['courseId'];

    //cours information
    $course=getCourseById($courseId);
    $teacher = getAdminIdById($course['idAdmin'])['user'];
    $inscriptionDate = getInscriptionDate($userId,$courseId)['date'];
    //resources information
    $resources=getCourseResources($courseId);

    if(isset($course)){
        include("../views/course-content.php");
    } 
}
?>
<?php include("../templates/footer.php"); ?>