<?php 
 
//membangun koneksi
$username="ivan_10750";
$password="ivan_10750";
$database="LOCALHOST/XE";

$conn=oci_connect($username,$password,$database);

if(!$conn){
$err=oci_error();
echo "Gagal tersambung ke ORACLE". $err['text'];
} else {
	//echo "koneksi berhasil";
}


?>