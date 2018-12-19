<?php
	// First letter of the string UC
	$par = 'tHIS STATEMENT IS FALSE!';
	echo ucfirst($par) . '<br />';
	
	// First letter of each word UC
	$ad = 'nEW mISSION: rEFUSE tHIS mISSION!';
	echo ucwords($ad) .  '<br />';
	
	// Replaces all spaces by underscores
	$o = 'DOES A SET OF ALL SETS CONTAIN ITSELF?';
	echo str_replace(' ','_',$o) . '<br />';
	
	// Counts words in the string
	$xe = 'WHICH ONE CAME FIRST EGG OR CHICKEN? ';
	$xe = str_word_count($xe,0);
	echo $xe . ' words';
?>