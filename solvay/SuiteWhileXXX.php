<?php
	$nombre = array();
	$i=0;
	while(count($nombre)!=3)
	{
		$tirage = rand(0,1000);
		if ($tirage%2==0 && empty($nombre))
		{
			array_push($nombre,$tirage);
		}
		elseif ($tirage%2!=0 && !empty($nombre))
		{
			array_push($nombre,$tirage);
		}
		$i++;
	}
		echo $nombre[0]."</br>";
		echo $nombre[1]."</br>";
		echo $nombre[2]."</br>";
		echo "Résultat obtenu en"." ". $i." "."coups";
	?>