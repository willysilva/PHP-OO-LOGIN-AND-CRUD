<?php
require_once 'core/init.php';
$ida = $_GET['id'];
try{
$client = new client();
$client -> delete($ida);
} catch (Exception $e) {
    die($e->getMessage());
}
Redirect::to('index.php');
?>
