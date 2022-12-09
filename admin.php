<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Selamat Datang Di Halaman Admin</title>
</head>
<body>
    
<div class="empat">
        
            <?php echo "<h1>terimakasih silahkan isi absensi , " . $_SESSION['username'] ."". "</h1>"; ?>
    <a href="logout.php" > <button  class="lima" >kembali</button> </a> <br>

</div>
<header>
        <h3 class="delapan">ABSENSI PEGAWAI</h3>
    </header>

    <form action="proses.php" method="POST">

        <fieldset>
            <table class="latar">

        <tr>
            <td>
            <label for="nama" class="absen2">NAMA : </label>
            <input type="text" name="nama"  class="absen21"/>
            </td>
        </tr>
        <tr>
            <td>
            <label for="nip" class="absen3">ID PEGAWAI : </label>
            <input type="text" name="nip"  class="absen31"/>
            </td>
        </tr> 
        <tr>
            <td>
            <label for="bidang" class="absen4">BIDANG: </label>
            <select name="bidang" class="absen41">
                <option >Programer</option>
                <option >Keuangan</option>
                <option >Marketing</option>
                <option >Kebersihan</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>
             <label for="hari" class="absen1">TANGGAL: </label>
             <input type="date" name="date"  class="absen11"/><br>
            </td>
        </tr>
        <tr>
            <td>
            <label  for="jam_datang" class="absen5"> JAM DATANG  :  </label>
            <input type="time" name="time1" class="absen51"><br>
            </td>
        </tr>
        <tr>
             <td>
            <label for="jam_pulang"  class="absen6">JAM PULANG :   </label>
            <input type="time" name="time2" class="absen61"><br>
            </td>
        </tr>
        <tr>
             <td>
            <button class="absen71" type="submit" value="submit" name="submit" >SUBMIT</button>
            </td>
        </tr>

            </table>
        </fieldset>
    </form>
</header>
</div>
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "absensi berhasil!";
            } else {
                echo "absensi gagal!";
            }
        ?>
    </p>
<?php endif; ?>
</body>
</html>
