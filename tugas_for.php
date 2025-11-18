<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas Perulangan For</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { border-collapse: collapse; width: 50%; margin: 20px auto; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h1>Implementasi Perulangan FOR (1 sampai 15)</h1>
    
    <table>
        <thead>
            <tr>
                <th>Nomor Urut</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Perulangan for: Inisialisasi $i = 1; Kondisi $i <= 15; Increment $i++
            for ($i = 1; $i <= 15; $i++) {
                // Mencetak baris tabel (<tr>) untuk setiap iterasi
                echo "<tr>";
                // Kolom pertama: Nomor urut
                echo "<td>" . $i . "</td>";
                // Kolom kedua: Keterangan
                echo "<td>Ini adalah baris ke-" . $i . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>