<?php 
    include("resources/functions.php");
    $characterTotal = getCharacterCount();
    $characters = getAllCharacters();

    $nameHigh = getNameHigh();
    $nameLow = getNameLow();

    $healthHigh = getHealthHigh();
    $healthLow = getHealthLow();

    $attackHigh = getAttackHigh();
    $attackLow = getAttackLow();

    $defenseHigh = getDefenseHigh();
    $defenseLow = getDefenseLow();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST['stuff'] === 'name' && $_POST['check'] === 'high') {
                $characters = getNameHigh();
            }
            elseif ($_POST['stuff'] === 'name' && $_POST['check'] === 'low') {
                $characters = getNameLow();
            }
            elseif ($_POST['stuff'] === 'health' && $_POST['check'] === 'high') {
                $characters = getHealthHigh();
            }
            elseif ($_POST['stuff'] === 'health' && $_POST['check'] === 'low') {
                $characters = getHealthLow();
            }
            elseif ($_POST['stuff'] === 'attack' && $_POST['check'] === 'high') {
                $characters = getAttackHigh();
            }
            elseif ($_POST['stuff'] === 'attack' && $_POST['check'] === 'low') {
                $characters = getAttackLow();
            }
            elseif ($_POST['stuff'] === 'defense' && $_POST['check'] === 'high') {
                $characters = getDefenseHigh();
            }
            elseif ($_POST['stuff'] === 'defense' && $_POST['check'] === 'low') {
                $characters = getDefenseLow();
            }
        }
?>

<?php 
    include ("resources/header.php")
?>
<header><h1>Alle <?=$characterTotal?> characters uit de database</h1>
    <div class="locations">
        <a href="locations.php">bekijk locations</a>
    </div>
    
    <div class="select">
        <form method="POST">
        <select name="stuff">
            <option value="name">naam</option>
            <option value="health">levenskracht</option>
            <option value="attack">aanvalskracht</option>
            <option value="defense">verdediging</option>
        </select>
        <select name="check">
            <option value="high">van laag naar hoog</option>
            <option value="low">van hoog naar laag</option>
        </select>
        <input type="submit" name="submit" value="Go!">

    </form>
    </div>
    

</header>
<div id="container">

    <?php 

        foreach ($characters as $character) { 
    ?>
    <a class="item" href="character.php?id=<?=$character["id"]?>">
        <div class="left">
            <img class="avatar" alt="<?=$character["name"]?>" src="resources/images/<?=$character["avatar"]?>">
        </div>
        <div class="right">
            <h2><?=$character["name"]?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?=$character["health"]?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?=$character["attack"]?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?=$character["defense"]?></li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
    <?php
    }
    ?>


</div>
    <?php 

        include("resources/footer.php");
    ?>
