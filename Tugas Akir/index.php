<html>
<head>
<title>Burhan Ismaya Putra</title>

</head>
<body>
<div class="ketengah" align="center"><h3>My Profile</h3>
	<img src="profil2.jpg" class="img-thumbnail img-fluid" width="250" height="100" alt="Cinque Terre">
	<table class="table">
	<div class="table-responsive">
		<table class="table  table-striped table-hover">
		<tbody>
			<tr>
				<td><h4>Nama</h4></td>
				<td><h4> : </h4></td>
				<td><h4>Muhammad Fadil</h4></td>
			</tr>
			<tr>
				<td><h4>NIM</h4></td>
				<td><h4> : </h4></td>
				<td><h4>1700018195</h4></td>
			</tr>
			<tr>
				<td><h4>Prodi</h4></td>
				<td><h4> : </h4></td>
				<td><h4>Teknik Informatika</h4></td>
			</tr>
			<tr>
				<td><h4>Alamat</h4></td>
				<td><h4> : </h4></td>
				<td><h4>Jl. Ki Ageng Pemanahan, Tamanan, Banguntapan, Bantul, DIY.</h4></td>
			</tr>
			<tr>
				<td><h4>Hobby</h4></td>
				<td><h4> : </h4></td>
				<td><h4>Badminton Dan Futsal</h4></td>
			</tr>
			</tbody>
	</table>
</div>
<a aling="center" href="buku.html" class="btn btn-primary btn-lg">Buku Tamu</a>
<a aling="center" href="lihat.php" class="btn btn-info btn-lg">Lihat Pengunjung</a>
<?php
$filecounter="counter.txt";
$fl=fopen($filecounter,"r+");
$hit=fread($fl,filesize($filecounter));
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
fclose($fl);
?>
</body>

</html>