<DOCTYPE html>
<html lang="id">
	<head>
	</head>
	<body>
		<form method="post">
			Masukkan nama anda dibawah:<br>
			<input type="text" name="nama" placeholder="isi disini" required>
			<input type="submit" value="Sensor">
		</form>
<?php
	function sensor($nama){
		if ($nama == 'Yahya' OR $nama == 'Bilal' OR $nama == 'Farid'){
			$l = substr($nama, 0, 2);
			echo $l;
			for ($i = 0; $i < 3;$i++){
				echo "*";
			}
		}else{
			echo "Nama ".$nama." tidak disensor ᶘ ᵒᴥᵒᶅ";
		}
	}
	if (!empty($_POST['nama']) && isset($_POST['nama'])){
	sensor($_POST['nama']);
	}
?>
	</body>
</html>
