<?php 
    include("resources/functions.php");

    $character_id = 0;
    if(isset($_GET["id"])) {
        $character_id = $_GET["id"];
    }

    $character = getCharacter($character_id);

    if(!$character) {
        header('location: index.php');
    }

    $locations = getAllCity();

    include("resources/header.php");

?>

<header><h1><?=$character["name"]?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" alt="<?=$character["color"]?>" src="resources/images/<?=$character["avatar"]?>">
            <div class="stats" style="background-color: <?=$character["color"]?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?=$character["health"]?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?=$character["attack"]?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?=$character["defense"]?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: <?=$character["weapon"]?></li>
                    <li><b>Armor</b>: <?=$character["armor"]?></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
                <?=nl2br($character["bio"])?>
            </p>
            <form>
              <label><b>Huidige Locatie:</b></label>
              <select>
                <?php 
                    foreach ($locations as $location ) {
                ?>
                <option value="<?=$location["name"]?>"><?=$location["name"]?></option>
                <?php 
                }
                ?>
              </select>
              <input type="submit" value="update">
            </form>
        </div>
        <div style="clear: both"></div>

    </div>
</div>

<?php
    include("resources/footer.php");
?>