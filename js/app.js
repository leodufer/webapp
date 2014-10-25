$('table').ready(function(){
	
	$.ajax({
		type:'GET',
		url:'api/tareas',
		success:function(data){
			for(var i = 0;i < data.length;i++){
				//debugger;
				row = '<tr>';
				row += '<td>'+data[i].id;
				row += '<td>'+data[i].descripcion;
				row += '<td>'+data[i].estado;
				$('table tbody').append(row);
			}
		},
		error:function(){
			
			console.log('Un error a ocurrido');
		}
	});
});

$('form').on('submit',function(event){
	event.preventDefault();
	$.ajax({
		type:'POST',
		url:'api/tareas',
		data:$(this).serialize(),
		success:function(data){
				row = '<tr>';
				row += '<td>'+data[0].id;
				row += '<td>'+data[0].descripcion;
				row += '<td>'+data[0].estado;
				$('table tbody').append(row);
				$('form').trigger('reset');
		},
		error:function(){
			console.log('Error');
		}
	});
});










