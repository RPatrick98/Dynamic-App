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
	$query = $conn->prepare("SELECT * FROM characters");
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

function getCity($id) {
	$conn = openDatabaseConnection();
	$query = $conn->prepare("SELECT * FROM locations WHERE id = :id");
	$query->bindParam("id", $id);
	$query->execute();
	return $qyery->fetch();
}

function updateCity($data) {
	$conn = openDatabaseConnection();
	$query = $conn->prepare("UPDATE characters SET location = :location WHERE id = :id");
	$query->bindParam(":id", $data["id"]);
	$query->bindParam(":location", $data["location"]);
	$query->execute();
}

function createCity($data2) {
	$conn = openDatabaseConnection();
	$query = $conn->prepare("INSERT INTO locations (name) VALUES (:name)");
	$query->bindParam(":name", $data2["name"]);
	$query->execute();
}

function deleteCity($data3) {
	$conn = openDatabaseConnection();
	$query = $conn->prepare("DELETE FROM locations WHERE id = :id");
	$query->bindParam(":id", $data3["id"]);
	$query->execute();
}

function getCityCount() {
	$conn = openDatabaseConnection();

	$query = $conn->prepare("SELECT count(*) as locationTotal FROM locations");
	$query->execute();
	$result = $query->fetch();
	return $result["locationTotal"];
}

function getNameHigh() {
	$conn = openDatabaseConnection();
	$query = $conn->prepare("SELECT * FROM characters ORDER BY name");
	$query->execute();
	$result = $query->fetchAll();
	return $result;
}

function getNameLow() {
	$conn = openDatabaseConnection();
	$query = $conn->prepare("SELECT * FROM characters ORDER BY name DESC");
	$query->execute();
	$result = $query->fetchAll();
	return $result;
}

function getHealthHigh() {
	$conn = openDatabaseConnection();
	$query = $conn->prepare("SELECT * FROM characters ORDER BY health");
	$query->execute();
	$result = $query->fetchAll();
	return $result;
}

function getHealthLow() {
	$conn = openDatabaseConnection();
	$query = $conn->prepare("SELECT * FROM characters ORDER BY health DESC");
	$query->execute();
	$result = $query->fetchAll();
	return $result;
}

function getAttackHigh() {
	$conn = openDatabaseConnection();
	$query = $conn->prepare("SELECT * FROM characters ORDER BY attack");
	$query->execute();
	$result = $query->fetchAll();
	return $result;
}

function getAttackLow() {
	$conn = openDatabaseConnection();
	$query = $conn->prepare("SELECT * FROM characters ORDER BY attack DESC");
	$query->execute();
	$result = $query->fetchAll();
	return $result;
}

function getDefenseHigh() {
	$conn = openDatabaseConnection();
	$query = $conn->prepare("SELECT * FROM characters ORDER BY defense");
	$query->execute();
	$result = $query->fetchAll();
	return $result;
}

function getDefenseLow() {
	$conn = openDatabaseConnection();
	$query = $conn->prepare("SELECT * FROM characters ORDER BY defense DESC");
	$query->execute();
	$result = $query->fetchAll();
	return $result;
}
















