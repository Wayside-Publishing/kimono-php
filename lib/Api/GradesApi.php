<?php
/**
 * GradesApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Kimono
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Interop Data API
 *
 * Interop Data APIs provide access to the data objects and events from Interop Cloud repositories and Integration repositories
 *
 * The version of the OpenAPI document: 2.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Kimono\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Kimono\ApiException;
use Kimono\Configuration;
use Kimono\HeaderSelector;
use Kimono\ObjectSerializer;

/**
 * GradesApi Class Doc Comment
 *
 * @category Class
 * @package  Kimono
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GradesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'listGradingCategories' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation listGradingCategories
     *
     * List all Grading Categories
     *
     * @param  int $page Specify the page number (defaults to 0) (optional)
     * @param  int $page_size Specify the page_size (defaults to the maximum page size) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listGradingCategories'] to see the possible values for this operation
     *
     * @throws \Kimono\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Kimono\Model\GradingCategorysResponse
     */
    public function listGradingCategories($page = null, $page_size = null, string $contentType = self::contentTypes['listGradingCategories'][0])
    {
        list($response) = $this->listGradingCategoriesWithHttpInfo($page, $page_size, $contentType);
        return $response;
    }

    /**
     * Operation listGradingCategoriesWithHttpInfo
     *
     * List all Grading Categories
     *
     * @param  int $page Specify the page number (defaults to 0) (optional)
     * @param  int $page_size Specify the page_size (defaults to the maximum page size) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listGradingCategories'] to see the possible values for this operation
     *
     * @throws \Kimono\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Kimono\Model\GradingCategorysResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listGradingCategoriesWithHttpInfo($page = null, $page_size = null, string $contentType = self::contentTypes['listGradingCategories'][0])
    {
        $request = $this->listGradingCategoriesRequest($page, $page_size, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Kimono\Model\GradingCategorysResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Kimono\Model\GradingCategorysResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Kimono\Model\GradingCategorysResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Kimono\Model\GradingCategorysResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        '\Kimono\Model\GradingCategorysResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listGradingCategoriesAsync
     *
     * List all Grading Categories
     *
     * @param  int $page Specify the page number (defaults to 0) (optional)
     * @param  int $page_size Specify the page_size (defaults to the maximum page size) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listGradingCategories'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listGradingCategoriesAsync($page = null, $page_size = null, string $contentType = self::contentTypes['listGradingCategories'][0])
    {
        return $this->listGradingCategoriesAsyncWithHttpInfo($page, $page_size, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listGradingCategoriesAsyncWithHttpInfo
     *
     * List all Grading Categories
     *
     * @param  int $page Specify the page number (defaults to 0) (optional)
     * @param  int $page_size Specify the page_size (defaults to the maximum page size) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listGradingCategories'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listGradingCategoriesAsyncWithHttpInfo($page = null, $page_size = null, string $contentType = self::contentTypes['listGradingCategories'][0])
    {
        $returnType = '\Kimono\Model\GradingCategorysResponse';
        $request = $this->listGradingCategoriesRequest($page, $page_size, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listGradingCategories'
     *
     * @param  int $page Specify the page number (defaults to 0) (optional)
     * @param  int $page_size Specify the page_size (defaults to the maximum page size) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listGradingCategories'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listGradingCategoriesRequest($page = null, $page_size = null, string $contentType = self::contentTypes['listGradingCategories'][0])
    {




        $resourcePath = '/grades/categories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page_size,
            'page_size', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}