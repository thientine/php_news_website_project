<?php
include "../header.php";

if(isset($_GET["id"])){
	$haberId = $_GET["id"];
	mysqli_query($baglanti,"DELETE FROM haberler WHERE Id = $haberId");
}

header("Location: ./");
?>