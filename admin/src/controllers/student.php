<?php include("../templates/header.php"); ?>
<?php 
//update student
include_once(APP_FUNCTIONS."/db-student-CRUD.php");
if($_POST){//cuando terminamos de editar el curso lo guardamos en la db (posiblemente esto no va aqui)

    $action=(isset($_POST['action']))?$_POST['action']:"";

    switch($action){
        case "save":
            include("../functions/util.php");
            $studentImageName=(isset($_FILES['studentImage']['name']))?$_FILES['studentImage']['name']:"";
            $studentImageTemp=(isset($_FILES['studentImage']['tmp_name']))?$_FILES['studentImage']['tmp_name']:"";
            $studentImage = makeImageCopy($studentImageName, $studentImageTemp, "");
            if(empty($studentImage))
                $studentImage=$_POST['studentImage_res'];
            else
                deleteImage($_POST['studentImage_res']);

            updateStudent($_POST['studentId'], 
                        $_POST['studentUser'], 
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
            break;

        case "cancel":
            header("Location:students.php");
            break;    

        case "delete":
            include("../functions/util.php");
            deleteImage($_POST['studentImage_res']);
            deleteStudent($_POST['studentId']);
            header("Location:students.php");
            break;    
    }
}
//show course information to edit
else if($_GET){
    $studentId=$_GET['studentId'];

    //cours information
    $student=getStudentById($studentId);

    if(isset($student)){
        include("../views/student-edition.php");
    }
}
?>
<?php include("../templates/footer.php"); ?>