<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        table {
            width: 80%;
            margin: 1rem auto; 
            border-collapse: collapse; 
            border: 2px solid cyan; 
            opacity: 0;
            animation: slideLeft 1s ease forwards;
            animation-delay: 0.7s;
        }
        .sub-title {
            opacity: 0;
            animation: slideRight 1s ease forwards;
            animation-delay: 1s;
        }
        th, td {
            border: 1px solid cyan;
            padding: 1rem;
            text-align: left; 
        }
        th {
            background-color: #081b29;
            color: white;
        }
    </style>
</head>
<body>
    <br><br><br>
    <h1 class="sub-title">Data<span> Tersimpan</span></h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Tanggal Lahir</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Alamat Asal</th>
                <th>Alamat Sekarang</th>
                <th>Hobi</th>
                <th>Nomor</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Buka file data.txt
            $file = fopen("data.txt", "r");

            // Periksa apakah file berhasil dibuka
            if ($file) {
                // Baca file baris per baris
                while (($line = fgets($file)) !== false) {
                    // Pisahkan baris menjadi array berdasarkan tab
                    $fields = explode("\t", trim($line));
                    
                    // Tampilkan setiap baris data dalam tabel
                    echo "<tr>";
                    foreach ($fields as $field) {
                        echo "<td>" . htmlspecialchars($field) . "</td>";
                    }
                    echo "</tr>";
                }

                // Tutup file setelah selesai membaca
                fclose($file);
            } else {
                // Jika file tidak bisa dibuka
                echo "<tr><td colspan='10'>Tidak ada data tersedia.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
