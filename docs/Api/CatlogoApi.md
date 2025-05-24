# OpenAPI\Client\CatlogoApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**alterarParcialmenteRegistro7()**](CatlogoApi.md#alterarParcialmenteRegistro7) | **PATCH** /v1/catalogos/{id} | Alterar catálogo |
| [**incluirRegistro9()**](CatlogoApi.md#incluirRegistro9) | **POST** /v1/catalogos | Inserir catálogo |
| [**obterRegistro10()**](CatlogoApi.md#obterRegistro10) | **GET** /v1/catalogos/{id} | Consultar catálogo por código |
| [**obterTodosRegistros7()**](CatlogoApi.md#obterTodosRegistros7) | **GET** /v1/catalogos | Consultar catálogos |


## `alterarParcialmenteRegistro7()`

```php
alterarParcialmenteRegistro7($id, $alterar_parcial_catalogo_dto): string
```

Alterar catálogo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CatlogoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$alterar_parcial_catalogo_dto = new \OpenAPI\Client\Model\AlterarParcialCatalogoDTO(); // \OpenAPI\Client\Model\AlterarParcialCatalogoDTO

try {
    $result = $apiInstance->alterarParcialmenteRegistro7($id, $alterar_parcial_catalogo_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatlogoApi->alterarParcialmenteRegistro7: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **alterar_parcial_catalogo_dto** | [**\OpenAPI\Client\Model\AlterarParcialCatalogoDTO**](../Model/AlterarParcialCatalogoDTO.md)|  | |

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

## `incluirRegistro9()`

```php
incluirRegistro9($incluir_catalogo_dto): string
```

Inserir catálogo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CatlogoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incluir_catalogo_dto = new \OpenAPI\Client\Model\IncluirCatalogoDTO(); // \OpenAPI\Client\Model\IncluirCatalogoDTO

try {
    $result = $apiInstance->incluirRegistro9($incluir_catalogo_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatlogoApi->incluirRegistro9: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **incluir_catalogo_dto** | [**\OpenAPI\Client\Model\IncluirCatalogoDTO**](../Model/IncluirCatalogoDTO.md)|  | |

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

## `obterRegistro10()`

```php
obterRegistro10($id): \OpenAPI\Client\Model\CatalogoDTO
```

Consultar catálogo por código

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CatlogoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->obterRegistro10($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatlogoApi->obterRegistro10: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\CatalogoDTO**](../Model/CatalogoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `obterTodosRegistros7()`

```php
obterTodosRegistros7($status_ativo): object
```

Consultar catálogos

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CatlogoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status_ativo = True; // bool

try {
    $result = $apiInstance->obterTodosRegistros7($status_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatlogoApi->obterTodosRegistros7: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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
