<?php
/**
 * ApiException
 * PHP version 5
 *
 * @category Class
 * @package  Vekkon\PostBarcodeClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DIGITAL COMMERCE BARCODE API
 *
 * Digital Commerce Swiss Post web REST API for the generation of the address label. With the \"Generate address label\" request, the combinations of selected basic and additional services/delivery instructions will be tested automatically, whether or not you have already done this yourself beforehand. With the \"Generate address label\" operation, the mailing data (e.g. COD amount) is also validated. For the \"Parcels\", \"Express\" and \"Solutions\" service groups, the mailing data is automatically transferred to DataTransfer. This means that you receive the same benefits as you would under DataTransfer. API documentation https://developer.post.ch/en/digital-commerce-api
 *
 * OpenAPI spec version: 1.2
 * Contact: digitalintegration@post.ch
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.51
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Vekkon\PostBarcodeClient;

use \Exception;

/**
 * ApiException Class Doc Comment
 *
 * @category Class
 * @package  Vekkon\PostBarcodeClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HeaderSelector
{

    /**
     * @param string[] $accept
     * @param string[] $contentTypes
     * @return array
     */
    public function selectHeaders($accept, $contentTypes)
    {
        $headers = [];

        $accept = $this->selectAcceptHeader($accept);
        if ($accept !== null) {
            $headers['Accept'] = $accept;
        }

        $headers['Content-Type'] = $this->selectContentTypeHeader($contentTypes);
        return $headers;
    }

    /**
     * @param string[] $accept
     * @return array
     */
    public function selectHeadersForMultipart($accept)
    {
        $headers = $this->selectHeaders($accept, []);

        unset($headers['Content-Type']);
        return $headers;
    }

    /**
     * Return the header 'Accept' based on an array of Accept provided
     *
     * @param string[] $accept Array of header
     *
     * @return string Accept (e.g. application/json)
     */
    private function selectAcceptHeader($accept)
    {
        if (count($accept) === 0 || (count($accept) === 1 && $accept[0] === '')) {
            return null;
        } elseif (preg_grep("/application\/json/i", $accept)) {
            return 'application/json';
        } else {
            return implode(',', $accept);
        }
    }

    /**
     * Return the content type based on an array of content-type provided
     *
     * @param string[] $contentType Array fo content-type
     *
     * @return string Content-Type (e.g. application/json)
     */
    private function selectContentTypeHeader($contentType)
    {
        if (count($contentType) === 0 || (count($contentType) === 1 && $contentType[0] === '')) {
            return 'application/json';
        } elseif (preg_grep("/application\/json/i", $contentType)) {
            return 'application/json';
        } else {
            return implode(',', $contentType);
        }
    }
}
