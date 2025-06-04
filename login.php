<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $korime = $_POST["username"];
    $lozinka = $_POST["password"];

    $xml = simplexml_load_file("korisnici.xml");

    $prijavljen = false;

    foreach ($xml->korisnik as $korisnik) {
        if ($korisnik->korime == $korime && $korisnik->lozinka == $lozinka) {
            $prijavljen = true;
            break;
        }
    }

    if ($prijavljen) {
        header("Location: shop.php");
        exit;
    } else {
        echo "<h3 style='color:red; text-align:center;'>Neispravni podaci. <a href='login.html'>Pokušaj ponovno</a></h3>";
    }
}
?>
