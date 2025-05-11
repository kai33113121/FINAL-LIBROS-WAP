<?php
require_once __DIR__ . '/librocontroller.php';

if (isset($_GET['id'])) {
    $controller = new librocontroller();
    $controller->eliminar($_GET['id']);
}

header("Location: ../index.php");
exit;
?>
