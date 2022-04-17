<?php include("../templates/header.php"); ?>
<?php
    include_once(APP_FUNCTIONS."/db-student-course-CRUD.php");
    if(isset($_GET['buttonfollow'])){
      $courseId=$_GET['courseId'];
      FollowCourses($courseId,$userId);
      echo "<script>alert('on ajoute la course $courseId dans les follows de $userId');</script>";
      header("Location:courses.php");


    }



?>
<?php include("../templates/footer.php"); ?>
