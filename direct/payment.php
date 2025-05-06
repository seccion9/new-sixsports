<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirigiendo...</title>
</head>
<body>
    <?php
    if (!isset($_GET['amount']) || !is_numeric($_GET['amount'])) {
        die("<p>Error: Importe no válido.</p>");
    }

    $importe = floatval($_GET['amount']);
    ?>

    <form id='autoSubmitForm' action='procesar.php' method='POST' style="display: none;">
        <input name='monto' value='<?php echo $importe; ?>'>
    </form>
    
    <script>
        document.getElementById('autoSubmitForm').submit();
    </script>
</body>
</html>