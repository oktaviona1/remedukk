<?php 
include "../koneksi.php";
$id_Pengaduan=$_POST['id_Pengaduan'];
$tgl = $_POST['tgl_tanggapan'];
$tanggapan=$_POST['tanggapan'];
$id_petugas=$_POST['id_petugas'];
$st='selesai';


$sql=$mysqli -> query("insert into tanggapan(id_Pengaduan,tgl_tanggapan,tanggapan,id_petugas) values('$id_Pengaduan','$tgl','$tanggapan','$id_petugas')");
$update_st=$mysqli->query("update pengaduan set status='$st' where id_Pengaduan='$id_Pengaduan' ");

if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Sudah Ditanggapi');
		window.location="admin.php?url=verifikasi_pengaduan";
	</script>
<?php
}

?>