<?php 
require 'Database.php';

$config = require 'config.php';

$db = new Database($config['database']);


if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $db->query('INSERT INTO products(SKU, Name, Price, Type,  Size, Weight, Dimensions) VALUES(:SKU, :Name, :Price, :type, :Size,  :Weight, :Dimensions)', [
                ':SKU' => $_POST['SKU'],
                ':Name' => $_POST['Name'],
                ':Price' => $_POST['Price'],
                ':type' => $_POST['type'],
                ':Size' => $_POST['Size'],
                ':Weight' => $_POST['Weight'],
                ':Dimensions' => $_POST['Dimensions']
            ]);      
}




require 'views/store.view.php';

