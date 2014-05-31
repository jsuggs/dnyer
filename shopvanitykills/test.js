$(document).ready(function(){
	var results = '';
	var sku = $('#product-info-table .itemnum td').text();
	$.ajax({
		url: 'test.php',
		type: 'post',
		data: { pr:sku },
		dataType: 'html',
		success: function(data) {
			results = data;
			alert(results);
		}
	});
});