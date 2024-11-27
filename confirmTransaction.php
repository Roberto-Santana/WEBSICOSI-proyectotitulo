<?php
require_once __DIR__ . '/vendor/autoload.php';

use Transbank\Webpay\WebpayPlus\Transaction;

$token = $_GET['token_ws'] ?? null;

if (!$token) {
    echo "<div class='error'>Error: No se recibió el token de la transacción.</div>";
    exit;
}

try {
    // Confirmar transacción con Transbank
    $transaction = new Transaction();
    $response = $transaction->commit($token);

    // Variables para mostrar
    $buyOrder = $response->getBuyOrder();
    $authorizationCode = $response->getAuthorizationCode();
    $status = $response->getStatus();
    $amount = $response->getAmount();
} catch (Exception $e) {
    echo "<div class='error'>Error al confirmar la transacción: " . $e->getMessage() . "</div>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Transacción</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #2ECC71;
            text-align: center;
        }
        p {
            font-size: 16px;
            margin: 10px 0;
        }
        .transaction-info {
            margin: 20px 0;
        }
        .transaction-info p {
            padding: 10px;
            background: #f9f9f9;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .status {
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            color: #2ECC71;
        }
        .status.approved {
            background-color: #2ECC71;
        }
        .status.failed {
            background-color: #dc3545;
        }
        .status.pending {
            background-color: #ffc107;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
        }
        .footer a {
            text-decoration: none;
            color: #2ECC71;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Resultado de la Transacción</h1>
        <div class="transaction-info">
            <p><strong>Orden de Compra:</strong> <?= htmlspecialchars($buyOrder) ?></p>
            <p><strong>Código de Autorización:</strong> <?= htmlspecialchars($authorizationCode) ?></p>
            <p><strong>Monto:</strong> $<?= number_format($amount, 2) ?></p>
            <p class="status <?= htmlspecialchars($status) ?>">
                <?= htmlspecialchars(ucfirst($status)) ?>
            </p>
        </div>
        <div class="footer">
            <p><a href="index.php">Volver al Inicio</a></p>
        </div>
    </div>
</body>
</html>
