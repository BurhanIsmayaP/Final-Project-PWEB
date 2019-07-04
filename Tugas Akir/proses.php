<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style3.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script language="javascript" src="js/script1.js"></script>
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
<div class="menu2" align="center">
<div class="jumbotron">

<?php
echo "<head><title>DATA BAYAR</head></title>";
$fp = fopen("databayar.txt","a+");//fopen = digunakan untuk membuka file                                                                     
$nama = $_POST['nama'];//deklarasi variable
$jumlah = $_POST['jumlah'];//deklarasi variable
$harga = $_POST['harga'];//deklarasi variable
$total = $jumlah*$harga;//variable jumlah akan dikalikan dengan variable harga kemudian hasil nya akan ditampung di variable total
$file = $_FILES["file"]["name"];//deklarasi variable
$tmp_name = $_FILES["file"]["tmp_name"];//deklarasi variable
move_uploaded_file($tmp_name, "images/".$file);//memindahkan data yang ada di tmp name di folder images

fputs($fp,"$nama|$nama_barang|$jumlah|$harga|$total|$file\n");//menulis file
fclose($fp);//menutup file
echo " Terima Kasih Atas Partisipasi Anda Mengisi Pembayaran<br>";
echo "<a class=btn href=materi.html> Isi Buku Tamu </a><br>";
echo "<a class=btn href=biodata.php> Lihat Profile </a><br> ";
?>
</div>
</div>

<div class="footer">
	<br>
		<font color="#6495ED"></font>Burhan Ismaya Putra - Universitas Ahmad Dahlan <font color="#6495ED"></font>
</div>
</body>
</html>