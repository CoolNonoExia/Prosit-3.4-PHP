<?php
	class voiture
	{
		var $_marque;
		var $_modele;
		var $_type;
		
		function __construct($marque, $modele, $type)
		{
			$this->_marque = $marque;
			$this->_modele = $modele;
			$this->_type = $type;
		}
		
		function display()
		{
			echo '<b>Marque</b> :' . $this->_marque . '<br />';
			echo '<b>Modèle</b> :' . $this->_modele . '<br />';
			echo '<b>Type</b> :' . $this->_type. '<br />';
			echo '<hr />';
		}
		
		function setMarque($marque)
		{
			$this->_marque = $marque;
		}
		function setModele($modele)
		{
			$this->_modele = $modele;
		}
		function setCarType($type)
		{
			$this->_type = $type;
		}
	}
	
	$ai_a1 = new voiture('Audi', 'A1', 'citadine');
	$vw_pt = new voiture('Volkswagen', 'Passat', 'berline');
	$vw_go = new voiture('Volkswagen', 'Golf', 'compact');
	$mz_cx = new voiture('Mazda', 'CX-5', 'SUV');
	
	$ai_a1->display();
	$vw_pt->display();
	$vw_go->display();
	$mz_cx->display();
?>