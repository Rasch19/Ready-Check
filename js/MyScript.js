
$(document).ready(function() {
	function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;
	}
	
	var first = getUrlVars()["url"];
	var element = document.getElementById("p1");
	var urlnumber = 0;
	
	var x = getCookie(first);
	if(x == "")
	{
		setCookie(first, "false", 1);
	}
	else if(x == "true")
	{
		document.getElementById("Add").innerHTML = "Unready";
		document.getElementById("Add").style.color = "#ff3300";
		document.getElementById("Add").style.borderColor = "#ff3300";
	}
	
	$.ajax({
		url: 'urls.json',
		dataType: 'json',
		type: 'get',
		cache: false,
		success: function(data) {
			console.log('it worked');
			for(i = 0; i<data.length; i++)
			{
				if(data[i].url == first)
				{
					element.innerHTML = data[i].counter;
					urlnumber = i;
					break;
				}
				else if(i == (data.length - 1))
				{
					console.log("couldn't find it")
				}
			}
			Ready();
			console.log(urlnumber);
			var check = setInterval(function() {
				console.log('yo');
				$.ajax({
					url: 'urls.json',
					dataType: 'json',
					typ: 'get',
					cache: false,
					success: function(data) {
						var players = document.getElementById("table").rows[0].cells.length;
						pn = data[urlnumber].counter;
						if(pn != parseInt(element.innerHTML))
						{
							element.innerHTML = pn;
							Ready();
							console.log('did ready');
							if(pn == players)
							{
								clearInterval(check);
							}
						}
						
					}
				});
			}, 2000);
			
		}
	});
	
	function getCookie(cname) {
		var name = cname + "=";
		var ca = document.cookie.split(';');
		for(var i = 0; i <ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length,c.length);
			}
		}
		return "";
	}
	
	function setCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+ d.toUTCString();
		document.cookie = cname + "=" + cvalue + "; " + expires;
	}
});


