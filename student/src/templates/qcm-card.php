
<?php
if(isset($_GET['type'])) {
    // type index exists

$t=$_GET['type'];
//include(APP_QCM.'qcm_MATHEMATICS.php');
include(APP_QCM.'qcm_'.$t.'.php');
$qcm = new SimpleXMLElement($xmlstr);

$i=0;
while($i<=1){
$j=0;
?>
<form action="mailto:email@gmail.com" method="post">
  <span>
  <p> <?php echo $qcm->items->item[$i]->Question;?> </p>

 <INPUT type="radio" name="<?php echo $i;?>" value=<?php $qcm->items->item[$i]->answer[$j]?>> <?php echo $qcm->items->item[0]->answer[0]; $j++;?>
 <INPUT type="radio" name="<?php echo $i;?>" value=<?php $qcm->items->item[$i]->answer[$j]?>> <?php echo $qcm->items->item[0]->answer[1]; $j++;?>
   <INPUT type="radio" name="<?php echo $i;?>" value=<?php $qcm->items->item[$i]->answer[$j]?>> <?php echo  $qcm->items->item[0]->answer[2]; $j++;?>
   </span>

<?php
$i++;
}
}

?>
<p><input type="submit" value="OK"></p>


</form>
