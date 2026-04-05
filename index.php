<?php
/**
 * This is the landing page.
 *
 * @author : Lahiru Jayakody
 * Project : PEO PHP CRUD
 */

require('functions.php');

//require ('router.php');


/**
 * Checkpoint-2 :  Create a class for DB operations
 * Just used this class for pass the Checkpoint-2
 *
 * Identified issued :
 * # Creates a new database connection on every query
 * # Query is hardcoded, not reusable
 * # No error handling for connection or query failures
 * # Cannot pass parameters or dynamic queries
 * # Harder to extend for future features
 * # Mixes connection logic and query logic in one method
 */

class Database
{
    public function query()
    {
        $dsn = "mysql:host=localhost;dbname=peo_blog;charset=utf8mb4";

        $pdo = new PDO($dsn, "root", "root");

        $statement = $pdo->prepare("select * from `post`");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);


    }
}

$db = new Database();
$posts = $db->query();

dd($posts);







