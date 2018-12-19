<?php
	if( isset($_POST) && !empty($_POST) )
	{
		$marque	= isset($_POST['marque']) && !empty($_POST['marque']) ? $_POST['marque'] : 'N/A';
		$modele	= isset($_POST['modele']) && !empty($_POST['modele']) ? $_POST['modele'] : 'N/A';
		$type 	= isset($_POST['type']) && !empty($_POST['type']) ? $_POST['type'] : 'N/A';
		
		$format =  isset($_GET['format']) && !empty($_GET['format']) ? $_GET['format'] : 'html';
			
		switch ($format)
		{
			case 'csv':
				echo $marque . ';' . $modele . ';' . $type . ';';
				break;
			
			case 'html':
				echo '<b>Marque</b> :' . $marque . '<br />';
				echo '<b>Modèle</b> :' . $modele . '<br />';
				echo '<b>Type</b> :' . $type . '<br />';
				echo '<hr />';
				break;
				
			case 'json':
				$t_car = array('marque' => $marque, 'modele' => $modele, 'type' => $type);
				echo json_encode($t_car);
				break;
				
			default:
				echo 'Invalid format';
		}
	}
?>

<form method="post" name="add_car">
	<b>Marque:</b><br>
	<input name="marque" placeholder="Audi, Volkswagen, Mazda..." required /><br /><br />
	<b>Modèle:</b><br>
	<input name="modele"  placeholder="A1, CX-5, Polo, Golf..." required /><br /><br />
	<b>Type:</b><br>
	<input name="type"  placeholder="Berline, citadine, compact..." required /><br /><br />
	<input type="submit" value="Add">
</form>