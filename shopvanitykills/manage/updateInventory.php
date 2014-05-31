<?php
$db = mysql_connect('shopvanitykills.db.12421967.hostedresource.com','shopvanitykills','R@ch@el11');
mysql_select_db('shopvanitykills',$db);


$data = $_POST;

foreach($data as $key => $value) {
	if ((int)$key > 0) {
		$sql = "UPDATE `vk_inventory` SET `qty`='". $value ."' WHERE `id`='". (int)$key ."'";
		mysql_query($sql);
	}
}

header ("Location: http://shopvanitykills.dnyer.com/manage/");


?>