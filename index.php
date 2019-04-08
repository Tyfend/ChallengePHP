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
	$age = 17;

	if ($age >= 18) {
		echo "Vous êtes majeur". '<br />';
	}else{
		echo "Vous êtes mineur". '<br />';
	}

	//Exercice 2
	$isEasy = 'false';

	/*if ($isEasy = false) {
		echo "C'est difficile !". '<br />';
	}else{
		echo "C'est facile !!". '<br />';
	}*/

	/*switch ($isEasy) {
		case 'false':
			echo "C'est difficile !". '<br />';
			break;
		case 'true':
			echo "C'est facile !!". '<br />';
			break;
		default:
			echo "Ce n'est ni facile ni difficile ;)";
			break;
	}*/

		//en condition binaire:
		//(condition) ? true : false;
	echo ($isEasy) ? 'C\'est facile !! <br />' : 'C\est difficile! <br />';


	//Exercice 3
	// gérer tous les cas!!!
	$age = 18;
	$genre = "homme";

	 if ($genre == "homme" && $age >= 18) {
	 	echo "Vous êtes un homme et vous êtes majeur <br />";
	 }elseif ($genre == "homme" && $age < 18) {
	 	echo "Vous êtes un homme et vous êtes mineur <br />";
	 }elseif($genre == "femme" && $age >= 18) {
	 	echo "Vous êtes une femme et vous êtes majeure <br />";
	 }elseif ($genre == "homme" && $age < 18) {
	 	echo "Vous êtes une femme et vous êtes mineure <br />";
	 }else{
	 	echo "merci de choisir entre \"homme\" ou \"femme\"";
	 }
	

	//Exercice 4
	$magnitude = 0;
     switch($magnitude)
     {
           case 1:
               echo 'Micro-séisme impossible à ressentir.';
           break;
           case 2:
               echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
           break;
           case 3:
               echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
           break;
           case 4:
               echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
           break;
           case 5:
               echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
           break;
           case 6:
               echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
           break;
           case 7:
               echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
           break;
           case 8:
               echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
           break;
           case 9:
               echo 'Séisme capable de tout détruire sur une très vaste zone.';
           break;
           default:
               echo 'Aucun séisme ;)';
           break;
     } 

	//Exercice 5
    //echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';

     $maVariable = "Homme";

     if ($maVariable != 'Homme') {
	     echo "<br /> C'est une développeuse!!!";
     }else{
     	echo "<br />  C'est un développeur !!!";
     }
	//Exercice 6
     if ($maVariable >= 18){
     	echo "tu es majeur";
     }else{
     	echo "tu n'es pas majeur";
     }

	//Exercice 7
     if ($maVariable == false) {
     	echo "C\'est pas bon";
     }else{
     	echo "C\'est ok";
     }

	//Exercice 8
     if ($maVariable) {
     	echo "c\'est ok";
     }else{
     	echo "c\'est pas bon";
     }
?>
		