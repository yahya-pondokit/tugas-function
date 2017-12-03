<DOCTYPE html>
<html lang="id">
	<head>
	</head>
	<body>
		<form method="post">
			Masukkan tanggal lahir anda dibawah:<br>
			<input type="text" name="umur" placeholder="19xx-12-21" required>
			<input type="submit" value="Hitung umur saya">
		</form>
<?php
	function umur($umur = '1991-12-23'){
		if (strlen($umur)==10 && strlen(trim($umur,'1234567890-')) == 0 && (substr($umur,4,1) && substr($umur,-3,1) == '-')){
		$tgl = date('Y-m-d');
		$dikurangi = strtotime($tgl);
		$pengurang = strtotime($umur);
		$hasilnya = $dikurangi - $pengurang;
		$hasilakhir = date('Y-m-d', $hasilnya);
		$taun = substr($hasilakhir, 0, 4);
		$taunudahdikurang = $taun - 1970;
		$bulan = substr($hasilakhir, 5, 2);
		$bulanudahdikurang = $bulan - 1;
		$hari = substr($hasilakhir, -2);
		$hariudahdikurang = $hari - 1;
		echo "Umur anda adalah ".$taunudahdikurang." tahun, ".$bulanudahdikurang." bulan dan ".$hariudahdikurang." hari.";
		}else{
			echo "Silahkan isi form dengan benar :)";
		}
	}
	if (!empty($_POST['umur']) && isset($_POST['umur'])){
	umur($_POST['umur']);
	}
?>
	</body>
</html>
		
