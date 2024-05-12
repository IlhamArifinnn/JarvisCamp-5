<?php
$products = [
    ["barang" => "Printer", "Harga" => 1200000, "Deskripsi" => "Printer merk HP", "Stok" => 15],
    ["barang" => "Tablet", "Harga" => 2000000, "Deskripsi" => "Tablet merk Samsung", "Stok" => 8],
    ["barang" => "Mouse", "Harga" => 150000, "Deskripsi" => "Mouse merk Logitech", "Stok" => 50],
    ["barang" => "Speaker", "Harga" => 500000, "Deskripsi" => "Speaker merk JBL", "Stok" => 25],
    ["barang" => "Headset", "Harga" => 250000, "Deskripsi" => "Headset merk Sony", "Stok" => 30]
];

$nama_barang = "";
$harga = "";
$deskripsi = "";
$stok = "";

if (isset($_POST['submit'])) {
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];

    // Tambahkan data baru ke dalam array $products
    $new_product = [
        "barang" => $nama_barang,
        "Harga" => $harga,
        "Deskripsi" => $deskripsi,
        "Stok" => $stok
    ];

    array_push($products, $new_product);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas4 - Jarviscamp5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h3 class="my-3">Form Tambah Barang Toko Kami</h3>
        <div class="row">
            <div class="col-8">
                <form method="post" action="">
                    <div class="form-group row mb-3">
                        <label for="nama_barang" class="col-4 col-form-label">Nama barang</label>
                        <div class="col-8">
                            <input id="nama_barang" name="nama_barang" placeholder="Nama Barang" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="harga" class="col-4 col-form-label">Harga</label>
                        <div class="col-8">
                            <input id="harga" name="harga" placeholder="Harga" type="number" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                        <div class="col-8">
                            <textarea id="deskripsi" name="deskripsi" cols="40" rows="3" class="form-control" required="required"></textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="stok" class="col-4 col-form-label">Stok</label>
                        <div class="col-8">
                            <input id="stok" name="stok" placeholder="stok" type="number" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-4">
                <h4 class="text-center">Produk Tersedia</h4>
                <table class="table table-striped ">
                    <tr>
                        <th>No</th>
                        <th>Barang</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Stok</th>
                    </tr>
                    <tr>
                        <?php
                        $no = 1;
                        foreach ($products as $product) {
                            echo "<tr>";
                            echo "<td>" . $no . "</td>";
                            echo "<td>" . $product["barang"] . "</td>";
                            echo "<td>" . $product["Harga"] . "</td>";
                            echo "<td>" . $product["Deskripsi"] . "</td>";
                            echo "<td>" . $product["Stok"] . "</td>";
                            echo "</tr>";
                            $no++;
                        }
                        ?>
                    </tr>

                </table>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>