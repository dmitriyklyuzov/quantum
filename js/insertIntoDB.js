function insertIntoDB(ASIN, Title, MPN, Price){
	
	$.ajax({
		url: "app/controllers/requestController.php",
		type: "POST",
		data: 'ASIN='+ASIN+'&Title='+Title+'&MPN='+MPN+'&Price='+Price,
		success: function(result){
			if(result=='true'){
				getRowsFromDB();
			}
			else alert('This ASIN is already in the database.');
		}
	});
}