<?php
class Utility {

    public static function doCurl($path, $method, $header, $body=NULL) {
        $curl = curl_init($path);
    
        if (isset($method)) {
            if ($method=='POST') {
                curl_setopt($curl, CURLOPT_POST, 1);
            }
            elseif ($method=='PUT') {
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            }
            elseif ($method=='DELETE') {
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
            }
        }

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($curl, CURLOPT_TIMEOUT, 3);

        if (isset($body)) {
            curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($body));
        }

        if (!isset($header)) {
        	$header = array();
        }
        array_push($header, 'private-key: '.Confone::getAppKey());
        array_push($header, 'Content-Type: application/json');

        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);

        $response = curl_exec($curl);

        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

        $response = json_decode($response, TRUE);
        $response['status_code'] = $code;

        if (!isset($response['status'])) { $response['status'] = 'error'; }

        return $response;
    }
}
?>