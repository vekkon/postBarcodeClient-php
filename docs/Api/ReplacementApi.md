# Swagger\Client\ReplacementApi

All URIs are relative to *https://dcapi.apis.post.ch/barcode/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**submitReplacementRequest**](ReplacementApi.md#submitreplacementrequest) | **POST** /generateReplacementLabel | 

# **submitReplacementRequest**
> \Swagger\Client\Model\ReplacementResponse submitReplacementRequest($body)



Generate Label for replacement of defective products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ReplacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ReplacementRequest(); // \Swagger\Client\Model\ReplacementRequest | Replacement Request data

try {
    $result = $apiInstance->submitReplacementRequest($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplacementApi->submitReplacementRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ReplacementRequest**](../Model/ReplacementRequest.md)| Replacement Request data | [optional]

### Return type

[**\Swagger\Client\Model\ReplacementResponse**](../Model/ReplacementResponse.md)

### Authorization

[ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

