<?php
	//echo "see on minu esimene php"; //rumal teade
	$firstName = "Daniil";
	$lastName = "Latt";
	$dateToday = date("d.m.Y");
	$weekdayToday = date("N");
	$weekdayNameET = ["esmaspäev", "teisepäev", "kolmapäev", "neljapäev", "reede", "laupäev", "pühapäev"];
	//echo $weekdayToday
	//var_dump($weekdayNameET);
	//echo $weekdayNameET [1];
	//echo $weekdayToday;
	$hourNow = date("G");
	$partOfDay = "";
  if ($hourNow < 8){
	  $partOfDay = "varajane hommik";
  }
  if ($hourNow >= 8 and $hourNow < 16){
	  $partOfDay = "koolipäev";
  }
  if ($hourNow > 16){
	  $partOfDay = "loodetavasti vaba aeg";
  }

  //juhusliku pildi valimine
  $picURL = "https://i.redd.it/4cvycsbiwla01.jpg";
  $picEXT = ".jpg";
  $picNUM = mt_rand(2,43)
  //echo $picNUM
  $picFILE = $picURL .$picNUM .$picEXT;
  
?>
<!DOCKTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
	<?php
		echo  $firstName;
		echo " ";
		echo $lastName;
	?>
	, harj</title>
	</head>
	<body>
		<h1>
		<?php
		echo $firstName ." " .$lastName;
		?>
		</h1>
		<p>Selle <a href="http://www.tlu.ee" target="_blank">TLÜ</a> õppetöö tegin kiiruga tunnis õpimise jaoks kek.</p>

		

		<?php
			//echo "<p>Tänane kuupäev on: " .$dateToday .".</p> \n";
			echo "<p>Tänane  on " .$weekdayNameET[$weekdayToday - 1] .", " .$dateToday ." .</p> \n";
			echo "<p>Lehe avamise hetkel oli kell " .date("H:i:s") .", käes oli " .$partOfDay .".</p> \n";	
		?>
		<img src="http://wiki2013.mindseyesociety.org/images/c/c5/FinnWFiles.gif" alt="<a>TLÜ<a/> Terra õppehoone">
		<p>Minu sõber teeb ka oma <a href="http://greeny.cs.tlu.ee/~martjag" target="_blank">veebilehe</a><p>
	</body>
</html>