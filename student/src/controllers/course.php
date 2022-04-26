<?php include("../templates/header.php"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
    $faitqcm=getInscriptionFaitQCM($userId,$courseId)['faitQCM'];



    if(isset($course)){
        if(isset($faitqcm) && $faitqcm==0){
          ?>

          <div class="qcmbutton">
              <form method="GET" name="qcm" action="qcm-page.php">
                  <input type='hidden' name='type' value='<?php echo $course['type']; ?>'>
                  <input type='hidden' name='cours' value='<?php echo $courseId ?>'>
                  <input type='hidden' name='eleve' value='<?php echo $userId ?>'>
                  <input type="submit" name="qcmbutton" value="" />

                  <?php //Header("Location:qcm-page.php"); ?>
              </form>
              <body type='hidden' onload="myFunction()" > </body>
              <script> function myFunction() {
    document.forms['qcm'].qcmbutton.click();
  }  </script>
            </div>

            <?php
        }
        else{
          include("../views/course-content.php");
        }

    }
}
?>
<?php include("../templates/footer.php"); ?>
