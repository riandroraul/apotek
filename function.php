<?php

//membuat koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "apotek");


function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function addNewData($data)
{
	global $conn;
	// ambil data dari tiap elemen di dalam form
	$namaobat = htmlspecialchars($data['namaobat']);
	$desc = htmlspecialchars($data['deskripsi']);
	$stock = htmlspecialchars($data['stock']);

	$query = "INSERT INTO stock VALUES 
	('', '$namaobat', '$desc', '$stock')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
