<?php include("../templates/header.php"); ?>
<?php 
    //getting all students from db
    include("../functions/db-student-CRUD.php");
    $students=getStudents();

    if($_POST){
        // echo $_POST['studentName'];
        createStudent($_POST['studentName'], 
                        $_POST['studentPassword'], 
                        $_POST['studentName'],
                        $_POST['studentLastName'], 
                        $_POST['studentGender'],
                        $_POST['studentDateOfBirth'],
                        $_POST['studentEmail'], 
                        $_POST['studentStudiesLevel'], 
                        $_POST['studentInterest'],
                        $_POST['studentImage']);
        header("Location:students.php");
    }
?>

    <div class="body__container__divided">
        <div class="container__left">
            <?php include("../forms/create-student-form.php"); ?>
        </div>

        <div class="container__right">
            <?php
            //loop each student
            foreach($students as $student){
            ?>
            <form method="GET" action="student.php">
                <input type="submit" id="studentUser" value="<?php echo $student['user']?>">
                <input type="hidden" name="studentId" id="studentId" value="<?php echo $student['id']?>"/>
            </form>
            <?php } ?>
        </div>
    </div>

<?php include("../templates/footer.php"); ?>