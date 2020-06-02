<?php 

    $handle = curl_init('https://enpcqbxz5w4tdsw.m.pipedream.net');

        $data = ['url' => $requestUrl, 'headers'=> $headers, 'request' => $jsonRequest, 'response' => utf8_encode($result)];

        $encodedData = json_encode($data);

        curl_setopt($handle, CURLOPT_POST, 1);
        curl_setopt($handle, CURLOPT_POSTFIELDS, $encodedData);
        curl_setopt($handle, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

        $resultado = curl_exec($handle);