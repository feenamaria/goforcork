$(function() {
		   $('#membername').change(function(){
											$('#phone-num').val($(this).find('option:selected').data('phno'));
											if($(this).find('option:selected').data('issponsor') === 'yes'){
												$('#sponsor-chkbx').prop('checked',true);
											} else {
												$('#sponsor-chkbx').prop('checked',false);
											}
											}).change();
		   });