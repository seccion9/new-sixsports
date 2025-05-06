<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>

    <style>
    .mensaje {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        height: 100vh;
    }
    </style>

    <script>
    // Redirigir después de 5 segundos
    setTimeout(function() {
        window.location.href = "https://new.sixsport.es";
    }, 5000);
    </script>
</head>

<body>
    <div class="mensaje">
        <h2>Error: There was an issue processing your payment.</h2>
        <p>Please try again using the link that has been sent to you.</p>
        <p>You will be redirected to new.sixsport.es shortly.</p>
    </div>
</body>

</html>
