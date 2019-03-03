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
.weather{float:left; margin:10vh 0 0 15vh; font-family: FreeMono, monospace; font-size:1.5em; font-weight:bolder; color:black}
.weather:hover{color: coral; cursor:pointer;}
.windAnswer{margin:30vh 0 0 -129vh; width:30vw; float:left; border-bottom: double; border-top:groove; font-size:2.5em; padding:5vh; 
display:none; color:white; background:linear-gradient(hotpink,,); position:fixed;}
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
	document.getElementById("windAnswer").style.display="inline-block";
	/*alert("<label class='weatherleft'>Wind speed</label>"+ ": 4.6m/s " + "<br>" + "<label class='weatherleft'>Temperature </label>" + ":  16.93\xB0C "+"<br>"+"<label class='weatherleft'>Latitude</label>"+ ": 28.69 "+ "<br>"+"<label class='weatherleft'>Longitude</label> "+ ":  77.22")
	document.getElementById("windAnswer").innerHTML="<label class='weatherleft'>Wind speed</label>"+ ": 4.6m/s " + "<br>" + "<label class='weatherleft'>Temperature </label>" + ":  16.93C "+"<br>"+"<label class='weatherleft'>Latitude</label>"+ ": 28.69 "+ "<br>"+"<label class='weatherleft'>Longitude</label> "+ ":  77.22";*/
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
	<div class="windAnswer" id="windAnswer">Wind speed: 4.6m/s deg
		<br>
		Temperature: 16.93 deg<br> Latitude: 28.69 <br> Longitude : 77.22
	</div>
</body>
</html>

