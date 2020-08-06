// ES PARA CARRERA USANDO JAVASCRIPT

$('#carreraModal').click(function(event) {
	/* Act on the event */
	$('#modal-item').find('.modal-title').text('Registrar carrera');
	$('#modal-item').modal('show');
	$('#submit-item').val('add');
});

$(document).on('submit', '#form-item', function(event) {
	event.preventDefault();
	/* Act on the event */
	var iName = $('#item-name').val();
	var iCompra = $('#item-compra').val();
	var iPrice = $('#item-price').val();
	var iType = $('#item-type').val();
	var code = $('#code').val();
	var brand = $('#brand').val();
	var grams = $('#grams').val();
    if($('#submit-item').val() == "add"){
    	// console.log('add ra');
	    $.ajax({
	    		url: 'data/add_item.php',
	    		type: 'post',
	    		dataType: 'json',
	    		data: {
	    			iName:iName,
	    			iCompra:iCompra,
	    			iPrice:iPrice,
	    			iType:iType,
	    			code:code,
	    			brand:brand,
	    			grams:grams
	    		},
	    		success: function (data) {
	    			console.log(data);
	    			if(data.valid == true){
	    				$('#modal-message').find('#msg-body').text(data.msg);
	    				$('#modal-item').modal('hide');
	    				showAllItem();
	    				$('#modal-message').modal('show');
	    				$('#submit-item').val('null');
	    			}
	    		},
	    		error: function(){
	    			eMsg('70');
	    		}//
	    	});
    }//end if == "add"
});
