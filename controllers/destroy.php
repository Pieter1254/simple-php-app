<?php

require '../Database.php';

$config = require '../config.php';
$db = new Database($config['database']);

require '../functions.php';



if(isset($_POST['delete'])) {

    $all_sku = $_POST['checkbox'];

    $extract_sku = implode(',', $all_sku);

    
    $db->query("DELETE FROM products where SKU IN('$extract_sku')");

    header("Location: /");

    exit();
    
}