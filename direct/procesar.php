<?php
	// Se incluye la librería
	include 'RedsysApi.php';
	// Se crea Objeto
	$miObj = new RedsysAPI; // Se descarga de https://pagosonline.redsys.es/descargas.html

	// Valores de entrada que no hemos cmbiado para ningun ejemplo
	$fuc="364169649";
	$terminal="001";
	$moneda="978";
	$trans="0";
	$id=time();


	if (isset($_POST['monto']) && $_POST['monto'] != 'personalizado') {
		$amount = $_POST['monto'] * 100; // Convertir a céntimos
		error_log("Monto recibido desde POST: $amount céntimos.");
	} elseif (isset($_POST['monto_personalizado'])) {
		$amount = $_POST['monto_personalizado'] * 100; // Convertir a céntimos
		error_log("Monto personalizado recibido: $amount céntimos.");
	} else {
		$amount = 0; // Valor predeterminado si no se recibe monto
		error_log("Error: No se recibió un monto válido.");
		die('Error: No se recibió un monto válido. Consulte el log para más detalles.');
	}
		
	// Se Rellenan los campos
	$miObj->setParameter("DS_MERCHANT_AMOUNT",$amount);
    $miObj->setParameter("DS_MERCHANT_PRODUCTDESCRIPTION",  "Direct Payment");
	$miObj->setParameter("DS_MERCHANT_ORDER",$id);
	$miObj->setParameter("DS_MERCHANT_MERCHANTCODE",$fuc);
	$miObj->setParameter("DS_MERCHANT_CURRENCY",$moneda);
	$miObj->setParameter("DS_MERCHANT_TRANSACTIONTYPE",$trans);
	$miObj->setParameter("DS_MERCHANT_TERMINAL",$terminal);
	$miObj->setParameter("DS_MERCHANT_MERCHANTURL", "https://new.sixsport.es");
	$miObj->setParameter("DS_MERCHANT_URLOK", "https://new.sixsport.es/direct/tpv_ok.php");
	$miObj->setParameter("DS_MERCHANT_URLKO", "https://new.sixsport.es/direct/tpv_ko.php");

	//Datos de configuración
	$version="HMAC_SHA256_V1";
	$kc = 'Bh2fJ/ecYOy8Tn17LuuDKv+CLSCPjnSE';//Clave recuperada de CANALES
	// Se generan los parámetros de la petición
	$request = "";
	$params = $miObj->createMerchantParameters();
	$signature = $miObj->createMerchantSignature($kc);
?>
<html lang="es">
<head>
<style>
        /* Ocultar el formulario */
        #frm {
            display: none;
        }

        /* Estilos para el contenedor del spinner */
        .spinner-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        /* Estilos del spinner */
        .spinner {
            border: 8px solid #f3f3f3; /* Color claro */
            border-top: 8px solid #3498db; /* Color principal */
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<body>
<div class="spinner-container">
    <div class="spinner"></div>
</div>
<form id="frm" action="https://sis.redsys.es/sis/realizarPago" method="POST">
Ds_Merchant_SignatureVersion <input type="text" name="Ds_SignatureVersion" value="<?php echo $version; ?>"/></br>
Ds_Merchant_MerchantParameters <input type="text" name="Ds_MerchantParameters" value="<?php echo $params; ?>"/></br>
Ds_Merchant_Signature <input type="text" name="Ds_Signature" value="<?php echo $signature; ?>"/></br>
<input type="submit" value="Enviar" >
</form>

<script>
document.getElementById('frm').submit();
</script>

</body>
</html>
