# OpenAPI\Client\TipoDeInstrumentoDeCobranaApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**alterarParcialmenteRegistro1()**](TipoDeInstrumentoDeCobranaApi.md#alterarParcialmenteRegistro1) | **PATCH** /v1/tipos-instrumentos-cobranca/{id} | Alterar Tipo de Instrumento de Cobrança |
| [**incluirRegistro1()**](TipoDeInstrumentoDeCobranaApi.md#incluirRegistro1) | **POST** /v1/tipos-instrumentos-cobranca | Inserir Tipo de Instrumento de Cobrança |
| [**obterRegistro1()**](TipoDeInstrumentoDeCobranaApi.md#obterRegistro1) | **GET** /v1/tipos-instrumentos-cobranca/{id} | Consultar Tipo de Instrumento de Cobrança por Código |
| [**obterTodosRegistros1()**](TipoDeInstrumentoDeCobranaApi.md#obterTodosRegistros1) | **GET** /v1/tipos-instrumentos-cobranca | Consultar Tipos de Instrumentos de Cobrança |


## `alterarParcialmenteRegistro1()`

```php
alterarParcialmenteRegistro1($id, $alterar_parcial_tipo_instrumento_conbranca_dto): string
```

Alterar Tipo de Instrumento de Cobrança

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TipoDeInstrumentoDeCobranaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$alterar_parcial_tipo_instrumento_conbranca_dto = new \OpenAPI\Client\Model\AlterarParcialTipoInstrumentoConbrancaDTO(); // \OpenAPI\Client\Model\AlterarParcialTipoInstrumentoConbrancaDTO

try {
    $result = $apiInstance->alterarParcialmenteRegistro1($id, $alterar_parcial_tipo_instrumento_conbranca_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TipoDeInstrumentoDeCobranaApi->alterarParcialmenteRegistro1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **alterar_parcial_tipo_instrumento_conbranca_dto** | [**\OpenAPI\Client\Model\AlterarParcialTipoInstrumentoConbrancaDTO**](../Model/AlterarParcialTipoInstrumentoConbrancaDTO.md)|  | |

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

## `incluirRegistro1()`

```php
incluirRegistro1($incluir_tipo_instrumento_cobranca_dto): string
```

Inserir Tipo de Instrumento de Cobrança

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TipoDeInstrumentoDeCobranaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incluir_tipo_instrumento_cobranca_dto = new \OpenAPI\Client\Model\IncluirTipoInstrumentoCobrancaDTO(); // \OpenAPI\Client\Model\IncluirTipoInstrumentoCobrancaDTO

try {
    $result = $apiInstance->incluirRegistro1($incluir_tipo_instrumento_cobranca_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TipoDeInstrumentoDeCobranaApi->incluirRegistro1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **incluir_tipo_instrumento_cobranca_dto** | [**\OpenAPI\Client\Model\IncluirTipoInstrumentoCobrancaDTO**](../Model/IncluirTipoInstrumentoCobrancaDTO.md)|  | |

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

## `obterRegistro1()`

```php
obterRegistro1($id): \OpenAPI\Client\Model\TipoInstrumentoCobrancaDTO
```

Consultar Tipo de Instrumento de Cobrança por Código

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TipoDeInstrumentoDeCobranaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->obterRegistro1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TipoDeInstrumentoDeCobranaApi->obterRegistro1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\TipoInstrumentoCobrancaDTO**](../Model/TipoInstrumentoCobrancaDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `obterTodosRegistros1()`

```php
obterTodosRegistros1($status_ativo): object
```

Consultar Tipos de Instrumentos de Cobrança

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TipoDeInstrumentoDeCobranaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status_ativo = True; // bool

try {
    $result = $apiInstance->obterTodosRegistros1($status_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TipoDeInstrumentoDeCobranaApi->obterTodosRegistros1: ', $e->getMessage(), PHP_EOL;
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
