<?php

/*
$message = "SKU: " . $_GET['s'] . ", QUANTITY: " . $_GET['q'] . ", OPTIONS: " . $_GET['o'];
mail('dnyer11@gmail.com','VK Test',$message);
*/

$data = $_GET;
$db = mysql_connect('shopvanitykills.db.12421967.hostedresource.com','shopvanitykills','R@ch@el11');
mysql_select_db('shopvanitykills',$db);

if ($data['s'] != '') {
	$sku = $data['s'];
	
	$sql = "SELECT * FROM `vk_inventory` WHERE `sku`='".$sku."' AND `opts` = '".$data['o']."'";
	
	if ($r = mysql_query($sql)) {
		
		$row = mysql_fetch_array($r);
		$nqty = (int)$row['qty'];
		$nqty = (int)$nqty - (int)$data['q'];
		
		/* RE-SET QTY */
		$updsql = "UPDATE `vk_inventory` SET `qty`='".$nqty."' WHERE `sku`='".$row['sku']."' AND `opts` = '".$data['o']."'";
		
		if ($nqty < 0)
			$nqty = 0;
		
		if ($nr = mysql_query($updsql)) {
			echo $sku . ' | ' . $data['q'] . ' | ' . $data['o'] . ' = Updated';
			//mail('dnyer11@gmail.com','VK Test',$row['sku'].' - '.$nqty.' - '.$data['o']);
		}
	}
	
}

?>