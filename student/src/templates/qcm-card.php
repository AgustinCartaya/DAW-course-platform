
<?php
include(APP_QCM.'qcm.php');

$qcm = new SimpleXMLElement($xmlstr);

$i=0;
while($i<=1){
$j=0;
?>
<form action="action.php" method="post">
  <p> <?php echo $qcm->items->item[$i]->Question;?> </p>
 <INPUT type="checkbox" name="choix1" value=<?php $qcm->items->item[$i]->answer[$j]?>> <?php echo $qcm->items->item[0]->answer[0]; $j++;?>
 <INPUT type="checkbox" name="choix1" value=<?php $qcm->items->item[$i]->answer[$j]?>> <?php echo $qcm->items->item[0]->answer[1]; $j++;?>
   <INPUT type="checkbox" name="choix1" value=<?php $qcm->items->item[$i]->answer[$j]?>> <?php echo  $qcm->items->item[0]->answer[2]; $j++;?>

<?php
$i++;
}
?>
<p><input type="submit" value="OK"></p>

</form>
