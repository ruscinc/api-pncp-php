# OpenAPI\Client\FonteOramentriaApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**alterarParcialmenteRegistro4()**](FonteOramentriaApi.md#alterarParcialmenteRegistro4) | **PATCH** /v1/fontes-orcamentarias/{id} | Alterar fonte orçamentária |
| [**incluirRegistro6()**](FonteOramentriaApi.md#incluirRegistro6) | **POST** /v1/fontes-orcamentarias | Inserir fonte orçamentária |
| [**obterRegistro7()**](FonteOramentriaApi.md#obterRegistro7) | **GET** /v1/fontes-orcamentarias/{id} | Consultar fonte orçamentária por código |
| [**obterTodosRegistros4()**](FonteOramentriaApi.md#obterTodosRegistros4) | **GET** /v1/fontes-orcamentarias | Consultar fontes orçamentárias |


## `alterarParcialmenteRegistro4()`

```php
alterarParcialmenteRegistro4($id, $alterar_parcial_dominio_generico_dto): string
```

Alterar fonte orçamentária

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FonteOramentriaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$alterar_parcial_dominio_generico_dto = new \OpenAPI\Client\Model\AlterarParcialDominioGenericoDTO(); // \OpenAPI\Client\Model\AlterarParcialDominioGenericoDTO

try {
    $result = $apiInstance->alterarParcialmenteRegistro4($id, $alterar_parcial_dominio_generico_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FonteOramentriaApi->alterarParcialmenteRegistro4: ', $e->getMessage(), PHP_EOL;
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

## `incluirRegistro6()`

```php
incluirRegistro6($incluir_dominio_generico_dto): string
```

Inserir fonte orçamentária

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FonteOramentriaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incluir_dominio_generico_dto = new \OpenAPI\Client\Model\IncluirDominioGenericoDTO(); // \OpenAPI\Client\Model\IncluirDominioGenericoDTO

try {
    $result = $apiInstance->incluirRegistro6($incluir_dominio_generico_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FonteOramentriaApi->incluirRegistro6: ', $e->getMessage(), PHP_EOL;
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

## `obterRegistro7()`

```php
obterRegistro7($id): string
```

Consultar fonte orçamentária por código

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FonteOramentriaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->obterRegistro7($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FonteOramentriaApi->obterRegistro7: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `obterTodosRegistros4()`

```php
obterTodosRegistros4($status_ativo): object
```

Consultar fontes orçamentárias

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FonteOramentriaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status_ativo = True; // bool

try {
    $result = $apiInstance->obterTodosRegistros4($status_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FonteOramentriaApi->obterTodosRegistros4: ', $e->getMessage(), PHP_EOL;
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
