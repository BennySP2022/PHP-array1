<?php
	$arr = array(1,2,3,4,5);
	
	$target = NULL;
	$targetIndex = NULL;
	
	foreach($arr as $index => $value ) {
	  if ($value < 4 && $value > 2) {
	    $target = $value;
	    $targetIndex = $index;
	  }
	}
	echo "\nKetemu nih ada di Index : $targetIndex dan nilai : $target\n";
?>