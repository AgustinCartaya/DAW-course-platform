<div class="container__right">
            <?php
            //include_once("../functions/db-course-CRUD.php");
            /*loop each student*/
          //$course=getRecommendedCourses($interest,$studentUser);
            foreach($course as $course){
            ?>
            <form method="GET" >
                <input type="submit" id="studentUser" value="<?php  echo $course['user']?>">
                <input type="hidden" name="studentId" id="studentId" value="<?php echo $course['id']?>"/>
            </form>
            <?php } ?>
        </div>
