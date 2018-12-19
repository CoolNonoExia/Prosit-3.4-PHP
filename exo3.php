<?php
	$tab = array(
		0 => array(
		'marque' => 'Audi',
		'modele' => 'A1',
		'type' => 'Citadine'),
		1 => array(
		'marque' => 'Volkswagen',
		'modele' => 'Passat',
		'type' => 'Berline'),
		2 => array(
		'marque' => 'Volkswagen',
		'modele' => 'Golf',
		'type' => 'Compact'),
		3 => array(
		'marque' => 'Mazda',
		'modele' => 'CX-5',
		'type' => 'SUV')
	);
	
	foreach ($tab as $key => $value)
	{
		$marque[$key]  = $value['marque'];
		$modele[$key] = $value['modele'];
		$type[$key] = $value['type'];
	}
	
	array_multisort($marque, SORT_ASC, $modele, SORT_ASC, $tab);
	
	foreach($tab as $array)
	{
		foreach($array as $key => $value)
		{
			echo $key . ': ' . $value . '<br />';
		}
		echo '<hr />';
	}
?>