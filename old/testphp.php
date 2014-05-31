<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Test</title>
<script type="text/javascript">
<!--
<?php echo "var tax = " . json_encode(array('CA'=>'0.09', 'NJ'=>'0.07', 'NY'=>'0.08')) . ";\n"; ?>
function getTax(frm) {
<?php
	echo "var itemPrice = parseFloat(frm.price.value);\n";
	echo "itemPrice = new itemPrice.constructor(itemPrice);\n";
	echo "itemPrice.taxAmount = function(state){return (tax[state] * itemPrice + itemPrice).toFixed(2);}\n";
?>
	alert(itemPrice.taxAmount('NJ'));
};
//-->
</script>
</head>
<body>
<form method="post">
Price: <input type="text" name="price" id="price" /><input type="submit" name="submit" value="Get Tax" onclick="getTax(this.form); return false;" />
</form>
</body>
</html>
