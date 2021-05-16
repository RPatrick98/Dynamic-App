<?php 
include("db.php");

function getCharacterCount() {
	$conn = openDatabaseConnection();

	$query = $conn->prepare("SELECT count(*) as characterTotal FROM characters");
	$query->execute();
	$result = $query->fetch();
	return $result["characterTotal"];
}

function getAllCharacters() {
	$conn = openDatabaseConnection();
	$query = $conn->prepare("SELECT * FROM characters ORDER BY name");
	$query->execute();
	$result = $query->fetchAll();
	return $result;
}

function getCharacter($id) {
	$conn = openDatabaseConnection();

	$query = $conn->prepare("SELECT * FROM characters WHERE id = :id");
	$query->bindParam("id", $id);
	$query->execute();
	$result = $query->fetch();
	return $result;
}

function getAllCity() {
	$conn = openDatabaseConnection();
	$query = $conn->prepare("SELECT * FROM locations ORDER BY name");
	$query->execute();
	$result = $query->fetchAll();
	return $result;
}