<?php
$namaFile = "datamhs.txt";
$myfile = fopen($namaFile, "r") or die("Tidak bisa buka file!");
echo "<center><h1>Data Mahasiswa</h1></center>";
echo "<div class='container'>";
echo "<table border='1'";
echo "<table align='center'>";
echo "<tr>
<th>No</th>
<th>NIM</th>
<th>Nama Mahasiswa</th>
<th>Tanggal Lahir</th>
<th>Tempat Lahir</th>
<th>Usia(Thn)</th>
</tr>";

$mulai = 1;
while (!feof($myfile)){
	$list = fgets($myfile);
    $mhs = explode("|", $list);
	echo "<tr>";
	echo "<td>$mulai</td>";
	for ($i=0; $i < 5; $i++) {
		if($i == 2){
			$tgl = explode("-",$mhs[$i]);
			$thnLahir = date($tgl[0]);
			$thnSkg = date("Y");
			$result = $thnSkg - $thnLahir;
			array_push($mhs, $result);
			echo "<td>$mhs[$i]</td>";
		} else{
			echo "<td>$mhs[$i]</td>";
		}
	}
	echo "</tr>";
	$mulai++;
	}
	$jumlah = $mulai;
	fclose($myfile);
	echo "</table>";
	echo "</div>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Tabel Mahasiswa</title>
<style>
.h1{
	padding-top: 50px;
}
.container{
	display: flex;
	margin: 50px;
}

.container td,th{
      text-align: center;
      padding: 10px;
    }
.table{
	align: center;
}
</style>
</head>
</html>
