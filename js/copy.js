$("#copy").mousedown(function() {
	clipboard.copy(location.href);
	
	var button = document.getElementById("copy");
	
    button.innerHTML = "Copied!";
	button.style.color = "#ff9900";
	button.style.borderColor = "#ff9900";
    return false;
});

$('#copy').mouseup(function () {
	
	var button = document.getElementById("copy");
	
	button.innerHTML = "Copy URL";
	button.style.color = "#92bb35";
	button.style.borderColor = "#92bb35";
	console.log("put the color back");
    return false;
});
$('#copy').mouseout(function () {
	
	var button = document.getElementById("copy");
	
	button.innerHTML = "Copy URL";
	button.style.color = "#92bb35";
	button.style.borderColor = "#92bb35";
	console.log("put the color back");
    return false;
});