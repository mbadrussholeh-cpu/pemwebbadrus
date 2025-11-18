<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas Perulangan While</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { border-collapse: collapse; width: 40%; margin: 20px auto; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #e6f7ff; }
        td:nth-child(2) { text-align: center; font-weight: bold; }
    </style>
</head>
<body>

    <h1>Implementasi Perulangan WHILE (Perkalian 3)</h1>
    
    <table>
        <thead>
            <tr>
                <th>Operasi</th>
                <th>Hasil</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Inisialisasi variabel counter
            $angka = 1;

            // Perulangan while: Berjalan selama $angka <= 10
            while ($angka <= 10) {
                // Hitung hasil perkalian
                $hasil = 3 * $angka;
                
                // Mencetak baris tabel (<tr>)
                echo "<tr>";
                // Kolom pertama: Operasi perkalian
                echo "<td>3 x " . $angka . "</td>";
                // Kolom kedua: Hasil perkalian
                echo "<td>" . $hasil . "</td>";
                echo "</tr>";

                // Increment counter agar perulangan berhenti (TIDAK INFINITE LOOP)
                $angka++;
            }
            ?>
        </tbody>
    </table>

</body>
</html>