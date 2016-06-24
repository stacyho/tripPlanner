$(document).ready(function(){

	//check which pin they pinned
	$(".pin-btn").on("click", function(){
		var id = $(this).attr('id');
		var data = document.getElementById('pin-'+id);
		db_insert_pin(data);
	});
});

function db_insert_pin(data) {

	console.log(jQuery.type(data.dataset.pinid));

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
			console.log(text);
		},
		error: function(text) {
			console.log("Could not run pin-sql.php"+ " "+ text);
		}
	});
}