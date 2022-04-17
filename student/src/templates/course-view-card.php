<form method="GET" action="course.php" class="card__item">
    <button type="submit" class>
        <img
        src="<?php echo verifyImage($course['thumbnail'],'course');?>"
        alt=""
        />
        <span><?php echo $course['type'];?></span>
        <p><?php echo $course['title'];?></p>
    </button>
    <input type="hidden" name="courseId" id="courseId" value="<?php echo $course['id'];?>"/>
</form>
<form method="GET" action="follow_course.php" class="addcourse">
  <button type="submit" name="buttonfollow" class>
    <p><?php echo "FOLLOW"; ?></p>
    <input type="hidden" name="courseId" id="courseId" value="<?php echo $course['id'];?>"/>
</button>

</form>
