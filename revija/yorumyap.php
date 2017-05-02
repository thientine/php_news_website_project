<?php

if(!isset($_GET["yorumAd"]) || !isset($_GET["yorumIcerik"]) || !isset($_GET["haberId"])) header("Location:index.php");

$haberId = $_GET["haberId"];
$yorumAd = $_GET["yorumAd"];
$yorumIcerik = $_GET["yorumIcerik"];

$baglanti = mysqli_connect("localhost", "root", "", "webtek");
	
mysqli_query($baglanti,"SET NAMES 'utf8'");
mysqli_query($baglanti,"SET CHARACTER SET utf8_general_ci");

mysqli_query($baglanti, "INSERT INTO `yorumlar` (`Id`, `Ad`, `Icerik`, `HaberId`, `Onay`) VALUES (NULL, '$yorumAd', '$yorumIcerik', '$haberId', b'0')");

header("Location:post.php?haberId=" . $haberId);

?>