<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $nim = $_POST['id'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  
	$query = "INSERT INTO PASIEN (ID,NAMA,ALAMAT) VALUES ('".$nim."','".$nama."','".$alamat."')";
	$statement = oci_parse($conn,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conn);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Penduduk berhasil ditambahkan'); 
	window.location.href='pasien.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Penduduk gagal ditambahkan');
	window.location.href='pasien.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: pasien.php'); 
}