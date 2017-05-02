function Ready() {
	console.log('started ready');
	var element = document.getElementById("p1");
	var button = document.getElementById("Add");
	
	var players = parseInt(document.getElementById("table").rows[0].cells.length);
	var table = document.getElementById("table").rows[0];
	var content =  table.getElementsByTagName('img');
	
	var pn = parseInt(element.innerHTML);
	for(i = 0; i < players; i++)
	{
		if( i < pn)
		{
			content[i].src = "img/ready.png";
			if(i == (players - 1))
			{
				var audio = new Audio('Dota2_music_respawn.mp3');
				audio.volume = 0.7;
				audio.play();
				console.log("played audio");
				button.innerHTML = "Unready";
			}
				
		}
		else
		{
			content[i].src = "img/unready.png";
		}
	}
};