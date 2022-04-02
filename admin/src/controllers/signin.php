<?php include_once("../templates/sign-header.php"); ?>
<?php
//signin validation
if($_POST){
    $user=$_POST['user'];
    $password=$_POST['password'];

    //Checking the admin in the DB

    $admin = getAdminIdByLogin($user, $password);

    //if admin exist in the db
    if(isset($admin["id"])){
        $_SESSION['adminVerification']="ok";
        $_SESSION['user']=$user;
        $_SESSION['userId']=$admin["id"];
        header('Location:home.php');
    }else{
        $messageError="Error: user name or password are incorrects";
    }
}
?>
<?php include_once("../forms/signin-form.php"); ?>
<?php include_once("../templates/sign-footer.php"); ?>


