<form method="GET" action="course.php" class="card__item">
    <button type="submit" class>
        <img
        src="<?php echo W_IMAGES."/".$course["thumbnail"];?>"
        alt=""
        />
        <span><?php echo $course['type'];?></span>
        <p><?php echo $course['title'];?></p>
    </button>
    <input type="hidden" name="courseId" id="courseId" value="<?php echo $course['id'];?>"/>
</form>