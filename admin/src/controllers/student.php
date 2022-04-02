<?php include("../templates/header.php"); ?>
<?php 
//update student
include_once(APP_FUNCTIONS."/db-student-CRUD.php");
if($_POST){//cuando terminamos de editar el curso lo guardamos en la db (posiblemente esto no va aqui)

    $action=(isset($_POST['action']))?$_POST['action']:"";

    switch($action){
        case "save":
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
                        $_POST['studentLevel']);
            header("Location:students.php");
            break;

        case "cancel":
            header("Location:students.php");
            break;    

        case "delete":
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