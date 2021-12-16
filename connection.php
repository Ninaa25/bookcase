<?php
$mysqli = new mysqli("localhost","root","","fashion");

if (!$db=$mysqli) {
die ("<p>Spajanje na mysql server je bilo neuspešno</p>");
}
if (!$mysqli($mysql_db, $db))
{
die ("<p>Greška pri odabiru baze</p>");
} else {
$mysqli_query("SET NAMES utf8");
$mysqli_query("SET CHARACTER SET utf8");
$mysqli_query("SET COLLATION_CONNECTION='utf8_unicode_ci'");
}
?>

