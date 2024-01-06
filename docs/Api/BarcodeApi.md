# Vekkon\PostBarcodeClient\BarcodeApi

All URIs are relative to *https://dcapi.apis.post.ch/barcode/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateAddressLabel**](BarcodeApi.md#generateaddresslabel) | **POST** /generateAddressLabel | Generate Label

# **generateAddressLabel**
> \Vekkon\PostBarcodeClient\Model\GenerateLabelResponse generateAddressLabel($body)

Generate Label

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = Vekkon\PostBarcodeClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vekkon\PostBarcodeClient\Api\BarcodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Vekkon\PostBarcodeClient\Model\GenerateLabel(); // \Vekkon\PostBarcodeClient\Model\GenerateLabel | 

try {
    $result = $apiInstance->generateAddressLabel($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->generateAddressLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Vekkon\PostBarcodeClient\Model\GenerateLabel**](../Model/GenerateLabel.md)|  | [optional]

### Return type

[**\Vekkon\PostBarcodeClient\Model\GenerateLabelResponse**](../Model/GenerateLabelResponse.md)

### Authorization

[ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

