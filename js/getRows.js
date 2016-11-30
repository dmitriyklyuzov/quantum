function getRows(){

	$.ajax({
		url: "app/controllers/requestController.php",
		type: "GET",
		dataType: 'html',
		success: function(html){
			$('#myTable > tbody:last-child').append(html);
			// $('#loading').hide();
		}
	});
}