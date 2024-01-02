# Swagger\Client\SingleBarcodeApi

All URIs are relative to *https://dcapi.apis.post.ch/barcode/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateSingleBarcodes**](SingleBarcodeApi.md#generatesinglebarcodes) | **POST** /generateSingleBarcodes | Generate Single Barcode

# **generateSingleBarcodes**
> \Swagger\Client\Model\GenerateSingleBarcodesResponse generateSingleBarcodes($body)

Generate Single Barcode

Returns all single barcodes for one or several address labels generated in binary format.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SingleBarcodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\GenerateSingleBarcodes(); // \Swagger\Client\Model\GenerateSingleBarcodes | 

try {
    $result = $apiInstance->generateSingleBarcodes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SingleBarcodeApi->generateSingleBarcodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\GenerateSingleBarcodes**](../Model/GenerateSingleBarcodes.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\GenerateSingleBarcodesResponse**](../Model/GenerateSingleBarcodesResponse.md)

### Authorization

[ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

