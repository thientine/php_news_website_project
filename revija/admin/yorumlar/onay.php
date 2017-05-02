<?php
include "../header.php";

if(isset($_GET["id"])){
	$yorumId = $_GET["id"];
	mysqli_query($baglanti,"UPDATE yorumlar SET Onay=1 WHERE Id = $yorumId");
}

header("Location: ./");
?>