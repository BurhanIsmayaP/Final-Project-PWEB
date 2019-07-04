

function cari() {
	var kata = document.formcari.keyword.value;//Membuat Variabel yang nantinya  di variabel di buat fungsi agar dapat melakukan pencaharian sesuai dengan keyword
	var hasil = "http://www.google.com/search?q=" + kata ; // variabel hasil di gunakan untuk supaya pencaharian menggunakan pencaharian google dan + keyword yang di masukan.
	window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes')// membuka halaman jendela google.
}

function myFunction() {
  confirm("Yakin Ingin Cari?"); // confirm adalah fungsi js yang memunculkan notice.
}
