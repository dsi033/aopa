<?php
try {
    $client = new SoapClient(null, array(
            'uri' => 'http://dwes.infinityfreeapp.com/soap-automoviles/',
            'location' => 'http://dwes.infinityfreeapp.com/soap-automoviles/service-automoviles-auth.php',
            'trace' => 1
        )
    );

    $auth_params = new stdClass();
    $auth_params->username = 'ies';
    $auth_params->password = 'daw';

    $header_params = new SoapVar($auth_params, SOAP_ENC_OBJECT);

    $header = new SoapHeader('http://dwes.infinityfreeapp.com/soap-automoviles/', 'authenticate', $header_params, false);
    $client->__setSoapHeaders(array($header));

    $marcas = $client->ObtenerMarcasUrl();
} catch (Exception $e) {
    echo($client->__getLastResponse());
    echo PHP_EOL;
    echo($client->__getLastRequest());
}