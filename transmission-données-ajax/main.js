$(document).ready(function(){
	$('#send').click(function(e){
		e.preventDefault();
		var username = encodeURIComponent($('#username').val());
		var password = encodeURIComponent($('#password').val());
		if (username != "" && password != ""){
			$ajax({
				url : "login.php",
				type : "POST",
				data : "username=" + username + "&password=" + password
				success : function(retour){
					$('#zone').html(retour);
				}
			});
		} else {
			$('#zone').html("<p>Saisie manquante</p>");
		}
	});
	function load_html_content(){
		$.ajax({
			method: 'GET',
			url: 'informations.php',
			data: {
				'action': 'getHTMLData'
			},
		})
		.done(function(data){
			$('#zone').html(data);
		});
	};
	$('#clickForGet').click(function(e){
		load_html_content();
	});
});
