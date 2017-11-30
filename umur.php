<?php
	function umur($umur = '1998'){
		$time = date('Y');
		echo $time - $umur;
	}
	umur('1996');
?>
		