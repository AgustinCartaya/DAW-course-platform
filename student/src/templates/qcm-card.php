<?php include_once(APP_FUNCTIONS."/db-student-course-CRUD.php"); ?>
<?php
if(isset($_GET['type'])) {
    // type index exists

$t=$_GET['type'];
$eleve=$_GET['eleve'];
$cours=$_GET['cours'];
//include(APP_QCM.'qcm_MATHEMATICS.php');
include(APP_QCM.'qcm_'.$t.'.php');
$qcm = new SimpleXMLElement($xmlstr);
?>

 <?php
$i=0;
while($i<=1){
$j=0;
?>
<form action="../controllers/my-courses.php" method="post">
  <span>
  <p> <?php echo '<label style="background-color:white;color:black;font-weight:bold;">'.$qcm->items->item[$i]->Question.'</label>';?> </p>

 <INPUT type="radio" name="<?php echo $i;?>" value=<?php $qcm->items->item[$i]->answer[$j]?>> <?php echo '<label style="background-color:white;color:black;font-weight:bold;">'.$qcm->items->item[0]->answer[0].'</label>'; $j++;?>
 <INPUT type="radio" name="<?php echo $i;?>" value=<?php $qcm->items->item[$i]->answer[$j]?>> <?php echo '<label style="background-color:white;color:black;font-weight:bold;">'.$qcm->items->item[0]->answer[1].'</label>'; $j++;?>
   <INPUT type="radio" name="<?php echo $i;?>" value=<?php $qcm->items->item[$i]->answer[$j]?>> <?php echo  '<label style="background-color:white;color:black;font-weight:bold;">'.$qcm->items->item[0]->answer[2].'</label>'; $j++;?>
     <INPUT type="radio" name="<?php echo $i;?>" value=<?php $qcm->items->item[$i]->answer[$j]?>> <?php echo  '<label style="background-color:white;color:black;font-weight:bold;">'.$qcm->items->item[0]->answer[3].'</label>'; $j++;?>
   </span>

<?php
$i++;
}
}

?>
<p><input type="submit" name="submitbutton" value="OK" ></p>


</form>
<script>
document.forms.submitbutton.onclick=function(){ValidQcm()};
function ValidQcm(){
  <?php $qcm=UpdateFaitQCM($eleve,$cours); ?>
  return true;
}
 </script>
