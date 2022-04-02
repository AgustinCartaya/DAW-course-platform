<?php include("../templates/header.php"); ?>
<?php 
//update student
if($_POST){//cuando terminamos de editar el curso lo guardamos en la db (posiblemente esto no va aqui)

    $action=(isset($_POST['action']))?$_POST['action']:"";

    switch($action){
        case "save":
            include("../functions/db-student-CRUD.php");
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
            include("../functions/db-student-CRUD.php");
            deleteStudent($_POST['studentId']);
            header("Location:students.php");
            break;    
    }
}
//show course information to edit
else if($_GET){
    $studentId=$_GET['studentId'];

    //cours information
    include("../functions/db-student-CRUD.php");
    $student=getStudentById($studentId);

    if(isset($student)){
        include("../views/student-edition.php");
    }
}
?>
<?php include("../templates/footer.php"); ?>