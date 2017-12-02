<?php

require  __DIR__ . "/vendor/autoload.php";

use \App\Book;
use \App\TextBook;
use \App\Model\Model;
use \Main\Frontend;
use \Main\Backend;

//require __DIR__ . "/classes/Move.php";
//require __DIR__ . "/library/Lib.php";

$move = new Move();
echo "<br>";
$lib = new Lib();

echo "<br>";

connect();

echo "<br>";
new Book();
echo "<br>";
new TextBook();

echo "<br>";
new Frontend;
echo "<br>";
new Backend;
echo "<br>";
new Model;