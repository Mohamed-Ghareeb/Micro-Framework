<?php


$router->get("", 'controllers/homeController.php');
$router->get('about', 'controllers/aboutController.php');
$router->get('contact', 'controllers/contactController.php');
$router->post('names', 'controllers/namesController.php');
