# OpenAPI\Client\ConformidadeInstrumentoConvocatrioEModoDeDisputaApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**excluirRegistro()**](ConformidadeInstrumentoConvocatrioEModoDeDisputaApi.md#excluirRegistro) | **DELETE** /v1/tipo-instrumento-convocatorio-modo-disputa/{tipoInstrumentoConvocatorioId}/{modoDisputaId} | Excluir conformidade entre instrumento convocatório e modo de disputa |
| [**incluirRegistro2()**](ConformidadeInstrumentoConvocatrioEModoDeDisputaApi.md#incluirRegistro2) | **POST** /v1/tipo-instrumento-convocatorio-modo-disputa | Inserir conformidade entre instrumentos convocatórios e modos de disputa |
| [**obterRegistro2()**](ConformidadeInstrumentoConvocatrioEModoDeDisputaApi.md#obterRegistro2) | **GET** /v1/tipo-instrumento-convocatorio-modo-disputa/{tipoInstrumentoConvocatorioId}/{modoDisputaId} | Consultar conformidade entre instrumentos convocatórios e modos de disputa por código |
| [**obterRegistros()**](ConformidadeInstrumentoConvocatrioEModoDeDisputaApi.md#obterRegistros) | **GET** /v1/tipo-instrumento-convocatorio-modo-disputa | Consultar conformidade entre instrumentos convocatórios e modos de disputa |


## `excluirRegistro()`

```php
excluirRegistro($tipo_instrumento_convocatorio_id, $modo_disputa_id, $excluir_dominio_generico_dto): string
```

Excluir conformidade entre instrumento convocatório e modo de disputa

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConformidadeInstrumentoConvocatrioEModoDeDisputaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tipo_instrumento_convocatorio_id = 56; // int
$modo_disputa_id = 56; // int
$excluir_dominio_generico_dto = new \OpenAPI\Client\Model\ExcluirDominioGenericoDTO(); // \OpenAPI\Client\Model\ExcluirDominioGenericoDTO

try {
    $result = $apiInstance->excluirRegistro($tipo_instrumento_convocatorio_id, $modo_disputa_id, $excluir_dominio_generico_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConformidadeInstrumentoConvocatrioEModoDeDisputaApi->excluirRegistro: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tipo_instrumento_convocatorio_id** | **int**|  | |
| **modo_disputa_id** | **int**|  | |
| **excluir_dominio_generico_dto** | [**\OpenAPI\Client\Model\ExcluirDominioGenericoDTO**](../Model/ExcluirDominioGenericoDTO.md)|  | |

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

## `incluirRegistro2()`

```php
incluirRegistro2($incluir_tipo_instrumento_convocatorio_modo_disputa_dto): string
```

Inserir conformidade entre instrumentos convocatórios e modos de disputa

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConformidadeInstrumentoConvocatrioEModoDeDisputaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incluir_tipo_instrumento_convocatorio_modo_disputa_dto = new \OpenAPI\Client\Model\IncluirTipoInstrumentoConvocatorioModoDisputaDTO(); // \OpenAPI\Client\Model\IncluirTipoInstrumentoConvocatorioModoDisputaDTO

try {
    $result = $apiInstance->incluirRegistro2($incluir_tipo_instrumento_convocatorio_modo_disputa_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConformidadeInstrumentoConvocatrioEModoDeDisputaApi->incluirRegistro2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **incluir_tipo_instrumento_convocatorio_modo_disputa_dto** | [**\OpenAPI\Client\Model\IncluirTipoInstrumentoConvocatorioModoDisputaDTO**](../Model/IncluirTipoInstrumentoConvocatorioModoDisputaDTO.md)|  | |

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

## `obterRegistro2()`

```php
obterRegistro2($tipo_instrumento_convocatorio_id, $modo_disputa_id): \OpenAPI\Client\Model\TipoInstrumentoConvocatorioModoDisputaDTO
```

Consultar conformidade entre instrumentos convocatórios e modos de disputa por código

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConformidadeInstrumentoConvocatrioEModoDeDisputaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tipo_instrumento_convocatorio_id = 56; // int
$modo_disputa_id = 56; // int

try {
    $result = $apiInstance->obterRegistro2($tipo_instrumento_convocatorio_id, $modo_disputa_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConformidadeInstrumentoConvocatrioEModoDeDisputaApi->obterRegistro2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tipo_instrumento_convocatorio_id** | **int**|  | |
| **modo_disputa_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\TipoInstrumentoConvocatorioModoDisputaDTO**](../Model/TipoInstrumentoConvocatorioModoDisputaDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `obterRegistros()`

```php
obterRegistros($tipo_instrumento_convocatorio_id, $modo_disputa_id): object
```

Consultar conformidade entre instrumentos convocatórios e modos de disputa

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConformidadeInstrumentoConvocatrioEModoDeDisputaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tipo_instrumento_convocatorio_id = 56; // int
$modo_disputa_id = 56; // int

try {
    $result = $apiInstance->obterRegistros($tipo_instrumento_convocatorio_id, $modo_disputa_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConformidadeInstrumentoConvocatrioEModoDeDisputaApi->obterRegistros: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tipo_instrumento_convocatorio_id** | **int**|  | [optional] |
| **modo_disputa_id** | **int**|  | [optional] |

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
