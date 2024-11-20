<?php
require_once __DIR__ . '/vendor/autoload.php';

use Transbank\Webpay\WebpayPlus\Transaction;

// Configuración de Transbank
$commerceCode = '597055555532'; // Código de comercio de pruebas
$apiKey = '579B532A7440BB0C9079DED94D31EA1615BACEB56610332264630D42D0A36B1C'; // API Key de pruebas
$environment = 'TEST'; // Entorno de pruebas

// Capturar datos enviados desde el frontend
$data = json_decode(file_get_contents("php://input"), true);
$buyOrder = $data['buyOrder'] ?? 'ORDER_' . rand();
$sessionId = $data['sessionId'] ?? 'SESSION_' . rand();
$amount = $data['amount'];
$returnUrl = 'http://localhost/WEBSICOSI/confirmTransaction.php'; // URL para confirmar transacción

try {
    // Crear transacción con Transbank
    $transaction = new Transaction();
    $response = $transaction->create($buyOrder, $sessionId, $amount, $returnUrl);

    // Enviar URL y token al frontend
    echo json_encode([
        'url' => $response->getUrl(),
        'token' => $response->getToken()
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
