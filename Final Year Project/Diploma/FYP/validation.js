
	
	$("#username_error_massage").hide();
	$("#password_error_massage").hide();
	$("#mobile_error_massage").hide();
	$("#position_error_massage").hide();
	// $("#image_error_massage").hide();
	// $("#level_error_massage").hide();
	
	var error_username = false;
	var error_password = false;
	var error_mobile = false;
	var error_position = false;
	// var error_image = false;
	// var error_level = false;

	// $("#image").focusout(function(){

	// 	check_image();

	// });

	// $("#level").focusout(function(){

	// 	check_level();

	// });

	$("#username").focusout(function(){

		check_username();

	});

	$("#password").focusout(function(){

		check_password();
		
	});

	$("#mobile").focusout(function(){

		check_mobile();
		
	});

	$("#position").focusout(function(){

		check_position();

	});


	function check_username()
	{
		var username_length = $("#username").val().length;

		if(username_length < 5 || username_length > 10)
		{
			$("#username_error_massage").html("Should between 5 - 10 characters");
			$("#username_error_massage").show();
			error_username = true;
		}

		else
		{
			$("#username_error_massage").hide();
		}
	}

	// function check_image()
	// {
	// 	var image = $('#image').val();

	// 	if(image.length == '')
	// 	{
	// 		$("#image_error_massage").html("Please Input Image");
	// 		$("#image_error_massage").show();
	// 		error_image = true;
	// 	}

	// 	else
	// 	{
	// 		$("#image_error_massage").hide();
	// 	}
	// }

	// function check_level()
	// {
	// 	var level = $('#levl').val();

	// 	if(level.length == '')
	// 	{
	// 		$("#level_error_massage").html("Please Fill Level");
	// 		$("#level_error_massage").show();
	// 		error_level = true;
	// 	}

	// 	else
	// 	{
	// 		$("#level_error_massage").hide();
	// 	}
	// }

	function check_password()
	{
		var password_length = $("#password").val().length;

		if(password_length < 8)
		{
			$("#password_error_massage").html("At least 8 characters");
			$("#password_error_massage").show();
			error_password = true;
		}

		else
		{
			$("#password_error_massage").hide();
		}
	}

	function check_mobile()
	{
		var mobile = $('#mobile').val();

		if(mobile.length == '')
		{
			$("#mobile_error_massage").html("Please Fill Phone Mobile");
			$("#mobile_error_massage").show();
			error_mobile = true;
		}

		else
		{
			$("#mobile_error_massage").hide();
		}
	}

	function check_position()
	{
		var position = $('#position').val();

		if(position.length == '')
		{
			$("#position_error_massage").html("Please Fill Position");
			$("#position_error_massage").show();
			error_position = true;
		}

		else
		{
			$("#position_error_massage").hide();
		}
	}

	$("#add_staff").submit(function(){

		error_username = false;
		error_password = false;
		error_mobile = false;
		error_position = false;
		// error_image = false;
		// error_level = false;

		check_username();
		check_password();
		check_mobile();
		check_position();
		// check_image();
		// check_level();

		if(error_username == false && error_password == false && error_mobile == false && error_position == false)
		{
			return true;
		}

		else
		{
			return false;
		}

	});
