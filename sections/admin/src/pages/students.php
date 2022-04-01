<?php include("../templates/header.php"); ?>
<?php 
    //getting all students from db
    include("../functions/db-student-CRUD.php");
    $students=getStudents();

    if($_POST){

        // copying the image on the folder
        include("../functions/util.php");
        $studentImageName=(isset($_FILES['studentImage']['name']))?$_FILES['studentImage']['name']:"";
        $studentImageTemp=(isset($_FILES['studentImage']['tmp_name']))?$_FILES['studentImage']['tmp_name']:"";
        $studentImage = makeImageCopy($studentImageName, $studentImageTemp, "student.jpg");

        createStudent($_POST['studentName'], 
                        $_POST['studentPassword'], 
                        $_POST['studentName'],
                        $_POST['studentLastName'], 
                        $_POST['studentGender'],
                        $_POST['studentDateOfBirth'],
                        $_POST['studentEmail'], 
                        $_POST['studentLevel'], 
                        $_POST['studentInterest'],
                        $studentImage);
        // header("Location:students.php");
    }
?>

    <div class="students__container__divided">
        <div class="container__up">
            <?php include("../forms/create-student-form.php"); ?>
        </div>

        <div class="container__bottom">
            <div class="cards__container student__card__list">
                <?php foreach($students as $student){ ?>
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
                <?php } ?>
            </div>
        </div>
    </div>

<?php include("../templates/footer.php"); ?>