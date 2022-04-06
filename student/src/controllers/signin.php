<?php include_once("../templates/sign-header.php"); ?>
<?php
//signin validation
if($_POST){
    $user=$_POST['user'];
    $password=$_POST['password'];

    //Checking the student in the DB

    $student = getStudentIDByLogin($user, $password);

    //if student exist in the db
    if(isset($student["id"])){
        $_SESSION['studentVerification']="ok";
        $_SESSION['user']=$user;
        $_SESSION['userId']=$student["id"];
        $_SESSION['choix']=$student["interest"];
        header('Location:home.php');
    }else{
        $messageError="Error: user name or password are incorrects";
        
    }
}
?>
<?php include_once("../forms/signin-form.php"); ?>
<?php include_once("../templates/sign-footer.php"); ?>
