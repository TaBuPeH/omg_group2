$(document).ready(function(){
	
	if($( "#logShow" ).hide()){
		$( "#log" ).click(function() {
			$( "#logShow" ).show();
		});
	}
	
		$( "#exitLog" ).click(function() {
			$( "#logShow" ).hide();
		});
});