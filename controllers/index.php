<?php

require 'Database.php';

$config = require('config.php');
$db = new Database($config['database']);


// I know there might be a better way to query these but I tried that and it broke everything, I'm sure I will learn better ways to this later, but for now this works
$discs = $db->query("select * from products where type='disc' ")->get();

$books = $db->query("select * from products where type='book' ")->get();

$furnitures = $db->query("select * from products where type='furniture' ")->get();


require 'views/index.view.php';

