<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
#sector1{content:url("sector1.png"); float:left; width:25vw; height:25vh; position:absolute; margin:15vh 0 0 30vh; z-index:10; transform: rotate(359deg)}
#sector2{content:url("sector2.png"); float:left; width:25vw; height:25vh; position:absolute; margin:8vh 0 0 48vh; transform: rotate(3deg);}
#sector3{content:url("sector3.png"); float:left; width:25vw; height:25vh; position:absolute; margin:9.5vh 0 0 81vh; transform: rotate(3deg)}
#sector4{content:url("sector4.png"); float:left;  width:25vw; height:25vh; position:relative; margin:12vh 0 0 90vh; transform: rotate(3.3deg)}
#sector5{content:url("sector5.png"); width:25vw; height:25vh; position:fixed; margin:30vh 0 0 29.5vh; transform: rotate(2deg); float:left;}
#sector6{content:url("sector6.png"); width:25vw; height:25vh; position:fixed; margin:32vh 0 0 37vh; transform: rotate(356deg); float:left;}
#sector7{content:url("sector7.png"); width:25vw; height:25vh; position:fixed; margin:32vh 0 0 83vh; transform: rotate(2deg); float:left;}
#sector8{content:url("sector8.png"); width:25vw; height:25vh; position:fixed; margin:32vh 0 0 90vh; transform: rotate(2deg); float:left;}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
#prediction{font-style: italic; font-size: 5vh; text-align: center; color: coral; font-weight: bolder; position: fixed; margin: 0 0 0 85vh}

</style>
</head>
<body background="sectionBG.jpg" style="background-size: cover;">
<div id="sector1">
<div class="centered"><h1 style="color:blue;">Centered</h1></div>
</div>
<div id="sector2"></div>
<div id="sector3"></div>
<div id="sector4"></div>
<div id="sector5"></div>
<div id="sector6"></div>
<div id="sector7"></div>
<div id="sector8"></div>
<?php
session_start();
$con=mysqli_connect("localhost","root","","golftrack"); 
$c1=0;$c2=0;$c3=0;$c4=0;
	  $res=$con->query("select * from value");
	  while($row=$res->fetch_assoc())
	  {
	   $dx = $row["x"];
	   $dy = $row["y"];
	   $direction = $row["dir"];
	   if(strcmp($direction,"South-West")==0)
	   {
		  $c1=$c1+1; 
	   }
	   else if(strcmp($direction,"West")==0)
	   {
		   $c2=$c2+1;
	   }
	   else if(strcmp($direction,"South-East")==0)
	   {
		   $c3=$c3+1;
	   }
	
	  // echo $dx;
	   //echo $dy;
	   //echo $direction;
	  }
	  //echo $c1.'<br>';
	  //echo $c2.'<br>';
	    //echo $c3.'<br>';
	  ?>
	  	<div id="prediction" class="result"></div>

	  <script>
	  var s1= "<?php echo $c1?>";
	   var s2= "<?php echo $c2?>";
	    var s3= "<?php echo $c3?>";
		//alert(s2);
		 if((s2>s1)&&(s2>s3))
	{
		//alert("west");
		document.getElementById("sector1").style.display = "none";
		document.getElementById("sector4").style.display = "none";
		document.getElementById("sector5").style.display = "none";
		document.getElementById("sector6").style.display = "none";		
		document.getElementById("sector7").style.display = "none";
		document.getElementById("sector8").style.display = "none";
		document.getElementById("prediction").innerHTML="The predicted sector is either 2 or 3"
		
	}
	
	else if((s3>s1)&&(s3>s2))
	{
		//alert("southeast");
		document.getElementById("sector2").style.display = "none";
		document.getElementById("sector3").style.display = "none";
		document.getElementById("sector4").style.display = "none";
		document.getElementById("sector5").style.display = "none";
		document.getElementById("sector6").style.display = "none";		
		document.getElementById("sector7").style.display = "none";
		document.getElementById("sector8").style.display = "none";
		document.getElementById("prediction").innerHTML="The predicted sector is 1"
	}
	else if((s1>s3)&&(s1>s2))
	{
		//alert("southwest");
		document.getElementById("sector2").style.display = "none";
		document.getElementById("sector1").style.display = "none";
		document.getElementById("sector3").style.display = "none";
		document.getElementById("sector5").style.display = "none";
		document.getElementById("sector6").style.display = "none";		
		document.getElementById("sector7").style.display = "none";
		document.getElementById("sector8").style.display = "none";
		document.getElementById("prediction").innerHTML="The predicted sector is 4"
	}
	</script>
</body>
</html>
