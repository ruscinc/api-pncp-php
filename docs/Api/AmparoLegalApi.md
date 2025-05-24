# OpenAPI\Client\AmparoLegalApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**alterarParcialmenteRegistro8()**](AmparoLegalApi.md#alterarParcialmenteRegistro8) | **PATCH** /v1/amparos-legais/{id} | Alterar amparo legal |
| [**incluirRegistro10()**](AmparoLegalApi.md#incluirRegistro10) | **POST** /v1/amparos-legais | Inserir amparo legal |
| [**obterRegistro11()**](AmparoLegalApi.md#obterRegistro11) | **GET** /v1/amparos-legais/{id} | Consultar amparo legal por código |
| [**obterTodosRegistros8()**](AmparoLegalApi.md#obterTodosRegistros8) | **GET** /v1/amparos-legais | Consultar amparos legais |


## `alterarParcialmenteRegistro8()`

```php
alterarParcialmenteRegistro8($id, $alterar_parcial_amparo_legal_dto): string
```

Alterar amparo legal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AmparoLegalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$alterar_parcial_amparo_legal_dto = new \OpenAPI\Client\Model\AlterarParcialAmparoLegalDTO(); // \OpenAPI\Client\Model\AlterarParcialAmparoLegalDTO

try {
    $result = $apiInstance->alterarParcialmenteRegistro8($id, $alterar_parcial_amparo_legal_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AmparoLegalApi->alterarParcialmenteRegistro8: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **alterar_parcial_amparo_legal_dto** | [**\OpenAPI\Client\Model\AlterarParcialAmparoLegalDTO**](../Model/AlterarParcialAmparoLegalDTO.md)|  | |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incluirRegistro10()`

```php
incluirRegistro10($incluir_amparo_legal_dto): string
```

Inserir amparo legal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AmparoLegalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incluir_amparo_legal_dto = new \OpenAPI\Client\Model\IncluirAmparoLegalDTO(); // \OpenAPI\Client\Model\IncluirAmparoLegalDTO

try {
    $result = $apiInstance->incluirRegistro10($incluir_amparo_legal_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AmparoLegalApi->incluirRegistro10: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **incluir_amparo_legal_dto** | [**\OpenAPI\Client\Model\IncluirAmparoLegalDTO**](../Model/IncluirAmparoLegalDTO.md)|  | |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `obterRegistro11()`

```php
obterRegistro11($id): \OpenAPI\Client\Model\AmparoLegalDTO
```

Consultar amparo legal por código

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AmparoLegalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->obterRegistro11($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AmparoLegalApi->obterRegistro11: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\AmparoLegalDTO**](../Model/AmparoLegalDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `obterTodosRegistros8()`

```php
obterTodosRegistros8($tipo_amparo_legal_id, $status_ativo): object
```

Consultar amparos legais

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AmparoLegalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tipo_amparo_legal_id = 56; // int
$status_ativo = True; // bool

try {
    $result = $apiInstance->obterTodosRegistros8($tipo_amparo_legal_id, $status_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AmparoLegalApi->obterTodosRegistros8: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tipo_amparo_legal_id** | **int**|  | [optional] |
| **status_ativo** | **bool**|  | [optional] |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
