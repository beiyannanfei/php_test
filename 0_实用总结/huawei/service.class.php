<?php

/**
 * Game Center CP service class
 */
class GameCPService
{
    // Game server interface basic path
    private $baseUri;

    // appId of the game obtained from HUAWEI Developer
    private $appId;

    // cpId of the game obtained from HUAWEI Developer
    private $cpId;

    // Signature private key
    private $privateKey;

    // Signature public key
    private $publicKey;

    public function __construct($args)
    {
        $this->baseUri = $args["baseUri"];
        $this->appId = $args["appId"];
        $this->cpId = $args["cpId"];
        $this->privateKey = $args["privateKey"];
        $this->publicKey = $args["publicKey"];
    }

    /**
     * Sign request parameters
     *
     * @param array $parameters Request parameter array
     * @return string Signature result
     */
    private function sign($parameters)
    {
        // Construct Signature Base String
        uksort($parameters, "strcmp");
        $pairs = [];
        foreach ($parameters as $key => $value) {
            $pairs[] = $key . "=" . rawurlencode($value);
        }
        $sbs = implode("&", $pairs);
        echo '==== sbs: ' . $sbs . '<br>';
        // Signature request
        $signature = "";
        openssl_sign($sbs, $signature, $this->privateKey, "SHA256");
        return base64_encode($signature);
    }

    /**
     * Perform integrity check on response packets
     *
     * @param object Response packet
     * @return boolean true indicates verification is successful, while false indicates verification fails
     */
    private function verify($response)
    {
        if ($response->rtnCode == 0) {
            $rtnSign = base64_decode($response->rtnSign);
            unset($response->rtnSign);
            $fields = [];
            foreach ($response as $key => $value) {
                $fields[] = $key . "=" . rawurlencode($value);
            }
            usort($fields, "strcmp");
            $sbs = implode("&", $fields);
            return openssl_verify($sbs, $rtnSign, $this->publicKey, "SHA256") == 1;
        }
        return true;
    }

