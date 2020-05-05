<?php
require_once 'core/init.php';
$ida = $_GET['ida'];
$id = $_GET['id'];
try{
$address = new address();
$address->delete($ida);
} catch (Exception $e) {
    die($e->getMessage());
}
Redirect::to('clients_list_address.php?id='.$id);
?>
