<?php
session_start();
header('Content-Type: application/json');

$cartCount = isset($_SESSION['giohang']) ? count($_SESSION['giohang']) : 0;

echo json_encode(['cartCount' => $cartCount]);
?>
