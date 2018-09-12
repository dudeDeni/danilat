<?php
	//echo "see on minu esimene php"; //rumal teade
	$firstName = "Daniil";
	$lastName = "Latt";
	$dateToday = date("d.m.Y");
	$hourNow = date("G");
	$partOfDay = "";
	if ($hourNow < 8){$partOfDay = "varajane hommik";
		
	}
	if($hourNow >= 8 and $hourNow < 16){$partOgDay = "koolipäev";
		
	}
	if ($hourNow >16){$partOfDay = "loodetavasti vaba aeg";
		
	}
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
		<h1>Daniil Latt</h1>
		<p>Selle <a href="http://www.tlu.ee" target="_blank">TLÜ</a> õppetöö tegin kiiruga tunnis õpimise jaoks kek.</p>
		
		<?php
			echo "<p>Tänane kuupäev on: " .$dateToday .".</p> \n";
			echo "<p>Lehe avamise hetkel oli kell "	.date("H:i:s") .",käes oli"	.$partOfDay .".</p> \n";	
		?>
		
		
		<img src="http://greeny.cs.tlu.ee/~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_3.jpg" alt="<a>TLÜ<a/> Terra õppehoone">
		<p>Minu sõber teeb ka oma <a href="http://greeny.cs.tlu.ee/~martjag" target="_blank">veebilehe</a><p>
	</body>
</html>