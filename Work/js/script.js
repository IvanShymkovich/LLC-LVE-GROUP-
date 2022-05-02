console.log('init')
$(document).ready(function () {

	//E-mail Ajax Send
	$("form").submit(() => { //Change
		$.ajax({
			type: "POST",
			url: "phpform.php", //Change
			data: $("form").serialize()
		}).done(() => {
			alert("Thank you!");
			setTimeout(() => {
				// Done Functions
				$("form").trigger("reset");
			}, 1000);
		});
		return false;
	});

});