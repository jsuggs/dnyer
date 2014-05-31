<?php
$db = mysql_connect('shopvanitykills.db.12421967.hostedresource.com','shopvanitykills','R@ch@el11');
mysql_select_db('shopvanitykills',$db);


$data = $_POST;

$sql = "INSERT INTO vk_inventory (sku, opts, qty) VALUES ('". $data['sku'] . "', '" . $data['opts'] . "', '" . (int)$data['qty'] . "')";
mysql_query($sql);

header ("Location: http://shopvanitykills.dnyer.com/manage/");


?>