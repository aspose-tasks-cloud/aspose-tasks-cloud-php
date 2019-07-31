<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TasksApi.php">
 *   Copyright (c) 2018 Aspose.Tasks Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace Aspose\Tasks;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use Aspose\Tasks\Model\Requests;
use GuzzleHttp\RequestOptions;

/*
 * TasksApi Aspose.Tasks Cloud API.
 */
class TasksApi
{
    /*
     * Stores client instance
     * @var ClientInterface client for calling api
     */
    protected $client;

    /*
     * Stores configuration
     * @var Configuration configuration info
     */
    protected $config;

    /*
     * Stores header selector
     * HeaderSelector class for header selection
     */
    protected $headerSelector;

    /*
     * Initialize a new instance of StorageApi
     * @param ClientInterface   $client client for calling api
     * @param Configuration   $config configuration info
     * @param HeaderSelector   $selector class for header selection
     */
    public function __construct(ClientInterface $client = null, Configuration $config = null, HeaderSelector $selector = null)
    {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /*
     * Gets the config
     * @return Configuration
     */
    public function getConfig() 
    {
        return $this->config;
    }

    /*
     * Operation deleteAssignment
     *
     * Deletes a project assignment with all references to it.
     *
     * @param Requests\DeleteAssignmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function deleteAssignment(Requests\DeleteAssignmentRequest $request)
    {
        try {
             list($response) = $this->deleteAssignmentWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->deleteAssignmentWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation deleteAssignmentWithHttpInfo
     *
     * Deletes a project assignment with all references to it.
     *
     * @param Requests\DeleteAssignmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AsposeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteAssignmentWithHttpInfo(Requests\DeleteAssignmentRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->DeleteAssignmentRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AsposeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation deleteAssignmentAsync
     *
     * Deletes a project assignment with all references to it.
     *
     * @param Requests\DeleteAssignmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAssignmentAsync(Requests\DeleteAssignmentRequest $request) 
    {
        return $this->deleteAssignmentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteAssignmentAsyncWithHttpInfo
     *
     * Deletes a project assignment with all references to it.
     *
     * @param Requests\DeleteAssignmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAssignmentAsyncWithHttpInfo(Requests\DeleteAssignmentRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->DeleteAssignmentRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'deleteAssignment'
     *
     * @param Requests\DeleteAssignmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function DeleteAssignmentRequest(Requests\DeleteAssignmentRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteAssignment');
        }
        // verify the required parameter 'assignment_uid' is set
        if ($request->assignment_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $assignment_uid when calling deleteAssignment');
        }

        $resourcePath = '/tasks/{name}/assignments/{assignmentUid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->assignment_uid !== null) {
            $localName = lcfirst('AssignmentUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->assignment_uid), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('DELETE', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation deleteCalendar
     *
     * Deletes a project calendar
     *
     * @param Requests\DeleteCalendarRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function deleteCalendar(Requests\DeleteCalendarRequest $request)
    {
        try {
             list($response) = $this->deleteCalendarWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->deleteCalendarWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation deleteCalendarWithHttpInfo
     *
     * Deletes a project calendar
     *
     * @param Requests\DeleteCalendarRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AsposeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteCalendarWithHttpInfo(Requests\DeleteCalendarRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->DeleteCalendarRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AsposeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation deleteCalendarAsync
     *
     * Deletes a project calendar
     *
     * @param Requests\DeleteCalendarRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteCalendarAsync(Requests\DeleteCalendarRequest $request) 
    {
        return $this->deleteCalendarAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteCalendarAsyncWithHttpInfo
     *
     * Deletes a project calendar
     *
     * @param Requests\DeleteCalendarRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteCalendarAsyncWithHttpInfo(Requests\DeleteCalendarRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->DeleteCalendarRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'deleteCalendar'
     *
     * @param Requests\DeleteCalendarRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function DeleteCalendarRequest(Requests\DeleteCalendarRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteCalendar');
        }
        // verify the required parameter 'calendar_uid' is set
        if ($request->calendar_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $calendar_uid when calling deleteCalendar');
        }

        $resourcePath = '/tasks/{name}/calendars/{calendarUid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->calendar_uid !== null) {
            $localName = lcfirst('CalendarUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->calendar_uid), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('DELETE', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation deleteCalendarException
     *
     * Deletes calendar exception from calendar exceptions collection.
     *
     * @param Requests\DeleteCalendarExceptionRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function deleteCalendarException(Requests\DeleteCalendarExceptionRequest $request)
    {
        try {
             list($response) = $this->deleteCalendarExceptionWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->deleteCalendarExceptionWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation deleteCalendarExceptionWithHttpInfo
     *
     * Deletes calendar exception from calendar exceptions collection.
     *
     * @param Requests\DeleteCalendarExceptionRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AsposeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteCalendarExceptionWithHttpInfo(Requests\DeleteCalendarExceptionRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->DeleteCalendarExceptionRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AsposeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation deleteCalendarExceptionAsync
     *
     * Deletes calendar exception from calendar exceptions collection.
     *
     * @param Requests\DeleteCalendarExceptionRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteCalendarExceptionAsync(Requests\DeleteCalendarExceptionRequest $request) 
    {
        return $this->deleteCalendarExceptionAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteCalendarExceptionAsyncWithHttpInfo
     *
     * Deletes calendar exception from calendar exceptions collection.
     *
     * @param Requests\DeleteCalendarExceptionRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteCalendarExceptionAsyncWithHttpInfo(Requests\DeleteCalendarExceptionRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->DeleteCalendarExceptionRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'deleteCalendarException'
     *
     * @param Requests\DeleteCalendarExceptionRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function DeleteCalendarExceptionRequest(Requests\DeleteCalendarExceptionRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteCalendarException');
        }
        // verify the required parameter 'calendar_uid' is set
        if ($request->calendar_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $calendar_uid when calling deleteCalendarException');
        }
        // verify the required parameter 'index' is set
        if ($request->index === null) {
            throw new \InvalidArgumentException('Missing the required parameter $index when calling deleteCalendarException');
        }

        $resourcePath = '/tasks/{name}/calendars/{calendarUid}/calendarExceptions/{index}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->calendar_uid !== null) {
            $localName = lcfirst('CalendarUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->calendar_uid), $resourcePath);
        }
        // path params
        if ($request->index !== null) {
            $localName = lcfirst('Index');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->index), $resourcePath);
        }

        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('DELETE', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation deleteExtendedAttributeByIndex
     *
     * Delete a project extended attribute.
     *
     * @param Requests\DeleteExtendedAttributeByIndexRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function deleteExtendedAttributeByIndex(Requests\DeleteExtendedAttributeByIndexRequest $request)
    {
        try {
             list($response) = $this->deleteExtendedAttributeByIndexWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->deleteExtendedAttributeByIndexWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation deleteExtendedAttributeByIndexWithHttpInfo
     *
     * Delete a project extended attribute.
     *
     * @param Requests\DeleteExtendedAttributeByIndexRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AsposeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteExtendedAttributeByIndexWithHttpInfo(Requests\DeleteExtendedAttributeByIndexRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->DeleteExtendedAttributeByIndexRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AsposeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation deleteExtendedAttributeByIndexAsync
     *
     * Delete a project extended attribute.
     *
     * @param Requests\DeleteExtendedAttributeByIndexRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteExtendedAttributeByIndexAsync(Requests\DeleteExtendedAttributeByIndexRequest $request) 
    {
        return $this->deleteExtendedAttributeByIndexAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteExtendedAttributeByIndexAsyncWithHttpInfo
     *
     * Delete a project extended attribute.
     *
     * @param Requests\DeleteExtendedAttributeByIndexRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteExtendedAttributeByIndexAsyncWithHttpInfo(Requests\DeleteExtendedAttributeByIndexRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->DeleteExtendedAttributeByIndexRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'deleteExtendedAttributeByIndex'
     *
     * @param Requests\DeleteExtendedAttributeByIndexRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function DeleteExtendedAttributeByIndexRequest(Requests\DeleteExtendedAttributeByIndexRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteExtendedAttributeByIndex');
        }
        // verify the required parameter 'index' is set
        if ($request->index === null) {
            throw new \InvalidArgumentException('Missing the required parameter $index when calling deleteExtendedAttributeByIndex');
        }

        $resourcePath = '/tasks/{name}/extendedAttributes/{index}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->index !== null) {
            $localName = lcfirst('Index');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->index), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('DELETE', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation deleteOutlineCodeByIndex
     *
     * Deletes a project outline code
     *
     * @param Requests\DeleteOutlineCodeByIndexRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function deleteOutlineCodeByIndex(Requests\DeleteOutlineCodeByIndexRequest $request)
    {
        try {
             list($response) = $this->deleteOutlineCodeByIndexWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->deleteOutlineCodeByIndexWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation deleteOutlineCodeByIndexWithHttpInfo
     *
     * Deletes a project outline code
     *
     * @param Requests\DeleteOutlineCodeByIndexRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AsposeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteOutlineCodeByIndexWithHttpInfo(Requests\DeleteOutlineCodeByIndexRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->DeleteOutlineCodeByIndexRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AsposeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation deleteOutlineCodeByIndexAsync
     *
     * Deletes a project outline code
     *
     * @param Requests\DeleteOutlineCodeByIndexRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteOutlineCodeByIndexAsync(Requests\DeleteOutlineCodeByIndexRequest $request) 
    {
        return $this->deleteOutlineCodeByIndexAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteOutlineCodeByIndexAsyncWithHttpInfo
     *
     * Deletes a project outline code
     *
     * @param Requests\DeleteOutlineCodeByIndexRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteOutlineCodeByIndexAsyncWithHttpInfo(Requests\DeleteOutlineCodeByIndexRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->DeleteOutlineCodeByIndexRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'deleteOutlineCodeByIndex'
     *
     * @param Requests\DeleteOutlineCodeByIndexRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function DeleteOutlineCodeByIndexRequest(Requests\DeleteOutlineCodeByIndexRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteOutlineCodeByIndex');
        }
        // verify the required parameter 'index' is set
        if ($request->index === null) {
            throw new \InvalidArgumentException('Missing the required parameter $index when calling deleteOutlineCodeByIndex');
        }

        $resourcePath = '/tasks/{name}/outlineCodes/{index}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->index !== null) {
            $localName = lcfirst('Index');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->index), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('DELETE', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation deleteResource
     *
     * Deletes a project resource with all references to it
     *
     * @param Requests\DeleteResourceRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function deleteResource(Requests\DeleteResourceRequest $request)
    {
        try {
             list($response) = $this->deleteResourceWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->deleteResourceWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation deleteResourceWithHttpInfo
     *
     * Deletes a project resource with all references to it
     *
     * @param Requests\DeleteResourceRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AsposeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteResourceWithHttpInfo(Requests\DeleteResourceRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->DeleteResourceRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AsposeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation deleteResourceAsync
     *
     * Deletes a project resource with all references to it
     *
     * @param Requests\DeleteResourceRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteResourceAsync(Requests\DeleteResourceRequest $request) 
    {
        return $this->deleteResourceAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteResourceAsyncWithHttpInfo
     *
     * Deletes a project resource with all references to it
     *
     * @param Requests\DeleteResourceRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteResourceAsyncWithHttpInfo(Requests\DeleteResourceRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->DeleteResourceRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'deleteResource'
     *
     * @param Requests\DeleteResourceRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function DeleteResourceRequest(Requests\DeleteResourceRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteResource');
        }
        // verify the required parameter 'resource_uid' is set
        if ($request->resource_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $resource_uid when calling deleteResource');
        }

        $resourcePath = '/tasks/{name}/resources/{resourceUid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->resource_uid !== null) {
            $localName = lcfirst('ResourceUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->resource_uid), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('DELETE', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation deleteTask
     *
     * Deletes a project task with all references to it and rebuilds tasks tree.
     *
     * @param Requests\DeleteTaskRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function deleteTask(Requests\DeleteTaskRequest $request)
    {
        try {
             list($response) = $this->deleteTaskWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->deleteTaskWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation deleteTaskWithHttpInfo
     *
     * Deletes a project task with all references to it and rebuilds tasks tree.
     *
     * @param Requests\DeleteTaskRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AsposeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteTaskWithHttpInfo(Requests\DeleteTaskRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->DeleteTaskRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AsposeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation deleteTaskAsync
     *
     * Deletes a project task with all references to it and rebuilds tasks tree.
     *
     * @param Requests\DeleteTaskRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteTaskAsync(Requests\DeleteTaskRequest $request) 
    {
        return $this->deleteTaskAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteTaskAsyncWithHttpInfo
     *
     * Deletes a project task with all references to it and rebuilds tasks tree.
     *
     * @param Requests\DeleteTaskRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteTaskAsyncWithHttpInfo(Requests\DeleteTaskRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->DeleteTaskRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'deleteTask'
     *
     * @param Requests\DeleteTaskRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function DeleteTaskRequest(Requests\DeleteTaskRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteTask');
        }
        // verify the required parameter 'task_uid' is set
        if ($request->task_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $task_uid when calling deleteTask');
        }

        $resourcePath = '/tasks/{name}/tasks/{taskUid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->task_uid !== null) {
            $localName = lcfirst('TaskUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->task_uid), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('DELETE', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation deleteTaskLink
     *
     * Delete task link.
     *
     * @param Requests\DeleteTaskLinkRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function deleteTaskLink(Requests\DeleteTaskLinkRequest $request)
    {
        try {
             list($response) = $this->deleteTaskLinkWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->deleteTaskLinkWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation deleteTaskLinkWithHttpInfo
     *
     * Delete task link.
     *
     * @param Requests\DeleteTaskLinkRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AsposeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteTaskLinkWithHttpInfo(Requests\DeleteTaskLinkRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->DeleteTaskLinkRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AsposeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation deleteTaskLinkAsync
     *
     * Delete task link.
     *
     * @param Requests\DeleteTaskLinkRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteTaskLinkAsync(Requests\DeleteTaskLinkRequest $request) 
    {
        return $this->deleteTaskLinkAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteTaskLinkAsyncWithHttpInfo
     *
     * Delete task link.
     *
     * @param Requests\DeleteTaskLinkRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteTaskLinkAsyncWithHttpInfo(Requests\DeleteTaskLinkRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->DeleteTaskLinkRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'deleteTaskLink'
     *
     * @param Requests\DeleteTaskLinkRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function DeleteTaskLinkRequest(Requests\DeleteTaskLinkRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteTaskLink');
        }
        // verify the required parameter 'index' is set
        if ($request->index === null) {
            throw new \InvalidArgumentException('Missing the required parameter $index when calling deleteTaskLink');
        }

        $resourcePath = '/tasks/{name}/taskLinks/{index}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->index !== null) {
            $localName = lcfirst('Index');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->index), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('DELETE', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getAssignment
     *
     * Read project assignment with the specified Uid.
     *
     * @param Requests\GetAssignmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AssignmentResponse
     */
    public function getAssignment(Requests\GetAssignmentRequest $request)
    {
        try {
             list($response) = $this->getAssignmentWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getAssignmentWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getAssignmentWithHttpInfo
     *
     * Read project assignment with the specified Uid.
     *
     * @param Requests\GetAssignmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AssignmentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAssignmentWithHttpInfo(Requests\GetAssignmentRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AssignmentResponse';
        $request = $this->GetAssignmentRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AssignmentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getAssignmentAsync
     *
     * Read project assignment with the specified Uid.
     *
     * @param Requests\GetAssignmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssignmentAsync(Requests\GetAssignmentRequest $request) 
    {
        return $this->getAssignmentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getAssignmentAsyncWithHttpInfo
     *
     * Read project assignment with the specified Uid.
     *
     * @param Requests\GetAssignmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssignmentAsyncWithHttpInfo(Requests\GetAssignmentRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AssignmentResponse';
        $request = $this->GetAssignmentRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getAssignment'
     *
     * @param Requests\GetAssignmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetAssignmentRequest(Requests\GetAssignmentRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getAssignment');
        }
        // verify the required parameter 'assignment_uid' is set
        if ($request->assignment_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $assignment_uid when calling getAssignment');
        }

        $resourcePath = '/tasks/{name}/assignments/{assignmentUid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->assignment_uid !== null) {
            $localName = lcfirst('AssignmentUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->assignment_uid), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getAssignmentTimephasedData
     *
     * Get timescaled data for an assignment with the specified Uid.
     *
     * @param Requests\GetAssignmentTimephasedDataRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\TimephasedDataResponse
     */
    public function getAssignmentTimephasedData(Requests\GetAssignmentTimephasedDataRequest $request)
    {
        try {
             list($response) = $this->getAssignmentTimephasedDataWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getAssignmentTimephasedDataWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getAssignmentTimephasedDataWithHttpInfo
     *
     * Get timescaled data for an assignment with the specified Uid.
     *
     * @param Requests\GetAssignmentTimephasedDataRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\TimephasedDataResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAssignmentTimephasedDataWithHttpInfo(Requests\GetAssignmentTimephasedDataRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\TimephasedDataResponse';
        $request = $this->GetAssignmentTimephasedDataRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\TimephasedDataResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getAssignmentTimephasedDataAsync
     *
     * Get timescaled data for an assignment with the specified Uid.
     *
     * @param Requests\GetAssignmentTimephasedDataRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssignmentTimephasedDataAsync(Requests\GetAssignmentTimephasedDataRequest $request) 
    {
        return $this->getAssignmentTimephasedDataAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getAssignmentTimephasedDataAsyncWithHttpInfo
     *
     * Get timescaled data for an assignment with the specified Uid.
     *
     * @param Requests\GetAssignmentTimephasedDataRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssignmentTimephasedDataAsyncWithHttpInfo(Requests\GetAssignmentTimephasedDataRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\TimephasedDataResponse';
        $request = $this->GetAssignmentTimephasedDataRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getAssignmentTimephasedData'
     *
     * @param Requests\GetAssignmentTimephasedDataRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetAssignmentTimephasedDataRequest(Requests\GetAssignmentTimephasedDataRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getAssignmentTimephasedData');
        }
        // verify the required parameter 'assignment_uid' is set
        if ($request->assignment_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $assignment_uid when calling getAssignmentTimephasedData');
        }

        $resourcePath = '/tasks/{name}/assignments/{assignmentUid}/timeScaleData';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->assignment_uid !== null) {
            $localName = lcfirst('AssignmentUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->assignment_uid), $resourcePath);
        }

        // query params
        if ($request->type !== null) {
            $localName = lcfirst('Type');
            $localValue = is_bool($request->type) ? ($request->type ? 'true' : 'false') : $request->type;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->start_date !== null) {
            $localName = lcfirst('StartDate');
            $localValue = is_bool($request->start_date) ? ($request->start_date ? 'true' : 'false') : $request->start_date;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->end_date !== null) {
            $localName = lcfirst('EndDate');
            $localValue = is_bool($request->end_date) ? ($request->end_date ? 'true' : 'false') : $request->end_date;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getAssignments
     *
     * Get project's assignment items.
     *
     * @param Requests\GetAssignmentsRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AssignmentItemsResponse
     */
    public function getAssignments(Requests\GetAssignmentsRequest $request)
    {
        try {
             list($response) = $this->getAssignmentsWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getAssignmentsWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getAssignmentsWithHttpInfo
     *
     * Get project's assignment items.
     *
     * @param Requests\GetAssignmentsRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AssignmentItemsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAssignmentsWithHttpInfo(Requests\GetAssignmentsRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AssignmentItemsResponse';
        $request = $this->GetAssignmentsRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AssignmentItemsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getAssignmentsAsync
     *
     * Get project's assignment items.
     *
     * @param Requests\GetAssignmentsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssignmentsAsync(Requests\GetAssignmentsRequest $request) 
    {
        return $this->getAssignmentsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getAssignmentsAsyncWithHttpInfo
     *
     * Get project's assignment items.
     *
     * @param Requests\GetAssignmentsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssignmentsAsyncWithHttpInfo(Requests\GetAssignmentsRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AssignmentItemsResponse';
        $request = $this->GetAssignmentsRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getAssignments'
     *
     * @param Requests\GetAssignmentsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetAssignmentsRequest(Requests\GetAssignmentsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getAssignments');
        }

        $resourcePath = '/tasks/{name}/assignments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getCalendar
     *
     * Get a project's calendar with the specified Uid.
     *
     * @param Requests\GetCalendarRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\CalendarResponse
     */
    public function getCalendar(Requests\GetCalendarRequest $request)
    {
        try {
             list($response) = $this->getCalendarWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getCalendarWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getCalendarWithHttpInfo
     *
     * Get a project's calendar with the specified Uid.
     *
     * @param Requests\GetCalendarRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\CalendarResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCalendarWithHttpInfo(Requests\GetCalendarRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\CalendarResponse';
        $request = $this->GetCalendarRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\CalendarResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getCalendarAsync
     *
     * Get a project's calendar with the specified Uid.
     *
     * @param Requests\GetCalendarRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCalendarAsync(Requests\GetCalendarRequest $request) 
    {
        return $this->getCalendarAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getCalendarAsyncWithHttpInfo
     *
     * Get a project's calendar with the specified Uid.
     *
     * @param Requests\GetCalendarRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCalendarAsyncWithHttpInfo(Requests\GetCalendarRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\CalendarResponse';
        $request = $this->GetCalendarRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getCalendar'
     *
     * @param Requests\GetCalendarRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetCalendarRequest(Requests\GetCalendarRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getCalendar');
        }
        // verify the required parameter 'calendar_uid' is set
        if ($request->calendar_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $calendar_uid when calling getCalendar');
        }

        $resourcePath = '/tasks/{name}/calendars/{calendarUid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->calendar_uid !== null) {
            $localName = lcfirst('CalendarUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->calendar_uid), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getCalendarExceptions
     *
     * Get a list of calendar's exceptions.
     *
     * @param Requests\GetCalendarExceptionsRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\CalendarExceptionsResponse
     */
    public function getCalendarExceptions(Requests\GetCalendarExceptionsRequest $request)
    {
        try {
             list($response) = $this->getCalendarExceptionsWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getCalendarExceptionsWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getCalendarExceptionsWithHttpInfo
     *
     * Get a list of calendar's exceptions.
     *
     * @param Requests\GetCalendarExceptionsRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\CalendarExceptionsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCalendarExceptionsWithHttpInfo(Requests\GetCalendarExceptionsRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\CalendarExceptionsResponse';
        $request = $this->GetCalendarExceptionsRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\CalendarExceptionsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getCalendarExceptionsAsync
     *
     * Get a list of calendar's exceptions.
     *
     * @param Requests\GetCalendarExceptionsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCalendarExceptionsAsync(Requests\GetCalendarExceptionsRequest $request) 
    {
        return $this->getCalendarExceptionsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getCalendarExceptionsAsyncWithHttpInfo
     *
     * Get a list of calendar's exceptions.
     *
     * @param Requests\GetCalendarExceptionsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCalendarExceptionsAsyncWithHttpInfo(Requests\GetCalendarExceptionsRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\CalendarExceptionsResponse';
        $request = $this->GetCalendarExceptionsRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getCalendarExceptions'
     *
     * @param Requests\GetCalendarExceptionsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetCalendarExceptionsRequest(Requests\GetCalendarExceptionsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getCalendarExceptions');
        }
        // verify the required parameter 'calendar_uid' is set
        if ($request->calendar_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $calendar_uid when calling getCalendarExceptions');
        }

        $resourcePath = '/tasks/{name}/calendars/{calendarUid}/calendarExceptions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->calendar_uid !== null) {
            $localName = lcfirst('CalendarUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->calendar_uid), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getCalendarWorkWeeks
     *
     * Gets the collection of work weeks of the specified calendar.
     *
     * @param Requests\GetCalendarWorkWeeksRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\CalendarWorkWeeksResponse
     */
    public function getCalendarWorkWeeks(Requests\GetCalendarWorkWeeksRequest $request)
    {
        try {
             list($response) = $this->getCalendarWorkWeeksWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getCalendarWorkWeeksWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getCalendarWorkWeeksWithHttpInfo
     *
     * Gets the collection of work weeks of the specified calendar.
     *
     * @param Requests\GetCalendarWorkWeeksRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\CalendarWorkWeeksResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCalendarWorkWeeksWithHttpInfo(Requests\GetCalendarWorkWeeksRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\CalendarWorkWeeksResponse';
        $request = $this->GetCalendarWorkWeeksRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\CalendarWorkWeeksResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getCalendarWorkWeeksAsync
     *
     * Gets the collection of work weeks of the specified calendar.
     *
     * @param Requests\GetCalendarWorkWeeksRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCalendarWorkWeeksAsync(Requests\GetCalendarWorkWeeksRequest $request) 
    {
        return $this->getCalendarWorkWeeksAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getCalendarWorkWeeksAsyncWithHttpInfo
     *
     * Gets the collection of work weeks of the specified calendar.
     *
     * @param Requests\GetCalendarWorkWeeksRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCalendarWorkWeeksAsyncWithHttpInfo(Requests\GetCalendarWorkWeeksRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\CalendarWorkWeeksResponse';
        $request = $this->GetCalendarWorkWeeksRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getCalendarWorkWeeks'
     *
     * @param Requests\GetCalendarWorkWeeksRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetCalendarWorkWeeksRequest(Requests\GetCalendarWorkWeeksRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getCalendarWorkWeeks');
        }
        // verify the required parameter 'calendar_uid' is set
        if ($request->calendar_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $calendar_uid when calling getCalendarWorkWeeks');
        }

        $resourcePath = '/tasks/{name}/calendars/{calendarUid}/workWeeks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->calendar_uid !== null) {
            $localName = lcfirst('CalendarUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->calendar_uid), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getCalendars
     *
     * Read project calendar items.
     *
     * @param Requests\GetCalendarsRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\CalendarItemsResponse
     */
    public function getCalendars(Requests\GetCalendarsRequest $request)
    {
        try {
             list($response) = $this->getCalendarsWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getCalendarsWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getCalendarsWithHttpInfo
     *
     * Read project calendar items.
     *
     * @param Requests\GetCalendarsRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\CalendarItemsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCalendarsWithHttpInfo(Requests\GetCalendarsRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\CalendarItemsResponse';
        $request = $this->GetCalendarsRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\CalendarItemsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getCalendarsAsync
     *
     * Read project calendar items.
     *
     * @param Requests\GetCalendarsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCalendarsAsync(Requests\GetCalendarsRequest $request) 
    {
        return $this->getCalendarsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getCalendarsAsyncWithHttpInfo
     *
     * Read project calendar items.
     *
     * @param Requests\GetCalendarsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCalendarsAsyncWithHttpInfo(Requests\GetCalendarsRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\CalendarItemsResponse';
        $request = $this->GetCalendarsRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getCalendars'
     *
     * @param Requests\GetCalendarsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetCalendarsRequest(Requests\GetCalendarsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getCalendars');
        }

        $resourcePath = '/tasks/{name}/calendars';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getCriticalPath
     *
     * Returns the list of the tasks which must be completed on time for a project to finish on schedule. Each task of the project is represented as a task item here, which is light-weighted task representation of the project task..
     *
     * @param Requests\GetCriticalPathRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\TaskItemsResponse
     */
    public function getCriticalPath(Requests\GetCriticalPathRequest $request)
    {
        try {
             list($response) = $this->getCriticalPathWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getCriticalPathWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getCriticalPathWithHttpInfo
     *
     * Returns the list of the tasks which must be completed on time for a project to finish on schedule. Each task of the project is represented as a task item here, which is light-weighted task representation of the project task..
     *
     * @param Requests\GetCriticalPathRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\TaskItemsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCriticalPathWithHttpInfo(Requests\GetCriticalPathRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\TaskItemsResponse';
        $request = $this->GetCriticalPathRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\TaskItemsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getCriticalPathAsync
     *
     * Returns the list of the tasks which must be completed on time for a project to finish on schedule. Each task of the project is represented as a task item here, which is light-weighted task representation of the project task..
     *
     * @param Requests\GetCriticalPathRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCriticalPathAsync(Requests\GetCriticalPathRequest $request) 
    {
        return $this->getCriticalPathAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getCriticalPathAsyncWithHttpInfo
     *
     * Returns the list of the tasks which must be completed on time for a project to finish on schedule. Each task of the project is represented as a task item here, which is light-weighted task representation of the project task..
     *
     * @param Requests\GetCriticalPathRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCriticalPathAsyncWithHttpInfo(Requests\GetCriticalPathRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\TaskItemsResponse';
        $request = $this->GetCriticalPathRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getCriticalPath'
     *
     * @param Requests\GetCriticalPathRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetCriticalPathRequest(Requests\GetCriticalPathRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getCriticalPath');
        }

        $resourcePath = '/tasks/{name}/criticalPath';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getDocumentProperties
     *
     * Get a collection of a project's document properties.
     *
     * @param Requests\GetDocumentPropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\DocumentPropertiesResponse
     */
    public function getDocumentProperties(Requests\GetDocumentPropertiesRequest $request)
    {
        try {
             list($response) = $this->getDocumentPropertiesWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getDocumentPropertiesWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getDocumentPropertiesWithHttpInfo
     *
     * Get a collection of a project's document properties.
     *
     * @param Requests\GetDocumentPropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\DocumentPropertiesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDocumentPropertiesWithHttpInfo(Requests\GetDocumentPropertiesRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\DocumentPropertiesResponse';
        $request = $this->GetDocumentPropertiesRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\DocumentPropertiesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getDocumentPropertiesAsync
     *
     * Get a collection of a project's document properties.
     *
     * @param Requests\GetDocumentPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDocumentPropertiesAsync(Requests\GetDocumentPropertiesRequest $request) 
    {
        return $this->getDocumentPropertiesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getDocumentPropertiesAsyncWithHttpInfo
     *
     * Get a collection of a project's document properties.
     *
     * @param Requests\GetDocumentPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDocumentPropertiesAsyncWithHttpInfo(Requests\GetDocumentPropertiesRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\DocumentPropertiesResponse';
        $request = $this->GetDocumentPropertiesRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getDocumentProperties'
     *
     * @param Requests\GetDocumentPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetDocumentPropertiesRequest(Requests\GetDocumentPropertiesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getDocumentProperties');
        }

        $resourcePath = '/tasks/{name}/documentproperties';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getDocumentProperty
     *
     * Get a document property by name.
     *
     * @param Requests\GetDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\DocumentPropertyResponse
     */
    public function getDocumentProperty(Requests\GetDocumentPropertyRequest $request)
    {
        try {
             list($response) = $this->getDocumentPropertyWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getDocumentPropertyWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getDocumentPropertyWithHttpInfo
     *
     * Get a document property by name.
     *
     * @param Requests\GetDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\DocumentPropertyResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDocumentPropertyWithHttpInfo(Requests\GetDocumentPropertyRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\DocumentPropertyResponse';
        $request = $this->GetDocumentPropertyRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\DocumentPropertyResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getDocumentPropertyAsync
     *
     * Get a document property by name.
     *
     * @param Requests\GetDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDocumentPropertyAsync(Requests\GetDocumentPropertyRequest $request) 
    {
        return $this->getDocumentPropertyAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getDocumentPropertyAsyncWithHttpInfo
     *
     * Get a document property by name.
     *
     * @param Requests\GetDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDocumentPropertyAsyncWithHttpInfo(Requests\GetDocumentPropertyRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\DocumentPropertyResponse';
        $request = $this->GetDocumentPropertyRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getDocumentProperty'
     *
     * @param Requests\GetDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetDocumentPropertyRequest(Requests\GetDocumentPropertyRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getDocumentProperty');
        }
        // verify the required parameter 'property_name' is set
        if ($request->property_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $property_name when calling getDocumentProperty');
        }

        $resourcePath = '/tasks/{name}/documentproperties/{propertyName}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->property_name !== null) {
            $localName = lcfirst('PropertyName');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->property_name), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getExtendedAttributeByIndex
     *
     * Get a project extended attribute definition with the specified index.
     *
     * @param Requests\GetExtendedAttributeByIndexRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\ExtendedAttributeResponse
     */
    public function getExtendedAttributeByIndex(Requests\GetExtendedAttributeByIndexRequest $request)
    {
        try {
             list($response) = $this->getExtendedAttributeByIndexWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getExtendedAttributeByIndexWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getExtendedAttributeByIndexWithHttpInfo
     *
     * Get a project extended attribute definition with the specified index.
     *
     * @param Requests\GetExtendedAttributeByIndexRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\ExtendedAttributeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getExtendedAttributeByIndexWithHttpInfo(Requests\GetExtendedAttributeByIndexRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\ExtendedAttributeResponse';
        $request = $this->GetExtendedAttributeByIndexRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\ExtendedAttributeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getExtendedAttributeByIndexAsync
     *
     * Get a project extended attribute definition with the specified index.
     *
     * @param Requests\GetExtendedAttributeByIndexRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getExtendedAttributeByIndexAsync(Requests\GetExtendedAttributeByIndexRequest $request) 
    {
        return $this->getExtendedAttributeByIndexAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getExtendedAttributeByIndexAsyncWithHttpInfo
     *
     * Get a project extended attribute definition with the specified index.
     *
     * @param Requests\GetExtendedAttributeByIndexRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getExtendedAttributeByIndexAsyncWithHttpInfo(Requests\GetExtendedAttributeByIndexRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\ExtendedAttributeResponse';
        $request = $this->GetExtendedAttributeByIndexRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getExtendedAttributeByIndex'
     *
     * @param Requests\GetExtendedAttributeByIndexRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetExtendedAttributeByIndexRequest(Requests\GetExtendedAttributeByIndexRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getExtendedAttributeByIndex');
        }
        // verify the required parameter 'index' is set
        if ($request->index === null) {
            throw new \InvalidArgumentException('Missing the required parameter $index when calling getExtendedAttributeByIndex');
        }

        $resourcePath = '/tasks/{name}/extendedAttributes/{index}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->index !== null) {
            $localName = lcfirst('Index');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->index), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getExtendedAttributes
     *
     * Get a project's extended attributes.
     *
     * @param Requests\GetExtendedAttributesRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\ExtendedAttributeItemsResponse
     */
    public function getExtendedAttributes(Requests\GetExtendedAttributesRequest $request)
    {
        try {
             list($response) = $this->getExtendedAttributesWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getExtendedAttributesWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getExtendedAttributesWithHttpInfo
     *
     * Get a project's extended attributes.
     *
     * @param Requests\GetExtendedAttributesRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\ExtendedAttributeItemsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getExtendedAttributesWithHttpInfo(Requests\GetExtendedAttributesRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\ExtendedAttributeItemsResponse';
        $request = $this->GetExtendedAttributesRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\ExtendedAttributeItemsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getExtendedAttributesAsync
     *
     * Get a project's extended attributes.
     *
     * @param Requests\GetExtendedAttributesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getExtendedAttributesAsync(Requests\GetExtendedAttributesRequest $request) 
    {
        return $this->getExtendedAttributesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getExtendedAttributesAsyncWithHttpInfo
     *
     * Get a project's extended attributes.
     *
     * @param Requests\GetExtendedAttributesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getExtendedAttributesAsyncWithHttpInfo(Requests\GetExtendedAttributesRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\ExtendedAttributeItemsResponse';
        $request = $this->GetExtendedAttributesRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getExtendedAttributes'
     *
     * @param Requests\GetExtendedAttributesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetExtendedAttributesRequest(Requests\GetExtendedAttributesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getExtendedAttributes');
        }

        $resourcePath = '/tasks/{name}/extendedAttributes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getOutlineCodeByIndex
     *
     * Get outline code by index.
     *
     * @param Requests\GetOutlineCodeByIndexRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\OutlineCodeResponse
     */
    public function getOutlineCodeByIndex(Requests\GetOutlineCodeByIndexRequest $request)
    {
        try {
             list($response) = $this->getOutlineCodeByIndexWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getOutlineCodeByIndexWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getOutlineCodeByIndexWithHttpInfo
     *
     * Get outline code by index.
     *
     * @param Requests\GetOutlineCodeByIndexRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\OutlineCodeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOutlineCodeByIndexWithHttpInfo(Requests\GetOutlineCodeByIndexRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\OutlineCodeResponse';
        $request = $this->GetOutlineCodeByIndexRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\OutlineCodeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getOutlineCodeByIndexAsync
     *
     * Get outline code by index.
     *
     * @param Requests\GetOutlineCodeByIndexRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOutlineCodeByIndexAsync(Requests\GetOutlineCodeByIndexRequest $request) 
    {
        return $this->getOutlineCodeByIndexAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getOutlineCodeByIndexAsyncWithHttpInfo
     *
     * Get outline code by index.
     *
     * @param Requests\GetOutlineCodeByIndexRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOutlineCodeByIndexAsyncWithHttpInfo(Requests\GetOutlineCodeByIndexRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\OutlineCodeResponse';
        $request = $this->GetOutlineCodeByIndexRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getOutlineCodeByIndex'
     *
     * @param Requests\GetOutlineCodeByIndexRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetOutlineCodeByIndexRequest(Requests\GetOutlineCodeByIndexRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getOutlineCodeByIndex');
        }
        // verify the required parameter 'index' is set
        if ($request->index === null) {
            throw new \InvalidArgumentException('Missing the required parameter $index when calling getOutlineCodeByIndex');
        }

        $resourcePath = '/tasks/{name}/outlineCodes/{index}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->index !== null) {
            $localName = lcfirst('Index');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->index), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getOutlineCodes
     *
     * Get a project's outline codes.
     *
     * @param Requests\GetOutlineCodesRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\OutlineCodeItemsResponse
     */
    public function getOutlineCodes(Requests\GetOutlineCodesRequest $request)
    {
        try {
             list($response) = $this->getOutlineCodesWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getOutlineCodesWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getOutlineCodesWithHttpInfo
     *
     * Get a project's outline codes.
     *
     * @param Requests\GetOutlineCodesRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\OutlineCodeItemsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOutlineCodesWithHttpInfo(Requests\GetOutlineCodesRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\OutlineCodeItemsResponse';
        $request = $this->GetOutlineCodesRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\OutlineCodeItemsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getOutlineCodesAsync
     *
     * Get a project's outline codes.
     *
     * @param Requests\GetOutlineCodesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOutlineCodesAsync(Requests\GetOutlineCodesRequest $request) 
    {
        return $this->getOutlineCodesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getOutlineCodesAsyncWithHttpInfo
     *
     * Get a project's outline codes.
     *
     * @param Requests\GetOutlineCodesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOutlineCodesAsyncWithHttpInfo(Requests\GetOutlineCodesRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\OutlineCodeItemsResponse';
        $request = $this->GetOutlineCodesRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getOutlineCodes'
     *
     * @param Requests\GetOutlineCodesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetOutlineCodesRequest(Requests\GetOutlineCodesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getOutlineCodes');
        }

        $resourcePath = '/tasks/{name}/outlineCodes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getPageCount
     *
     * Returns page count for the project to be rendered using given Timescale and PresentationFormat  or specified PageSize.
     *
     * @param Requests\GetPageCountRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\PageCountResponse
     */
    public function getPageCount(Requests\GetPageCountRequest $request)
    {
        try {
             list($response) = $this->getPageCountWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getPageCountWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getPageCountWithHttpInfo
     *
     * Returns page count for the project to be rendered using given Timescale and PresentationFormat  or specified PageSize.
     *
     * @param Requests\GetPageCountRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\PageCountResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPageCountWithHttpInfo(Requests\GetPageCountRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\PageCountResponse';
        $request = $this->GetPageCountRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\PageCountResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getPageCountAsync
     *
     * Returns page count for the project to be rendered using given Timescale and PresentationFormat  or specified PageSize.
     *
     * @param Requests\GetPageCountRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPageCountAsync(Requests\GetPageCountRequest $request) 
    {
        return $this->getPageCountAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getPageCountAsyncWithHttpInfo
     *
     * Returns page count for the project to be rendered using given Timescale and PresentationFormat  or specified PageSize.
     *
     * @param Requests\GetPageCountRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPageCountAsyncWithHttpInfo(Requests\GetPageCountRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\PageCountResponse';
        $request = $this->GetPageCountRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getPageCount'
     *
     * @param Requests\GetPageCountRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetPageCountRequest(Requests\GetPageCountRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getPageCount');
        }

        $resourcePath = '/tasks/{name}/pagecount';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->page_size !== null) {
            $localName = lcfirst('PageSize');
            $localValue = is_bool($request->page_size) ? ($request->page_size ? 'true' : 'false') : $request->page_size;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->presentation_format !== null) {
            $localName = lcfirst('PresentationFormat');
            $localValue = is_bool($request->presentation_format) ? ($request->presentation_format ? 'true' : 'false') : $request->presentation_format;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->timescale !== null) {
            $localName = lcfirst('Timescale');
            $localValue = is_bool($request->timescale) ? ($request->timescale ? 'true' : 'false') : $request->timescale;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->start_date !== null) {
            $localName = lcfirst('StartDate');
            $localValue = is_bool($request->start_date) ? ($request->start_date ? 'true' : 'false') : $request->start_date;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->end_date !== null) {
            $localName = lcfirst('EndDate');
            $localValue = is_bool($request->end_date) ? ($request->end_date ? 'true' : 'false') : $request->end_date;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getProjectIds
     *
     * Get Uids of projects contained in the file.
     *
     * @param Requests\GetProjectIdsRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\ProjectIdsResponse
     */
    public function getProjectIds(Requests\GetProjectIdsRequest $request)
    {
        try {
             list($response) = $this->getProjectIdsWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getProjectIdsWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getProjectIdsWithHttpInfo
     *
     * Get Uids of projects contained in the file.
     *
     * @param Requests\GetProjectIdsRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\ProjectIdsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProjectIdsWithHttpInfo(Requests\GetProjectIdsRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\ProjectIdsResponse';
        $request = $this->GetProjectIdsRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\ProjectIdsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getProjectIdsAsync
     *
     * Get Uids of projects contained in the file.
     *
     * @param Requests\GetProjectIdsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProjectIdsAsync(Requests\GetProjectIdsRequest $request) 
    {
        return $this->getProjectIdsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getProjectIdsAsyncWithHttpInfo
     *
     * Get Uids of projects contained in the file.
     *
     * @param Requests\GetProjectIdsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProjectIdsAsyncWithHttpInfo(Requests\GetProjectIdsRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\ProjectIdsResponse';
        $request = $this->GetProjectIdsRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getProjectIds'
     *
     * @param Requests\GetProjectIdsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetProjectIdsRequest(Requests\GetProjectIdsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getProjectIds');
        }

        $resourcePath = '/tasks/{name}/projectids';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getReportPdf
     *
     * Returns created report in PDF format.
     *
     * @param Requests\GetReportPdfRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function getReportPdf(Requests\GetReportPdfRequest $request)
    {
        try {
             list($response) = $this->getReportPdfWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getReportPdfWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getReportPdfWithHttpInfo
     *
     * Returns created report in PDF format.
     *
     * @param Requests\GetReportPdfRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function getReportPdfWithHttpInfo(Requests\GetReportPdfRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->GetReportPdfRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getReportPdfAsync
     *
     * Returns created report in PDF format.
     *
     * @param Requests\GetReportPdfRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportPdfAsync(Requests\GetReportPdfRequest $request) 
    {
        return $this->getReportPdfAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getReportPdfAsyncWithHttpInfo
     *
     * Returns created report in PDF format.
     *
     * @param Requests\GetReportPdfRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportPdfAsyncWithHttpInfo(Requests\GetReportPdfRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->GetReportPdfRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getReportPdf'
     *
     * @param Requests\GetReportPdfRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetReportPdfRequest(Requests\GetReportPdfRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getReportPdf');
        }
        // verify the required parameter 'type' is set
        if ($request->type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $type when calling getReportPdf');
        }

        $resourcePath = '/tasks/{name}/report';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->type !== null) {
            $localName = lcfirst('Type');
            $localValue = is_bool($request->type) ? ($request->type ? 'true' : 'false') : $request->type;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getResource
     *
     * Get project resource.
     *
     * @param Requests\GetResourceRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\ResourceResponse
     */
    public function getResource(Requests\GetResourceRequest $request)
    {
        try {
             list($response) = $this->getResourceWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getResourceWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getResourceWithHttpInfo
     *
     * Get project resource.
     *
     * @param Requests\GetResourceRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\ResourceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getResourceWithHttpInfo(Requests\GetResourceRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\ResourceResponse';
        $request = $this->GetResourceRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\ResourceResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getResourceAsync
     *
     * Get project resource.
     *
     * @param Requests\GetResourceRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getResourceAsync(Requests\GetResourceRequest $request) 
    {
        return $this->getResourceAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getResourceAsyncWithHttpInfo
     *
     * Get project resource.
     *
     * @param Requests\GetResourceRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getResourceAsyncWithHttpInfo(Requests\GetResourceRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\ResourceResponse';
        $request = $this->GetResourceRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getResource'
     *
     * @param Requests\GetResourceRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetResourceRequest(Requests\GetResourceRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getResource');
        }
        // verify the required parameter 'resource_uid' is set
        if ($request->resource_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $resource_uid when calling getResource');
        }

        $resourcePath = '/tasks/{name}/resources/{resourceUid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->resource_uid !== null) {
            $localName = lcfirst('ResourceUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->resource_uid), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getResourceAssignments
     *
     * Get resource's assignments.
     *
     * @param Requests\GetResourceAssignmentsRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AssignmentsResponse
     */
    public function getResourceAssignments(Requests\GetResourceAssignmentsRequest $request)
    {
        try {
             list($response) = $this->getResourceAssignmentsWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getResourceAssignmentsWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getResourceAssignmentsWithHttpInfo
     *
     * Get resource's assignments.
     *
     * @param Requests\GetResourceAssignmentsRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AssignmentsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getResourceAssignmentsWithHttpInfo(Requests\GetResourceAssignmentsRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AssignmentsResponse';
        $request = $this->GetResourceAssignmentsRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AssignmentsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getResourceAssignmentsAsync
     *
     * Get resource's assignments.
     *
     * @param Requests\GetResourceAssignmentsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getResourceAssignmentsAsync(Requests\GetResourceAssignmentsRequest $request) 
    {
        return $this->getResourceAssignmentsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getResourceAssignmentsAsyncWithHttpInfo
     *
     * Get resource's assignments.
     *
     * @param Requests\GetResourceAssignmentsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getResourceAssignmentsAsyncWithHttpInfo(Requests\GetResourceAssignmentsRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AssignmentsResponse';
        $request = $this->GetResourceAssignmentsRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getResourceAssignments'
     *
     * @param Requests\GetResourceAssignmentsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetResourceAssignmentsRequest(Requests\GetResourceAssignmentsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getResourceAssignments');
        }
        // verify the required parameter 'resource_uid' is set
        if ($request->resource_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $resource_uid when calling getResourceAssignments');
        }

        $resourcePath = '/tasks/{name}/resources/{resourceUid}/assignments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->resource_uid !== null) {
            $localName = lcfirst('ResourceUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->resource_uid), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getResourceTimephasedData
     *
     * Get timescaled data for a resource with the specified Uid.
     *
     * @param Requests\GetResourceTimephasedDataRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\TimephasedDataResponse
     */
    public function getResourceTimephasedData(Requests\GetResourceTimephasedDataRequest $request)
    {
        try {
             list($response) = $this->getResourceTimephasedDataWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getResourceTimephasedDataWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getResourceTimephasedDataWithHttpInfo
     *
     * Get timescaled data for a resource with the specified Uid.
     *
     * @param Requests\GetResourceTimephasedDataRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\TimephasedDataResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getResourceTimephasedDataWithHttpInfo(Requests\GetResourceTimephasedDataRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\TimephasedDataResponse';
        $request = $this->GetResourceTimephasedDataRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\TimephasedDataResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getResourceTimephasedDataAsync
     *
     * Get timescaled data for a resource with the specified Uid.
     *
     * @param Requests\GetResourceTimephasedDataRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getResourceTimephasedDataAsync(Requests\GetResourceTimephasedDataRequest $request) 
    {
        return $this->getResourceTimephasedDataAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getResourceTimephasedDataAsyncWithHttpInfo
     *
     * Get timescaled data for a resource with the specified Uid.
     *
     * @param Requests\GetResourceTimephasedDataRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getResourceTimephasedDataAsyncWithHttpInfo(Requests\GetResourceTimephasedDataRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\TimephasedDataResponse';
        $request = $this->GetResourceTimephasedDataRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getResourceTimephasedData'
     *
     * @param Requests\GetResourceTimephasedDataRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetResourceTimephasedDataRequest(Requests\GetResourceTimephasedDataRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getResourceTimephasedData');
        }
        // verify the required parameter 'resource_uid' is set
        if ($request->resource_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $resource_uid when calling getResourceTimephasedData');
        }

        $resourcePath = '/tasks/{name}/resources/{resourceUid}/timeScaleData';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->resource_uid !== null) {
            $localName = lcfirst('ResourceUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->resource_uid), $resourcePath);
        }

        // query params
        if ($request->type !== null) {
            $localName = lcfirst('Type');
            $localValue = is_bool($request->type) ? ($request->type ? 'true' : 'false') : $request->type;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->start_date !== null) {
            $localName = lcfirst('StartDate');
            $localValue = is_bool($request->start_date) ? ($request->start_date ? 'true' : 'false') : $request->start_date;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->end_date !== null) {
            $localName = lcfirst('EndDate');
            $localValue = is_bool($request->end_date) ? ($request->end_date ? 'true' : 'false') : $request->end_date;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getResources
     *
     * Get a project's resources.
     *
     * @param Requests\GetResourcesRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\ResourceItemsResponse
     */
    public function getResources(Requests\GetResourcesRequest $request)
    {
        try {
             list($response) = $this->getResourcesWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getResourcesWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getResourcesWithHttpInfo
     *
     * Get a project's resources.
     *
     * @param Requests\GetResourcesRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\ResourceItemsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getResourcesWithHttpInfo(Requests\GetResourcesRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\ResourceItemsResponse';
        $request = $this->GetResourcesRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\ResourceItemsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getResourcesAsync
     *
     * Get a project's resources.
     *
     * @param Requests\GetResourcesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getResourcesAsync(Requests\GetResourcesRequest $request) 
    {
        return $this->getResourcesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getResourcesAsyncWithHttpInfo
     *
     * Get a project's resources.
     *
     * @param Requests\GetResourcesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getResourcesAsyncWithHttpInfo(Requests\GetResourcesRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\ResourceItemsResponse';
        $request = $this->GetResourcesRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getResources'
     *
     * @param Requests\GetResourcesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetResourcesRequest(Requests\GetResourcesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getResources');
        }

        $resourcePath = '/tasks/{name}/resources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getRiskAnalysisReport
     *
     * Performs a risk analysys using Monte Carlo simulation and creates a risk analysis report.
     *
     * @param Requests\GetRiskAnalysisReportRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function getRiskAnalysisReport(Requests\GetRiskAnalysisReportRequest $request)
    {
        try {
             list($response) = $this->getRiskAnalysisReportWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getRiskAnalysisReportWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getRiskAnalysisReportWithHttpInfo
     *
     * Performs a risk analysys using Monte Carlo simulation and creates a risk analysis report.
     *
     * @param Requests\GetRiskAnalysisReportRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRiskAnalysisReportWithHttpInfo(Requests\GetRiskAnalysisReportRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->GetRiskAnalysisReportRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getRiskAnalysisReportAsync
     *
     * Performs a risk analysys using Monte Carlo simulation and creates a risk analysis report.
     *
     * @param Requests\GetRiskAnalysisReportRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRiskAnalysisReportAsync(Requests\GetRiskAnalysisReportRequest $request) 
    {
        return $this->getRiskAnalysisReportAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getRiskAnalysisReportAsyncWithHttpInfo
     *
     * Performs a risk analysys using Monte Carlo simulation and creates a risk analysis report.
     *
     * @param Requests\GetRiskAnalysisReportRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRiskAnalysisReportAsyncWithHttpInfo(Requests\GetRiskAnalysisReportRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->GetRiskAnalysisReportRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getRiskAnalysisReport'
     *
     * @param Requests\GetRiskAnalysisReportRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetRiskAnalysisReportRequest(Requests\GetRiskAnalysisReportRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getRiskAnalysisReport');
        }
        // verify the required parameter 'task_uid' is set
        if ($request->task_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $task_uid when calling getRiskAnalysisReport');
        }

        $resourcePath = '/tasks/{name}/riskAnalysisReport';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->task_uid !== null) {
            $localName = lcfirst('TaskUid');
            $localValue = is_bool($request->task_uid) ? ($request->task_uid ? 'true' : 'false') : $request->task_uid;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->distribution_type !== null) {
            $localName = lcfirst('DistributionType');
            $localValue = is_bool($request->distribution_type) ? ($request->distribution_type ? 'true' : 'false') : $request->distribution_type;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->optimistic !== null) {
            $localName = lcfirst('Optimistic');
            $localValue = is_bool($request->optimistic) ? ($request->optimistic ? 'true' : 'false') : $request->optimistic;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->pessimistic !== null) {
            $localName = lcfirst('Pessimistic');
            $localValue = is_bool($request->pessimistic) ? ($request->pessimistic ? 'true' : 'false') : $request->pessimistic;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->confidence_level !== null) {
            $localName = lcfirst('ConfidenceLevel');
            $localValue = is_bool($request->confidence_level) ? ($request->confidence_level ? 'true' : 'false') : $request->confidence_level;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->iterations !== null) {
            $localName = lcfirst('Iterations');
            $localValue = is_bool($request->iterations) ? ($request->iterations ? 'true' : 'false') : $request->iterations;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['multipart/form-data'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getTask
     *
     * Read project task.
     *
     * @param Requests\GetTaskRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\TaskResponse
     */
    public function getTask(Requests\GetTaskRequest $request)
    {
        try {
             list($response) = $this->getTaskWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getTaskWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getTaskWithHttpInfo
     *
     * Read project task.
     *
     * @param Requests\GetTaskRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\TaskResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTaskWithHttpInfo(Requests\GetTaskRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\TaskResponse';
        $request = $this->GetTaskRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\TaskResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getTaskAsync
     *
     * Read project task.
     *
     * @param Requests\GetTaskRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTaskAsync(Requests\GetTaskRequest $request) 
    {
        return $this->getTaskAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getTaskAsyncWithHttpInfo
     *
     * Read project task.
     *
     * @param Requests\GetTaskRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTaskAsyncWithHttpInfo(Requests\GetTaskRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\TaskResponse';
        $request = $this->GetTaskRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getTask'
     *
     * @param Requests\GetTaskRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetTaskRequest(Requests\GetTaskRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getTask');
        }
        // verify the required parameter 'task_uid' is set
        if ($request->task_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $task_uid when calling getTask');
        }

        $resourcePath = '/tasks/{name}/tasks/{taskUid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->task_uid !== null) {
            $localName = lcfirst('TaskUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->task_uid), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getTaskAssignments
     *
     * Get task assignments.
     *
     * @param Requests\GetTaskAssignmentsRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AssignmentsResponse
     */
    public function getTaskAssignments(Requests\GetTaskAssignmentsRequest $request)
    {
        try {
             list($response) = $this->getTaskAssignmentsWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getTaskAssignmentsWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getTaskAssignmentsWithHttpInfo
     *
     * Get task assignments.
     *
     * @param Requests\GetTaskAssignmentsRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AssignmentsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTaskAssignmentsWithHttpInfo(Requests\GetTaskAssignmentsRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AssignmentsResponse';
        $request = $this->GetTaskAssignmentsRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AssignmentsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getTaskAssignmentsAsync
     *
     * Get task assignments.
     *
     * @param Requests\GetTaskAssignmentsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTaskAssignmentsAsync(Requests\GetTaskAssignmentsRequest $request) 
    {
        return $this->getTaskAssignmentsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getTaskAssignmentsAsyncWithHttpInfo
     *
     * Get task assignments.
     *
     * @param Requests\GetTaskAssignmentsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTaskAssignmentsAsyncWithHttpInfo(Requests\GetTaskAssignmentsRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AssignmentsResponse';
        $request = $this->GetTaskAssignmentsRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getTaskAssignments'
     *
     * @param Requests\GetTaskAssignmentsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetTaskAssignmentsRequest(Requests\GetTaskAssignmentsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getTaskAssignments');
        }
        // verify the required parameter 'task_uid' is set
        if ($request->task_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $task_uid when calling getTaskAssignments');
        }

        $resourcePath = '/tasks/{name}/tasks/{taskUid}/assignments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->task_uid !== null) {
            $localName = lcfirst('TaskUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->task_uid), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getTaskDocument
     *
     * Get a project document.
     *
     * @param Requests\GetTaskDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function getTaskDocument(Requests\GetTaskDocumentRequest $request)
    {
        try {
             list($response) = $this->getTaskDocumentWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getTaskDocumentWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getTaskDocumentWithHttpInfo
     *
     * Get a project document.
     *
     * @param Requests\GetTaskDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTaskDocumentWithHttpInfo(Requests\GetTaskDocumentRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->GetTaskDocumentRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getTaskDocumentAsync
     *
     * Get a project document.
     *
     * @param Requests\GetTaskDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTaskDocumentAsync(Requests\GetTaskDocumentRequest $request) 
    {
        return $this->getTaskDocumentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getTaskDocumentAsyncWithHttpInfo
     *
     * Get a project document.
     *
     * @param Requests\GetTaskDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTaskDocumentAsyncWithHttpInfo(Requests\GetTaskDocumentRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->GetTaskDocumentRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getTaskDocument'
     *
     * @param Requests\GetTaskDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetTaskDocumentRequest(Requests\GetTaskDocumentRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getTaskDocument');
        }

        $resourcePath = '/tasks/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['multipart/form-data'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getTaskDocumentWithFormat
     *
     * Get a project document in the specified format
     *
     * @param Requests\GetTaskDocumentWithFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function getTaskDocumentWithFormat(Requests\GetTaskDocumentWithFormatRequest $request)
    {
        try {
             list($response) = $this->getTaskDocumentWithFormatWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getTaskDocumentWithFormatWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getTaskDocumentWithFormatWithHttpInfo
     *
     * Get a project document in the specified format
     *
     * @param Requests\GetTaskDocumentWithFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTaskDocumentWithFormatWithHttpInfo(Requests\GetTaskDocumentWithFormatRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->GetTaskDocumentWithFormatRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getTaskDocumentWithFormatAsync
     *
     * Get a project document in the specified format
     *
     * @param Requests\GetTaskDocumentWithFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTaskDocumentWithFormatAsync(Requests\GetTaskDocumentWithFormatRequest $request) 
    {
        return $this->getTaskDocumentWithFormatAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getTaskDocumentWithFormatAsyncWithHttpInfo
     *
     * Get a project document in the specified format
     *
     * @param Requests\GetTaskDocumentWithFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTaskDocumentWithFormatAsyncWithHttpInfo(Requests\GetTaskDocumentWithFormatRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->GetTaskDocumentWithFormatRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getTaskDocumentWithFormat'
     *
     * @param Requests\GetTaskDocumentWithFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetTaskDocumentWithFormatRequest(Requests\GetTaskDocumentWithFormatRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getTaskDocumentWithFormat');
        }
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling getTaskDocumentWithFormat');
        }

        $resourcePath = '/tasks/{name}/format';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->format !== null) {
            $localName = lcfirst('Format');
            $localValue = is_bool($request->format) ? ($request->format ? 'true' : 'false') : $request->format;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->return_as_zip_archive !== null) {
            $localName = lcfirst('ReturnAsZipArchive');
            $localValue = is_bool($request->return_as_zip_archive) ? ($request->return_as_zip_archive ? 'true' : 'false') : $request->return_as_zip_archive;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['multipart/form-data'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getTaskLinks
     *
     * Get tasks' links of a project.
     *
     * @param Requests\GetTaskLinksRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\TaskLinksResponse
     */
    public function getTaskLinks(Requests\GetTaskLinksRequest $request)
    {
        try {
             list($response) = $this->getTaskLinksWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getTaskLinksWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getTaskLinksWithHttpInfo
     *
     * Get tasks' links of a project.
     *
     * @param Requests\GetTaskLinksRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\TaskLinksResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTaskLinksWithHttpInfo(Requests\GetTaskLinksRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\TaskLinksResponse';
        $request = $this->GetTaskLinksRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\TaskLinksResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getTaskLinksAsync
     *
     * Get tasks' links of a project.
     *
     * @param Requests\GetTaskLinksRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTaskLinksAsync(Requests\GetTaskLinksRequest $request) 
    {
        return $this->getTaskLinksAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getTaskLinksAsyncWithHttpInfo
     *
     * Get tasks' links of a project.
     *
     * @param Requests\GetTaskLinksRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTaskLinksAsyncWithHttpInfo(Requests\GetTaskLinksRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\TaskLinksResponse';
        $request = $this->GetTaskLinksRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getTaskLinks'
     *
     * @param Requests\GetTaskLinksRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetTaskLinksRequest(Requests\GetTaskLinksRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getTaskLinks');
        }

        $resourcePath = '/tasks/{name}/taskLinks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getTaskRecurringInfo
     *
     * Get recurring info for a task with the specified Uid
     *
     * @param Requests\GetTaskRecurringInfoRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\RecurringInfoResponse
     */
    public function getTaskRecurringInfo(Requests\GetTaskRecurringInfoRequest $request)
    {
        try {
             list($response) = $this->getTaskRecurringInfoWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getTaskRecurringInfoWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getTaskRecurringInfoWithHttpInfo
     *
     * Get recurring info for a task with the specified Uid
     *
     * @param Requests\GetTaskRecurringInfoRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\RecurringInfoResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTaskRecurringInfoWithHttpInfo(Requests\GetTaskRecurringInfoRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\RecurringInfoResponse';
        $request = $this->GetTaskRecurringInfoRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\RecurringInfoResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getTaskRecurringInfoAsync
     *
     * Get recurring info for a task with the specified Uid
     *
     * @param Requests\GetTaskRecurringInfoRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTaskRecurringInfoAsync(Requests\GetTaskRecurringInfoRequest $request) 
    {
        return $this->getTaskRecurringInfoAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getTaskRecurringInfoAsyncWithHttpInfo
     *
     * Get recurring info for a task with the specified Uid
     *
     * @param Requests\GetTaskRecurringInfoRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTaskRecurringInfoAsyncWithHttpInfo(Requests\GetTaskRecurringInfoRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\RecurringInfoResponse';
        $request = $this->GetTaskRecurringInfoRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getTaskRecurringInfo'
     *
     * @param Requests\GetTaskRecurringInfoRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetTaskRecurringInfoRequest(Requests\GetTaskRecurringInfoRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getTaskRecurringInfo');
        }
        // verify the required parameter 'task_uid' is set
        if ($request->task_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $task_uid when calling getTaskRecurringInfo');
        }

        $resourcePath = '/tasks/{name}/tasks/{taskUid}/recurringInfo';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->task_uid !== null) {
            $localName = lcfirst('TaskUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->task_uid), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getTaskTimephasedData
     *
     * Get timescaled data for a task with the specified Uid.
     *
     * @param Requests\GetTaskTimephasedDataRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\TimephasedDataResponse
     */
    public function getTaskTimephasedData(Requests\GetTaskTimephasedDataRequest $request)
    {
        try {
             list($response) = $this->getTaskTimephasedDataWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getTaskTimephasedDataWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getTaskTimephasedDataWithHttpInfo
     *
     * Get timescaled data for a task with the specified Uid.
     *
     * @param Requests\GetTaskTimephasedDataRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\TimephasedDataResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTaskTimephasedDataWithHttpInfo(Requests\GetTaskTimephasedDataRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\TimephasedDataResponse';
        $request = $this->GetTaskTimephasedDataRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\TimephasedDataResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getTaskTimephasedDataAsync
     *
     * Get timescaled data for a task with the specified Uid.
     *
     * @param Requests\GetTaskTimephasedDataRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTaskTimephasedDataAsync(Requests\GetTaskTimephasedDataRequest $request) 
    {
        return $this->getTaskTimephasedDataAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getTaskTimephasedDataAsyncWithHttpInfo
     *
     * Get timescaled data for a task with the specified Uid.
     *
     * @param Requests\GetTaskTimephasedDataRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTaskTimephasedDataAsyncWithHttpInfo(Requests\GetTaskTimephasedDataRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\TimephasedDataResponse';
        $request = $this->GetTaskTimephasedDataRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getTaskTimephasedData'
     *
     * @param Requests\GetTaskTimephasedDataRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetTaskTimephasedDataRequest(Requests\GetTaskTimephasedDataRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getTaskTimephasedData');
        }
        // verify the required parameter 'task_uid' is set
        if ($request->task_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $task_uid when calling getTaskTimephasedData');
        }

        $resourcePath = '/tasks/{name}/tasks/{taskUid}/timeScaleData';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->task_uid !== null) {
            $localName = lcfirst('TaskUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->task_uid), $resourcePath);
        }

        // query params
        if ($request->type !== null) {
            $localName = lcfirst('Type');
            $localValue = is_bool($request->type) ? ($request->type ? 'true' : 'false') : $request->type;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->start_date !== null) {
            $localName = lcfirst('StartDate');
            $localValue = is_bool($request->start_date) ? ($request->start_date ? 'true' : 'false') : $request->start_date;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->end_date !== null) {
            $localName = lcfirst('EndDate');
            $localValue = is_bool($request->end_date) ? ($request->end_date ? 'true' : 'false') : $request->end_date;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getTasks
     *
     * Get a project's tasks.
     *
     * @param Requests\GetTasksRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\TaskItemsResponse
     */
    public function getTasks(Requests\GetTasksRequest $request)
    {
        try {
             list($response) = $this->getTasksWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getTasksWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getTasksWithHttpInfo
     *
     * Get a project's tasks.
     *
     * @param Requests\GetTasksRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\TaskItemsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTasksWithHttpInfo(Requests\GetTasksRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\TaskItemsResponse';
        $request = $this->GetTasksRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\TaskItemsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getTasksAsync
     *
     * Get a project's tasks.
     *
     * @param Requests\GetTasksRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTasksAsync(Requests\GetTasksRequest $request) 
    {
        return $this->getTasksAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getTasksAsyncWithHttpInfo
     *
     * Get a project's tasks.
     *
     * @param Requests\GetTasksRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTasksAsyncWithHttpInfo(Requests\GetTasksRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\TaskItemsResponse';
        $request = $this->GetTasksRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getTasks'
     *
     * @param Requests\GetTasksRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetTasksRequest(Requests\GetTasksRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getTasks');
        }

        $resourcePath = '/tasks/{name}/tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getVbaProject
     *
     * Returns VBA project.
     *
     * @param Requests\GetVbaProjectRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\VbaProjectResponse
     */
    public function getVbaProject(Requests\GetVbaProjectRequest $request)
    {
        try {
             list($response) = $this->getVbaProjectWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getVbaProjectWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getVbaProjectWithHttpInfo
     *
     * Returns VBA project.
     *
     * @param Requests\GetVbaProjectRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\VbaProjectResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getVbaProjectWithHttpInfo(Requests\GetVbaProjectRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\VbaProjectResponse';
        $request = $this->GetVbaProjectRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\VbaProjectResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getVbaProjectAsync
     *
     * Returns VBA project.
     *
     * @param Requests\GetVbaProjectRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVbaProjectAsync(Requests\GetVbaProjectRequest $request) 
    {
        return $this->getVbaProjectAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getVbaProjectAsyncWithHttpInfo
     *
     * Returns VBA project.
     *
     * @param Requests\GetVbaProjectRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVbaProjectAsyncWithHttpInfo(Requests\GetVbaProjectRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\VbaProjectResponse';
        $request = $this->GetVbaProjectRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getVbaProject'
     *
     * @param Requests\GetVbaProjectRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetVbaProjectRequest(Requests\GetVbaProjectRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getVbaProject');
        }

        $resourcePath = '/tasks/{name}/vbaproject';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getWbsDefinition
     *
     * Get a project's WBS Definition.
     *
     * @param Requests\GetWbsDefinitionRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\WBSDefinitionResponse
     */
    public function getWbsDefinition(Requests\GetWbsDefinitionRequest $request)
    {
        try {
             list($response) = $this->getWbsDefinitionWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getWbsDefinitionWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getWbsDefinitionWithHttpInfo
     *
     * Get a project's WBS Definition.
     *
     * @param Requests\GetWbsDefinitionRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\WBSDefinitionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWbsDefinitionWithHttpInfo(Requests\GetWbsDefinitionRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\WBSDefinitionResponse';
        $request = $this->GetWbsDefinitionRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\WBSDefinitionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getWbsDefinitionAsync
     *
     * Get a project's WBS Definition.
     *
     * @param Requests\GetWbsDefinitionRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getWbsDefinitionAsync(Requests\GetWbsDefinitionRequest $request) 
    {
        return $this->getWbsDefinitionAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getWbsDefinitionAsyncWithHttpInfo
     *
     * Get a project's WBS Definition.
     *
     * @param Requests\GetWbsDefinitionRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getWbsDefinitionAsyncWithHttpInfo(Requests\GetWbsDefinitionRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\WBSDefinitionResponse';
        $request = $this->GetWbsDefinitionRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getWbsDefinition'
     *
     * @param Requests\GetWbsDefinitionRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetWbsDefinitionRequest(Requests\GetWbsDefinitionRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getWbsDefinition');
        }

        $resourcePath = '/tasks/{name}/wbsDefinition';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['multipart/form-data'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation postAssignment
     *
     * Adds a new assignment to a project and returns assignment item in a response.
     *
     * @param Requests\PostAssignmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AssignmentItemResponse
     */
    public function postAssignment(Requests\PostAssignmentRequest $request)
    {
        try {
             list($response) = $this->postAssignmentWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->postAssignmentWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation postAssignmentWithHttpInfo
     *
     * Adds a new assignment to a project and returns assignment item in a response.
     *
     * @param Requests\PostAssignmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AssignmentItemResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postAssignmentWithHttpInfo(Requests\PostAssignmentRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AssignmentItemResponse';
        $request = $this->PostAssignmentRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AssignmentItemResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation postAssignmentAsync
     *
     * Adds a new assignment to a project and returns assignment item in a response.
     *
     * @param Requests\PostAssignmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postAssignmentAsync(Requests\PostAssignmentRequest $request) 
    {
        return $this->postAssignmentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation postAssignmentAsyncWithHttpInfo
     *
     * Adds a new assignment to a project and returns assignment item in a response.
     *
     * @param Requests\PostAssignmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postAssignmentAsyncWithHttpInfo(Requests\PostAssignmentRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AssignmentItemResponse';
        $request = $this->PostAssignmentRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'postAssignment'
     *
     * @param Requests\PostAssignmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PostAssignmentRequest(Requests\PostAssignmentRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postAssignment');
        }
        // verify the required parameter 'task_uid' is set
        if ($request->task_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $task_uid when calling postAssignment');
        }
        // verify the required parameter 'resource_uid' is set
        if ($request->resource_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $resource_uid when calling postAssignment');
        }

        $resourcePath = '/tasks/{name}/assignments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->task_uid !== null) {
            $localName = lcfirst('TaskUid');
            $localValue = is_bool($request->task_uid) ? ($request->task_uid ? 'true' : 'false') : $request->task_uid;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->resource_uid !== null) {
            $localName = lcfirst('ResourceUid');
            $localValue = is_bool($request->resource_uid) ? ($request->resource_uid ? 'true' : 'false') : $request->resource_uid;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->units !== null) {
            $localName = lcfirst('Units');
            $localValue = is_bool($request->units) ? ($request->units ? 'true' : 'false') : $request->units;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation postCalendar
     *
     * Adds a new calendar to project file.
     *
     * @param Requests\PostCalendarRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\CalendarItemResponse
     */
    public function postCalendar(Requests\PostCalendarRequest $request)
    {
        try {
             list($response) = $this->postCalendarWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->postCalendarWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation postCalendarWithHttpInfo
     *
     * Adds a new calendar to project file.
     *
     * @param Requests\PostCalendarRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\CalendarItemResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postCalendarWithHttpInfo(Requests\PostCalendarRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\CalendarItemResponse';
        $request = $this->PostCalendarRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\CalendarItemResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation postCalendarAsync
     *
     * Adds a new calendar to project file.
     *
     * @param Requests\PostCalendarRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postCalendarAsync(Requests\PostCalendarRequest $request) 
    {
        return $this->postCalendarAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation postCalendarAsyncWithHttpInfo
     *
     * Adds a new calendar to project file.
     *
     * @param Requests\PostCalendarRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postCalendarAsyncWithHttpInfo(Requests\PostCalendarRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\CalendarItemResponse';
        $request = $this->PostCalendarRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'postCalendar'
     *
     * @param Requests\PostCalendarRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PostCalendarRequest(Requests\PostCalendarRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postCalendar');
        }
        // verify the required parameter 'calendar' is set
        if ($request->calendar === null) {
            throw new \InvalidArgumentException('Missing the required parameter $calendar when calling postCalendar');
        }

        $resourcePath = '/tasks/{name}/calendars';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        $_tempBody = $this->_prepareBodyParameter($request->calendar);

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation postCalendarException
     *
     * Adds a new calendar exception to a calendar.
     *
     * @param Requests\PostCalendarExceptionRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function postCalendarException(Requests\PostCalendarExceptionRequest $request)
    {
        try {
             list($response) = $this->postCalendarExceptionWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->postCalendarExceptionWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation postCalendarExceptionWithHttpInfo
     *
     * Adds a new calendar exception to a calendar.
     *
     * @param Requests\PostCalendarExceptionRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AsposeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postCalendarExceptionWithHttpInfo(Requests\PostCalendarExceptionRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PostCalendarExceptionRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AsposeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation postCalendarExceptionAsync
     *
     * Adds a new calendar exception to a calendar.
     *
     * @param Requests\PostCalendarExceptionRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postCalendarExceptionAsync(Requests\PostCalendarExceptionRequest $request) 
    {
        return $this->postCalendarExceptionAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation postCalendarExceptionAsyncWithHttpInfo
     *
     * Adds a new calendar exception to a calendar.
     *
     * @param Requests\PostCalendarExceptionRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postCalendarExceptionAsyncWithHttpInfo(Requests\PostCalendarExceptionRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PostCalendarExceptionRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'postCalendarException'
     *
     * @param Requests\PostCalendarExceptionRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PostCalendarExceptionRequest(Requests\PostCalendarExceptionRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postCalendarException');
        }
        // verify the required parameter 'calendar_uid' is set
        if ($request->calendar_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $calendar_uid when calling postCalendarException');
        }
        // verify the required parameter 'calendar_exception' is set
        if ($request->calendar_exception === null) {
            throw new \InvalidArgumentException('Missing the required parameter $calendar_exception when calling postCalendarException');
        }

        $resourcePath = '/tasks/{name}/calendars/{calendarUid}/calendarExceptions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->calendar_uid !== null) {
            $localName = lcfirst('CalendarUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->calendar_uid), $resourcePath);
        }

        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        $_tempBody = $this->_prepareBodyParameter($request->calendar_exception);

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation postDocumentProperty
     *
     * Set/create document property.
     *
     * @param Requests\PostDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\DocumentPropertyResponse
     */
    public function postDocumentProperty(Requests\PostDocumentPropertyRequest $request)
    {
        try {
             list($response) = $this->postDocumentPropertyWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->postDocumentPropertyWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation postDocumentPropertyWithHttpInfo
     *
     * Set/create document property.
     *
     * @param Requests\PostDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\DocumentPropertyResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postDocumentPropertyWithHttpInfo(Requests\PostDocumentPropertyRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\DocumentPropertyResponse';
        $request = $this->PostDocumentPropertyRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\DocumentPropertyResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation postDocumentPropertyAsync
     *
     * Set/create document property.
     *
     * @param Requests\PostDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDocumentPropertyAsync(Requests\PostDocumentPropertyRequest $request) 
    {
        return $this->postDocumentPropertyAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation postDocumentPropertyAsyncWithHttpInfo
     *
     * Set/create document property.
     *
     * @param Requests\PostDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postDocumentPropertyAsyncWithHttpInfo(Requests\PostDocumentPropertyRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\DocumentPropertyResponse';
        $request = $this->PostDocumentPropertyRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'postDocumentProperty'
     *
     * @param Requests\PostDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PostDocumentPropertyRequest(Requests\PostDocumentPropertyRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postDocumentProperty');
        }
        // verify the required parameter 'property_name' is set
        if ($request->property_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $property_name when calling postDocumentProperty');
        }
        // verify the required parameter 'property' is set
        if ($request->property === null) {
            throw new \InvalidArgumentException('Missing the required parameter $property when calling postDocumentProperty');
        }

        $resourcePath = '/tasks/{name}/documentproperties/{propertyName}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->property_name !== null) {
            $localName = lcfirst('PropertyName');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->property_name), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->filename !== null) {
            $localName = lcfirst('Filename');
            $localValue = is_bool($request->filename) ? ($request->filename ? 'true' : 'false') : $request->filename;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        $_tempBody = $this->_prepareBodyParameter($request->property);

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation postResource
     *
     * Add a new resource to a project.
     *
     * @param Requests\PostResourceRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\ResourceItemResponse
     */
    public function postResource(Requests\PostResourceRequest $request)
    {
        try {
             list($response) = $this->postResourceWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->postResourceWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation postResourceWithHttpInfo
     *
     * Add a new resource to a project.
     *
     * @param Requests\PostResourceRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\ResourceItemResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postResourceWithHttpInfo(Requests\PostResourceRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\ResourceItemResponse';
        $request = $this->PostResourceRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\ResourceItemResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation postResourceAsync
     *
     * Add a new resource to a project.
     *
     * @param Requests\PostResourceRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postResourceAsync(Requests\PostResourceRequest $request) 
    {
        return $this->postResourceAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation postResourceAsyncWithHttpInfo
     *
     * Add a new resource to a project.
     *
     * @param Requests\PostResourceRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postResourceAsyncWithHttpInfo(Requests\PostResourceRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\ResourceItemResponse';
        $request = $this->PostResourceRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'postResource'
     *
     * @param Requests\PostResourceRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PostResourceRequest(Requests\PostResourceRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postResource');
        }

        $resourcePath = '/tasks/{name}/resources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->resource_name !== null) {
            $localName = lcfirst('ResourceName');
            $localValue = is_bool($request->resource_name) ? ($request->resource_name ? 'true' : 'false') : $request->resource_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->before_resource_id !== null) {
            $localName = lcfirst('BeforeResourceId');
            $localValue = is_bool($request->before_resource_id) ? ($request->before_resource_id ? 'true' : 'false') : $request->before_resource_id;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation postTask
     *
     * Add a new task to a project.
     *
     * @param Requests\PostTaskRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\TaskItemResponse
     */
    public function postTask(Requests\PostTaskRequest $request)
    {
        try {
             list($response) = $this->postTaskWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->postTaskWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation postTaskWithHttpInfo
     *
     * Add a new task to a project.
     *
     * @param Requests\PostTaskRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\TaskItemResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postTaskWithHttpInfo(Requests\PostTaskRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\TaskItemResponse';
        $request = $this->PostTaskRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\TaskItemResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation postTaskAsync
     *
     * Add a new task to a project.
     *
     * @param Requests\PostTaskRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postTaskAsync(Requests\PostTaskRequest $request) 
    {
        return $this->postTaskAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation postTaskAsyncWithHttpInfo
     *
     * Add a new task to a project.
     *
     * @param Requests\PostTaskRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postTaskAsyncWithHttpInfo(Requests\PostTaskRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\TaskItemResponse';
        $request = $this->PostTaskRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'postTask'
     *
     * @param Requests\PostTaskRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PostTaskRequest(Requests\PostTaskRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postTask');
        }

        $resourcePath = '/tasks/{name}/tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->task_name !== null) {
            $localName = lcfirst('TaskName');
            $localValue = is_bool($request->task_name) ? ($request->task_name ? 'true' : 'false') : $request->task_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->before_task_id !== null) {
            $localName = lcfirst('BeforeTaskId');
            $localValue = is_bool($request->before_task_id) ? ($request->before_task_id ? 'true' : 'false') : $request->before_task_id;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation postTaskDocumentWithFormat
     *
     * Get a project document in the specified format and with the specified save options.
     *
     * @param Requests\PostTaskDocumentWithFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function postTaskDocumentWithFormat(Requests\PostTaskDocumentWithFormatRequest $request)
    {
        try {
             list($response) = $this->postTaskDocumentWithFormatWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->postTaskDocumentWithFormatWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation postTaskDocumentWithFormatWithHttpInfo
     *
     * Get a project document in the specified format and with the specified save options.
     *
     * @param Requests\PostTaskDocumentWithFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function postTaskDocumentWithFormatWithHttpInfo(Requests\PostTaskDocumentWithFormatRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->PostTaskDocumentWithFormatRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation postTaskDocumentWithFormatAsync
     *
     * Get a project document in the specified format and with the specified save options.
     *
     * @param Requests\PostTaskDocumentWithFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postTaskDocumentWithFormatAsync(Requests\PostTaskDocumentWithFormatRequest $request) 
    {
        return $this->postTaskDocumentWithFormatAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation postTaskDocumentWithFormatAsyncWithHttpInfo
     *
     * Get a project document in the specified format and with the specified save options.
     *
     * @param Requests\PostTaskDocumentWithFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postTaskDocumentWithFormatAsyncWithHttpInfo(Requests\PostTaskDocumentWithFormatRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->PostTaskDocumentWithFormatRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'postTaskDocumentWithFormat'
     *
     * @param Requests\PostTaskDocumentWithFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PostTaskDocumentWithFormatRequest(Requests\PostTaskDocumentWithFormatRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postTaskDocumentWithFormat');
        }
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling postTaskDocumentWithFormat');
        }
        // verify the required parameter 'save_options' is set
        if ($request->save_options === null) {
            throw new \InvalidArgumentException('Missing the required parameter $save_options when calling postTaskDocumentWithFormat');
        }

        $resourcePath = '/tasks/{name}/format';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->format !== null) {
            $localName = lcfirst('Format');
            $localValue = is_bool($request->format) ? ($request->format ? 'true' : 'false') : $request->format;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->return_as_zip_archive !== null) {
            $localName = lcfirst('ReturnAsZipArchive');
            $localValue = is_bool($request->return_as_zip_archive) ? ($request->return_as_zip_archive ? 'true' : 'false') : $request->return_as_zip_archive;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        $_tempBody = $this->_prepareBodyParameter($request->save_options);

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['multipart/form-data'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation postTaskLink
     *
     * Adds a new task link to a project.
     *
     * @param Requests\PostTaskLinkRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function postTaskLink(Requests\PostTaskLinkRequest $request)
    {
        try {
             list($response) = $this->postTaskLinkWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->postTaskLinkWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation postTaskLinkWithHttpInfo
     *
     * Adds a new task link to a project.
     *
     * @param Requests\PostTaskLinkRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AsposeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postTaskLinkWithHttpInfo(Requests\PostTaskLinkRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PostTaskLinkRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AsposeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation postTaskLinkAsync
     *
     * Adds a new task link to a project.
     *
     * @param Requests\PostTaskLinkRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postTaskLinkAsync(Requests\PostTaskLinkRequest $request) 
    {
        return $this->postTaskLinkAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation postTaskLinkAsyncWithHttpInfo
     *
     * Adds a new task link to a project.
     *
     * @param Requests\PostTaskLinkRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postTaskLinkAsyncWithHttpInfo(Requests\PostTaskLinkRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PostTaskLinkRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'postTaskLink'
     *
     * @param Requests\PostTaskLinkRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PostTaskLinkRequest(Requests\PostTaskLinkRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postTaskLink');
        }
        // verify the required parameter 'task_link' is set
        if ($request->task_link === null) {
            throw new \InvalidArgumentException('Missing the required parameter $task_link when calling postTaskLink');
        }

        $resourcePath = '/tasks/{name}/taskLinks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        $_tempBody = $this->_prepareBodyParameter($request->task_link);

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation postTaskRecurringInfo
     *
     * Adds a new recurring task.
     *
     * @param Requests\PostTaskRecurringInfoRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\TaskItemResponse
     */
    public function postTaskRecurringInfo(Requests\PostTaskRecurringInfoRequest $request)
    {
        try {
             list($response) = $this->postTaskRecurringInfoWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->postTaskRecurringInfoWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation postTaskRecurringInfoWithHttpInfo
     *
     * Adds a new recurring task.
     *
     * @param Requests\PostTaskRecurringInfoRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\TaskItemResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postTaskRecurringInfoWithHttpInfo(Requests\PostTaskRecurringInfoRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\TaskItemResponse';
        $request = $this->PostTaskRecurringInfoRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\TaskItemResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation postTaskRecurringInfoAsync
     *
     * Adds a new recurring task.
     *
     * @param Requests\PostTaskRecurringInfoRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postTaskRecurringInfoAsync(Requests\PostTaskRecurringInfoRequest $request) 
    {
        return $this->postTaskRecurringInfoAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation postTaskRecurringInfoAsyncWithHttpInfo
     *
     * Adds a new recurring task.
     *
     * @param Requests\PostTaskRecurringInfoRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postTaskRecurringInfoAsyncWithHttpInfo(Requests\PostTaskRecurringInfoRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\TaskItemResponse';
        $request = $this->PostTaskRecurringInfoRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'postTaskRecurringInfo'
     *
     * @param Requests\PostTaskRecurringInfoRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PostTaskRecurringInfoRequest(Requests\PostTaskRecurringInfoRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postTaskRecurringInfo');
        }
        // verify the required parameter 'parent_task_uid' is set
        if ($request->parent_task_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $parent_task_uid when calling postTaskRecurringInfo');
        }
        // verify the required parameter 'task_name' is set
        if ($request->task_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $task_name when calling postTaskRecurringInfo');
        }
        // verify the required parameter 'recurring_info' is set
        if ($request->recurring_info === null) {
            throw new \InvalidArgumentException('Missing the required parameter $recurring_info when calling postTaskRecurringInfo');
        }
        // verify the required parameter 'calendar_name' is set
        if ($request->calendar_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $calendar_name when calling postTaskRecurringInfo');
        }

        $resourcePath = '/tasks/{name}/tasks/recurringInfo';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->parent_task_uid !== null) {
            $localName = lcfirst('ParentTaskUid');
            $localValue = is_bool($request->parent_task_uid) ? ($request->parent_task_uid ? 'true' : 'false') : $request->parent_task_uid;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->task_name !== null) {
            $localName = lcfirst('TaskName');
            $localValue = is_bool($request->task_name) ? ($request->task_name ? 'true' : 'false') : $request->task_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->calendar_name !== null) {
            $localName = lcfirst('CalendarName');
            $localValue = is_bool($request->calendar_name) ? ($request->calendar_name ? 'true' : 'false') : $request->calendar_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        $_tempBody = $this->_prepareBodyParameter($request->recurring_info);

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation putAssignment
     *
     * Updates resources assignment with the specified Uid.
     *
     * @param Requests\PutAssignmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AssignmentResponse
     */
    public function putAssignment(Requests\PutAssignmentRequest $request)
    {
        try {
             list($response) = $this->putAssignmentWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->putAssignmentWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation putAssignmentWithHttpInfo
     *
     * Updates resources assignment with the specified Uid.
     *
     * @param Requests\PutAssignmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AssignmentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function putAssignmentWithHttpInfo(Requests\PutAssignmentRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AssignmentResponse';
        $request = $this->PutAssignmentRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AssignmentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation putAssignmentAsync
     *
     * Updates resources assignment with the specified Uid.
     *
     * @param Requests\PutAssignmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putAssignmentAsync(Requests\PutAssignmentRequest $request) 
    {
        return $this->putAssignmentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation putAssignmentAsyncWithHttpInfo
     *
     * Updates resources assignment with the specified Uid.
     *
     * @param Requests\PutAssignmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putAssignmentAsyncWithHttpInfo(Requests\PutAssignmentRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AssignmentResponse';
        $request = $this->PutAssignmentRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'putAssignment'
     *
     * @param Requests\PutAssignmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PutAssignmentRequest(Requests\PutAssignmentRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putAssignment');
        }
        // verify the required parameter 'assignment_uid' is set
        if ($request->assignment_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $assignment_uid when calling putAssignment');
        }
        // verify the required parameter 'assignment' is set
        if ($request->assignment === null) {
            throw new \InvalidArgumentException('Missing the required parameter $assignment when calling putAssignment');
        }

        $resourcePath = '/tasks/{name}/assignments/{assignmentUid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->assignment_uid !== null) {
            $localName = lcfirst('AssignmentUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->assignment_uid), $resourcePath);
        }

        // query params
        if ($request->mode !== null) {
            $localName = lcfirst('Mode');
            $localValue = is_bool($request->mode) ? ($request->mode ? 'true' : 'false') : $request->mode;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->recalculate !== null) {
            $localName = lcfirst('Recalculate');
            $localValue = is_bool($request->recalculate) ? ($request->recalculate ? 'true' : 'false') : $request->recalculate;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        $_tempBody = $this->_prepareBodyParameter($request->assignment);

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation putCalendar
     *
     * Edits an existing project calendar.
     *
     * @param Requests\PutCalendarRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function putCalendar(Requests\PutCalendarRequest $request)
    {
        try {
             list($response) = $this->putCalendarWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->putCalendarWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation putCalendarWithHttpInfo
     *
     * Edits an existing project calendar.
     *
     * @param Requests\PutCalendarRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AsposeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function putCalendarWithHttpInfo(Requests\PutCalendarRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutCalendarRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AsposeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation putCalendarAsync
     *
     * Edits an existing project calendar.
     *
     * @param Requests\PutCalendarRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putCalendarAsync(Requests\PutCalendarRequest $request) 
    {
        return $this->putCalendarAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation putCalendarAsyncWithHttpInfo
     *
     * Edits an existing project calendar.
     *
     * @param Requests\PutCalendarRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putCalendarAsyncWithHttpInfo(Requests\PutCalendarRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutCalendarRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'putCalendar'
     *
     * @param Requests\PutCalendarRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PutCalendarRequest(Requests\PutCalendarRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putCalendar');
        }
        // verify the required parameter 'calendar_uid' is set
        if ($request->calendar_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $calendar_uid when calling putCalendar');
        }
        // verify the required parameter 'calendar' is set
        if ($request->calendar === null) {
            throw new \InvalidArgumentException('Missing the required parameter $calendar when calling putCalendar');
        }

        $resourcePath = '/tasks/{name}/calendars';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->calendar_uid !== null) {
            $localName = lcfirst('CalendarUid');
            $localValue = is_bool($request->calendar_uid) ? ($request->calendar_uid ? 'true' : 'false') : $request->calendar_uid;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        $_tempBody = $this->_prepareBodyParameter($request->calendar);

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation putCalendarException
     *
     * Updates calendar exception.
     *
     * @param Requests\PutCalendarExceptionRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function putCalendarException(Requests\PutCalendarExceptionRequest $request)
    {
        try {
             list($response) = $this->putCalendarExceptionWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->putCalendarExceptionWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation putCalendarExceptionWithHttpInfo
     *
     * Updates calendar exception.
     *
     * @param Requests\PutCalendarExceptionRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AsposeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function putCalendarExceptionWithHttpInfo(Requests\PutCalendarExceptionRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutCalendarExceptionRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AsposeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation putCalendarExceptionAsync
     *
     * Updates calendar exception.
     *
     * @param Requests\PutCalendarExceptionRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putCalendarExceptionAsync(Requests\PutCalendarExceptionRequest $request) 
    {
        return $this->putCalendarExceptionAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation putCalendarExceptionAsyncWithHttpInfo
     *
     * Updates calendar exception.
     *
     * @param Requests\PutCalendarExceptionRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putCalendarExceptionAsyncWithHttpInfo(Requests\PutCalendarExceptionRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutCalendarExceptionRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'putCalendarException'
     *
     * @param Requests\PutCalendarExceptionRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PutCalendarExceptionRequest(Requests\PutCalendarExceptionRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putCalendarException');
        }
        // verify the required parameter 'calendar_uid' is set
        if ($request->calendar_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $calendar_uid when calling putCalendarException');
        }
        // verify the required parameter 'index' is set
        if ($request->index === null) {
            throw new \InvalidArgumentException('Missing the required parameter $index when calling putCalendarException');
        }
        // verify the required parameter 'calendar_exception' is set
        if ($request->calendar_exception === null) {
            throw new \InvalidArgumentException('Missing the required parameter $calendar_exception when calling putCalendarException');
        }

        $resourcePath = '/tasks/{name}/calendars/{calendarUid}/calendarExceptions/{index}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->calendar_uid !== null) {
            $localName = lcfirst('CalendarUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->calendar_uid), $resourcePath);
        }
        // path params
        if ($request->index !== null) {
            $localName = lcfirst('Index');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->index), $resourcePath);
        }

        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        $_tempBody = $this->_prepareBodyParameter($request->calendar_exception);

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation putDocumentProperty
     *
     * Set/create document property.
     *
     * @param Requests\PutDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\DocumentPropertyResponse
     */
    public function putDocumentProperty(Requests\PutDocumentPropertyRequest $request)
    {
        try {
             list($response) = $this->putDocumentPropertyWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->putDocumentPropertyWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation putDocumentPropertyWithHttpInfo
     *
     * Set/create document property.
     *
     * @param Requests\PutDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\DocumentPropertyResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function putDocumentPropertyWithHttpInfo(Requests\PutDocumentPropertyRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\DocumentPropertyResponse';
        $request = $this->PutDocumentPropertyRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\DocumentPropertyResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation putDocumentPropertyAsync
     *
     * Set/create document property.
     *
     * @param Requests\PutDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDocumentPropertyAsync(Requests\PutDocumentPropertyRequest $request) 
    {
        return $this->putDocumentPropertyAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation putDocumentPropertyAsyncWithHttpInfo
     *
     * Set/create document property.
     *
     * @param Requests\PutDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDocumentPropertyAsyncWithHttpInfo(Requests\PutDocumentPropertyRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\DocumentPropertyResponse';
        $request = $this->PutDocumentPropertyRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'putDocumentProperty'
     *
     * @param Requests\PutDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PutDocumentPropertyRequest(Requests\PutDocumentPropertyRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putDocumentProperty');
        }
        // verify the required parameter 'property_name' is set
        if ($request->property_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $property_name when calling putDocumentProperty');
        }
        // verify the required parameter 'property' is set
        if ($request->property === null) {
            throw new \InvalidArgumentException('Missing the required parameter $property when calling putDocumentProperty');
        }

        $resourcePath = '/tasks/{name}/documentproperties/{propertyName}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->property_name !== null) {
            $localName = lcfirst('PropertyName');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->property_name), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->filename !== null) {
            $localName = lcfirst('Filename');
            $localValue = is_bool($request->filename) ? ($request->filename ? 'true' : 'false') : $request->filename;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        $_tempBody = $this->_prepareBodyParameter($request->property);

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation putExtendedAttribute
     *
     * Add a new extended attribute definition to a project or  updates existing attribute definition (with the same FieldId).
     *
     * @param Requests\PutExtendedAttributeRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\ExtendedAttributeItemResponse
     */
    public function putExtendedAttribute(Requests\PutExtendedAttributeRequest $request)
    {
        try {
             list($response) = $this->putExtendedAttributeWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->putExtendedAttributeWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation putExtendedAttributeWithHttpInfo
     *
     * Add a new extended attribute definition to a project or  updates existing attribute definition (with the same FieldId).
     *
     * @param Requests\PutExtendedAttributeRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\ExtendedAttributeItemResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function putExtendedAttributeWithHttpInfo(Requests\PutExtendedAttributeRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\ExtendedAttributeItemResponse';
        $request = $this->PutExtendedAttributeRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\ExtendedAttributeItemResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation putExtendedAttributeAsync
     *
     * Add a new extended attribute definition to a project or  updates existing attribute definition (with the same FieldId).
     *
     * @param Requests\PutExtendedAttributeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putExtendedAttributeAsync(Requests\PutExtendedAttributeRequest $request) 
    {
        return $this->putExtendedAttributeAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation putExtendedAttributeAsyncWithHttpInfo
     *
     * Add a new extended attribute definition to a project or  updates existing attribute definition (with the same FieldId).
     *
     * @param Requests\PutExtendedAttributeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putExtendedAttributeAsyncWithHttpInfo(Requests\PutExtendedAttributeRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\ExtendedAttributeItemResponse';
        $request = $this->PutExtendedAttributeRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'putExtendedAttribute'
     *
     * @param Requests\PutExtendedAttributeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PutExtendedAttributeRequest(Requests\PutExtendedAttributeRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putExtendedAttribute');
        }
        // verify the required parameter 'extended_attribute' is set
        if ($request->extended_attribute === null) {
            throw new \InvalidArgumentException('Missing the required parameter $extended_attribute when calling putExtendedAttribute');
        }

        $resourcePath = '/tasks/{name}/extendedAttributes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        $_tempBody = $this->_prepareBodyParameter($request->extended_attribute);

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation putImportProjectFromDb
     *
     * Imports project from database with the specified connection string and saves it to specified file with the specified format.
     *
     * @param Requests\PutImportProjectFromDbRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function putImportProjectFromDb(Requests\PutImportProjectFromDbRequest $request)
    {
        try {
             list($response) = $this->putImportProjectFromDbWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->putImportProjectFromDbWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation putImportProjectFromDbWithHttpInfo
     *
     * Imports project from database with the specified connection string and saves it to specified file with the specified format.
     *
     * @param Requests\PutImportProjectFromDbRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AsposeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function putImportProjectFromDbWithHttpInfo(Requests\PutImportProjectFromDbRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutImportProjectFromDbRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AsposeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation putImportProjectFromDbAsync
     *
     * Imports project from database with the specified connection string and saves it to specified file with the specified format.
     *
     * @param Requests\PutImportProjectFromDbRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putImportProjectFromDbAsync(Requests\PutImportProjectFromDbRequest $request) 
    {
        return $this->putImportProjectFromDbAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation putImportProjectFromDbAsyncWithHttpInfo
     *
     * Imports project from database with the specified connection string and saves it to specified file with the specified format.
     *
     * @param Requests\PutImportProjectFromDbRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putImportProjectFromDbAsyncWithHttpInfo(Requests\PutImportProjectFromDbRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutImportProjectFromDbRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'putImportProjectFromDb'
     *
     * @param Requests\PutImportProjectFromDbRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PutImportProjectFromDbRequest(Requests\PutImportProjectFromDbRequest $request)
    {
        // verify the required parameter 'database_type' is set
        if ($request->database_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $database_type when calling putImportProjectFromDb');
        }
        // verify the required parameter 'connection_string' is set
        if ($request->connection_string === null) {
            throw new \InvalidArgumentException('Missing the required parameter $connection_string when calling putImportProjectFromDb');
        }
        // verify the required parameter 'project_uid' is set
        if ($request->project_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $project_uid when calling putImportProjectFromDb');
        }
        // verify the required parameter 'filename' is set
        if ($request->filename === null) {
            throw new \InvalidArgumentException('Missing the required parameter $filename when calling putImportProjectFromDb');
        }

        $resourcePath = '/tasks/importfromdb';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->database_type !== null) {
            $localName = lcfirst('DatabaseType');
            $localValue = is_bool($request->database_type) ? ($request->database_type ? 'true' : 'false') : $request->database_type;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->project_uid !== null) {
            $localName = lcfirst('ProjectUid');
            $localValue = is_bool($request->project_uid) ? ($request->project_uid ? 'true' : 'false') : $request->project_uid;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->filename !== null) {
            $localName = lcfirst('Filename');
            $localValue = is_bool($request->filename) ? ($request->filename ? 'true' : 'false') : $request->filename;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->format !== null) {
            $localName = lcfirst('Format');
            $localValue = is_bool($request->format) ? ($request->format ? 'true' : 'false') : $request->format;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->database_schema !== null) {
            $localName = lcfirst('DatabaseSchema');
            $localValue = is_bool($request->database_schema) ? ($request->database_schema ? 'true' : 'false') : $request->database_schema;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        $_tempBody = $this->_prepareBodyParameter($request->connection_string);

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation putImportProjectFromFile
     *
     * Imports project from primavera db formats (Primavera SQLite .db or Primavera xml) and saves it to specified file with the specified format.
     *
     * @param Requests\PutImportProjectFromFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function putImportProjectFromFile(Requests\PutImportProjectFromFileRequest $request)
    {
        try {
             list($response) = $this->putImportProjectFromFileWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->putImportProjectFromFileWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation putImportProjectFromFileWithHttpInfo
     *
     * Imports project from primavera db formats (Primavera SQLite .db or Primavera xml) and saves it to specified file with the specified format.
     *
     * @param Requests\PutImportProjectFromFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AsposeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function putImportProjectFromFileWithHttpInfo(Requests\PutImportProjectFromFileRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutImportProjectFromFileRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AsposeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation putImportProjectFromFileAsync
     *
     * Imports project from primavera db formats (Primavera SQLite .db or Primavera xml) and saves it to specified file with the specified format.
     *
     * @param Requests\PutImportProjectFromFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putImportProjectFromFileAsync(Requests\PutImportProjectFromFileRequest $request) 
    {
        return $this->putImportProjectFromFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation putImportProjectFromFileAsyncWithHttpInfo
     *
     * Imports project from primavera db formats (Primavera SQLite .db or Primavera xml) and saves it to specified file with the specified format.
     *
     * @param Requests\PutImportProjectFromFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putImportProjectFromFileAsyncWithHttpInfo(Requests\PutImportProjectFromFileRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutImportProjectFromFileRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'putImportProjectFromFile'
     *
     * @param Requests\PutImportProjectFromFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PutImportProjectFromFileRequest(Requests\PutImportProjectFromFileRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putImportProjectFromFile');
        }
        // verify the required parameter 'project_uid' is set
        if ($request->project_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $project_uid when calling putImportProjectFromFile');
        }
        // verify the required parameter 'filename' is set
        if ($request->filename === null) {
            throw new \InvalidArgumentException('Missing the required parameter $filename when calling putImportProjectFromFile');
        }

        $resourcePath = '/tasks/{name}/import';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->project_uid !== null) {
            $localName = lcfirst('ProjectUid');
            $localValue = is_bool($request->project_uid) ? ($request->project_uid ? 'true' : 'false') : $request->project_uid;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->filename !== null) {
            $localName = lcfirst('Filename');
            $localValue = is_bool($request->filename) ? ($request->filename ? 'true' : 'false') : $request->filename;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_type !== null) {
            $localName = lcfirst('FileType');
            $localValue = is_bool($request->file_type) ? ($request->file_type ? 'true' : 'false') : $request->file_type;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->output_file_format !== null) {
            $localName = lcfirst('OutputFileFormat');
            $localValue = is_bool($request->output_file_format) ? ($request->output_file_format ? 'true' : 'false') : $request->output_file_format;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation putMoveTask
     *
     * Move one task to another parent task
     *
     * @param Requests\PutMoveTaskRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function putMoveTask(Requests\PutMoveTaskRequest $request)
    {
        try {
             list($response) = $this->putMoveTaskWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->putMoveTaskWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation putMoveTaskWithHttpInfo
     *
     * Move one task to another parent task
     *
     * @param Requests\PutMoveTaskRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AsposeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function putMoveTaskWithHttpInfo(Requests\PutMoveTaskRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutMoveTaskRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AsposeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation putMoveTaskAsync
     *
     * Move one task to another parent task
     *
     * @param Requests\PutMoveTaskRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putMoveTaskAsync(Requests\PutMoveTaskRequest $request) 
    {
        return $this->putMoveTaskAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation putMoveTaskAsyncWithHttpInfo
     *
     * Move one task to another parent task
     *
     * @param Requests\PutMoveTaskRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putMoveTaskAsyncWithHttpInfo(Requests\PutMoveTaskRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutMoveTaskRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'putMoveTask'
     *
     * @param Requests\PutMoveTaskRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PutMoveTaskRequest(Requests\PutMoveTaskRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putMoveTask');
        }
        // verify the required parameter 'task_uid' is set
        if ($request->task_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $task_uid when calling putMoveTask');
        }
        // verify the required parameter 'parent_task_uid' is set
        if ($request->parent_task_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $parent_task_uid when calling putMoveTask');
        }

        $resourcePath = '/tasks/{name}/tasks/{taskUid}/move';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->task_uid !== null) {
            $localName = lcfirst('TaskUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->task_uid), $resourcePath);
        }

        // query params
        if ($request->parent_task_uid !== null) {
            $localName = lcfirst('ParentTaskUid');
            $localValue = is_bool($request->parent_task_uid) ? ($request->parent_task_uid ? 'true' : 'false') : $request->parent_task_uid;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation putMoveTaskToSibling
     *
     * Move a task to another position under the same parent and the same outline level
     *
     * @param Requests\PutMoveTaskToSiblingRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function putMoveTaskToSibling(Requests\PutMoveTaskToSiblingRequest $request)
    {
        try {
             list($response) = $this->putMoveTaskToSiblingWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->putMoveTaskToSiblingWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation putMoveTaskToSiblingWithHttpInfo
     *
     * Move a task to another position under the same parent and the same outline level
     *
     * @param Requests\PutMoveTaskToSiblingRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AsposeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function putMoveTaskToSiblingWithHttpInfo(Requests\PutMoveTaskToSiblingRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutMoveTaskToSiblingRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AsposeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation putMoveTaskToSiblingAsync
     *
     * Move a task to another position under the same parent and the same outline level
     *
     * @param Requests\PutMoveTaskToSiblingRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putMoveTaskToSiblingAsync(Requests\PutMoveTaskToSiblingRequest $request) 
    {
        return $this->putMoveTaskToSiblingAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation putMoveTaskToSiblingAsyncWithHttpInfo
     *
     * Move a task to another position under the same parent and the same outline level
     *
     * @param Requests\PutMoveTaskToSiblingRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putMoveTaskToSiblingAsyncWithHttpInfo(Requests\PutMoveTaskToSiblingRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutMoveTaskToSiblingRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'putMoveTaskToSibling'
     *
     * @param Requests\PutMoveTaskToSiblingRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PutMoveTaskToSiblingRequest(Requests\PutMoveTaskToSiblingRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putMoveTaskToSibling');
        }
        // verify the required parameter 'task_uid' is set
        if ($request->task_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $task_uid when calling putMoveTaskToSibling');
        }
        // verify the required parameter 'before_task_uid' is set
        if ($request->before_task_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $before_task_uid when calling putMoveTaskToSibling');
        }

        $resourcePath = '/tasks/{name}/tasks/{taskUid}/moveToSibling';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->task_uid !== null) {
            $localName = lcfirst('TaskUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->task_uid), $resourcePath);
        }

        // query params
        if ($request->before_task_uid !== null) {
            $localName = lcfirst('BeforeTaskUid');
            $localValue = is_bool($request->before_task_uid) ? ($request->before_task_uid ? 'true' : 'false') : $request->before_task_uid;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation putRecalculateProject
     *
     * Reschedules all project tasks ids, outline levels, start/finish dates, sets early/late dates, calculates slacks, work and cost fields.
     *
     * @param Requests\PutRecalculateProjectRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\ProjectRecalculateResponse
     */
    public function putRecalculateProject(Requests\PutRecalculateProjectRequest $request)
    {
        try {
             list($response) = $this->putRecalculateProjectWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->putRecalculateProjectWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation putRecalculateProjectWithHttpInfo
     *
     * Reschedules all project tasks ids, outline levels, start/finish dates, sets early/late dates, calculates slacks, work and cost fields.
     *
     * @param Requests\PutRecalculateProjectRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\ProjectRecalculateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function putRecalculateProjectWithHttpInfo(Requests\PutRecalculateProjectRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\ProjectRecalculateResponse';
        $request = $this->PutRecalculateProjectRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\ProjectRecalculateResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation putRecalculateProjectAsync
     *
     * Reschedules all project tasks ids, outline levels, start/finish dates, sets early/late dates, calculates slacks, work and cost fields.
     *
     * @param Requests\PutRecalculateProjectRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putRecalculateProjectAsync(Requests\PutRecalculateProjectRequest $request) 
    {
        return $this->putRecalculateProjectAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation putRecalculateProjectAsyncWithHttpInfo
     *
     * Reschedules all project tasks ids, outline levels, start/finish dates, sets early/late dates, calculates slacks, work and cost fields.
     *
     * @param Requests\PutRecalculateProjectRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putRecalculateProjectAsyncWithHttpInfo(Requests\PutRecalculateProjectRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\ProjectRecalculateResponse';
        $request = $this->PutRecalculateProjectRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'putRecalculateProject'
     *
     * @param Requests\PutRecalculateProjectRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PutRecalculateProjectRequest(Requests\PutRecalculateProjectRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putRecalculateProject');
        }

        $resourcePath = '/tasks/{name}/recalculate/project';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->mode !== null) {
            $localName = lcfirst('Mode');
            $localValue = is_bool($request->mode) ? ($request->mode ? 'true' : 'false') : $request->mode;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->validate !== null) {
            $localName = lcfirst('Validate');
            $localValue = is_bool($request->validate) ? ($request->validate ? 'true' : 'false') : $request->validate;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation putRecalculateProjectResourceFields
     *
     * Recalculate project resource fields
     *
     * @param Requests\PutRecalculateProjectResourceFieldsRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function putRecalculateProjectResourceFields(Requests\PutRecalculateProjectResourceFieldsRequest $request)
    {
        try {
             list($response) = $this->putRecalculateProjectResourceFieldsWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->putRecalculateProjectResourceFieldsWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation putRecalculateProjectResourceFieldsWithHttpInfo
     *
     * Recalculate project resource fields
     *
     * @param Requests\PutRecalculateProjectResourceFieldsRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AsposeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function putRecalculateProjectResourceFieldsWithHttpInfo(Requests\PutRecalculateProjectResourceFieldsRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutRecalculateProjectResourceFieldsRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AsposeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation putRecalculateProjectResourceFieldsAsync
     *
     * Recalculate project resource fields
     *
     * @param Requests\PutRecalculateProjectResourceFieldsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putRecalculateProjectResourceFieldsAsync(Requests\PutRecalculateProjectResourceFieldsRequest $request) 
    {
        return $this->putRecalculateProjectResourceFieldsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation putRecalculateProjectResourceFieldsAsyncWithHttpInfo
     *
     * Recalculate project resource fields
     *
     * @param Requests\PutRecalculateProjectResourceFieldsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putRecalculateProjectResourceFieldsAsyncWithHttpInfo(Requests\PutRecalculateProjectResourceFieldsRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutRecalculateProjectResourceFieldsRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'putRecalculateProjectResourceFields'
     *
     * @param Requests\PutRecalculateProjectResourceFieldsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PutRecalculateProjectResourceFieldsRequest(Requests\PutRecalculateProjectResourceFieldsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putRecalculateProjectResourceFields');
        }

        $resourcePath = '/tasks/{name}/recalculate/resourceFields';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation putRecalculateProjectUncompleteWorkToStartAfter
     *
     * Recalculate project uncomplete work
     *
     * @param Requests\PutRecalculateProjectUncompleteWorkToStartAfterRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function putRecalculateProjectUncompleteWorkToStartAfter(Requests\PutRecalculateProjectUncompleteWorkToStartAfterRequest $request)
    {
        try {
             list($response) = $this->putRecalculateProjectUncompleteWorkToStartAfterWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->putRecalculateProjectUncompleteWorkToStartAfterWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation putRecalculateProjectUncompleteWorkToStartAfterWithHttpInfo
     *
     * Recalculate project uncomplete work
     *
     * @param Requests\PutRecalculateProjectUncompleteWorkToStartAfterRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AsposeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function putRecalculateProjectUncompleteWorkToStartAfterWithHttpInfo(Requests\PutRecalculateProjectUncompleteWorkToStartAfterRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutRecalculateProjectUncompleteWorkToStartAfterRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AsposeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation putRecalculateProjectUncompleteWorkToStartAfterAsync
     *
     * Recalculate project uncomplete work
     *
     * @param Requests\PutRecalculateProjectUncompleteWorkToStartAfterRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putRecalculateProjectUncompleteWorkToStartAfterAsync(Requests\PutRecalculateProjectUncompleteWorkToStartAfterRequest $request) 
    {
        return $this->putRecalculateProjectUncompleteWorkToStartAfterAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation putRecalculateProjectUncompleteWorkToStartAfterAsyncWithHttpInfo
     *
     * Recalculate project uncomplete work
     *
     * @param Requests\PutRecalculateProjectUncompleteWorkToStartAfterRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putRecalculateProjectUncompleteWorkToStartAfterAsyncWithHttpInfo(Requests\PutRecalculateProjectUncompleteWorkToStartAfterRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutRecalculateProjectUncompleteWorkToStartAfterRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'putRecalculateProjectUncompleteWorkToStartAfter'
     *
     * @param Requests\PutRecalculateProjectUncompleteWorkToStartAfterRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PutRecalculateProjectUncompleteWorkToStartAfterRequest(Requests\PutRecalculateProjectUncompleteWorkToStartAfterRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putRecalculateProjectUncompleteWorkToStartAfter');
        }
        // verify the required parameter 'after' is set
        if ($request->after === null) {
            throw new \InvalidArgumentException('Missing the required parameter $after when calling putRecalculateProjectUncompleteWorkToStartAfter');
        }

        $resourcePath = '/tasks/{name}/recalculate/uncompleteWorkToStartAfter';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        $_tempBody = $this->_prepareBodyParameter($request->after);

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation putRecalculateProjectWorkAsComplete
     *
     * Recalculate project work as complete
     *
     * @param Requests\PutRecalculateProjectWorkAsCompleteRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function putRecalculateProjectWorkAsComplete(Requests\PutRecalculateProjectWorkAsCompleteRequest $request)
    {
        try {
             list($response) = $this->putRecalculateProjectWorkAsCompleteWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->putRecalculateProjectWorkAsCompleteWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation putRecalculateProjectWorkAsCompleteWithHttpInfo
     *
     * Recalculate project work as complete
     *
     * @param Requests\PutRecalculateProjectWorkAsCompleteRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AsposeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function putRecalculateProjectWorkAsCompleteWithHttpInfo(Requests\PutRecalculateProjectWorkAsCompleteRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutRecalculateProjectWorkAsCompleteRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AsposeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation putRecalculateProjectWorkAsCompleteAsync
     *
     * Recalculate project work as complete
     *
     * @param Requests\PutRecalculateProjectWorkAsCompleteRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putRecalculateProjectWorkAsCompleteAsync(Requests\PutRecalculateProjectWorkAsCompleteRequest $request) 
    {
        return $this->putRecalculateProjectWorkAsCompleteAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation putRecalculateProjectWorkAsCompleteAsyncWithHttpInfo
     *
     * Recalculate project work as complete
     *
     * @param Requests\PutRecalculateProjectWorkAsCompleteRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putRecalculateProjectWorkAsCompleteAsyncWithHttpInfo(Requests\PutRecalculateProjectWorkAsCompleteRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutRecalculateProjectWorkAsCompleteRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'putRecalculateProjectWorkAsComplete'
     *
     * @param Requests\PutRecalculateProjectWorkAsCompleteRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PutRecalculateProjectWorkAsCompleteRequest(Requests\PutRecalculateProjectWorkAsCompleteRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putRecalculateProjectWorkAsComplete');
        }
        // verify the required parameter 'complete_through' is set
        if ($request->complete_through === null) {
            throw new \InvalidArgumentException('Missing the required parameter $complete_through when calling putRecalculateProjectWorkAsComplete');
        }

        $resourcePath = '/tasks/{name}/recalculate/projectWorkAsComplete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->set_zero_or_hundred_percent_complete_only !== null) {
            $localName = lcfirst('SetZeroOrHundredPercentCompleteOnly');
            $localValue = is_bool($request->set_zero_or_hundred_percent_complete_only) ? ($request->set_zero_or_hundred_percent_complete_only ? 'true' : 'false') : $request->set_zero_or_hundred_percent_complete_only;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        $_tempBody = $this->_prepareBodyParameter($request->complete_through);

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation putRenumberWbsCode
     *
     * Renumber WBS code of passed tasks (if specified) or all project's tasks.
     *
     * @param Requests\PutRenumberWbsCodeRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function putRenumberWbsCode(Requests\PutRenumberWbsCodeRequest $request)
    {
        try {
             list($response) = $this->putRenumberWbsCodeWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->putRenumberWbsCodeWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation putRenumberWbsCodeWithHttpInfo
     *
     * Renumber WBS code of passed tasks (if specified) or all project's tasks.
     *
     * @param Requests\PutRenumberWbsCodeRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AsposeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function putRenumberWbsCodeWithHttpInfo(Requests\PutRenumberWbsCodeRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutRenumberWbsCodeRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AsposeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation putRenumberWbsCodeAsync
     *
     * Renumber WBS code of passed tasks (if specified) or all project's tasks.
     *
     * @param Requests\PutRenumberWbsCodeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putRenumberWbsCodeAsync(Requests\PutRenumberWbsCodeRequest $request) 
    {
        return $this->putRenumberWbsCodeAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation putRenumberWbsCodeAsyncWithHttpInfo
     *
     * Renumber WBS code of passed tasks (if specified) or all project's tasks.
     *
     * @param Requests\PutRenumberWbsCodeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putRenumberWbsCodeAsyncWithHttpInfo(Requests\PutRenumberWbsCodeRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutRenumberWbsCodeRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'putRenumberWbsCode'
     *
     * @param Requests\PutRenumberWbsCodeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PutRenumberWbsCodeRequest(Requests\PutRenumberWbsCodeRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putRenumberWbsCode');
        }
        // verify the required parameter 'task_uids' is set
        if ($request->task_uids === null) {
            throw new \InvalidArgumentException('Missing the required parameter $task_uids when calling putRenumberWbsCode');
        }

        $resourcePath = '/tasks/{name}/renumberWbsCode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        $_tempBody = $this->_prepareBodyParameter($request->task_uids);

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['multipart/form-data'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation putResource
     *
     * Updates resource with the specified Uid
     *
     * @param Requests\PutResourceRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\ResourceResponse
     */
    public function putResource(Requests\PutResourceRequest $request)
    {
        try {
             list($response) = $this->putResourceWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->putResourceWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation putResourceWithHttpInfo
     *
     * Updates resource with the specified Uid
     *
     * @param Requests\PutResourceRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\ResourceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function putResourceWithHttpInfo(Requests\PutResourceRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\ResourceResponse';
        $request = $this->PutResourceRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\ResourceResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation putResourceAsync
     *
     * Updates resource with the specified Uid
     *
     * @param Requests\PutResourceRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putResourceAsync(Requests\PutResourceRequest $request) 
    {
        return $this->putResourceAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation putResourceAsyncWithHttpInfo
     *
     * Updates resource with the specified Uid
     *
     * @param Requests\PutResourceRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putResourceAsyncWithHttpInfo(Requests\PutResourceRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\ResourceResponse';
        $request = $this->PutResourceRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'putResource'
     *
     * @param Requests\PutResourceRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PutResourceRequest(Requests\PutResourceRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putResource');
        }
        // verify the required parameter 'resource_uid' is set
        if ($request->resource_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $resource_uid when calling putResource');
        }
        // verify the required parameter 'resource' is set
        if ($request->resource === null) {
            throw new \InvalidArgumentException('Missing the required parameter $resource when calling putResource');
        }

        $resourcePath = '/tasks/{name}/resources/{resourceUid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->resource_uid !== null) {
            $localName = lcfirst('ResourceUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->resource_uid), $resourcePath);
        }

        // query params
        if ($request->mode !== null) {
            $localName = lcfirst('Mode');
            $localValue = is_bool($request->mode) ? ($request->mode ? 'true' : 'false') : $request->mode;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->recalculate !== null) {
            $localName = lcfirst('Recalculate');
            $localValue = is_bool($request->recalculate) ? ($request->recalculate ? 'true' : 'false') : $request->recalculate;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        $_tempBody = $this->_prepareBodyParameter($request->resource);

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation putTask
     *
     * Updates special task getting by task UID
     *
     * @param Requests\PutTaskRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\TaskResponse
     */
    public function putTask(Requests\PutTaskRequest $request)
    {
        try {
             list($response) = $this->putTaskWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->putTaskWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation putTaskWithHttpInfo
     *
     * Updates special task getting by task UID
     *
     * @param Requests\PutTaskRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\TaskResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function putTaskWithHttpInfo(Requests\PutTaskRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\TaskResponse';
        $request = $this->PutTaskRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\TaskResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation putTaskAsync
     *
     * Updates special task getting by task UID
     *
     * @param Requests\PutTaskRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putTaskAsync(Requests\PutTaskRequest $request) 
    {
        return $this->putTaskAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation putTaskAsyncWithHttpInfo
     *
     * Updates special task getting by task UID
     *
     * @param Requests\PutTaskRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putTaskAsyncWithHttpInfo(Requests\PutTaskRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\TaskResponse';
        $request = $this->PutTaskRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'putTask'
     *
     * @param Requests\PutTaskRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PutTaskRequest(Requests\PutTaskRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putTask');
        }
        // verify the required parameter 'task_uid' is set
        if ($request->task_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $task_uid when calling putTask');
        }
        // verify the required parameter 'task' is set
        if ($request->task === null) {
            throw new \InvalidArgumentException('Missing the required parameter $task when calling putTask');
        }

        $resourcePath = '/tasks/{name}/tasks/{taskUid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->task_uid !== null) {
            $localName = lcfirst('TaskUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->task_uid), $resourcePath);
        }

        // query params
        if ($request->mode !== null) {
            $localName = lcfirst('Mode');
            $localValue = is_bool($request->mode) ? ($request->mode ? 'true' : 'false') : $request->mode;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->recalculate !== null) {
            $localName = lcfirst('Recalculate');
            $localValue = is_bool($request->recalculate) ? ($request->recalculate ? 'true' : 'false') : $request->recalculate;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        $_tempBody = $this->_prepareBodyParameter($request->task);

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation putTaskLink
     *
     * Updates existing task link.
     *
     * @param Requests\PutTaskLinkRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\TaskLinkResponse
     */
    public function putTaskLink(Requests\PutTaskLinkRequest $request)
    {
        try {
             list($response) = $this->putTaskLinkWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->putTaskLinkWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation putTaskLinkWithHttpInfo
     *
     * Updates existing task link.
     *
     * @param Requests\PutTaskLinkRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\TaskLinkResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function putTaskLinkWithHttpInfo(Requests\PutTaskLinkRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\TaskLinkResponse';
        $request = $this->PutTaskLinkRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\TaskLinkResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation putTaskLinkAsync
     *
     * Updates existing task link.
     *
     * @param Requests\PutTaskLinkRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putTaskLinkAsync(Requests\PutTaskLinkRequest $request) 
    {
        return $this->putTaskLinkAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation putTaskLinkAsyncWithHttpInfo
     *
     * Updates existing task link.
     *
     * @param Requests\PutTaskLinkRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putTaskLinkAsyncWithHttpInfo(Requests\PutTaskLinkRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\TaskLinkResponse';
        $request = $this->PutTaskLinkRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'putTaskLink'
     *
     * @param Requests\PutTaskLinkRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PutTaskLinkRequest(Requests\PutTaskLinkRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putTaskLink');
        }
        // verify the required parameter 'index' is set
        if ($request->index === null) {
            throw new \InvalidArgumentException('Missing the required parameter $index when calling putTaskLink');
        }
        // verify the required parameter 'task_link' is set
        if ($request->task_link === null) {
            throw new \InvalidArgumentException('Missing the required parameter $task_link when calling putTaskLink');
        }

        $resourcePath = '/tasks/{name}/taskLinks/{index}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->index !== null) {
            $localName = lcfirst('Index');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->index), $resourcePath);
        }

        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        $_tempBody = $this->_prepareBodyParameter($request->task_link);

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation putTaskRecurringInfo
     *
     * Updates existing task's recurring info. Note that task should be already recurring.
     *
     * @param Requests\PutTaskRecurringInfoRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function putTaskRecurringInfo(Requests\PutTaskRecurringInfoRequest $request)
    {
        try {
             list($response) = $this->putTaskRecurringInfoWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->putTaskRecurringInfoWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation putTaskRecurringInfoWithHttpInfo
     *
     * Updates existing task's recurring info. Note that task should be already recurring.
     *
     * @param Requests\PutTaskRecurringInfoRequest $request is a request object for operation
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\AsposeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function putTaskRecurringInfoWithHttpInfo(Requests\PutTaskRecurringInfoRequest $request)
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutTaskRecurringInfoRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Tasks\Model\AsposeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation putTaskRecurringInfoAsync
     *
     * Updates existing task's recurring info. Note that task should be already recurring.
     *
     * @param Requests\PutTaskRecurringInfoRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putTaskRecurringInfoAsync(Requests\PutTaskRecurringInfoRequest $request) 
    {
        return $this->putTaskRecurringInfoAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation putTaskRecurringInfoAsyncWithHttpInfo
     *
     * Updates existing task's recurring info. Note that task should be already recurring.
     *
     * @param Requests\PutTaskRecurringInfoRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putTaskRecurringInfoAsyncWithHttpInfo(Requests\PutTaskRecurringInfoRequest $request) 
    {
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $request = $this->PutTaskRecurringInfoRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'putTaskRecurringInfo'
     *
     * @param Requests\PutTaskRecurringInfoRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PutTaskRecurringInfoRequest(Requests\PutTaskRecurringInfoRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putTaskRecurringInfo');
        }
        // verify the required parameter 'task_uid' is set
        if ($request->task_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $task_uid when calling putTaskRecurringInfo');
        }
        // verify the required parameter 'recurring_info' is set
        if ($request->recurring_info === null) {
            throw new \InvalidArgumentException('Missing the required parameter $recurring_info when calling putTaskRecurringInfo');
        }

        $resourcePath = '/tasks/{name}/tasks/{taskUid}/recurringInfo';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->task_uid !== null) {
            $localName = lcfirst('TaskUid');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->task_uid), $resourcePath);
        }

        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('FileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        $_tempBody = $this->_prepareBodyParameter($request->recurring_info);

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }
    
    /*
     * Executes response logging
     */
    private function _writeResponseLog($statusCode, $headers, $body)
    {
        $logInfo = "\nResponse: $statusCode \n";
        echo $logInfo . $this->_writeHeadersAndBody($logInfo, $headers, $body);
    }
	
    /*
     * Executes request logging
     */
    private function _writeRequestLog($method, $url, $headers, $body)
    {
        $logInfo = "\n$method: $url \n";
        echo $logInfo . $this->_writeHeadersAndBody($logInfo, $headers, $body);
    }
	
    /*
     * Executes header and boy formatting
     */
    private function _writeHeadersAndBody($logInfo, $headers, $body)
    {
        foreach ($headers as $name => $value) {
            $logInfo .= $name . ': ' . $value . "\n";
        }
        
        return $logInfo .= "Body: " . $body . "\n";
    }

    /*
     * Executes url parsing
     */
    private function _parseURL($url, $queryParams) 
    {
        // parse the url
         $UrlToSign = trim($url, "/");
         $urlQuery = http_build_query($queryParams);
 
         $urlPartToSign = parse_url($UrlToSign, PHP_URL_SCHEME) . '://' . $this->config->getVersion() . "/" . parse_url($UrlToSign, PHP_URL_HOST) . parse_url($UrlToSign, PHP_URL_PATH) . "?" . $urlQuery;
        
        return $urlPartToSign;
    }

     /*
     * Prepare body parameter
     */
    private function _prepareBodyParameter($bodyParameterValue)
    {
    	$tempBody = null;
    	if (isset($bodyParameterValue)) {
    		if (is_string($bodyParameterValue)) {
    			$tempBody = "\"" . $bodyParameterValue . "\"";
            }
            elseif($bodyParameterValue instanceof \DateTime) {
            	$tempBody = "\"" . $bodyParameterValue->format(\DATE_ISO8601) . "\"";
            } elseif (is_array($bodyParameterValue)) {
                $tempBody = implode(',', $bodyParameterValue);
            }
            else {
            	$tempBody = $bodyParameterValue;
            }
        }
        return $tempBody;
    }


    /**
     * Operation uploadFile
     *
     * Upload file
     *
     * @param  string $path Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext             If the content is multipart and path does not contains the file name it tries to get them from filename parameter             from Content-Disposition header. (required)
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $storage_name Storage name (optional)
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\FilesUploadResult
     */
    public function uploadFile($path, $file, $storage_name = null){
        try
        {
            list($response) = $this->_postCreateWithHttpInfo($path, $file, $storage_name);
            return $response;
        }
        catch (ApiException $ex)
        {
            if ($ex->getCode() == 401)
            {
                $this->_requestToken();
                list($response) = $this->_postCreateWithHttpInfo($path, $file, $storage_name);
                return $response;
            }
            else
            {
                throw $ex;
            }
        }
    }

    /**
     * Operation deleteFile
     *
     * Delete file
     *
     * @param  string $path Path where to delete including filename and extension e.g. /file.ext or /Folder 1/file.ext             If the content is multipart and path does not contains the file name it tries to get them from filename parameter             from Content-Disposition header. (required)
     * @param  string $storage_name Storage name (optional)
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Tasks\Model\AsposeResponse
     */
    public function deleteFile($path, $storage_name = null){

        // verify the required parameter 'path' is set
        if ($path === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $path when calling uploadFile'
            );
        }
        $returnType = '\Aspose\Tasks\Model\AsposeResponse';
        $resourcePath = '/v3.0/tasks/storage/file/{path}';
        $queryParams = [];
        $httpBody = '';

        // query params
        if ($storage_name !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($storage_name);
        }

        // path params
        if ($path !== null) {
            $resourcePath = str_replace(
                '{' . 'path' . '}',
                ObjectSerializer::toPathValue($path),
                $resourcePath
            );
        }
        $headers = $this->headerSelector->selectHeadersForMultipart(['application/json']);

        if (!$this->config->getAccessToken())
        {
            $this->_requestToken();
        }
        if ($this->config->getAccessToken() !== null)
        {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $request = new Request('DELETE',$this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers, $httpBody);

        try {
            $options = $this->_createHttpClientOption();
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

            $content = $responseBody->getContents();
            $content = json_decode($content);


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
                        '\Aspose\Tasks\Model\FilesUploadResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }

    }

    /**
     * Operation postCreateWithHttpInfo
     *
     * Upload file
     *
     * @param  string $path Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext             If the content is multipart and path does not contains the file name it tries to get them from filename parameter             from Content-Disposition header. (required)
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $storage_name Storage name (optional)
     *
     * @throws \Aspose\Tasks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Tasks\Model\FilesUploadResult, HTTP status code, HTTP response headers (array of strings)
     */
    private function _postCreateWithHttpInfo($path, $file, $storage_name = null){
        $returnType = '\Aspose\Tasks\Model\FilesUploadResult';
        $request = $this->_uploadFileRequest($path, $file, $storage_name);

        try {
            $options = $this->_createHttpClientOption();
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\Aspose\Tasks\Model\FilesUploadResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'uploadFile'
     *
     * @param  string $path Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext             If the content is multipart and path does not contains the file name it tries to get them from filename parameter             from Content-Disposition header. (required)
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $storage_name Storage name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    private function _uploadFileRequest($path, $file, $storage_name = null)
    {
        // verify the required parameter 'path' is set
        if ($path === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $path when calling uploadFile'
            );
        }
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling uploadFile'
            );
        }

        $resourcePath = '/v3.0/tasks/storage/file/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($storage_name !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($storage_name);
        }

        // path params
        if ($path !== null) {
            $resourcePath = str_replace(
                '{' . 'path' . '}',
                ObjectSerializer::toPathValue($path),
                $resourcePath
            );
        }

        // form params
        if ($file !== null) {
            $multipart = true;
            $filename = ObjectSerializer::toFormValue($file);
            $handle = fopen($filename, "rb");
            $fsize = filesize($filename);
            $contents = fread($handle, $fsize);
            $formParams['file'] = $contents;
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
                ['multipart/form-data']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
                // array of objects
            } elseif (is_array($httpBody)) {
                $httpBody = "[" . ObjectSerializer::serializeCollection($httpBody, "") . "]";
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
                //$httpBody = new MultipartStream($multipartContents);
                $httpBody = $formParams['file'];

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        if (!$this->config->getAccessToken())
        {
            $this->_requestToken();
        }
        if ($this->config->getAccessToken() !== null)
        {
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /*
     * Gets a request token from server
     */
    private function _requestToken()
    {
        $requestUrl = $this->config->getHost() . "/connect/token";
        $postData = "grant_type=client_credentials" . "&client_id=" . $this->config->getAppSid() . "&client_secret=" . $this->config->getAppKey();
        $header = ["Content-Type" => "application/x-www-form-urlencoded"];
        $response = $this->client->send(new Request('POST', $requestUrl, $header, $postData));
        $result = json_decode($response->getBody()->getContents(), true);
        $this->config->setAccessToken($result["access_token"]);
    }

    /*
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    private function _createHttpClientOption()
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
