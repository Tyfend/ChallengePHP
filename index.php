<?php
	// afficher liste jeux vidéos par ligne
		/*$videoGames = array('World of Warcraft ','League of Legend','Oxygen not Included', 'Northgard');
		function showVideoGames ($jeuxVideos){
			echo $jeuxVideos. '<br/>';
		}
		for ($i = 0 ; $i < count($videoGames); $i++) { 
			showVideoGames($videoGames[$i]);
		}*/
	//Exercice Tableaux
	//Créer un tableau mois et initialiser avec des valeurs données, etc...
		$mois = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
		
		echo $mois[2]. '<br />';
		echo $mois[5]. '<br />';
		$mois[7] = "août";
			echo $mois[7]. '<br />';

		$departementsHautDeFrance = array(
			"59"=>"Nord",
			"02"=>"Aisne",
			"60"=>"Oise",
			"62"=>"Pas-de-Calais",
			"80"=>"Sommes",
			"51"=>"Marne"
		);
		echo $departementsHautDeFrance[59]. '<br/>';
		echo $departementsHautDeFrance[51]. '<br/>';
		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Challenge</title>
	</head>
	<body>
		<pre>
			<?php 
			for ($i=0; $i < count($mois); $i++) { 
			echo $mois[$i] . '<br />';
			}

			foreach($departementsHautDeFrance as $cle => $element){
				echo 'Le département ' . $element . ' a le numéro ' . $cle . '<br />';
			}
			?>
		</pre>
	</body>
</html>