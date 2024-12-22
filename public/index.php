<?php
require_once '../config/database.php';
require_once '../app/controllers/ProductController.php';

$controller = new ProductController();
$controller->index();
