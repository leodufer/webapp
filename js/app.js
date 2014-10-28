$('form').submit(function(event){
	event.preventDefault();

	$.ajax({
		error:function(err){
			console.log(err);
		}
	});
});


$('table').ready(function(){
	
});