<?php
require('./DataBase/DBController.php');

require('./DataBase/Product.php');


$db = new DBController();

$product= new Product($db);

