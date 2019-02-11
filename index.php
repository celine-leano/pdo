<?php
/**
 * Celine Leano
 * 2/11/2019
 * 328/pdo2/index.php
 * PDO
 */

// connect to DB
require '/home/cleanogr/config.php';
try {
    // instantiate a database object
    $dbh = new PDO("mysql:dbname=cleanogr_grc",
        "cleanogr_grcuser", "$2r7FZr.!!C=");
    echo 'Connected to database!';
} catch (PDOException $e) {
    echo $e->getMessage();
}