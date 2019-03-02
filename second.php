<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Analysis</title>
<style>
body{font-size:1em; background-size:cover; }
.topHeader{font-family: 'Tangerine', serif; font-weight:bolder; letter-spacing:0.1em; text-shadow:0.05em 0 0.2em lightgreen; font-size:4em;
	margin:0.5em 0 0 0.6em; float:left; color:#000000; float:left;}
.weather{float:left; margin:10vh 0 0 15vh; font-family: FreeMono, monospace; font-size:1.5em; font-weight:bolder; color:hotpink;}
.weather:hover{color: coral; cursor:pointer;}
.windAnswer{margin:30vh 0 0 -59vh; width:30vw; float:left; border-bottom: double; border-top:groove; font-size:2.5em; padding:5vh; 
display:none; color:#FF3366; background:linear-gradient(hotpink,,); position:fixed;}
.weatherleft{width: 16vw; color:#660066; float:left; opacity:1;}
</style>
<script>
function graph()
{
	window.location.href = "golfGraph.php";
	//location.replace("golfGraph.php")
}
function wind()
{
	if (navigator.geolocation) 
	{
		navigator.geolocation.getCurrentPosition(showPosition);
	}	
	function showPosition(position) 
	{
	  var lat=(position.coords.latitude).toFixed(2);
  	  var lng=(position.coords.longitude).toFixed(2);
	 alert(lat)
	  //alert("http://api.openweathermap.org/data/2.5/weather?lat=" + lat+ "&lon=" + lng + "&appid=c5f88c7b4b8ba45a0dfaf0edb1fab93b");
	  document.getElementById("windAnswer").style.display="inline-block";
	  findWindspeed(lat,lng);
	}
}
function findWindspeed(lat,lng)
{
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			var resp = xmlhttp.responseText;
			var data = JSON.parse(resp);
			//alert(data);
			var temp=((data.main.temp)-275.15).toFixed(2);
			document.getElementById("windAnswer").innerHTML="<label class='weatherleft'>Wind speed</label>"+ ":  "+(data.wind.speed)+ " m/s" + "<br>" + "<label class='weatherleft'>Temperature </label>" + ":  "+ temp + "\xB0C "+"<br>"+"<label class='weatherleft'>Latitude</label>"+ ":  "+ lat + "<br>"+"<label class='weatherleft'>Longitude</label> "+ ":  " + lng;
		}
	}
	xmlhttp.open("GET","https://api.openweathermap.org/data/2.5/weather?lat=" + lat + "&lon=" + lng + "&appid=c5f88c7b4b8ba45a0dfaf0edb1fab93b",true);
	xmlhttp.send();	
}
function sector()
{
	window.location.href = "sectoring.html";
}
</script>
</head>

<body background="golfBallHD2.jpg">
	<div class="topHeader">Ataakk</div>
	<div class="weather" onclick="wind()">Know your weather</div>
<!--	<div class="weather" onclick="cam()">Track the ball</div>
-->	<div class="weather" onclick="graph()">Show my flight</div>
	<div class="weather" onclick="sector()">Show the sectoring</div>
	<div class="windAnswer" id="windAnswer"></div>
</body>
</html>
