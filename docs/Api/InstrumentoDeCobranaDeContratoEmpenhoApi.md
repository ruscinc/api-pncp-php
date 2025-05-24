# OpenAPI\Client\InstrumentoDeCobranaDeContratoEmpenhoApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**consultarInstrumentoCobranca()**](InstrumentoDeCobranaDeContratoEmpenhoApi.md#consultarInstrumentoCobranca) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencialContrato}/instrumentocobranca/{sequencialInstrumentoCobranca} | Consultar Instrumento de Cobrança de um Contrato/Empenho |
| [**consultarInstrumentosCobranca()**](InstrumentoDeCobranaDeContratoEmpenhoApi.md#consultarInstrumentosCobranca) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencialContrato}/instrumentocobranca | Consultar Instrumentos de Cobrança de um Contrato/Empenho |
| [**excluirInstrumentoCobranca()**](InstrumentoDeCobranaDeContratoEmpenhoApi.md#excluirInstrumentoCobranca) | **DELETE** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencialContrato}/instrumentocobranca/{sequencialInstrumentoCobranca} | Excluir Instrumento de Cobrança de Contrato/Empenho |
| [**inserirInstrumentoCobranca()**](InstrumentoDeCobranaDeContratoEmpenhoApi.md#inserirInstrumentoCobranca) | **POST** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencialContrato}/instrumentocobranca | Inserir Instrumento de Cobrança de um Contrato/Empenho |
| [**retificarInstrumentoCobranca()**](InstrumentoDeCobranaDeContratoEmpenhoApi.md#retificarInstrumentoCobranca) | **PATCH** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencialContrato}/instrumentocobranca/{sequencialInstrumentoCobranca} | Retificar Parcialmente Instrumento de Cobrança de Contrato/Empenho |


## `consultarInstrumentoCobranca()`

```php
consultarInstrumentoCobranca($cnpj, $ano, $sequencial_contrato, $sequencial_instrumento_cobranca): \OpenAPI\Client\Model\ConsultarInstrumentoCobrancaDTO
```

Consultar Instrumento de Cobrança de um Contrato/Empenho

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InstrumentoDeCobranaDeContratoEmpenhoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial_contrato = 56; // int
$sequencial_instrumento_cobranca = 56; // int

try {
    $result = $apiInstance->consultarInstrumentoCobranca($cnpj, $ano, $sequencial_contrato, $sequencial_instrumento_cobranca);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentoDeCobranaDeContratoEmpenhoApi->consultarInstrumentoCobranca: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial_contrato** | **int**|  | |
| **sequencial_instrumento_cobranca** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ConsultarInstrumentoCobrancaDTO**](../Model/ConsultarInstrumentoCobrancaDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `consultarInstrumentosCobranca()`

```php
consultarInstrumentosCobranca($cnpj, $ano, $sequencial_contrato): \OpenAPI\Client\Model\ConsultarInstrumentoCobrancaDTO[]
```

Consultar Instrumentos de Cobrança de um Contrato/Empenho

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InstrumentoDeCobranaDeContratoEmpenhoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial_contrato = 56; // int

try {
    $result = $apiInstance->consultarInstrumentosCobranca($cnpj, $ano, $sequencial_contrato);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentoDeCobranaDeContratoEmpenhoApi->consultarInstrumentosCobranca: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial_contrato** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ConsultarInstrumentoCobrancaDTO[]**](../Model/ConsultarInstrumentoCobrancaDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `excluirInstrumentoCobranca()`

```php
excluirInstrumentoCobranca($cnpj, $ano, $sequencial_contrato, $sequencial_instrumento_cobranca, $excluir_instrumento_cobranca_contrato_dto): object
```

Excluir Instrumento de Cobrança de Contrato/Empenho

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InstrumentoDeCobranaDeContratoEmpenhoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial_contrato = 56; // int
$sequencial_instrumento_cobranca = 56; // int
$excluir_instrumento_cobranca_contrato_dto = new \OpenAPI\Client\Model\ExcluirInstrumentoCobrancaContratoDTO(); // \OpenAPI\Client\Model\ExcluirInstrumentoCobrancaContratoDTO

try {
    $result = $apiInstance->excluirInstrumentoCobranca($cnpj, $ano, $sequencial_contrato, $sequencial_instrumento_cobranca, $excluir_instrumento_cobranca_contrato_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentoDeCobranaDeContratoEmpenhoApi->excluirInstrumentoCobranca: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial_contrato** | **int**|  | |
| **sequencial_instrumento_cobranca** | **int**|  | |
| **excluir_instrumento_cobranca_contrato_dto** | [**\OpenAPI\Client\Model\ExcluirInstrumentoCobrancaContratoDTO**](../Model/ExcluirInstrumentoCobrancaContratoDTO.md)|  | |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inserirInstrumentoCobranca()`

```php
inserirInstrumentoCobranca($cnpj, $ano, $sequencial_contrato, $incluir_instrumento_cobranca_contrato_dto): object
```

Inserir Instrumento de Cobrança de um Contrato/Empenho

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InstrumentoDeCobranaDeContratoEmpenhoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial_contrato = 56; // int
$incluir_instrumento_cobranca_contrato_dto = new \OpenAPI\Client\Model\IncluirInstrumentoCobrancaContratoDTO(); // \OpenAPI\Client\Model\IncluirInstrumentoCobrancaContratoDTO

try {
    $result = $apiInstance->inserirInstrumentoCobranca($cnpj, $ano, $sequencial_contrato, $incluir_instrumento_cobranca_contrato_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentoDeCobranaDeContratoEmpenhoApi->inserirInstrumentoCobranca: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial_contrato** | **int**|  | |
| **incluir_instrumento_cobranca_contrato_dto** | [**\OpenAPI\Client\Model\IncluirInstrumentoCobrancaContratoDTO**](../Model/IncluirInstrumentoCobrancaContratoDTO.md)|  | |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retificarInstrumentoCobranca()`

```php
retificarInstrumentoCobranca($cnpj, $ano, $sequencial_contrato, $sequencial_instrumento_cobranca, $retificar_instrumento_cobranca_contrato_dto): object
```

Retificar Parcialmente Instrumento de Cobrança de Contrato/Empenho

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InstrumentoDeCobranaDeContratoEmpenhoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial_contrato = 56; // int
$sequencial_instrumento_cobranca = 56; // int
$retificar_instrumento_cobranca_contrato_dto = new \OpenAPI\Client\Model\RetificarInstrumentoCobrancaContratoDTO(); // \OpenAPI\Client\Model\RetificarInstrumentoCobrancaContratoDTO

try {
    $result = $apiInstance->retificarInstrumentoCobranca($cnpj, $ano, $sequencial_contrato, $sequencial_instrumento_cobranca, $retificar_instrumento_cobranca_contrato_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentoDeCobranaDeContratoEmpenhoApi->retificarInstrumentoCobranca: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial_contrato** | **int**|  | |
| **sequencial_instrumento_cobranca** | **int**|  | |
| **retificar_instrumento_cobranca_contrato_dto** | [**\OpenAPI\Client\Model\RetificarInstrumentoCobrancaContratoDTO**](../Model/RetificarInstrumentoCobrancaContratoDTO.md)|  | |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
