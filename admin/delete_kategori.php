<?php
#File       : delete_kategori.php
#Deskripsi  : menghapus kategori berdasarkan id
session_start();
require_once '../functions/db_login.php';

// Kalo belum login tendang
if (!isset($_SESSION['admin'])){
    header('Location: ../index.php');
    exit;
}

$id = $_GET['id'];
#assign query
$query = " DELETE FROM kategori WHERE idkategori=".$id." ";
#execute query
$result = $conn->query($query);
if (!$result) {
    die ("Could not query the database: <br>".$conn->error);
}else {
    $conn->close();
    header('Location: view_kategori.php');
}
#close db connection
$conn->close();

include_once '../template/header.html';
include_once '../template/meta.html';


?>