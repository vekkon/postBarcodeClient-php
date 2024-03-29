# SwaggerClient-php
Digital Commerce Swiss Post web REST API for the generation of the address label. With the \"Generate address label\" request, the combinations of selected basic and additional services/delivery instructions will be tested automatically, whether or not you have already done this yourself beforehand. With the \"Generate address label\" operation, the mailing data (e.g. COD amount) is also validated. For the \"Parcels\", \"Express\" and \"Solutions\" service groups, the mailing data is automatically transferred to DataTransfer. This means that you receive the same benefits as you would under DataTransfer. API documentation https://developer.post.ch/en/digital-commerce-api

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.2
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen
For more information, please visit [https://www.post.ch/digital-commerce/api](https://www.post.ch/digital-commerce/api)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/git_user_id/git_repo_id.git"
    }
  ],
  "require": {
    "git_user_id/git_repo_id": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://dcapi.apis.post.ch/barcode/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BarcodeApi* | [**generateAddressLabel**](docs/Api/BarcodeApi.md#generateaddresslabel) | **POST** /generateAddressLabel | Generate Label
*ReplacementApi* | [**submitReplacementRequest**](docs/Api/ReplacementApi.md#submitreplacementrequest) | **POST** /generateReplacementLabel | 
*SingleBarcodeApi* | [**generateSingleBarcodes**](docs/Api/SingleBarcodeApi.md#generatesinglebarcodes) | **POST** /generateSingleBarcodes | Generate Single Barcode

## Documentation For Models

 - [AdditionalData](docs/Model/AdditionalData.md)
 - [BaseRecipient](docs/Model/BaseRecipient.md)
 - [Communication](docs/Model/Communication.md)
 - [CustomerAddress](docs/Model/CustomerAddress.md)
 - [CustomerLogo](docs/Model/CustomerLogo.md)
 - [DispatchInfo](docs/Model/DispatchInfo.md)
 - [DynPicType](docs/Model/DynPicType.md)
 - [ExchangeLabelDefinition](docs/Model/ExchangeLabelDefinition.md)
 - [ExchangeNotification](docs/Model/ExchangeNotification.md)
 - [GenerateLabel](docs/Model/GenerateLabel.md)
 - [GenerateLabelCustomer](docs/Model/GenerateLabelCustomer.md)
 - [GenerateLabelDefinition](docs/Model/GenerateLabelDefinition.md)
 - [GenerateLabelResponse](docs/Model/GenerateLabelResponse.md)
 - [GenerateSingleBarcodes](docs/Model/GenerateSingleBarcodes.md)
 - [GenerateSingleBarcodesResponse](docs/Model/GenerateSingleBarcodesResponse.md)
 - [IdentCode](docs/Model/IdentCode.md)
 - [Item](docs/Model/Item.md)
 - [LabelAddress](docs/Model/LabelAddress.md)
 - [Language](docs/Model/Language.md)
 - [MessageType](docs/Model/MessageType.md)
 - [MessagesType](docs/Model/MessagesType.md)
 - [Notification](docs/Model/Notification.md)
 - [NotificationType](docs/Model/NotificationType.md)
 - [Recipient](docs/Model/Recipient.md)
 - [ReplacementCustomerDetails](docs/Model/ReplacementCustomerDetails.md)
 - [ReplacementLabelDefinition](docs/Model/ReplacementLabelDefinition.md)
 - [ReplacementLabelResponse](docs/Model/ReplacementLabelResponse.md)
 - [ReplacementRequest](docs/Model/ReplacementRequest.md)
 - [ReplacementResponse](docs/Model/ReplacementResponse.md)
 - [ResponseGenerateLabelDefinition](docs/Model/ResponseGenerateLabelDefinition.md)
 - [ResponseItem](docs/Model/ResponseItem.md)
 - [ReturnInfoType](docs/Model/ReturnInfoType.md)
 - [ServiceCodeAttributes](docs/Model/ServiceCodeAttributes.md)
 - [SingleBarcodesDefinition](docs/Model/SingleBarcodesDefinition.md)
 - [SingleBarcodesResponseDefinition](docs/Model/SingleBarcodesResponseDefinition.md)
 - [SingleBarcodesResponseItem](docs/Model/SingleBarcodesResponseItem.md)
 - [UNNumbers](docs/Model/UNNumbers.md)
 - [ValidationError](docs/Model/ValidationError.md)

## Documentation For Authorization


## ClientCredentials

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: 
 - **DCAPI_BARCODE_READ**: get barcode label


## Author

digitalintegration@post.ch

