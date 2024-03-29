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
$country = isset($_GET["country"]) ? trim($_GET["country"]) : "";
$country = cleartitle($country);
$page = isset($_GET["page"]) ? trim($_GET["page"]) : "1";
try {
    $dbh = new PDO(
        "mysql:host=" . $dbhost . ";dbname=" . $dbname . "",
        "$dbuser",
        "$dbpass"
    );
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $result2 = $dbh->query(
        "SELECT id FROM `movie` WHERE `country` LIKE '%$country%' ORDER BY `id` DESC"
    );
    $numItems = $result2->rowCount();
    require_once "lang.php";
    ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" lang="id-ID" prefix="og: http://ogp.me/ns#"><head profile="http://gmpg.org/xfn/11"><?php
$setmeas = "country";
require_once "meta.php";
require_once "json.php";
?> <?php require_once "js.php"; ?></head><body><?php require_once "misc.php"; ?><div id='shadow'></div><div id="wrap"><?php
require_once "mainmenu.php";
require_once "genrehome.php";
?> <?php require_once "recomended.php"; ?><div id="content"><div class="postsbody"><?php
require_once "topadsbanner.php";
if (
    $country == "all country"
) { ?><div class="ctn"><h1 class="ttl">All Country</h1><div class="pst"><p><ul class='nth'><b><li>1. <a href="<?php echo $siteurl; ?>/country/usa/" title="View all in Usa"><?php echo $language[
    "Usa"
]; ?></a> (1023)</li><li>2. <a href="<?php echo $siteurl; ?>/country/uk/" title="View all in Uk"><?php echo $language[
    "Uk"
]; ?></a> (207)</li><li>3. <a href="<?php echo $siteurl; ?>/country/japan/" title="View all in Japan"><?php echo $language[
    "Japan"
]; ?></a> (186)</li><li>4. <a href="<?php echo $siteurl; ?>/country/china/" title="View all in China"><?php echo $language[
    "China"
]; ?></a> (163)</li><li>5. <a href="<?php echo $siteurl; ?>/country/india/" title="View all in India"><?php echo $language[
    "India"
]; ?></a> (148)</li><li>6. <a href="<?php echo $siteurl; ?>/country/canada/" title="View all in Canada"><?php echo $language[
    "Canada"
]; ?></a> (112)</li><li>7. <a href="<?php echo $siteurl; ?>/country/france/" title="View all in France"><?php echo $language[
    "France"
]; ?></a> (101)</li><li>8. <a href="<?php echo $siteurl; ?>/country/south-korea/" title="View all in South Korea"><?php echo $language[
    "South_Korea"
]; ?></a> (100)</li><li>9. <a href="<?php echo $siteurl; ?>/country/hong-kong/" title="View all in Hong Kong"><?php echo $language[
    "Hong_Kong"
]; ?></a> (67)</li><li>10. <a href="<?php echo $siteurl; ?>/country/germany/" title="View all in Germany"><?php echo $language[
    "Germany"
]; ?></a> (45)</li><li>11. <a href="<?php echo $siteurl; ?>/country/spain/" title="View all in Spain"><?php echo $language[
    "Spain"
]; ?></a> (37)</li><li>12. <a href="<?php echo $siteurl; ?>/country/australia/" title="View all in Australia"><?php echo $language[
    "Australia"
]; ?></a> (35)</li><li>13. <a href="<?php echo $siteurl; ?>/country/belgium/" title="View all in Belgium"><?php echo $language[
    "Belgium"
]; ?></a> (27)</li><li>14. <a href="<?php echo $siteurl; ?>/country/thailand/" title="View all in Thailand"><?php echo $language[
    "Thailand"
]; ?></a> (27)</li><li>15. <a href="<?php echo $siteurl; ?>/country/malaysia/" title="View all in Malaysia"><?php echo $language[
    "Malaysia"
]; ?></a> (21)</li><li>16. <a href="<?php echo $siteurl; ?>/country/ireland/" title="View all in Ireland"><?php echo $language[
    "Ireland"
]; ?></a> (17)</li><li>17. <a href="<?php echo $siteurl; ?>/country/denmark/" title="View all in Denmark"><?php echo $language[
    "Denmark"
]; ?></a> (16)</li><li>18. <a href="<?php echo $siteurl; ?>/country/netherlands/" title="View all in Netherlands"><?php echo $language[
    "Netherlands"
]; ?></a> (16)</li><li>19. <a href="<?php echo $siteurl; ?>/country/italy/" title="View all in Italy"><?php echo $language[
    "Italy"
]; ?></a> (14)</li><li>20. <a href="<?php echo $siteurl; ?>/country/norway/" title="View all in Norway"><?php echo $language[
    "Norway"
]; ?></a> (12)</li><li>21. <a href="<?php echo $siteurl; ?>/country/taiwan/" title="View all in Taiwan"><?php echo $language[
    "Taiwan"
]; ?></a> (12)</li><li>22. <a href="<?php echo $siteurl; ?>/country/russia/" title="View all in Russia"><?php echo $language[
    "Russia"
]; ?></a> (11)</li><li>23. <a href="<?php echo $siteurl; ?>/country/korea/" title="View all in Korea"><?php echo $language[
    "Korea"
]; ?></a> (11)</li><li>24. <a href="<?php echo $siteurl; ?>/country/new-zealand/" title="View all in New Zealand"><?php echo $language[
    "New_Zealand"
]; ?></a> (11)</li><li>25. <a href="<?php echo $siteurl; ?>/country/mexico/" title="View all in Mexico"><?php echo $language[
    "Mexico"
]; ?></a> (10)</li><li>26. <a href="<?php echo $siteurl; ?>/country/finland/" title="View all in Finland"><?php echo $language[
    "Finland"
]; ?></a> (9)</li><li>27. <a href="<?php echo $siteurl; ?>/country/sweden/" title="View all in Sweden"><?php echo $language[
    "Sweden"
]; ?></a> (8)</li><li>28. <a href="<?php echo $siteurl; ?>/country/hungary/" title="View all in Hungary"><?php echo $language[
    "Hungary"
]; ?></a> (7)</li><li>29. <a href="<?php echo $siteurl; ?>/country/switzerland/" title="View all in Switzerland"><?php echo $language[
    "Switzerland"
]; ?></a> (7)</li><li>30. <a href="<?php echo $siteurl; ?>/country/romania/" title="View all in Romania"><?php echo $language[
    "Romania"
]; ?></a> (7)</li><li>31. <a href="<?php echo $siteurl; ?>/country/luxembourg/" title="View all in Luxembourg"><?php echo $language[
    "Luxembourg"
]; ?></a> (7)</li><li>32. <a href="<?php echo $siteurl; ?>/country/south-africa/" title="View all in South Africa"><?php echo $language[
    "South_Africa"
]; ?></a> (6)</li><li>33. <a href="<?php echo $siteurl; ?>/country/czech-republic/" title="View all in Czech Republic"><?php echo $language[
    "Czech_Republic"
]; ?></a> (6)</li><li>34. <a href="<?php echo $siteurl; ?>/country/poland/" title="View all in Poland"><?php echo $language[
    "Poland"
]; ?></a> (6)</li><li>35. <a href="<?php echo $siteurl; ?>/country/turkey/" title="View all in Turkey"><?php echo $language[
    "Turkey"
]; ?></a> (5)</li><li>36. <a href="<?php echo $siteurl; ?>/country/cina/" title="View all in Cina"><?php echo $language[
    "Cina"
]; ?></a> (5)</li><li>37. <a href="<?php echo $siteurl; ?>/country/argentina/" title="View all in Argentina"><?php echo $language[
    "Argentina"
]; ?></a> (5)</li><li>38. <a href="<?php echo $siteurl; ?>/country/austria/" title="View all in Austria"><?php echo $language[
    "Austria"
]; ?></a> (5)</li><li>39. <a href="<?php echo $siteurl; ?>/country/iran/" title="View all in Iran"><?php echo $language[
    "Iran"
]; ?></a> (4)</li><li>40. <a href="<?php echo $siteurl; ?>/country/colombia/" title="View all in Colombia"><?php echo $language[
    "Colombia"
]; ?></a> (4)</li><li>41. <a href="<?php echo $siteurl; ?>/country/brazil/" title="View all in Brazil"><?php echo $language[
    "Brazil"
]; ?></a> (4)</li><li>42. <a href="<?php echo $siteurl; ?>/country/chile/" title="View all in Chile"><?php echo $language[
    "Chile"
]; ?></a> (4)</li><li>43. <a href="<?php echo $siteurl; ?>/country/singapore/" title="View all in Singapore"><?php echo $language[
    "Singapore"
]; ?></a> (3)</li><li>44. <a href="<?php echo $siteurl; ?>/country/iceland/" title="View all in Iceland"><?php echo $language[
    "Iceland"
]; ?></a> (3)</li><li>45. <a href="<?php echo $siteurl; ?>/country/puerto-rico/" title="View all in Puerto Rico"><?php echo $language[
    "Puerto_Rico"
]; ?></a> (3)</li><li>46. <a href="<?php echo $siteurl; ?>/country/qatar/" title="View all in Qatar"><?php echo $language[
    "Qatar"
]; ?></a> (3)</li><li>47. <a href="<?php echo $siteurl; ?>/country/chinese/" title="View all in Chinese"><?php echo $language[
    "Chinese"
]; ?></a> (3)</li><li>48. <a href="<?php echo $siteurl; ?>/country/jordan/" title="View all in Jordan"><?php echo $language[
    "Jordan"
]; ?></a> (2)</li><li>49. <a href="<?php echo $siteurl; ?>/country/united-arab-emirates/" title="View all in United Arab Emirates"><?php echo $language[
    "United_Arab_Emirates"
]; ?></a> (2)</li><li>50. <a href="<?php echo $siteurl; ?>/country/cambodia/" title="View all in Cambodia"><?php echo $language[
    "Cambodia"
]; ?></a> (2)</li><li>51. <a href="<?php echo $siteurl; ?>/country/ukraine/" title="View all in Ukraine"><?php echo $language[
    "Ukraine"
]; ?></a> (2)</li><li>52. <a href="<?php echo $siteurl; ?>/country/bulgaria/" title="View all in Bulgaria"><?php echo $language[
    "Bulgaria"
]; ?></a> (2)</li><li>53. <a href="<?php echo $siteurl; ?>/country/estonia/" title="View all in Estonia"><?php echo $language[
    "Estonia"
]; ?></a> (2)</li><li>54. <a href="<?php echo $siteurl; ?>/country/syria/" title="View all in Syria"><?php echo $language[
    "Syria"
]; ?></a> (1)</li><li>55. <a href="<?php echo $siteurl; ?>/country/china-united-states/" title="View all in China United States"><?php echo $language[
    "China_United_States"
]; ?></a> (1)</li><li>56. <a href="<?php echo $siteurl; ?>/country/uganda/" title="View all in Uganda"><?php echo $language[
    "Uganda"
]; ?></a> (1)</li><li>57. <a href="<?php echo $siteurl; ?>/country/haiti/" title="View all in Haiti"><?php echo $language[
    "Haiti"
]; ?></a> (1)</li><li>58. <a href="<?php echo $siteurl; ?>/country/bangladesh/" title="View all in Bangladesh"><?php echo $language[
    "Bangladesh"
]; ?></a> (1)</li><li>59. <a href="<?php echo $siteurl; ?>/country/lithuania/" title="View all in Lithuania"><?php echo $language[
    "Lithuania"
]; ?></a> (1)</li><li>60. <a href="<?php echo $siteurl; ?>/country/greece/" title="View all in Greece"><?php echo $language[
    "Greece"
]; ?></a> (1)</li><li>61. <a href="<?php echo $siteurl; ?>/country/french-polynesia/" title="View all in French Polynesia"><?php echo $language[
    "French_Polynesia"
]; ?></a> (1)</li><li>62. <a href="<?php echo $siteurl; ?>/country/samoa/" title="View all in Samoa"><?php echo $language[
    "Samoa"
]; ?></a> (1)</li><li>63. <a href="<?php echo $siteurl; ?>/country/mongolia/" title="View all in Mongolia"><?php echo $language[
    "Mongolia"
]; ?></a> (1)</li><li>64. <a href="<?php echo $siteurl; ?>/country/dominican-republic/" title="View all in Dominican Republic"><?php echo $language[
    "Dominican_Republic"
]; ?></a> (1)</li><li>65. <a href="<?php echo $siteurl; ?>/country/bolivia/" title="View all in Bolivia"><?php echo $language[
    "Bolivia"
]; ?></a> (1)</li><li>66. <a href="<?php echo $siteurl; ?>/country/ghana/" title="View all in Ghana"><?php echo $language[
    "Ghana"
]; ?></a> (1)</li><li>67. <a href="<?php echo $siteurl; ?>/country/venezuela/" title="View all in Venezuela"><?php echo $language[
    "Venezuela"
]; ?></a> (1)</li><li>68. <a href="<?php echo $siteurl; ?>/country/laos/" title="View all in Laos"><?php echo $language[
    "Laos"
]; ?></a> (1)</li><li>69. <a href="<?php echo $siteurl; ?>/country/morocco/" title="View all in Morocco"><?php echo $language[
    "Morocco"
]; ?></a> (1)</li><li>70. <a href="<?php echo $siteurl; ?>/country/serbia/" title="View all in Serbia"><?php echo $language[
    "Serbia"
]; ?></a> (1)</li><li>71. <a href="<?php echo $siteurl; ?>/country/indonesia/" title="View all in Indonesia"><?php echo $language[
    "Indonesia"
]; ?></a> (1)</li><li>72. <a href="<?php echo $siteurl; ?>/country/israel/" title="View all in Israel"><?php echo $language[
    "Israel"
]; ?></a> (1)</li><li>73. <a href="<?php echo $siteurl; ?>/country/czechoslovakia/" title="View all in Czechoslovakia"><?php echo $language[
    "Czechoslovakia"
]; ?></a> (1)</li><li>74. <a href="<?php echo $siteurl; ?>/country/west-germany/" title="View all in West Germany"><?php echo $language[
    "West_Germany"
]; ?></a> (1)</li><li>75. <a href="<?php echo $siteurl; ?>/country/georgia/" title="View all in Georgia"><?php echo $language[
    "Georgia"
]; ?></a> (1)</li><li>76. <a href="<?php echo $siteurl; ?>/country/panama/" title="View all in Panama"><?php echo $language[
    "Panama"
]; ?></a> (1)</li><li>77. <a href="<?php echo $siteurl; ?>/country/kazakhstan/" title="View all in Kazakhstan"><?php echo $language[
    "Kazakhstan"
]; ?></a> (1)</li><li>78. <a href="<?php echo $siteurl; ?>/country/bermuda/" title="View all in Bermuda"><?php echo $language[
    "Bermuda"
]; ?></a> (1)</li><li>79. <a href="<?php echo $siteurl; ?>/country/hongkong/" title="View all in Hongkong"><?php echo $language[
    "Hongkong"
]; ?></a> (1)</li><li>80. <a href="<?php echo $siteurl; ?>/country/albania/" title="View all in Albania"><?php echo $language[
    "Albania"
]; ?></a> (1)</li><li>81. <a href="<?php echo $siteurl; ?>/country/guatemala/" title="View all in Guatemala"><?php echo $language[
    "Guatemala"
]; ?></a> (1)</li></b></ul></p></div></div></div><?php require_once "side.php"; ?></div><?php
require_once "foot.php";
exit();
}
?><div class="terbaru"><?php
if ($numItems == 0) { ?><h1><?php echo "" .
    $language["H1_country"] .
    ""; ?></h1></div></div><?php require_once "side.php"; ?></div><?php
require_once "foot.php";
exit();
} else { ?><h1><?php echo "" .
    $language["H1_country"] .
    ""; ?></h1><div class="episodes"><?php }
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
    "SELECT id,title,cover,quality,rating FROM `movie` WHERE `country` LIKE '%$country%' ORDER BY `movie`.`id` DESC LIMIT $offset, $rowsperpage"
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
    echo " <a class='page-numbers' href='$siteurl/country/$country/page/1/'><div class='pg'><<</div></a> ";
    $prevpage = $currentpage - 1;
    echo " <a class='page-numbers' href='$siteurl/country/$country/page/$prevpage/'><div class='pg'><</div></a> ";
} else {
    echo "<div class=\"pagination\">";
}
for ($x = $currentpage - $range; $x < $currentpage + $range + 1; $x++) {
    if ($x > 0 && $x <= $totalpages) {
        if ($x == $currentpage) {
            echo "<span class='page-numbers current'>$x</span>";
        } else {
            echo " <a class='page-numbers' href='$siteurl/country/$country/page/$x/'><div class='pg'>$x</div></a> ";
        }
    }
}
if ($currentpage != $totalpages) {
    $nextpage = $currentpage + 1;
    echo " <a class='page-numbers' href='$siteurl/country/$country/page/$nextpage/'><div class='pg'>></div></a> ";
    echo " <a class='page-numbers' href='$siteurl/country/$country/page/$totalpages/'><div class='pg'>>></div></a> ";
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
