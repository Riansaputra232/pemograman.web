<?php
echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nama Produk</th>";
echo "<th>Stok</th>";
echo "<th>Harga</th>";
echo "<th>Jumlah</th>";
echo "</tr>";

$data = array(
    array(1, "pepsodent", 20, 10.000),
    array(2, "sunlight", 15, 11.000),
    array(3, "baygon", 10, 16.000),
    array(4, "dove", 18, 22.000),
    array(5, "rinso", 15, 20.000),
    array(6, "downy", 20, 11.000),
    array(7, "le mineral", 25, 5.000),
);

$totalJumlah = 0; // Variabel untuk menyimpan total jumlah produk

foreach($data as $row) {
    echo "<tr>";
    $jumlah = $row[2] * $row[3]; // Hitung jumlah produk
    $totalJumlah += $jumlah; // Tambahkan jumlah produk ke total
    $row[] = $jumlah; // Tambahkan jumlah produk ke array produk
    foreach($row as $column) {
        echo "<td>$column</td>";
    }
    echo "</tr>";
}

echo "</table>";

echo "Total Jumlah: " . $totalJumlah; // Tampilkan total jumlah produk

$diskon = 0; // Variabel untuk menyimpan jumlah diskon

// Cek total pembelian untuk menentukan diskon
if ($totalJumlah >= 200000) {
    $diskon = 0.2; // Diskon 20%
} elseif ($totalJumlah >= 150000) {
    $diskon = 0.1; // Diskon 10%
}

if ($diskon > 0) {
    $totalDiskon = $totalJumlah * $diskon; // Hitung jumlah diskon
    $totalBayar = $totalJumlah - $totalDiskon; // Hitung total yang harus dibayar setelah diskon
    echo "<br>Discount: " . ($diskon * 100) . "%"; // Tampilkan persentase diskon
    echo "<br>Total yang harus dibayar setelah diskon: " . $totalBayar; // Tampilkan total yang harus dibayar setelah diskon
}
?>