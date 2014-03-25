
$('form.enquiry_form').on('submit', function() {
	
	var form = $(this),
		url = form.attr('action'),
		type = form.attr('method'),
		data = {}; //parsing input form as a JSON object
		
		
	form.find('[name]').each(function(index, value) {
		
		var input = $(this),
			name = input.attr('name'),
			value = input.val();
		
		data[name] = value;
	});
	
	
	$.ajax({
		
		url: url,
		type: type,
		data: data,
		success: function(response) {
			console.log(response);
		}
		
	})
	.done(function() {
	
		//clear form after submitting
		$(':input','form.enquiry_form')
		  .not(':button, :submit, :reset, :hidden')
		  .val('')
		  .removeAttr('checked')
		  .removeAttr('selected');
		  
		//show alert box
		$(".alert-success").removeClass("hide");
		$(".alert-success").show();
	});


	return false //this will stop the form from submitting in the normal fashion
});