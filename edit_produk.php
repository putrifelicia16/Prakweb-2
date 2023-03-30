<?php
require_once 'dbkoneksi.php';
?>
<?php
// membuat koneksi database
$server   = "localhost";
$username = "root";
$password = "";
$database = "dbpenjualan";

$koneksi = mysqli_connect($server, $username, $password, $database);

// cek koneksi
if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>

