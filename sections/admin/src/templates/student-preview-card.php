<form method="GET" action="student.php" class="card__item">
    <button type="submit">
        <img
        src="<?php echo W_IMAGES."/".$student["image"];?>"
        alt=""
        />
        <p><?php echo $student['user'];?></p>
    </button>
    <input type="hidden" name="studentId" id="studentId" value="<?php echo $student['id'];?>"/>
</form>