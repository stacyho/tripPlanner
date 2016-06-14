$(document).ready(function(){

	//check which pin they pinned
	$(".pin-btn").on("click", function(){
		var id = $(this).attr('id');
		var pin_id = 'pin-'+id;
		var data = document.getElementById(pin_id);
		db_insert_pin(pin_id);
	});
});

function db_insert_pin(pin_id, data) {
	$.ajax({
		url: "/tripPlanner/tripPlanner/php/pin-sql.php",
		type: "POST",
		data: {
			category: data.dataset.category,
			address: data.dataset.address,
			city: data.dataset.city, 
			country: data.dataset.country
		},
		success: function(text) {
			//console.log(text);
		},
		error: function(text) {
			$("#content").text("Could not run pin-sql.php");
		}
	});
}