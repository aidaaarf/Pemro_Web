<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tugas Aida</title>
        <link rel="stylesheet" type="text/css" href="styleTugas.css"/>
        <script src="jquery-3.7.1.js"></script>
        <script>
            $(document).ready(function(){
                $("#flip").click(function(){
                    $("table, .average").slideToggle("fast");
                });
            });
        </script>
    </head>
    <body>
        <h2>Data Siswa</h2> 
        <div id="flip" style="cursor:pointer;">Click to show database</div>
    
        <table style="display:none;"> 
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
            <?php
            $mhs = array(
                    array("Andi", 15, "10A", "Malang"),
                    array("Siti", 16, "10B", "Batu"),
                    array("Budi", 15, "10A", "Dinoyo" ),
                    array("Iron Man", 25, "15A", "Dinoyo")
                    );

                 $totalUmur = 0;
                 $jumlahSiswa = count($mhs); 

                    foreach ($mhs as $data) {
                        echo "<tr>";
                        echo "<td>" . $data[0] . "</td>";
                        echo "<td>" . $data[1] . "</td>";
                        echo "<td>" . $data[2] . "</td>";
                        echo "<td>" . $data[3] . "</td>";
                        echo "</tr>";
                        $totalUmur += $data[1];
                    }
                    $rataRataUmur = $totalUmur / $jumlahSiswa;
        ?>
        </table>
        <div class="average" style="display:none;">
            <?php
            echo "Rata-rata umur siswa: " . number_format($rataRataUmur, 2) . " tahun";
            ?>
        </div>
    </body>
</html>
