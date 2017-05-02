	$("#Add").mousedown(function() {
		var button = document.getElementById("Add");
		button.style.color = "#ff9900";
		button.style.borderColor = "#ff9900";
	});


	
	function setCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+ d.toUTCString();
		document.cookie = cname + "=" + cvalue + "; " + expires;
	}
	
	$("#Add").click(function() {
		function getUrlVars() {
		var vars = {};
		var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
			vars[key] = value;
		});
		return vars;
		}
		
		var first = getUrlVars()["url"];
		var element = document.getElementById("p1");
		var button = document.getElementById("Add");
		var players = document.getElementById("table").rows[0].cells.length;
		
		if(button.innerHTML == "Ready")
		{
			if(parseInt(element.innerHTML) < players)
			{
				element.innerHTML = (parseInt(element.innerHTML) + 1);
				Ready();
				console.log('add ready');
			}
			
			setCookie(first, "true", 1);
			
			button.innerHTML = "Unready";
			button.style.color = "#ff3300";
			button.style.borderColor = "#ff3300";
			
			$.ajax({
				url: 'AddPlayer.php',
				data: 'url='+first,
				success: function() {
					console.log('send info');
					Ready();
					console.log('add ajax ready');
				}
			});
		}
		else if(button.innerHTML == "Unready")
		{
			if(parseInt(element.innerHTML) > 0)
			{
				element.innerHTML = (parseInt(element.innerHTML) - 1);
				Ready();
				console.log('remove ready');
			}
			
			setCookie(first, "false", 1);
			
			button.innerHTML = "Ready";
			button.style.color = "#92bb35";
			button.style.borderColor = "#92bb35";
			
			$.ajax({
				url: 'RemovePlayer.php',
				data: 'url='+first,
				success: function() {
					console.log('send info');
					Ready();
					console.log('remove ajax ready');
					
				}
			});
		}
		else{
			alert("an Error occured!");
		}
		
		
	});