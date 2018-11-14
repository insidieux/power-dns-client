# power-dns-client
No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 0.0.13
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

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
      "url": "https://github.com/insidieux/power-dns-client.git"
    }
  ],
  "require": {
    "insidieux/power-dns-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/power-dns-client/vendor/autoload.php');
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

## Documentation for API Endpoints

All URIs are relative to *http://localhost:8081/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ConfigApi* | [**getConfig**](docs/Api/ConfigApi.md#getconfig) | **GET** /servers/{server_id}/config | Returns all ConfigSettings for a single server
*ConfigApi* | [**getConfigSetting**](docs/Api/ConfigApi.md#getconfigsetting) | **GET** /servers/{server_id}/config/{config_setting_name} | Returns a specific ConfigSetting for a single server
*SearchApi* | [**searchData**](docs/Api/SearchApi.md#searchdata) | **GET** /servers/{server_id}/search-data | Search the data inside PowerDNS
*ServersApi* | [**cacheFlushByName**](docs/Api/ServersApi.md#cacheflushbyname) | **PUT** /servers/{server_id}/cache/flush | Flush a cache-entry by name
*ServersApi* | [**listServer**](docs/Api/ServersApi.md#listserver) | **GET** /servers/{server_id} | List a server
*ServersApi* | [**listServers**](docs/Api/ServersApi.md#listservers) | **GET** /servers | List all servers
*StatsApi* | [**getStats**](docs/Api/StatsApi.md#getstats) | **GET** /servers/{server_id}/statistics | Query statistics.
*ZonecryptokeyApi* | [**createCryptokey**](docs/Api/ZonecryptokeyApi.md#createcryptokey) | **POST** /servers/{server_id}/zones/{zone_id}/cryptokeys | Creates a Cryptokey
*ZonecryptokeyApi* | [**deleteCryptokey**](docs/Api/ZonecryptokeyApi.md#deletecryptokey) | **DELETE** /servers/{server_id}/zones/{zone_id}/cryptokeys/{cryptokey_id} | This method deletes a key specified by cryptokey_id.
*ZonecryptokeyApi* | [**getCryptokey**](docs/Api/ZonecryptokeyApi.md#getcryptokey) | **GET** /servers/{server_id}/zones/{zone_id}/cryptokeys/{cryptokey_id} | Returns all data about the CryptoKey, including the privatekey.
*ZonecryptokeyApi* | [**listCryptokeys**](docs/Api/ZonecryptokeyApi.md#listcryptokeys) | **GET** /servers/{server_id}/zones/{zone_id}/cryptokeys | Get all CryptoKeys for a zone, except the privatekey
*ZonecryptokeyApi* | [**modifyCryptokey**](docs/Api/ZonecryptokeyApi.md#modifycryptokey) | **PUT** /servers/{server_id}/zones/{zone_id}/cryptokeys/{cryptokey_id} | This method (de)activates a key from zone_name specified by cryptokey_id
*ZonemetadataApi* | [**createMetadata**](docs/Api/ZonemetadataApi.md#createmetadata) | **POST** /servers/{server_id}/zones/{zone_id}/metadata | Creates a set of metadata entries
*ZonemetadataApi* | [**deleteMetadata**](docs/Api/ZonemetadataApi.md#deletemetadata) | **DELETE** /servers/{server_id}/zones/{zone_id}/metadata/{metadata_kind} | Delete all items of a single kind of domain metadata.
*ZonemetadataApi* | [**getMetadata**](docs/Api/ZonemetadataApi.md#getmetadata) | **GET** /servers/{server_id}/zones/{zone_id}/metadata/{metadata_kind} | Get the content of a single kind of domain metadata as a list of MetaData objects.
*ZonemetadataApi* | [**listMetadata**](docs/Api/ZonemetadataApi.md#listmetadata) | **GET** /servers/{server_id}/zones/{zone_id}/metadata | Get all the MetaData associated with the zone.
*ZonemetadataApi* | [**modifyMetadata**](docs/Api/ZonemetadataApi.md#modifymetadata) | **PUT** /servers/{server_id}/zones/{zone_id}/metadata/{metadata_kind} | Modify the content of a single kind of domain metadata.
*ZonesApi* | [**axfrExportZone**](docs/Api/ZonesApi.md#axfrexportzone) | **GET** /servers/{server_id}/zones/{zone_id}/export | Returns the zone in AXFR format.
*ZonesApi* | [**axfrRetrieveZone**](docs/Api/ZonesApi.md#axfrretrievezone) | **PUT** /servers/{server_id}/zones/{zone_id}/axfr-retrieve | Retrieve slave zone from its master.
*ZonesApi* | [**checkZone**](docs/Api/ZonesApi.md#checkzone) | **GET** /servers/{server_id}/zones/{zone_id}/check | Verify zone contents/configuration.
*ZonesApi* | [**createZone**](docs/Api/ZonesApi.md#createzone) | **POST** /servers/{server_id}/zones | Creates a new domain, returns the Zone on creation.
*ZonesApi* | [**deleteZone**](docs/Api/ZonesApi.md#deletezone) | **DELETE** /servers/{server_id}/zones/{zone_id} | Deletes this zone, all attached metadata and rrsets.
*ZonesApi* | [**listZone**](docs/Api/ZonesApi.md#listzone) | **GET** /servers/{server_id}/zones/{zone_id} | zone managed by a server
*ZonesApi* | [**listZones**](docs/Api/ZonesApi.md#listzones) | **GET** /servers/{server_id}/zones | List all Zones in a server
*ZonesApi* | [**notifyZone**](docs/Api/ZonesApi.md#notifyzone) | **PUT** /servers/{server_id}/zones/{zone_id}/notify | Send a DNS NOTIFY to all slaves.
*ZonesApi* | [**patchZone**](docs/Api/ZonesApi.md#patchzone) | **PATCH** /servers/{server_id}/zones/{zone_id} | Creates/modifies/deletes RRsets present in the payload and their comments. Returns 204 No Content on success.
*ZonesApi* | [**putZone**](docs/Api/ZonesApi.md#putzone) | **PUT** /servers/{server_id}/zones/{zone_id} | Modifies basic zone data (metadata).
*ZonesApi* | [**rectifyZone**](docs/Api/ZonesApi.md#rectifyzone) | **PUT** /servers/{server_id}/zones/{zone_id}/rectify | Rectify the zone data.


## Documentation For Models

 - [BaseStatisticItem](docs/Model/BaseStatisticItem.md)
 - [CacheFlushResult](docs/Model/CacheFlushResult.md)
 - [Comment](docs/Model/Comment.md)
 - [ConfigSetting](docs/Model/ConfigSetting.md)
 - [Cryptokey](docs/Model/Cryptokey.md)
 - [MapStatisticItem](docs/Model/MapStatisticItem.md)
 - [Metadata](docs/Model/Metadata.md)
 - [RRSet](docs/Model/RRSet.md)
 - [Record](docs/Model/Record.md)
 - [RingStatisticItem](docs/Model/RingStatisticItem.md)
 - [SearchResult](docs/Model/SearchResult.md)
 - [SearchResultComment](docs/Model/SearchResultComment.md)
 - [SearchResultRecord](docs/Model/SearchResultRecord.md)
 - [SearchResultZone](docs/Model/SearchResultZone.md)
 - [SearchResults](docs/Model/SearchResults.md)
 - [Server](docs/Model/Server.md)
 - [Servers](docs/Model/Servers.md)
 - [StatisticItem](docs/Model/StatisticItem.md)
 - [Zone](docs/Model/Zone.md)
 - [Zones](docs/Model/Zones.md)


## Documentation For Authorization


## APIKeyHeader

- **Type**: API key
- **API key parameter name**: X-API-Key
- **Location**: HTTP header


## Author



