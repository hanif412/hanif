<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pasien</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

    <form method="POST" action="insertdb.php" enctype="multipart/form-data">
<?php
    include "koneksibaru.php";
    ?>

    <div class="container">
<div class="jumbotron">

<div class="card">
  <div class="card-header">
    <h5 class="text-center"> PASIEN </h5>
    
  </div>

  <div class="card-body">
    <h5 class="text-center" class="card-title">Tambah Data Pasien</h5>
    <table class="table table-link table-hover table-bordered">


    <table class="table table-link table-hover table-bordered">
    <a href="menucovid.php" class="btn btn-primary" class="nav-light" syle="width:80px;">Data Pasien</a>
    <tr>
        <th class="text-center" >Nama</th>
        <td><input type="text" name="nama"></td>
        </tr>

        <tr>
        <th class="text-center">Alamat</th>
        <td><input type="text"  name="alamat"></td>
        </tr>

        <tr>    
        <th class="text-center">Riwayat Perjalanan</th>
        <td><input type="text"  name="riwayat"></td>
        </tr>

        <tr>
        <th class="text-center">Hasil Swab</th>
        <td><input type="text"  name="hasil"></td>
        </tr>

        <tr>
        <th class="text-center">Tanggal Swab</th>
        <td><input type="date" name="tanggal"></td>
        </tr>
        <tr>
        <th class="text-center">Suhu</th>
        <td><input type="number"  name="suhu"></td>
        </tr>

        <td></td>
        <td><input type="submit" class="btn btn-primary" class="nav-light"   value="Save"></tr></td>
    </table>
    </form>
</body>
</html>