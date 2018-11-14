# insidieux\PowerDnsClient\ZonesApi

All URIs are relative to *http://localhost:8081/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**axfrExportZone**](ZonesApi.md#axfrExportZone) | **GET** /servers/{server_id}/zones/{zone_id}/export | Returns the zone in AXFR format.
[**axfrRetrieveZone**](ZonesApi.md#axfrRetrieveZone) | **PUT** /servers/{server_id}/zones/{zone_id}/axfr-retrieve | Retrieve slave zone from its master.
[**checkZone**](ZonesApi.md#checkZone) | **GET** /servers/{server_id}/zones/{zone_id}/check | Verify zone contents/configuration.
[**createZone**](ZonesApi.md#createZone) | **POST** /servers/{server_id}/zones | Creates a new domain, returns the Zone on creation.
[**deleteZone**](ZonesApi.md#deleteZone) | **DELETE** /servers/{server_id}/zones/{zone_id} | Deletes this zone, all attached metadata and rrsets.
[**listZone**](ZonesApi.md#listZone) | **GET** /servers/{server_id}/zones/{zone_id} | zone managed by a server
[**listZones**](ZonesApi.md#listZones) | **GET** /servers/{server_id}/zones | List all Zones in a server
[**notifyZone**](ZonesApi.md#notifyZone) | **PUT** /servers/{server_id}/zones/{zone_id}/notify | Send a DNS NOTIFY to all slaves.
[**patchZone**](ZonesApi.md#patchZone) | **PATCH** /servers/{server_id}/zones/{zone_id} | Creates/modifies/deletes RRsets present in the payload and their comments. Returns 204 No Content on success.
[**putZone**](ZonesApi.md#putZone) | **PUT** /servers/{server_id}/zones/{zone_id} | Modifies basic zone data (metadata).
[**rectifyZone**](ZonesApi.md#rectifyZone) | **PUT** /servers/{server_id}/zones/{zone_id}/rectify | Rectify the zone data.


# **axfrExportZone**
> string axfrExportZone($serverId, $zoneId)

Returns the zone in AXFR format.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$zoneId = 'zoneId_example'; // string | The id of the zone to retrieve

try {
    $result = $apiInstance->axfrExportZone($serverId, $zoneId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->axfrExportZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **zoneId** | **string**| The id of the zone to retrieve |

### Return type

**string**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **axfrRetrieveZone**
> axfrRetrieveZone($serverId, $zoneId)

Retrieve slave zone from its master.

Fails when zone kind is not Slave, or slave is disabled in the configuration. Clients MUST NOT send a body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$zoneId = 'zoneId_example'; // string | The id of the zone to retrieve

try {
    $apiInstance->axfrRetrieveZone($serverId, $zoneId);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->axfrRetrieveZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **zoneId** | **string**| The id of the zone to retrieve |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkZone**
> string checkZone($serverId, $zoneId)

Verify zone contents/configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$zoneId = 'zoneId_example'; // string | The id of the zone to retrieve

try {
    $result = $apiInstance->checkZone($serverId, $zoneId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->checkZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **zoneId** | **string**| The id of the zone to retrieve |

### Return type

**string**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createZone**
> \insidieux\PowerDnsClient\Model\Zone createZone($serverId, $zone, $rrsets)

Creates a new domain, returns the Zone on creation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$zone = new \insidieux\PowerDnsClient\Model\Zone(); // \insidieux\PowerDnsClient\Model\Zone | The zone struct to patch with
$rrsets = true; // bool | “true” (default) or “false”, whether to include the “rrsets” in the response Zone object.

try {
    $result = $apiInstance->createZone($serverId, $zone, $rrsets);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->createZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **zone** | [**\insidieux\PowerDnsClient\Model\Zone**](../Model/Zone.md)| The zone struct to patch with |
 **rrsets** | **bool**| “true” (default) or “false”, whether to include the “rrsets” in the response Zone object. | [optional] [default to true]

### Return type

[**\insidieux\PowerDnsClient\Model\Zone**](../Model/Zone.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteZone**
> deleteZone($serverId, $zoneId)

Deletes this zone, all attached metadata and rrsets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$zoneId = 'zoneId_example'; // string | The id of the zone to retrieve

try {
    $apiInstance->deleteZone($serverId, $zoneId);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->deleteZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **zoneId** | **string**| The id of the zone to retrieve |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listZone**
> \insidieux\PowerDnsClient\Model\Zone listZone($serverId, $zoneId)

zone managed by a server

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$zoneId = 'zoneId_example'; // string | The id of the zone to retrieve

try {
    $result = $apiInstance->listZone($serverId, $zoneId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->listZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **zoneId** | **string**| The id of the zone to retrieve |

### Return type

[**\insidieux\PowerDnsClient\Model\Zone**](../Model/Zone.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listZones**
> \insidieux\PowerDnsClient\Model\Zone[] listZones($serverId, $zone)

List all Zones in a server

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$zone = 'zone_example'; // string | When set to the name of a zone, only this zone is returned. If no zone with that name exists, the response is an empty array. This can e.g. be used to check if a zone exists in the database without having to guess/encode the zone's id or to check if a zone exists.

try {
    $result = $apiInstance->listZones($serverId, $zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->listZones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **zone** | **string**| When set to the name of a zone, only this zone is returned. If no zone with that name exists, the response is an empty array. This can e.g. be used to check if a zone exists in the database without having to guess/encode the zone&#39;s id or to check if a zone exists. | [optional]

### Return type

[**\insidieux\PowerDnsClient\Model\Zone[]**](../Model/Zone.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notifyZone**
> notifyZone($serverId, $zoneId)

Send a DNS NOTIFY to all slaves.

Fails when zone kind is not Master or Slave, or master and slave are disabled in the configuration. Only works for Slave if renotify is on. Clients MUST NOT send a body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$zoneId = 'zoneId_example'; // string | The id of the zone to retrieve

try {
    $apiInstance->notifyZone($serverId, $zoneId);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->notifyZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **zoneId** | **string**| The id of the zone to retrieve |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchZone**
> patchZone($serverId, $zoneId, $zone)

Creates/modifies/deletes RRsets present in the payload and their comments. Returns 204 No Content on success.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$zoneId = 'zoneId_example'; // string | 
$zone = new \insidieux\PowerDnsClient\Model\Zone(); // \insidieux\PowerDnsClient\Model\Zone | The zone struct to patch with

try {
    $apiInstance->patchZone($serverId, $zoneId, $zone);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->patchZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **zoneId** | **string**|  |
 **zone** | [**\insidieux\PowerDnsClient\Model\Zone**](../Model/Zone.md)| The zone struct to patch with |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putZone**
> putZone($serverId, $zoneId, $zone)

Modifies basic zone data (metadata).

Allowed fields in client body: all except id, url and name. Returns 204 No Content on success.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$zoneId = 'zoneId_example'; // string | 
$zone = new \insidieux\PowerDnsClient\Model\Zone(); // \insidieux\PowerDnsClient\Model\Zone | The zone struct to patch with

try {
    $apiInstance->putZone($serverId, $zoneId, $zone);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->putZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **zoneId** | **string**|  |
 **zone** | [**\insidieux\PowerDnsClient\Model\Zone**](../Model/Zone.md)| The zone struct to patch with |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rectifyZone**
> string rectifyZone($serverId, $zoneId)

Rectify the zone data.

This does not take into account the API-RECTIFY metadata. Fails on slave zones and zones that do not have DNSSEC.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$zoneId = 'zoneId_example'; // string | The id of the zone to retrieve

try {
    $result = $apiInstance->rectifyZone($serverId, $zoneId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->rectifyZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **zoneId** | **string**| The id of the zone to retrieve |

### Return type

**string**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

