<?php
$db = mysql_connect('shopvanitykills.db.12421967.hostedresource.com','shopvanitykills','R@ch@el11');
mysql_select_db('shopvanitykills',$db);
if (addslashes($_GET['sku']) != '') {
	$sku = addslashes($_GET['sku']);
	$sql = "SELECT * FROM `vk_inventory` WHERE `sku`='".$sku."'";
	if ($r = mysql_query($sql)) {
?>
$(document).ready(function() {
<?php
		while($row = mysql_fetch_array($r)) {
			if ($row['qty'] == 0) {
?>
                $('option:contains("<?= $row['opts'] ?>")').attr('disabled',true);
                $('option:contains("<?= $row['opts'] ?>")').parents('.option').append('<div class="note"><?= $row['opts'] ?> is currently Sold Out!</div>');
<?php
			}
		}
?>
});
<?php
	}
}
?>
