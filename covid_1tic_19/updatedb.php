<?php
include "koneksibaru.php";

$id = $_POST['id_2055301091'];
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
    mysqli_query($con,"UPDATE 19_1tic_covid SET nama_pasien_2055301091='$namapasien',
    alamat_pasien_2055301091='$alamat',riwayat_perjalanan_2055301091='$riwayatperjalanan',
    hasil_swab_2055301091='$hasilswab',tanggal_swab='$tanggalswab',
    suhu_2055301091='$suhu'
    WHERE id_2055301091='$id' ");



    header ('location:menucovid.php');
    } else {
    header('location:menucovid.php');
    }
?>