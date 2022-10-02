$(document).ready(function(){
	$('#username').blur(function(){
		$('#pesan').html('<img style="margin-left:10px; width:10px" src="assets/img/loading.gif">');
		var username = $(this).val();

		$.ajax({
		    type	: 'POST',
			url 	: 'system/proses.php',
			data 	: 'username='+username,
			success	: function(data){
				$('#pesan').html(data);
			}
		})
	});
});