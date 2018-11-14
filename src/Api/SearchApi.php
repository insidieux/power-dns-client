<?php
/**
 * SearchApi
 * PHP version 5
 *
 * @category Class
 * @package  insidieux\PowerDnsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PowerDNS Authoritative HTTP API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 0.0.13
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace insidieux\PowerDnsClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use insidieux\PowerDnsClient\ApiException;
use insidieux\PowerDnsClient\Configuration;
use insidieux\PowerDnsClient\HeaderSelector;
use insidieux\PowerDnsClient\ObjectSerializer;

/**
 * SearchApi Class Doc Comment
 *
 * @category Class
 * @package  insidieux\PowerDnsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SearchApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $configuration;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->configuration = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * Operation searchData
     *
     * Search the data inside PowerDNS
     *
     * @param  string $serverId The id of the server to retrieve (required)
     * @param  string $q The string to search for (required)
     * @param  int $max Maximum number of entries to return (required)
     *
     * @throws \insidieux\PowerDnsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \insidieux\PowerDnsClient\Model\SearchResults
     */
    public function searchData($serverId, $q, $max)
    {
        list($response) = $this->searchDataWithHttpInfo($serverId, $q, $max);
        return $response;
    }

    /**
     * Operation searchDataWithHttpInfo
     *
     * Search the data inside PowerDNS
     *
     * @param  string $serverId The id of the server to retrieve (required)
     * @param  string $q The string to search for (required)
     * @param  int $max Maximum number of entries to return (required)
     *
     * @throws \insidieux\PowerDnsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \insidieux\PowerDnsClient\Model\SearchResults, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchDataWithHttpInfo($serverId, $q, $max)
    {
        $request = $this->searchDataRequest($serverId, $q, $max);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\insidieux\PowerDnsClient\Model\SearchResults' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\insidieux\PowerDnsClient\Model\SearchResults', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\insidieux\PowerDnsClient\Model\SearchResults';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\insidieux\PowerDnsClient\Model\SearchResults',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation searchDataAsync
     *
     * Search the data inside PowerDNS
     *
     * @param  string $serverId The id of the server to retrieve (required)
     * @param  string $q The string to search for (required)
     * @param  int $max Maximum number of entries to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchDataAsync($serverId, $q, $max)
    {
        return $this->searchDataAsyncWithHttpInfo($serverId, $q, $max)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchDataAsyncWithHttpInfo
     *
     * Search the data inside PowerDNS
     *
     * @param  string $serverId The id of the server to retrieve (required)
     * @param  string $q The string to search for (required)
     * @param  int $max Maximum number of entries to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchDataAsyncWithHttpInfo($serverId, $q, $max)
    {
        $returnType = '\insidieux\PowerDnsClient\Model\SearchResults';
        $request = $this->searchDataRequest($serverId, $q, $max);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'searchData'
     *
     * @param  string $serverId The id of the server to retrieve (required)
     * @param  string $q The string to search for (required)
     * @param  int $max Maximum number of entries to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function searchDataRequest($serverId, $q, $max)
    {
        // verify the required parameter 'serverId' is set
        if ($serverId === null || (is_array($serverId) && count($serverId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $serverId when calling searchData'
            );
        }
        // verify the required parameter 'q' is set
        if ($q === null || (is_array($q) && count($q) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $q when calling searchData'
            );
        }
        // verify the required parameter 'max' is set
        if ($max === null || (is_array($max) && count($max) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $max when calling searchData'
            );
        }

        $resourcePath = '/servers/{server_id}/search-data';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($q !== null) {
            $queryParams['q'] = ObjectSerializer::toQueryValue($q);
        }
        // query params
        if ($max !== null) {
            $queryParams['max'] = ObjectSerializer::toQueryValue($max);
        }

        // path params
        if ($serverId !== null) {
            $resourcePath = str_replace(
                '{' . 'server_id' . '}',
                ObjectSerializer::toPathValue($serverId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->configuration->getApiKeyWithPrefix('X-API-Key');
        if ($apiKey !== null) {
            $headers['X-API-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->configuration->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->configuration->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->configuration->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->configuration->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->configuration->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->configuration->getDebugFile());
            }
        }

        return $options;
    }
}