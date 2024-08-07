<?php
include "koneksi_db.php";
$id = $_GET["id"];
$sql = "DELETE FROM `wisata_hafidh` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: blog.php?msg=Data berhasil di hapus");
} else {
  echo "Failed: " . mysqli_error($conn);
}