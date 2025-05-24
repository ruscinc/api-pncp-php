# OpenAPI\Client\InstrumentoConvocatrioApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**alterarParcialmenteRegistro()**](InstrumentoConvocatrioApi.md#alterarParcialmenteRegistro) | **PATCH** /v1/tipos-instrumentos-convocatorios/{id} | Alterar instrumento convocatório |
| [**incluirRegistro()**](InstrumentoConvocatrioApi.md#incluirRegistro) | **POST** /v1/tipos-instrumentos-convocatorios | Inserir instrumento convocatório |
| [**obterRegistro()**](InstrumentoConvocatrioApi.md#obterRegistro) | **GET** /v1/tipos-instrumentos-convocatorios/{id} | Consultar instrumento convocatório por código |
| [**obterTodosRegistros()**](InstrumentoConvocatrioApi.md#obterTodosRegistros) | **GET** /v1/tipos-instrumentos-convocatorios | Consultar instrumentos convocatórios |


## `alterarParcialmenteRegistro()`

```php
alterarParcialmenteRegistro($id, $alterar_parcial_tipo_instrumento_convocatorio_dto): string
```

Alterar instrumento convocatório

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InstrumentoConvocatrioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$alterar_parcial_tipo_instrumento_convocatorio_dto = new \OpenAPI\Client\Model\AlterarParcialTipoInstrumentoConvocatorioDTO(); // \OpenAPI\Client\Model\AlterarParcialTipoInstrumentoConvocatorioDTO

try {
    $result = $apiInstance->alterarParcialmenteRegistro($id, $alterar_parcial_tipo_instrumento_convocatorio_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentoConvocatrioApi->alterarParcialmenteRegistro: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **alterar_parcial_tipo_instrumento_convocatorio_dto** | [**\OpenAPI\Client\Model\AlterarParcialTipoInstrumentoConvocatorioDTO**](../Model/AlterarParcialTipoInstrumentoConvocatorioDTO.md)|  | |

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

## `incluirRegistro()`

```php
incluirRegistro($incluir_tipo_instrumento_convocatorio_dto): string
```

Inserir instrumento convocatório

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InstrumentoConvocatrioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incluir_tipo_instrumento_convocatorio_dto = new \OpenAPI\Client\Model\IncluirTipoInstrumentoConvocatorioDTO(); // \OpenAPI\Client\Model\IncluirTipoInstrumentoConvocatorioDTO

try {
    $result = $apiInstance->incluirRegistro($incluir_tipo_instrumento_convocatorio_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentoConvocatrioApi->incluirRegistro: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **incluir_tipo_instrumento_convocatorio_dto** | [**\OpenAPI\Client\Model\IncluirTipoInstrumentoConvocatorioDTO**](../Model/IncluirTipoInstrumentoConvocatorioDTO.md)|  | |

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

## `obterRegistro()`

```php
obterRegistro($id): \OpenAPI\Client\Model\TipoInstrumentoConvocatorioDTO
```

Consultar instrumento convocatório por código

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InstrumentoConvocatrioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->obterRegistro($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentoConvocatrioApi->obterRegistro: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\TipoInstrumentoConvocatorioDTO**](../Model/TipoInstrumentoConvocatorioDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `obterTodosRegistros()`

```php
obterTodosRegistros($status_ativo): object
```

Consultar instrumentos convocatórios

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InstrumentoConvocatrioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status_ativo = True; // bool

try {
    $result = $apiInstance->obterTodosRegistros($status_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentoConvocatrioApi->obterTodosRegistros: ', $e->getMessage(), PHP_EOL;
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
