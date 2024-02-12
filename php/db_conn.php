<?php

$sname= "localhost";
$unmae= "jossystem";
$password = "jakubjeborec";

$db_name = "jossystem";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Nezdarene prihlaseni.";
}