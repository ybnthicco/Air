<?php require_once "conf.php";
require_once "func.php";
$genre = null;
$actor = null;
$director = null;
$country = null;
$quality = null;
$year = null;
$rating = null;
$q = null;
$rating = null;
$page = null;
$numItems = null;
try {
    $dbh = new PDO(
        "mysql:host=" . $dbhost . ";dbname=" . $dbname . "",
        "$dbuser",
        "$dbpass"
    );
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    require_once "lang.php";
    ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" lang="id-ID" prefix="og: http://ogp.me/ns#"><head profile="http://gmpg.org/xfn/11"><?php
$setmeas = "index";
require_once "meta.php";
require_once "json.php";
?> <?php require_once "js.php"; ?></head><body><?php require_once "misc.php"; ?><div id='shadow'></div><div id="wrap"><?php
require_once "mainmenu.php";
require_once "genrehome.php";
?><div id="content"><div class="stl"><?php echo $language[
    "Random_New_Movie_2017"
]; ?></div><div class="carousel" data-flickity='{ "autoPlay": true,"wrapAround": true }'><?php
$result = $dbh->query(
    "SELECT * FROM `movie` WHERE `releasedate` LIKE '%2017%' ORDER BY rand() LIMIT 10"
);
while ($row = $result->fetch()) {

    $title = html_entity_decode($row["title"]);
    $cover = explode("/", $row["cover"]);
    $permalink = permalink($row["title"]);
    ?><div class="carousel-cell"><a rel="<?php echo $row[
    "id"
]; ?>" href="<?php echo $siteurl; ?>/watch/<?php echo $row[
    "id"
]; ?>/<?php echo $permalink; ?>/" title="<?php echo $title; ?>" target="_blank"><img width="200" height="300" src="<?php echo $covercdn; ?>/<?php echo $cover[2]; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="<?php echo $title; ?>" /><div class="type <?php echo $row[
    "quality"
]; ?>"><?php echo $row["quality"]; ?></div><div class="ep"><?php echo $row[
    "rating"
]; ?></div><div class="ctl"><h2><?php echo $title; ?></h2></div></a></div><?php
}
?></div><div class="postsbody"><?php require_once "topadsbanner.php"; ?><div class="terbaru"><h2><?php echo "" .
    $language["Latest_Movie"] .
    ""; ?></h2><div class="episodes"><?php
$result2 = $dbh->query("SELECT id FROM `movie` ORDER BY `id` DESC");
$numItems = $result2->rowCount();
$numrows = $numItems;
$rowsperpage = $maxmovieperpage;
$totalpages = ceil($numrows / $rowsperpage);
if (isset($_GET["page"]) && is_numeric($_GET["page"])) {
    $currentpage = (int) $_GET["page"];
} else {
    $currentpage = 1;
}
if ($currentpage > $totalpages) {
    $currentpage = $totalpages;
}
if ($currentpage < 1) {
    $currentpage = 1;
}
$offset = ($currentpage - 1) * $rowsperpage;
$result = $dbh->query(
    "SELECT id,title,cover,quality,rating FROM `movie` ORDER BY `movie`.`id` DESC LIMIT $offset, $rowsperpage"
);
while ($row = $result->fetch()) {

    $title = html_entity_decode($row["title"]);
    $cover = explode("/", $row["cover"]);
    $permalink = permalink($row["title"]);
    ?><div class="box"><div class="eps"><a href="<?php echo $siteurl; ?>/watch/<?php echo $row[
    "id"
]; ?>/<?php echo $permalink; ?>/" title="<?php echo $title; ?>" target="_blank"><img width="200" height="300" src="<?php echo $covercdn; ?>/<?php echo $cover[2]; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="<?php echo $title; ?>" /><div class="type <?php echo $row[
    "quality"
]; ?>"><?php echo $row["quality"]; ?></div><div class="ep"><?php echo $row[
    "rating"
]; ?></div><div class="ttl"><span><?php echo $title; ?></span></div><h2><?php echo $title; ?></h2></a></div></div><?php
}
?></div><?php
if ($numrows > 1) {
}
$range = 3;
if ($currentpage > 1) {
    echo "<div class=\"pagination\">";
    echo " <a class='page-numbers' href='$siteurl/page/1/'><div class='pg'><<</div></a> ";
    $prevpage = $currentpage - 1;
    echo " <a class='page-numbers' href='$siteurl/page/$prevpage/'><div class='pg'><</div></a> ";
} else {
    echo "<div class=\"pagination\">";
}
for ($x = $currentpage - $range; $x < $currentpage + $range + 1; $x++) {
    if ($x > 0 && $x <= $totalpages) {
        if ($x == $currentpage) {
            echo "<span class='page-numbers current'>$x</span>";
        } else {
            echo " <a class='page-numbers' href='$siteurl/page/$x/'><div class='pg'>$x</div></a> ";
        }
    }
}
if ($currentpage != $totalpages) {
    $nextpage = $currentpage + 1;
    echo " <a class='page-numbers' href='$siteurl/page/$nextpage/'><div class='pg'>></div></a> ";
    echo " <a class='page-numbers' href='$siteurl/page/$totalpages/'><div class='pg'>>></div></a> ";
    echo "</div>";
} else {
    echo "</div>";
}
?></div></div><?php require_once "side.php"; ?></div><?php
require_once "foot.php";
$dbh = null;
} catch (PDOException $e) {
    print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
    die();
} ?>
