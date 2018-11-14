# insidieux\PowerDnsClient\ConfigApi

All URIs are relative to *http://localhost:8081/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getConfig**](ConfigApi.md#getConfig) | **GET** /servers/{server_id}/config | Returns all ConfigSettings for a single server
[**getConfigSetting**](ConfigApi.md#getConfigSetting) | **GET** /servers/{server_id}/config/{config_setting_name} | Returns a specific ConfigSetting for a single server


# **getConfig**
> \insidieux\PowerDnsClient\Model\ConfigSetting[] getConfig($serverId)

Returns all ConfigSettings for a single server

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve

try {
    $result = $apiInstance->getConfig($serverId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->getConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |

### Return type

[**\insidieux\PowerDnsClient\Model\ConfigSetting[]**](../Model/ConfigSetting.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfigSetting**
> \insidieux\PowerDnsClient\Model\ConfigSetting getConfigSetting($serverId, $configSettingName)

Returns a specific ConfigSetting for a single server

NOT IMPLEMENTED

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = insidieux\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new insidieux\PowerDnsClient\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$configSettingName = 'configSettingName_example'; // string | The name of the setting to retrieve

try {
    $result = $apiInstance->getConfigSetting($serverId, $configSettingName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->getConfigSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **configSettingName** | **string**| The name of the setting to retrieve |

### Return type

[**\insidieux\PowerDnsClient\Model\ConfigSetting**](../Model/ConfigSetting.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

