
<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>hasil absensi</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <header>
        <h3 class="delapan1">REKAP ABSENSI</h3>
    </header>

    
<table>
<thead class="delapan2" >
    <tr>
        <th>no</th>
        <th>nama</th>
        <th>id pegawai</th>
        <th>bidang</th>
        <th>tanggal</th>
        <th>asen datang </th>
        <th>absen pulang</th>
    </tr>
</thead>
<tbody>
        <?php
        $sql = "SELECT * FROM absensi";
        $query = mysqli_query($db, $sql);
        $no = 1;

        while($absen = mysqli_fetch_array($query))
        {
            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$absen['nama']."</td>";
            echo "<td>".$absen['nip']."</td>";
            echo "<td>".$absen['bidang']."</td>";
            echo "<td>".$absen['hari']."</td>";
            echo "<td>".$absen['jam_datang']."</td>";
            echo "<td>".$absen['jam_pulang']."</td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </tbody>
    </table>
    </tbody>
    </html>

   