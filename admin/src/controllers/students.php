<?php include("../templates/header.php"); ?>
<?php 
    //getting all students from db
    include_once(APP_FUNCTIONS."/db-student-CRUD.php");
    $students=getStudents();

    if($_POST){

        // copying the image on the folder
        include("../functions/util.php");
        $studentImageName=(isset($_FILES['studentImage']['name']))?$_FILES['studentImage']['name']:"";
        $studentImageTemp=(isset($_FILES['studentImage']['tmp_name']))?$_FILES['studentImage']['tmp_name']:"";
        echo "Al inicio".$studentImageName."---".$studentImageTemp."---";
        $studentImage = makeImageCopy($studentImageName, $studentImageTemp, "student.png");

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
        header("Location:students.php");
    }
?>
<?php include("../views/students-content.php"); ?>
<?php include("../templates/footer.php"); ?>