<?php
// panggil koneksi
include "koneksibaru.php";
$id = $_GET['id_2055301091'];

if (!empty($id)){
mysqli_query($con,"DELETE FROM 19_1tic_covid WHERE id_2055301091=$id");
header ('location:menucovid.php');
} else {
header ('location:menucovid.php');
}
?>