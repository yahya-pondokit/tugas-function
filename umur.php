<?php
	function umur($umur = '1996-12'){
		$tgl = date('Y-m');
		$dikurangi = strtotime($tgl);
		$pengurang = strtotime($umur);
		$hasilnya = $dikurangi - $pengurang;
		$hasilakhir = date('Y-m', $hasilnya);
		$taun = substr($hasilakhir, 0, 4);
		$taunudahdikurang = $taun - 1970;
		$bulan = substr($hasilakhir, -2);
		$bulanudahdikurang = $bulan - 1;
		// echo $dikurangi;
		// echo "<br>";
		// echo $pengurang;
		// echo "<br>";
		// echo $hasilnya;
		// echo "<br>";
		// echo $hasilakhir;
		// echo "<br>";
		// echo $taun;
		// echo "<br>";
		// echo $taunudahdikurang;
		// echo "<br>";
		// echo $bulan;
		// echo "<br>";
		// echo $bulanudahdikurang;
		// echo "<br>";
		echo "Umur anda adalah ".$taunudahdikurang." tahun, ".$bulanudahdikurang." bulan.";
	}
	umur();
?>
