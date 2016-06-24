$(document).ready(function(){

	//check which pin they pinned
	$(".pin-btn").on("click", function(){
		var id = $(this).attr('id');
		var data = document.getElementById('pin-'+id);
		db_insert_pin(data);
	});
});

function db_insert_pin(data) {

	$.ajax({
		url: "/tripPlanner/tripPlanner/php/pin-sql.php",
		type: "POST",
		data: {
			pinid: data.dataset.pinid,
			category: data.dataset.category,
			address: data.dataset.address,
			city: data.dataset.city, 
			country: data.dataset.country
		},
		success: function(text) {
			console.log("SUCCESS: db_insert_pin");
		},
		error: function(text) {
			console.log("ERROR: db_insert_pin -> pin-sql.php");
		}
	});
}