<?php
include "../header.php";

if(isset($_GET["id"])){
	$kategoriId = $_GET["id"];
	mysqli_query($baglanti,"DELETE FROM kategoriler WHERE Id = $kategoriId");
}

header("Location: ./");
?>