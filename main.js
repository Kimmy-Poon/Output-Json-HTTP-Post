function post_data(){
	var name = $('#name').val();
 
	var data = new Array();
		data.push({name: 'name', value: name});
 
	$.ajax({
		url: 'data.php',
		type: 'POST',
		dataType: 'json',
		data: data,
		success: function(data) {
			$('#post_msg').text(data.html);
		}
	});
}