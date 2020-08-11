<?php
define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "rezervforma");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo "Sorry, bet svetaine neveikia.";
        echo 'Klaida: ' . $mysqli->connect_error . '\n';
        exit();
    }
    
    mysqli_query($mysqli, "INSERT INTO klientai (vardas, laikas, sveciai, data, email, phone)
    VALUES('$_POST[vardas]', '$_POST[laikas]', '$_POST[sveciai]', '$_POST[data]', '$_POST[email]', '$_POST[phone]')");
?>