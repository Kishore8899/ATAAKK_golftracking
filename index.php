<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Golf ball</title>
<style>
body{font-size:1em; background-size:cover;}
.topHeader{font-family: 'Tangerine', serif; font-weight:bolder; letter-spacing:0.1em; text-shadow:0.05em 0 0.2em lightgreen; font-size:4em;
	margin:0.5em 0 0 0.6em; float:left; color:#FFFFFF}
.login{margin:1.1em 1.5em 0 0; float:right; border:double; border-radius:1em; font-size:2em; height:1.5em; width:4em;
 text-align:center; padding-top:0.1em;background:linear-gradient(orange,coral); border-color:white}
.login:hover{background:linear-gradient(coral,orange); cursor:pointer;}
.slogan{margin:29.5vh 0 0 75vh; float:left; font-size:4em; height:23vh; width:25vw;inline;font-family: 'Tangerine', serif;
 border-top: groove; border-bottom:groove; padding-top:3vh; color:white;}
.signup{color:white; float:left; margin:60vh 0 0 -35vh; font-size:2em; border: groove; border-radius:1em;height:7.8vh; width:10vw; 
text-align:center; padding-top:1vh;background:linear-gradient(LightGreen, Green)}
.signup:hover{background:linear-gradient(Green,LightGreen); cursor:pointer;}
.loginBox{ float:left; border:; margin:31.5vh 0 0 78vh; display:none; width:27vw; height:28vh; border-radius:1em; 
	position:absolute; padding:1vw 0 0 2vw; color:white;font-family: 'Tangerine', serif; font-size:2em; letter-spacing:0.05vw; font-weight:bolder;}
input{border-radius:1em; margin:1em; height:4vh; width:15vw;padding-left:1vw;}
input::placeholder{color:orange; font-weight:bolder;padding:1em;}
.loginBtn{ border: double;border-radius:1em; height:5.5vh; width:7.5vw; border-color:black; text-align:center; color:black;
background:linear-gradient(orange,coral); font-family:"Times New Roman", Times, serif; font-size:0.7em; padding-top:1vh;}
.loginBtn:hover{cursor:pointer; background:linear-gradient(coral, orange)}
</style> 
<script>
function showLogin()
{
	document.getElementById("slogan").style.display="none";
	document.getElementById("signupbtn").style.display="none";
	document.getElementById("loginBox").style.display="inline-block";
	document.getElementById("entryLoginBtn").style.display="none";
}
function redirect()
{
	window.Location.href='second.php';
}
/*function verifyUser()
{
	document.forms["login"].submit();
}*/
</script>
</head>

<body background="golfBallHD.jpg">
	<form name="login" method="post">
        <div class="topHeader">Ataakk</div>
        <div class="slogan" id="slogan">" Rise and shine, its golfing time! "</div>
        <div class="signup" id="signupbtn" onclick="redirect()">Let's play</div>
	</form>
</body>
</html>