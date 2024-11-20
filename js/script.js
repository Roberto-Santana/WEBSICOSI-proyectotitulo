document.getElementById('carritoForm').addEventListener('submit', async function (event) {
    event.preventDefault();

    // Capturar datos del formulario
    const formData = new FormData(event.target);
    const data = {
        buyOrder: 'ORDER12345',
        sessionId: 'SESSION12345',
        amount: formData.get('suscripcion') === 'mensual' ? 9990 : 89990
    };

    try {
        // Enviar solicitud al backend para iniciar transacción
        const response = await fetch('http://localhost/WEBSICOSI/initTransaction.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(data)
        });

        const result = await response.json();

        if (result.token && result.url) {
            // Redirigir a Webpay
            window.location.href = `${result.url}?token_ws=${result.token}`;
        } else {
            alert('Error iniciando transacción');
        }
    } catch (error) {
        console.error('Error:', error);
        alert('Ocurrió un error al conectar con el servidor.');
    }
});