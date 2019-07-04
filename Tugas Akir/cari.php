<!DOCTYPE html>
<html>
<head>
	<title>Pemrograman Web</title>
	<!-- Style Css -->  
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<!-- Style Javascript -->
	<script language="javascript" src="js/java.js"></script>
</head>

<body>
	<div class="header">
	</div>s

	<div class="menubar">
		<ul>
			<li><a href="biodata.php"><b>Biodata</b></a></li>
			<li><a href="materi.html"><b>Isi Data Pembayaran</a></b></li>
			<li><a href="pencarian.php"><b>Lihat data</b></a></li>
			<li><a href="cari.php"><b>Pencarian</b></a></li>
		</ul>
	</div>	

	<div class="menu2">
		<br><br>
		<h2><font color="black">PENCARIAN DATA INTERAKTIF</font></h2>
		<hr width="90%">
		<br>
		<form name="formcari" onSubmit="cari()">
  		<input class="search" name="keyword" type="text" placeholder="Cari..." required>	
  		<input class="button" type="submit" value="Cari" onclick="myFunction()" >
 
<script>

</script>		
		</form>
		<br><br><br><br>
	</div>

	<div class="footer">
		<br>
			<font color="#6495ED"></font>Burhan Ismaya Putra - Universitas Ahmad Dahlan <font color="#6495ED"></font>
	</div>

</body>
</html>