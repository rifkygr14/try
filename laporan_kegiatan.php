<?php
  include "config.php";
  $query="SELECT * FROM tb_kegiatan";
  $hasil=$koneksi->query($query);
?>
<html>
    <style>
        body {
            font-family: Arial;
        }
        #hr{
            border:1px solid #000; margin-bottom: 10px;
        }
        table{
            border: 1px solid #ccc;
            border-collapse: collapse;
            width: 100%;
            font-size: 90%;
        }
        table tr{
            border: 1px solid #ccc;
        }
        table td{
            border: 1px solid #ccc; padding: 40px;
        }
        table th{
            border: 1px solid #ccc;
            padding: 8px 4px;
            background-color: #eee;
            font-weight: bold;
            text-align: center;
        }
    </style>
    <body onload="window.print()">
        <section style="text-align:center;">
            <h3 style="margin-top:-1%;">LAPORAN KEGIATAN KAMPUS></h3>
            <h3 style="margin-top:-1%;">SEMESTER GENAP TA. 2024/2025</h3>
        </section>
        <div id="hr"></div>
        <table>
            <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Kegiatan</th>
                  <th>Deskripsi</th>
                  <th>Foto Kegiatan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no=1;
                    while ($row = mysqli_fetch_array($hasil))
                    {
                        echo "<tr>";
                        echo "<td style='text-align:center;'>$no.</td>";
                        echo "<td>$row[nama_kegiatan]</td>";
                        echo "<td>$row[deskripsi]</td>";
                        echo "<td style='text-align:center;'><img src='../foto_kegiatan/$row[foto]' width='70'></td>";
                        echo "</tr>";
                        $no++;
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>