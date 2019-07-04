<!DOCTYPE html>
<html>
<head>
	<title>Pemrograman Web </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
		<center>
			<br><br>
			<h2><font color="black">BIODATA MAHASISWA</font></h2>
			<hr width="90%">

	<div class="profil">
		<br>
			<img src="img/DSCF0934.jpg" width="480px" height="320px">
		<br>
	</div>
	
	<div class="bio">
		<br>
			<table style="margin-left: 120px; font-size: 18px; text-align: left;">
				<tr>
					<td><b>Nama</b><td></td><td></td><td></td></td><td>:</td><td>Burhan Ismaya Putra</td>
				</tr>

				<tr>
					<td><b>Umur</b><td></td><td></td><td></td></td><td>:</td><td>19 Tahun</td>
				</tr>

				<tr>
					<td><b>Tanggal Lahir</b><td></td><td></td><td></td></td><td>:</td><td>Sleman, 19 Juni 2000</td>
				</tr>

				<tr>
					<td><b>Alamat</b><td></td><td></td><td></td></td><td>:</td><td> Kebrokan UH V / 648 Rt 20 Rw 05 Pandeyan Umbulharjo Yogyakarta</td>
				</tr>

				<tr>
					<td><b>Email</b><td></td><td></td><td></td></td><td>:</td><td>burhan1800018029@webmail.uad.ac.id</td>
				</tr>

				<tr>
					<td><b>Telepon</b><td></td><td></td><td></td></td><td>:</td><td>089657022295</td>
				</tr>
			</table>
		</div>
		</center>
	<br><br><br><br>
	</div>	
	</div>

	
<?php
$filecounter="counter.txt";//pendeklarasikan variabel.
$fl=fopen($filecounter,"r+");//data yang ada di variabel filecounter di buka menggunakan fungsi fopen.
$hit=fread($fl,filesize($filecounter)); // kemudian di baca menggunakan fungsi fread, dan juga menggunakan fungsi filesize
echo("<table width=250 align=center border=1 cellspacing=0 cellpadding=0
bordercolor=#0000FF><tr>");
echo("<td width=250 valign=middle align=center>");
echo("<font face=verdana size=2 color=#FF0000><b>");
echo("Anda pengunjung yang ke:");
echo($hit);
echo("</b></font>");
echo("</td>");
echo("</tr></table>");
fclose($fl);
$fl=fopen($filecounter,"w+");
$hit=$hit+1;
fwrite($fl,$hit,strlen($hit));
fclose($fl);// file di tutup kembali.
?>

<div class="footer">
		<br>
			<font color="#6495ED"></font>Burhan Ismaya Putra - Universitas Ahmad Dahlan <font color="#6495ED"></font>
	</div>
</body>
</html>