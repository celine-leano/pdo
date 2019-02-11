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

// define the query
$sql = "INSERT INTO pets(type, name, color) 
        VALUES (:type, :name, :color)";

// prepare the statement
$statement = $dbh->prepare($sql);

// bind the parameters
$type = "kangaroo";
$name = 'Joey';
$color = 'purple';
$statement->bindParam(':type', $type, PDO::PARAM_STR);
$statement->bindParam(':name', $name, PDO::PARAM_STR);
$statement->bindParam(':color', $color, PDO::PARAM_STR);

// execute!
//$statement->execute();

// bind the parameters
$type = 'snake';
$name = 'Slitherin';
$color = 'green';
$statement->bindParam(':type', $type, PDO::PARAM_STR);
$statement->bindParam(':name', $name, PDO::PARAM_STR);
$statement->bindParam(':color', $color, PDO::PARAM_STR);

// execute, again!
$statement->execute();