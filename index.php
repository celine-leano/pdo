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
/*$statement->execute();
$id = $dbh->lastInsertId();
echo "<p>Pet $id inserted successfully.</p>";*/

// bind the parameters
$type = 'elephant';
$name = 'Mija';
$color = 'blue';
$statement->bindParam(':type', $type, PDO::PARAM_STR);
$statement->bindParam(':name', $name, PDO::PARAM_STR);
$statement->bindParam(':color', $color, PDO::PARAM_STR);

// execute, again!
/*$statement->execute();
$id = $dbh->lastInsertId();
echo "<p>Pet $id inserted successfully.</p>";*/

// bind the parameters
$type = 'frog';
$name = 'Peter';
$color = 'green';
$statement->bindParam(':type', $type, PDO::PARAM_STR);
$statement->bindParam(':name', $name, PDO::PARAM_STR);
$statement->bindParam(':color', $color, PDO::PARAM_STR);

// execute, again!
/*$statement->execute();
$id = $dbh->lastInsertId();
echo "<p>Pet $id inserted successfully.</p>";*/

// bind the parameters
$type = 'parrot';
$name = 'Carrot';
$color = 'rainbow';
$statement->bindParam(':type', $type, PDO::PARAM_STR);
$statement->bindParam(':name', $name, PDO::PARAM_STR);
$statement->bindParam(':color', $color, PDO::PARAM_STR);

// execute, again!
/*$statement->execute();
$id = $dbh->lastInsertId();
echo "<p>Pet $id inserted successfully.</p>";*/

// define the query
$sql = "UPDATE pets SET name = :new WHERE name = :old";

// prepare the statement
$statement = $dbh->prepare($sql);

// bind the parameters
$old = 'Joey';
$new = 'Troy';
$statement->bindParam(':old', $old, PDO::PARAM_STR);
$statement->bindParam(':new', $new, PDO::PARAM_STR);

// execute!
$statement->execute();

// define the query
$sql = "UPDATE pets SET color = :new WHERE color = :old";

// prepare the statement
$statement = $dbh->prepare($sql);

// bind the parameters
$old = 'pink';
$new = 'brown';
$statement->bindParam(':old', $old, PDO::PARAM_STR);
$statement->bindParam(':new', $new, PDO::PARAM_STR);

// execute!
$statement->execute();

// define a query
$sql = "DELETE FROM pets WHERE id = :id";

// prepare the statement
$statement = $dbh->prepare($sql);

// bind the parameters
$id = 1;
$statement->bindParam(':id', $id, PDO::PARAM_INT);

// execute!
$statement->execute();

// define a query
$sql = "SELECT * FROM pets WHERE id = :id";

// prepare the statement
$statement = $dbh->prepare($sql);

// bind the parameters
$id = 3;
$statement->bindParam(':id', $id, PDO::PARAM_INT);

// execute the statement
$statement->execute();

// process the result
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo $row['name'].", ".$row['type'],", ".$row['color'];