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
require_once "lang.php";
try {
    $dbh = new PDO(
        "mysql:host=" . $dbhost . ";dbname=" . $dbname . "",
        "$dbuser",
        "$dbpass"
    );
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    require_once "lang.php";
    ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" lang="id-ID" prefix="og: http://ogp.me/ns#"><head profile="http://gmpg.org/xfn/11"><?php
$setmeas = "misc";
$miscas = "Digital Millennium Copyright Act (DMCA)";
require_once "meta.php";
require_once "json.php";
?> <?php require_once "js.php"; ?></head><body><?php require_once "misc.php"; ?><div id='shadow'></div><div id="wrap"><?php
require_once "mainmenu.php";
require_once "genrehome.php";
?> <?php require_once "recomended.php"; ?><div id="content"><div class="postsbody"><div class="ctn"><h1 class="ttl">Digital Millennium Copyright Act (DMCA)</h1><div class="pst"><p><b><?php echo $siteurls; ?></b> adalah sebuah website online penyedia jasa seperti yang didefiniskan di dalam Digital Millennium Copyright Act.<br /> Kami sangat mendukung akan hukum hak cipta dan akan sangat melindungi hukum pemilik hak cipta secara serius.</p><p>Jika anda adalah pemilik konten apapun yang muncul pada website TV21.co dan anda tidak mengizinkan penggunaan konten itu, maka anda sangat diperkenankan untuk memberitahu kami dengan menulis email kepada mangaindo.id[at]gmail.com agar kami dapat mengidentifikasi dan mengambil tindakan yang diperlukan.</p><p>Kami tidak dapat mengambil tindakan jika anda tidak memberikan kami informasi yang diperlukan. Jadi silahkan menuliskan email yang diisi dengan berisikan beberapa detail yang disebutkan dibawah ini.</p><p>Spesifikasikan konten hak cipta yang menurut anda telah dilanggar. Jika anda mengklaim pelanggaran dari beberapa karya cipta dalam satu email maka silahkan menuliskan daftar tersebut secara detail beserta alamat website yang berisikan konten yang melanggar tersebut.</p><p>Informasikan nama anda, telepon, alamat kantor dan alamat email untuk memungkinkan kami menghubungi anda.<br /> Jika anda memiliki itikad yang baik maka kirimkan email tersebut sendiri, tidak diizinkan apabila email tersebut dari agen atau pihak ketiga.<br /> Informasi yang dituliskan harus akurat dan berada dibawah hukuman pemalsuan.</p></div></div></div><?php require_once "side.php"; ?></div><?php
require_once "foot.php";
$dbh = null;
} catch (PDOException $e) {
    print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
    die();
} ?>
