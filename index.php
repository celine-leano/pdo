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

// display all owners in an HTML table
echo "<table>";
// define the query
$sql = "SELECT * FROM petOwners";

// prepare the statement
$statement = $dbh->prepare($sql);

// execute the statement
$statement->execute();

// process the result
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    echo "<tr><td>".$row['first']."</td>
          <td>".$row['last']."</td></tr>";
}