$(document).on('click','.gestion_deleted',function(){

			var id = $(this).attr('uid');
      var gestion = $(this).attr('get');

			$('#idgestion').val(id);
      $('#gestion').val(gestion);

			$('#modal_popup').modal({backdrop: 'static', keyboard: true, show: true});
});
