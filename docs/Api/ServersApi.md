# insidieux\PowerDnsClient\ServersApi

All URIs are relative to *http://localhost:8081/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cacheFlushByName**](ServersApi.md#cacheFlushByName) | **PUT** /servers/{server_id}/cache/flush | Flush a cache-entry by name
[**listServer**](ServersApi.md#listServer) | **GET** /servers/{server_id} | List a server
[**listServers**](ServersApi.md#listServers) | **GET** /servers | List all servers


# **cacheFlushByName**
> \insidieux\PowerDnsClient\Model\CacheFlushResult cacheFlushByName($serverId, $domain)

Flush a cache-entry by name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$domain = 'domain_example'; // string | The domain name to flush from the cache

try {
    $result = $apiInstance->cacheFlushByName($serverId, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->cacheFlushByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **domain** | **string**| The domain name to flush from the cache |

### Return type

[**\insidieux\PowerDnsClient\Model\CacheFlushResult**](../Model/CacheFlushResult.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listServer**
> \insidieux\PowerDnsClient\Model\Server listServer($serverId)

List a server

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve

try {
    $result = $apiInstance->listServer($serverId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->listServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |

### Return type

[**\insidieux\PowerDnsClient\Model\Server**](../Model/Server.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listServers**
> \insidieux\PowerDnsClient\Model\Server[] listServers()

List all servers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listServers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->listServers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\insidieux\PowerDnsClient\Model\Server[]**](../Model/Server.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

