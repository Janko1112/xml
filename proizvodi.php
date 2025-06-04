<?php
$xml = simplexml_load_file("proizvodi.xml");

foreach ($xml->proizvod as $p) {
    echo "<div class='product'>";
    echo "<img src='images/" . $p->slika . "' alt='" . $p->naziv . "'>";
    echo "<h3>" . $p->naziv . "</h3>";
    echo "<p><strong>" . $p->cijena . " €</strong></p>";
    echo "<p>" . $p->opis . "</p>";
    echo "</div>";
}
?>
