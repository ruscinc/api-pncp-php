# OpenAPI\Client\CategoriaDeItemApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**alterarParcialmenteRegistro6()**](CategoriaDeItemApi.md#alterarParcialmenteRegistro6) | **PATCH** /v1/categoriaItemPcas/{id} | Alterar categoria de item |
| [**incluirRegistro8()**](CategoriaDeItemApi.md#incluirRegistro8) | **POST** /v1/categoriaItemPcas | Inserir categoria de item |
| [**obterRegistro9()**](CategoriaDeItemApi.md#obterRegistro9) | **GET** /v1/categoriaItemPcas/{id} | Consultar categoria de item por código |
| [**obterTodosRegistros6()**](CategoriaDeItemApi.md#obterTodosRegistros6) | **GET** /v1/categoriaItemPcas | Consultar categorias de item |


## `alterarParcialmenteRegistro6()`

```php
alterarParcialmenteRegistro6($id, $alterar_parcial_dominio_generico_dto): string
```

Alterar categoria de item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CategoriaDeItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$alterar_parcial_dominio_generico_dto = new \OpenAPI\Client\Model\AlterarParcialDominioGenericoDTO(); // \OpenAPI\Client\Model\AlterarParcialDominioGenericoDTO

try {
    $result = $apiInstance->alterarParcialmenteRegistro6($id, $alterar_parcial_dominio_generico_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriaDeItemApi->alterarParcialmenteRegistro6: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **alterar_parcial_dominio_generico_dto** | [**\OpenAPI\Client\Model\AlterarParcialDominioGenericoDTO**](../Model/AlterarParcialDominioGenericoDTO.md)|  | |

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

## `incluirRegistro8()`

```php
incluirRegistro8($incluir_dominio_generico_dto): string
```

Inserir categoria de item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CategoriaDeItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incluir_dominio_generico_dto = new \OpenAPI\Client\Model\IncluirDominioGenericoDTO(); // \OpenAPI\Client\Model\IncluirDominioGenericoDTO

try {
    $result = $apiInstance->incluirRegistro8($incluir_dominio_generico_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriaDeItemApi->incluirRegistro8: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **incluir_dominio_generico_dto** | [**\OpenAPI\Client\Model\IncluirDominioGenericoDTO**](../Model/IncluirDominioGenericoDTO.md)|  | |

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

## `obterRegistro9()`

```php
obterRegistro9($id): \OpenAPI\Client\Model\DominioGenericoDTO
```

Consultar categoria de item por código

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CategoriaDeItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->obterRegistro9($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriaDeItemApi->obterRegistro9: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\DominioGenericoDTO**](../Model/DominioGenericoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `obterTodosRegistros6()`

```php
obterTodosRegistros6($status_ativo): object
```

Consultar categorias de item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CategoriaDeItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status_ativo = True; // bool

try {
    $result = $apiInstance->obterTodosRegistros6($status_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriaDeItemApi->obterTodosRegistros6: ', $e->getMessage(), PHP_EOL;
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
