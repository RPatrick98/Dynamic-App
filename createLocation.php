<?php
include("resources/functions.php");



if($_SERVER["REQUEST_METHOD"] == "POST") {
        $data2 = array(
            "name" => $_POST["name"]
        );
        createCity($data2);
        header("location: locations.php");
    }


include("resources/header.php");
?>

	<div id="container">
		<a class="backbutton" href="locations.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
		<h1>Locatie toevoegen</h1>
		<form method="POST">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
			<input type="submit" name="submit" value="submit">
		</form>
	</div>

	

<?php
	include("resources/footer.php");
?>