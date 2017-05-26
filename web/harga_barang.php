<html>
    <head>
        <title>Nama Barang</title>
    </head>
    <body>
        <h2>List Barang</h2>
        <table border="1">
            <tr><th>NO</th><th>Nama Barang</th><th>Harga Lama</th><th>Harga Baru/th><th>ACTION</th></tr>
            <?php
            include 'koneksi.php';
            $product = mysqli_query($koneksi, "SELECT * from product");
            $no = 1;
            foreach ($product as $row) {
                echo "<tr>
            <td>$no</td>
            <td>" . $row['nama_barang'] . "</td>
            <td>" . $row['harga_sebelumnya'] . "</td>
            <td>" . $row['harga_sekarang'] . "</td>
            <td><a href='update.php?nama_barang=$row[nama_barang]'>Edit</a>
                <a href='delete.php?nama_barang=$row[nama_barang]'>Delete</a>
            </td>
              </tr>";
                $no++;
            }
            ?>
        </table>
 
    </body>
</html>