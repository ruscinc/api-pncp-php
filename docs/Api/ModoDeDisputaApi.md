# OpenAPI\Client\ModoDeDisputaApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**alterarParcialmenteRegistro2()**](ModoDeDisputaApi.md#alterarParcialmenteRegistro2) | **PATCH** /v1/modos-disputas/{id} | Alterar modo de disputa |
| [**incluirRegistro3()**](ModoDeDisputaApi.md#incluirRegistro3) | **POST** /v1/modos-disputas | Inserir modo de disputa |
| [**obterRegistro4()**](ModoDeDisputaApi.md#obterRegistro4) | **GET** /v1/modos-disputas/{id} | Consultar modo de disputa por código |
| [**obterTodosRegistros2()**](ModoDeDisputaApi.md#obterTodosRegistros2) | **GET** /v1/modos-disputas | Consultar modos de disputas |


## `alterarParcialmenteRegistro2()`

```php
alterarParcialmenteRegistro2($id, $alterar_parcial_dominio_generico_dto): string
```

Alterar modo de disputa

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ModoDeDisputaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$alterar_parcial_dominio_generico_dto = new \OpenAPI\Client\Model\AlterarParcialDominioGenericoDTO(); // \OpenAPI\Client\Model\AlterarParcialDominioGenericoDTO

try {
    $result = $apiInstance->alterarParcialmenteRegistro2($id, $alterar_parcial_dominio_generico_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModoDeDisputaApi->alterarParcialmenteRegistro2: ', $e->getMessage(), PHP_EOL;
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

## `incluirRegistro3()`

```php
incluirRegistro3($incluir_dominio_generico_dto): string
```

Inserir modo de disputa

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ModoDeDisputaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incluir_dominio_generico_dto = new \OpenAPI\Client\Model\IncluirDominioGenericoDTO(); // \OpenAPI\Client\Model\IncluirDominioGenericoDTO

try {
    $result = $apiInstance->incluirRegistro3($incluir_dominio_generico_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModoDeDisputaApi->incluirRegistro3: ', $e->getMessage(), PHP_EOL;
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

## `obterRegistro4()`

```php
obterRegistro4($id): \OpenAPI\Client\Model\DominioGenericoDTO
```

Consultar modo de disputa por código

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ModoDeDisputaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->obterRegistro4($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModoDeDisputaApi->obterRegistro4: ', $e->getMessage(), PHP_EOL;
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

## `obterTodosRegistros2()`

```php
obterTodosRegistros2($status_ativo): object
```

Consultar modos de disputas

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ModoDeDisputaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status_ativo = True; // bool

try {
    $result = $apiInstance->obterTodosRegistros2($status_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModoDeDisputaApi->obterTodosRegistros2: ', $e->getMessage(), PHP_EOL;
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