    /**
     * Initiate a request to call the Game Center
     *
     * @param  string $path Request resource path
     * @param  string $method Request interface name
     * @param  array $parameters Request parameter
     * @return object Response result
     */
    public function call($path, $method, $parameters)
    {
        // Supplement common fields of interface specification
        $parameters["method"] = $method;
        $parameters["cpId"] = $this->cpId;
        $parameters["appId"] = $this->appId;

        // Sign the request
        $parameters["cpSign"] = $this->sign($parameters);

        echo '===cpSign: ' . $parameters["cpSign"];
        echo '<br>';
        // Construct the request Body
        $fields = [];
        foreach ($parameters as $key => $value) {
            $fields[] = $key . "=" . rawurlencode($value);
        }
        $body = implode("&", $fields);
        echo '===$body: ' . $body;
        echo '<br>';
        // Initiate a HTTP(s) request
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->baseUri . $path);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);

        $CURLINFO_EFFECTIVE_URL = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
        echo ' $CURLINFO_EFFECTIVE_URL: ' . $CURLINFO_EFFECTIVE_URL . '<br><br>';
        $CURLINFO_HTTP_CODE = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        echo ' $CURLINFO_HTTP_CODE: ' . $CURLINFO_HTTP_CODE . '<br><br>';
        $CURLINFO_FILETIME = curl_getinfo($ch, CURLINFO_FILETIME);
        echo ' $CURLINFO_FILETIME: ' . $CURLINFO_FILETIME . '<br><br>';
        $CURLINFO_TOTAL_TIME = curl_getinfo($ch, CURLINFO_TOTAL_TIME);
        echo ' $CURLINFO_TOTAL_TIME: ' . $CURLINFO_TOTAL_TIME . '<br><br>';
        $CURLINFO_NAMELOOKUP_TIME = curl_getinfo($ch, CURLINFO_NAMELOOKUP_TIME);
        echo ' $CURLINFO_NAMELOOKUP_TIME: ' . $CURLINFO_NAMELOOKUP_TIME . '<br><br>';
        $CURLINFO_CONNECT_TIME = curl_getinfo($ch, CURLINFO_CONNECT_TIME);
        echo ' $CURLINFO_CONNECT_TIME: ' . $CURLINFO_CONNECT_TIME . '<br><br>';
        $CURLINFO_PRETRANSFER_TIME = curl_getinfo($ch, CURLINFO_PRETRANSFER_TIME);
        echo ' $CURLINFO_PRETRANSFER_TIME: ' . $CURLINFO_PRETRANSFER_TIME . '<br><br>';
        $CURLINFO_STARTTRANSFER_TIME = curl_getinfo($ch, CURLINFO_STARTTRANSFER_TIME);
        echo ' $CURLINFO_STARTTRANSFER_TIME: ' . $CURLINFO_STARTTRANSFER_TIME . '<br><br>';
        $CURLINFO_REDIRECT_TIME = curl_getinfo($ch, CURLINFO_REDIRECT_TIME);
        echo ' $CURLINFO_REDIRECT_TIME: ' . $CURLINFO_REDIRECT_TIME . '<br><br>';
        $CURLINFO_SIZE_UPLOAD = curl_getinfo($ch, CURLINFO_SIZE_UPLOAD);
        echo ' $CURLINFO_SIZE_UPLOAD: ' . $CURLINFO_SIZE_UPLOAD . '<br><br>';
        $CURLINFO_SIZE_DOWNLOAD = curl_getinfo($ch, CURLINFO_SIZE_DOWNLOAD);
        echo ' $CURLINFO_SIZE_DOWNLOAD: ' . $CURLINFO_SIZE_DOWNLOAD . '<br><br>';
        $CURLINFO_SPEED_DOWNLOAD = curl_getinfo($ch, CURLINFO_SPEED_DOWNLOAD);
        echo ' $CURLINFO_SPEED_DOWNLOAD: ' . $CURLINFO_SPEED_DOWNLOAD . '<br><br>';
        $CURLINFO_SPEED_UPLOAD = curl_getinfo($ch, CURLINFO_SPEED_UPLOAD);
        echo ' $CURLINFO_SPEED_UPLOAD: ' . $CURLINFO_SPEED_UPLOAD . '<br><br>';
        $CURLINFO_HEADER_SIZE = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        echo ' $CURLINFO_HEADER_SIZE: ' . $CURLINFO_HEADER_SIZE . '<br><br>';
        $CURLINFO_HEADER_OUT = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        echo ' $CURLINFO_HEADER_OUT: ' . $CURLINFO_HEADER_OUT . '<br><br>';
        $CURLINFO_REQUEST_SIZE = curl_getinfo($ch, CURLINFO_REQUEST_SIZE);
        echo ' $CURLINFO_REQUEST_SIZE: ' . $CURLINFO_REQUEST_SIZE . '<br><br>';
        $CURLINFO_SSL_VERIFYRESULT = curl_getinfo($ch, CURLINFO_SSL_VERIFYRESULT);
        echo ' $CURLINFO_SSL_VERIFYRESULT: ' . $CURLINFO_SSL_VERIFYRESULT . '<br><br>';
        $CURLINFO_CONTENT_LENGTH_DOWNLOAD = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);
        echo ' $CURLINFO_CONTENT_LENGTH_DOWNLOAD: ' . $CURLINFO_CONTENT_LENGTH_DOWNLOAD . '<br><br>';
        $CURLINFO_CONTENT_LENGTH_UPLOAD = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_UPLOAD);
        echo ' $CURLINFO_CONTENT_LENGTH_UPLOAD: ' . $CURLINFO_CONTENT_LENGTH_UPLOAD . '<br><br>';
        $CURLINFO_CONTENT_TYPE = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
        echo ' $CURLINFO_CONTENT_TYPE: ' . $CURLINFO_CONTENT_TYPE . '<br><br>';

        if (curl_errno($ch)) {
            throw new Exception(curl_error($ch));
        }
        curl_close($ch);

        // Return the response result
        $response = json_decode($output);
        if (!$this->verify($response)) {
            throw new Exception("Verify response failed.");
        }
        return $response;
    }

    /**
     * Verify the player signature
     *
     * @param  array $parameters Request parameter array
     * @return boolean true indicates verification is successful, while false indicates verification fails
     */
    public function checkPlayerSign($parameters)
    {
        $response = $this->call("api/gbClientApi", "external.hms.gs.checkPlayerSign", $parameters);
        echo '$response: ' . json_encode($response);
        return $response->rtnCode == 0;
    }
}