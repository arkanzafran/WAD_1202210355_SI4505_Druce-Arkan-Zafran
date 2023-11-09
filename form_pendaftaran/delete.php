<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `form_pendaftaran` WHERE id = $id";
$result = mysqli_query($koneksi, $sql);

if ($result) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($koneksi);
}
