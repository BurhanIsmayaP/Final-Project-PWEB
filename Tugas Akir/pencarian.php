<!DOCTYPE html>
<html>
<head>
	<title>Pemrograman Web</title>
	<!-- Style Css -->  
	<link rel="stylesheet" type="text/css" href="css/style4.css">
	<!-- Style Javascript -->
	<script language="javascript" src="js/javascript.js"></script>

</head>

<body>
	<div class="header">
	</div>

	<div class="menubar">
		<ul>
			<li><a href="biodata.php"><b>Biodata</b></a></li>
			<li><a href="materi.html"><b>Isi Data Pembayaran</a></b></li>
			<li><a href="pencarian.php"><b>Lihat data</b></a></li>
			<li><a href="cari.php"><b>Pencarian</b></a></li>
		</ul>
	</div>	

	<div class="menu2">
		<?php
echo "<head><title>DATA BAYAR</title></head>";
$fp = fopen("databayar.txt","r");//membuka file
echo "<table border=0>";
while ($isi = fgets($fp,80))//dimana data yang ada di dalam variabel fp, di ambil  menggunakan fungsi fgets.
{
$pisah = explode("|",$isi); // kemudian data variabel isi di pisahkan stringnya mengguanakan fungsi explode. 
echo "<tr><td>Nama Pelanggan</td><td>: $pisah[0]</td></tr>";//pemanggilan data menggunakan array
echo "<tr><td>Jumlah </td><td>: $pisah[1]</td></tr>";//pemanggilan data menggunakan array
echo "<tr><td>Harga </td><td>: $pisah[2]</td></tr>";//pemanggilan data menggunakan array
echo "<tr><td>Total </td><td>: $pisah[3]</td></tr>";//pemanggilan data menggunakan array
echo "<tr><td>Bukti </td><td>: <img src=images/$pisah[4] width=200 height=200 ></td></tr>
<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";//pemanggilan data menggunakan array
}
echo "</table>";
echo "<a class=btn href=materi.html> Isi Buku tamu </a>";
echo "<a class=btn href=biodata.php> Profile </a>";
?>
	</div>



</body>
</html>