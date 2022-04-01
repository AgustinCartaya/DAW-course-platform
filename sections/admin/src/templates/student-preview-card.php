<form method="GET" action="student.php" class="card__item">
    <button type="submit">
        <img
        src= "https://images.unsplash.com/profile-fb-1642446137-6bae7cc893b9.jpg?dpr=2&auto=format&fit=crop&w=60&h=60&q=60&crop=faces&bg=fff"
        alt=""
        />
        <p><?php echo $student['user'];?></p>
    </button>
    <input type="hidden" name="studentId" id="studentId" value="<?php echo $student['id'];?>"/>
</form>