<?php
/**
 * This is the landing page.
 *
 * @author : Lahiru Jayakody
 * Project : PEO PHP CRUD
 */

require('functions.php');

//require ('router.php');


// Testing :  Connect to MySql database

$dsn = "mysql:host=localhost;dbname=peo_blog;charset=utf8mb4";

$pdo = new PDO($dsn, "root", "root");

$query = $pdo->prepare("select * from `post`");

$query->execute();

$posts = $query->fetchAll(PDO::FETCH_ASSOC);
dd($posts);







