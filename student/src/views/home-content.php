<div class="container__home">
    <h1 class="home_title">Welcome <?php echo $_SESSION['user']?></h1>
    <div class="home_container_btn">
        <a class="app__btn left" href="<?php echo W_STUDENT;?>/src/controllers/courses.php">Courses</a>
        <a class="app__btn right" href="<?php echo W_STUDENT;?>/src/controllers/students.php">Students</a>
    </div>
    <div class="container__statistics">
        <h3 class="statistics__title">Recomended courses</h3>
    </div>