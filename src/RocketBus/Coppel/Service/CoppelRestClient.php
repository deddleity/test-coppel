<?php

namespace RocketBus\Coppel\Service;

use RocketBus\Coppel\Exceptions\CoppelException;

class CoppelRestClient
{
    const API_URL = ' https://api.coppelpay.com/';

    private static function exec($request)
    {
        $connect = self::buildRequest($request);

        $result = curl_exec($connect);
        $resultCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ($resutl === false) {
            $result = curl_error($connect);
        }

        curl_close($connect);

        return $result;

    }


    private static function buildRequest($request)
    {
        self::validate($request);

        $headers = array("accept: application/json", "content-type: application/json");

        $connect = curl_init();

        curl_setopt($connect, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($connect, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($connect, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($connect, CURLOPT_CAINFO, $GLOBALS["LIB_LOCATION"] . "/cacert.pem");
        curl_setopt($connect, CURLOPT_CUSTOMREQUEST, $request["method"]);

        if($request["data"]) {
            curl_setopt($connect, CURLOPT_POSTFIELDS, $request["data"]);
        }
        curl_setopt($connect, CURLOPT_URL, self::API_BASE_URL . $request["uri"]);

        return $connect;
    }

    public static function get($request) {
        $request["method"] = "GET";
        // Set parameters and url
        if (isset ($request["params"]) && is_array($request["params"]) && count($request["params"]) > 0) {
            $request["uri"] .= (strpos($request["uri"], "?") === false) ? "?" : "&";
            $request["uri"] .= http_build_query($params, $request["params"], "&");
        }

        return self::exec($request);
    }

    public static function post($request) {
        $request["method"] = "POST";

        // Set data
        if (isset($request["data"])) {
            if (gettype($request["data"]) == "string") {
                json_decode($request["data"], true);
            } else {
                $request["data"] = json_encode($request["data"]);
            }

            if(function_exists('json_last_error')) {
                $json_error = json_last_error();
                    if ($json_error != JSON_ERROR_NONE) {
                        throw new CoppelException("JSON Error [{$json_error}] - Data: ".$request["data"]);
                    }
            }
        }
        return self::exec($request);
    }

    private function validate($request)
    {
        if(!extension_loaded("curl")) {
            throw new CoppelException("cURL extension missing");
        }
        if (!isset($request["method"])) {
            throw new CoppelException("No HTTP METHOD specified");
        }

        if (!isset($request["uri"])) {
            throw new CoppelException("No URI specified");
        }
    }
   
}