<?php
    $mahasiswa =[
    ["1","NUR HAKIM","20223078","HUKUM","2021","hakim99@gmail.com"], 
    ["2","PRASETYO S","20223079","HUKUM","2021","saputra78@gmail.com"], 
    ["3","BRAMESTYA ABDI","20223080","HUKUM","2021","bram@gmail.com"], 
    ["4","NUR SYIHAB","20223081","HUKUM","2021","aans1947@gmail.com"], 
    ["5","BUDIMAN","20223082","HUKUM","2021","goreng70@gmail.com"], 
    ["6","FIKRI ROSYADI","20223084","HUKUM","2021","fikry20@gmail.com"], 
    ["7","MUHAMMAD RISKI","20223084","HUKUM","2021","GENDENG07@gmail.com"], 
    ["8","AULIA PRAMESTI","20223084","HUKUM","2021","wakstook@gmail.com"], 
    ["9","NIFA UMAMI","20223086","HUKUM","2021","nifa@gmail.com"], 
    ["10","RENDI ARIVIANTO","20223087","HUKUM","2021","rendy01@gmail.com"], 
    ["11","THORIQUL ALIM","20223088","HUKUM","2021","alim@gmail.com"]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2 style="text-align: center;">Nama Mahasiswa Fakultas HUKUM Universitas Indonesia</h2>

    <table border="1px solid" cellspacing="3px" cellpadding="3px" align="center">
        <tr>
            <th>No. </th>
            <th>NAMA</th>
            <th>NIM</th>
            <th>JURUSAN</th>
            <th>TAHUN</th>
            <th>EMAIL</th>
        </tr>

        <?php foreach ($mahasiswa as $mhs): ?>

            <tr>
                <td style="text-align: center;"><?php echo $mhs[0]; ?></td>
                <td><?php echo $mhs[1]; ?></td>
                <td><?php echo $mhs[2]; ?></td>
                <td style="text-align: center;"><?php echo $mhs[3]; ?></td>
                <td style="text-align: center;"><?php echo $mhs[4]; ?></td>
                <td style="text-align: center;"><?php echo $mhs[5]; ?></td>
            </tr>

        <?php endforeach; ?>
    </table>

</body>
</html>