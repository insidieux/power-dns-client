# insidieux\PowerDnsClient\ZonemetadataApi

All URIs are relative to *http://localhost:8081/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMetadata**](ZonemetadataApi.md#createMetadata) | **POST** /servers/{server_id}/zones/{zone_id}/metadata | Creates a set of metadata entries
[**deleteMetadata**](ZonemetadataApi.md#deleteMetadata) | **DELETE** /servers/{server_id}/zones/{zone_id}/metadata/{metadata_kind} | Delete all items of a single kind of domain metadata.
[**getMetadata**](ZonemetadataApi.md#getMetadata) | **GET** /servers/{server_id}/zones/{zone_id}/metadata/{metadata_kind} | Get the content of a single kind of domain metadata as a list of MetaData objects.
[**listMetadata**](ZonemetadataApi.md#listMetadata) | **GET** /servers/{server_id}/zones/{zone_id}/metadata | Get all the MetaData associated with the zone.
[**modifyMetadata**](ZonemetadataApi.md#modifyMetadata) | **PUT** /servers/{server_id}/zones/{zone_id}/metadata/{metadata_kind} | Modify the content of a single kind of domain metadata.


# **createMetadata**
> createMetadata($serverId, $zoneId, $metadata)

Creates a set of metadata entries

Creates a set of metadata entries of given kind for the zone. Existing metadata entries for the zone with the same kind are not overwritten.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\ZonemetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$zoneId = 'zoneId_example'; // string | 
$metadata = array(new \insidieux\PowerDnsClient\Model\array()); // \insidieux\PowerDnsClient\Model\Metadata[] | List of metadata to add/create

try {
    $apiInstance->createMetadata($serverId, $zoneId, $metadata);
} catch (Exception $e) {
    echo 'Exception when calling ZonemetadataApi->createMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **zoneId** | **string**|  |
 **metadata** | [**\insidieux\PowerDnsClient\Model\Metadata[]**](../Model/array.md)| List of metadata to add/create |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMetadata**
> deleteMetadata($serverId, $zoneId, $metadataKind)

Delete all items of a single kind of domain metadata.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\ZonemetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$zoneId = 'zoneId_example'; // string | The id of the zone to retrieve
$metadataKind = 'metadataKind_example'; // string | ???

try {
    $apiInstance->deleteMetadata($serverId, $zoneId, $metadataKind);
} catch (Exception $e) {
    echo 'Exception when calling ZonemetadataApi->deleteMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **zoneId** | **string**| The id of the zone to retrieve |
 **metadataKind** | **string**| ??? |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetadata**
> \insidieux\PowerDnsClient\Model\Metadata getMetadata($serverId, $zoneId, $metadataKind)

Get the content of a single kind of domain metadata as a list of MetaData objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\ZonemetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$zoneId = 'zoneId_example'; // string | The id of the zone to retrieve
$metadataKind = 'metadataKind_example'; // string | ???

try {
    $result = $apiInstance->getMetadata($serverId, $zoneId, $metadataKind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonemetadataApi->getMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **zoneId** | **string**| The id of the zone to retrieve |
 **metadataKind** | **string**| ??? |

### Return type

[**\insidieux\PowerDnsClient\Model\Metadata**](../Model/Metadata.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMetadata**
> \insidieux\PowerDnsClient\Model\Metadata[] listMetadata($serverId, $zoneId)

Get all the MetaData associated with the zone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\ZonemetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$zoneId = 'zoneId_example'; // string | The id of the zone to retrieve

try {
    $result = $apiInstance->listMetadata($serverId, $zoneId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonemetadataApi->listMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **zoneId** | **string**| The id of the zone to retrieve |

### Return type

[**\insidieux\PowerDnsClient\Model\Metadata[]**](../Model/Metadata.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyMetadata**
> modifyMetadata($serverId, $zoneId, $metadataKind, $metadata)

Modify the content of a single kind of domain metadata.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\ZonemetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$zoneId = 'zoneId_example'; // string | 
$metadataKind = 'metadataKind_example'; // string | The kind of metadata
$metadata = new \insidieux\PowerDnsClient\Model\Metadata(); // \insidieux\PowerDnsClient\Model\Metadata | metadata to add/create

try {
    $apiInstance->modifyMetadata($serverId, $zoneId, $metadataKind, $metadata);
} catch (Exception $e) {
    echo 'Exception when calling ZonemetadataApi->modifyMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **zoneId** | **string**|  |
 **metadataKind** | **string**| The kind of metadata |
 **metadata** | [**\insidieux\PowerDnsClient\Model\Metadata**](../Model/Metadata.md)| metadata to add/create |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

