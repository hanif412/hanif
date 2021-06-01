<?php
include "koneksibaru.php";

$namapasien = $_POST['nama'];
$alamat = $_POST['alamat'];
$riwayatperjalanan = $_POST['riwayat'];
$hasilswab = $_POST['hasil'];
$tanggalswab = $_POST['tanggal'];
$suhu = $_POST['suhu'];

echo "Lihat ",$namapasien,$alamat,$riwayatperjalanan,$hasilswab,$tanggalswab,$suhu;
$con=mysqli_connect("localhost","root","","covid_1tic_19"); 
if (!empty($namapasien) && !empty($alamat) && 
!empty($riwayatperjalanan) && !empty($hasilswab) &&
!empty($tanggalswab) && !empty($suhu))
{
mysqli_query($con, "INSERT INTO 19_1tic_covid 
(nama_pasien_2055301091, alamat_pasien_2055301091, riwayat_perjalanan_2055301091, hasil_swab_2055301091,tanggal_swab,suhu_2055301091) 
VALUES
('$namapasien','$alamat','$riwayatperjalanan','$hasilswab','$tanggalswab','$suhu');");
header ('location:menucovid.php');

} else {
header('location:menucovid.php');
}
?>