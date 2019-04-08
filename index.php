<?php
	// afficher liste jeux vidéos par ligne
		/*$videoGames = array('World of Warcraft ','League of Legend','Oxygen not Included', 'Northgard');
		function showVideoGames ($jeuxVideos){
			echo $jeuxVideos. '<br/>';
		}
		for ($i = 0 ; $i < count($videoGames); $i++) { 
			showVideoGames($videoGames[$i]);
		}*/

	// TABLEAUX
	//Exercice 1
	$mois = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
		
	//Exercice 2
	echo $mois[2]. '<br />';

	//Exercice 3
	echo $mois[5]. '<br />';

	//Exercice 4
	$mois[7] = "août";
	echo $mois[7]. '<br />';

	//Exercice 5
	$departementsHautDeFrance = array(
		"59"=>"Nord",
		"02"=>"Aisne",			
		"60"=>"Oise",
		"62"=>"Pas-de-Calais",
		"80"=>"Sommes",
	);
	//Exercice 6
	echo $departementsHautDeFrance[59]. '<br/>';

	//Exercice 7
	$departementsHautDeFrance["51"] = "Marne";

	// Exercice 8
	for ($i=0; $i < count($mois); $i++) { 
		echo $mois[$i] . '<br />';
	}

	// Exercice 9
	foreach($departementsHautDeFrance as $cle => $element){
		echo 'Le département ' . $element . ' a le numéro ' . $cle . '<br />';
	}
?>

<br />

<?php
	//BOUCLES
	//Exercice 1
	$var = 0;

	while ($var < 10) {
			$var++;
			echo $var. '<br />';
		}	
	//Exercice 2
	$var1 = 0;
	$var2 = 48;

	while ($var1 <= 20) {
		echo ($var1*$var2). '<br />';
		$var1++;
	}

	//Exercice 3
	$var3 = 100;
	$var4 = 50;

	while ($var3 > 10) {
		echo ($var3*$var4). '<br />';
		$var3--;
	}

	//Exercice 4
	$var5 = 1;

	while ($var5 < 10) {
		echo $var5;
		$var5 = $var5+ ($var5 / 2) . '<br />';
	}

	//Exercice 5
	/*$var6 = 0;

	while ($var6 !== 15) {
		echo "On y arrive presque". '<br />';
		$var6++;
	}*/
	for ($i=1; $i <= 15 ; $i++) { 
		echo "On y arrive presque". '<br />';
	}

	//Exercice 6
	for ($i=20; $i >= 0 ; $i--) { 
		echo "C'est presque bon". '<br />';
	}

	//Exercice 7
	for ($i=0; $i <= 100 ; $i+=15) { 
		echo "On tient le bon bout". '<br/>';
	}

	//Exercice 8
	for ($i=200; $i>= 0 ; $i-=12) { 
		echo "enfin !!!!". '<br />';
	}
?>
<br />
<?php
	//CONDITIONS
	//Exercice 1
	
	//Exercice 2

	//Exercice 3

	//Exercice 4

	//Exercice 5

	//Exercice 6

	//Exercice 7

	//Exercice 8
?>
		