<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  PASIEN  SET NAMA ='".$nama."', ALAMAT ='".$alamat."' WHERE ID = '".$id."' ";
	$statement = oci_parse($conn,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conn);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data Penduduk berhasil diubah'); window.location.href='pasien.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Penduduk gagal diubah'); window.location.href='pasien.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: pasien.php'); 
}