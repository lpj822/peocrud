<?php
/**
 * This is the landing page.
 *
 * @author : Lahiru Jayakody
 * Project : PEO PHP CRUD
 */

require('functions.php');

//require ('router.php');


// Checkpoint-2 :  Create a class for DB operations

$dsn = "mysql:host=localhost;dbname=peo_blog;charset=utf8mb4";

$pdo = new PDO($dsn, "root", "root");

$statement= $pdo->prepare("select * from `post`");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
dd($posts);







