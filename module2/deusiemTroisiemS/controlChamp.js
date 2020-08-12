	$(document).ready(function(){
		$("#showP").on('click', function(){
			var getAttribut = $("#password").attr('type');
			if (getAttribut == 'password') {
				$("#showP").text('hide');
				$("#password").attr('type', 'text');
			}else{
				$("#showP").text('show');
				$("#password").attr('type', 'password');
			}
		});


		$("#nom").mouseleave(function(){
		if ($("#nom").val() == "") {
			$("#nom").css("border-color","red");
			$("#nom").next(".error-message").fadeIn().text("veuillez entrer votre nom");
		}else if(!$("#nom").val().match(/^[a-z]+$/i)){
			$("#nom").css("border-color","red");
			$("#nom").next(".error-message").fadeIn().text("veuillez entrer un nom valide");
		}
		else{
			$("#nom").css("border-color","blue");
			$("#nom").next(".error-message").fadeOut();
		}
		});


		$("#prenom").mouseleave(function(){
		if ($("#prenom").val() == "") {
			$("#prenom").css("border-color","red");
			$("#prenom").next(".error-message").fadeIn().text("veuillez entrer votre prenom");
		}else if(!$("#prenom").val().match(/^[a-z]+$/i)){
			$("#prenom").css("border-color","red");
			$("#prenom").next(".error-message").fadeIn().text("veuillez entrer un prenom valide");
		}
		else{
			$("#prenom").css("border-color","blue");
			$("#prenom").next(".error-message").fadeOut();
		}
		});


		$("#mail").mouseleave(function(){
		if ($("#mail").val() == "") {
			$("#mail").css("border-color","red");
			$("#mail").next(".error-message").fadeIn().text("veuillez entrer votre mail");
		}
		else{
			$("#mail").css("border-color","blue");
			$("#mail").next(".error-message").fadeOut();
		}
		});	




		$("#save").click(function(){
			var valid = true;

		if ($("#nom").val() == "") {
			valid = false;
		}else if(!$("#nom").val().match(/^[a-z]+$/i)){
			valid = false;
		}
		else{
			$("#nom").css("border-color","blue");
			$("#nom").next(".error-message").fadeOut();
		}


		if ($("#prenom").val() =="") {
			valid = false;
		}else if(!$("#prenom").val().match(/^[a-z]+$/i)){
			valid = false;
		}
		else{
			$("#prenom").css("border-color","blue");
			$("#prenom").next(".error-message").fadeOut();
		}


		if ($("#mail").val() =="") {
			valid = false;
		}else{
			$("#mail").css("border-color","blue");
			$("#mail").next(".error-message").fadeOut();
		}


		if ($("#password").val() =="") {
			valid = false;
		}else{
			$("#password").css("border-color","blue");
			$("#password").next(".error-message").fadeOut();
		}
		return valid;
		});
	})