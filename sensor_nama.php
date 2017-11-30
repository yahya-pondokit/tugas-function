<?php
	function sensor($nama="Siswanto"){
		$p = strlen($nama);
		$l = substr($nama, 0, $p/2);
		echo $l;
		for ($i = 0; $i < $p/2;$i++){
			echo "*";
		}
	}
	sensor('Yahyaa');
?>