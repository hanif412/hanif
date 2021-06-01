<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Covid</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<div class="jumbotron">

<div class="card">
  <div class="card-header">
  
    <h5 class="text-center"> COVID 19</h5>
    
  </div>

  <div class="card-body">

    <h5 class="text-center" class="card-title">PASIEN SEMBUH COVID 19</h5>

    <table class="table table-link table-hover table-bordered">
    <?php include "koneksibaru.php"; ?>
    
    <div class="row">
    <div class="col-md-12">
    
    </div>
    </div>
    <a href="tambahdata.php" class="btn btn-primary" class="nav-light" syle="width:80px;">Tambah Pasien</a>
    <tr>
    
        <th class="text-center">No</th>
        <th class="text-center">Nama Pasien</th>
        <th class="text-center">Alamat Pasien</th>
        <th class="text-center">Riwayat Perjalanan</th>
        <th class="text-center">Hasil Swab</th>
        <th class="text-center">Tanggal Swab</th>
        <th class="text-center">Suhu</th>
        <th class="text-center">Aksi</th>
    </tr>
    <?php
    $i=0;
    $query=mysqli_query($con, "SELECT * FROM 19_1tic_covid");
    while($m=mysqli_fetch_array($query))
    {$i++;
    ?>
    <tr>
        <td align="center"><?php print $i; ?></td>
        <td align="center"><?php print $m['nama_pasien_2055301091']; ?></td>
        <td align="center"><?php print $m['alamat_pasien_2055301091']; ?></td>
        <td align="center"><?php print $m['riwayat_perjalanan_2055301091']; ?></td>
        <td align="center"><?php print $m['hasil_swab_2055301091']; ?></td>
        <td align="center"><?php print $m['tanggal_swab']; ?></td>
        <td align="center"><?php print $m['suhu_2055301091']; ?></td>
        <td align="center"><a href="update.php?id_2055301091=
        <?php print $m['id_2055301091']?>" class="btn btn-primary" class="nav-light">Edit</a> 
        <a href="hapus.php?id_2055301091=
        <?php print $m['id_2055301091']?>" class="btn btn-danger" class="nav-light">Hapus</a></td>
        </tr>
        <?php
        }
        ?>
 
        </table>
    </body>
    </html>
