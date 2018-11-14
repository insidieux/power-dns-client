# insidieux\PowerDnsClient\StatsApi

All URIs are relative to *http://localhost:8081/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStats**](StatsApi.md#getStats) | **GET** /servers/{server_id}/statistics | Query statistics.


# **getStats**
> object[] getStats($serverId)

Query statistics.

Query PowerDNS internal statistics. Returns a list of BaseStatisticItem derived elements.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve

try {
    $result = $apiInstance->getStats($serverId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->getStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |

### Return type

**object[]**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

