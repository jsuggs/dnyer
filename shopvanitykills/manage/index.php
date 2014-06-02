<?php
$db = mysql_connect('localhost','shopvanitykills','R@ch@el11');
mysql_select_db('shopvanitykills',$db);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Inventory Management</title>
<style type="text/css">
.row, .lrow {padding:5px 10px; clear:both; width:600px; font-family:Verdana, Geneva, sans-serif; overflow:hidden;}
.row input {width:30px; padding:2px 5px;}
.row span, .lrow span {float:left; display:inline; width:200px; font-size:12px;}
.row:first-child {padding:10px;}
.row:first-child span {font-weight:bold; font-size:14px;}
.row:nth-child(odd) {background:#efefef;}
</style>
</head>
<body>
<form method="post" action="updateInventory.php">
<div class="row"><span>SKU</span><span>OPTION</span><span>QUANTITY</span></div>
<?php
	$sql = "SELECT * FROM `vk_inventory` ORDER BY sku ASC";
	if ($r = mysql_query($sql)) {
		$i = 1;
		while($row = mysql_fetch_array($r)) {
			echo '<div class="row"><span>' . $i . '. ' . $row['sku'] . '</span><span>' . $row['opts'] . '&nbsp;</span><span><input name="' . $row['id'] . '" value="' . $row['qty'] . '"></span></div>';
			$i++;
		}
	}
?>
<div class="lrow">
<span>&nbsp;</span>
<span>&nbsp;</span>
<span><input type="submit" name="submit" value="Update Inventory" style="clear:both; margin:10px 0 20px; padding:3px 15px; font-size:14px; font-weight:bold; color:#fff; background:#090; border-radius:3px; -moz-border-radius:3px; -webkit-border-radius:3px; border:none;" /></span>
</div>
</form>

<div style="padding-top:30px;">
<div style="font-size:16px; font-weight:bold; padding:10px; font-family:Verdana, Geneva, sans-serif;">Add Inventory</div>
<form method="post" action="addInventory.php">
	<div class="row">
    	<span>SKU: <input type="text" name="sku" style="width:70px;" /></span>
        <span>Option: <input type="text" name="opts" style="width:70px;" /></span>
        <span>Quantity: <input type="text" name="qty" /></span>
    </div>
    <div class="lrow">
        <span>&nbsp;</span>
        <span>&nbsp;</span>
        <span><input type="submit" name="submit" value="Add Inventory" style="clear:both; margin:10px 0 20px; padding:3px 15px; font-size:14px; font-weight:bold; color:#fff; background:#090; border-radius:3px; -moz-border-radius:3px; -webkit-border-radius:3px; border:none;" /></span>
    </div>
</form>
</div>
</body>
</html>
