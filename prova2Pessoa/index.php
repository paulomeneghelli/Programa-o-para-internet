<?php
session_start();
require 'db.php';
require 'PessoaController.php';

if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit;
}

$controller = new PessoaController($conn);

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

if (method_exists($controller, $action)) {
    $controller->$action($id);
} else {
    die("Ação não encontrada!");
}
