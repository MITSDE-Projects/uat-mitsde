<?php include("admin/include/config.php");

$FeesType=intval($_GET['FeesType']);

$query="SELECT FeesID, Amount_NRI FROM feeshead WHERE FeesID='$FeesType'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
?>
<input type="text" class="form-control" name="OtherFee"   value="<?php echo $row['Amount_NRI']?>" /><br />
