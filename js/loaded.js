	
$(document).ready(function(){
	function getUrlVars() {
		var vars = {};
		var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
			vars[key] = value;
		});
		return vars;
		}
		
		var first = getUrlVars()["url"];
		
		$.ajax({
				url: 'load.php',
				data: 'url='+first,
				success: function() {
				}
			});
});