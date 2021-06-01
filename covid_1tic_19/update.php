<html>
<head>
<meta http-equiv="Content-Type"
content="text/html; charset=utf-8" />
<title>Update Data Produk</title>
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
    <h5 class="text-center"> PASIEN </h5>
    
  </div>

  <div class="card-body">
    <h5 class="text-center" class="card-title">Edit Data Pasien</h5>

    <?php include "koneksibaru.php";
    $id = $_GET['id_2055301091'];
    $query = mysqli_query($con,"SELECT * FROM
    19_1tic_covid WHERE id_2055301091 = '$id'");
    $m = mysqli_fetch_object($query);
    ?>
        <form method="POST" action="updatedb.php">
        <input type="hidden" value="<?php print $m->id_2055301091; ?>" name="id_2055301091" />

    <table class="table table-link table-hover table-bordered">
    <input type="hidden" name="id_2055301091" value="<?php print $id; ?>">

    <a href="menucovid.php" class="btn btn-primary" class="nav-light" syle="width:80px;">Data Pasien</a>


        <tr>
        <th class="text-center" >Nama Pasien </th>
        <td><input type="text" name="nama"
            value="<?php print $m->nama_pasien_2055301091; ?>" width="lOO%"
            required/></td>

        </tr>

        <tr>
        <th class="text-center">Alamat Pasien</th>
        <td><input type="text" name="alamat"
            value="<?php print $m->alamat_pasien_2055301091; ?>" width="lOO%"
            required/></td>
        </tr>

        <tr>    
        <th class="text-center">Riwayat Perjalanan</th>
        <td><input type="text" name="riwayat"
            value="<?php print $m->riwayat_perjalanan_2055301091; ?>"
            width="lOO%" required/></td>
        </tr>

        <tr>
        <th class="text-center">Hasil Swab</th>
        <td><input type="text" name="hasil"
            value="<?php print $m->hasil_swab_2055301091; ?>"
            width=" 100%" required/></td>
        </tr>

        <tr>
        <th class="text-center">Tanggal Swab</th>
        <td><input type="date" name="tanggal"
            value="<?php print $m->tanggal_swab; ?>"
            width="100%" required/></td>
        </tr>

        <th class="text-center">Suhu</th>
        <td><input type="number" name="suhu"
            value="<?php print $m->suhu_2055301091; ?>"
            width=" 100%" required/></td>
        </tr>
        
        <td></td>
        <td><input type="submit"  class="btn btn-primary" class="nav-light" value="Save" /></td>
        </form>
    </table>
</body>


</html>