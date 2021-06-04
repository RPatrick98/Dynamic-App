

<?php
include("resources/functions.php");

$cityCount = getCityCount();
$locations = getAllCity();


    if(isset($_GET["id"])) {
        $data3 = array(
        	"id" => $_GET["id"]
        );
        deleteCity($data3);
        header("location: locations.php");
    }


include("resources/header.php");
?>


<header>
	<h1>Alle <?=$cityCount?> locations uit de database</h1>
	<a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
	<div id="container">
		<?php
			foreach ($locations as $location) {
		?>
		<p><a href="?id=<?=$location["id"]?>" onclick="javascript: return confirm('Weet je het zeker?');"><i class="fas fa-trash-alt"></i></a><?=$location["name"]?></p>
		<?php
		}
		?>

		<a class="plusbutton" href="createLocation.php"><i class="fas fa-plus"></i>Locatie toevoegen</a>
	</div>
</header>

<?php
    include("resources/footer.php");
?>