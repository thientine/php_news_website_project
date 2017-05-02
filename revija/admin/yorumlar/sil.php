<?php
include "../header.php";

if(isset($_GET["id"])){
	$yorumId = $_GET["id"];
	mysqli_query($baglanti,"DELETE FROM yorumlar WHERE Id = $yorumId");
}

header("Location: ./");
?>