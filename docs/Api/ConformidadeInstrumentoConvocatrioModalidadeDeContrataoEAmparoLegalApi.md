# OpenAPI\Client\ConformidadeInstrumentoConvocatrioModalidadeDeContrataoEAmparoLegalApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**consultar()**](ConformidadeInstrumentoConvocatrioModalidadeDeContrataoEAmparoLegalApi.md#consultar) | **GET** /v1/instrumento-convocatorio-modalidade-amparo-legal | Consultar Conformidade Instrumento Convocatório, Modalidade de Contratação e Amparo Legal |
| [**deletarRegistro()**](ConformidadeInstrumentoConvocatrioModalidadeDeContrataoEAmparoLegalApi.md#deletarRegistro) | **DELETE** /v1/instrumento-convocatorio-modalidade-amparo-legal/{amparoLegalId}/{modalidadeId}/{tipoInstrumentoConvocatorioId} | Excluir Conformidade Instrumento Convocatório, Modalidade de Contratação e Amparo Legal |
| [**incluirRegistro5()**](ConformidadeInstrumentoConvocatrioModalidadeDeContrataoEAmparoLegalApi.md#incluirRegistro5) | **POST** /v1/instrumento-convocatorio-modalidade-amparo-legal | Inserir Conformidade Instrumento Convocatório, Modalidade de Contratação e Amparo Legal |
| [**obterRegistro6()**](ConformidadeInstrumentoConvocatrioModalidadeDeContrataoEAmparoLegalApi.md#obterRegistro6) | **GET** /v1/instrumento-convocatorio-modalidade-amparo-legal/{amparoLegalId}/{modalidadeId}/{tipoInstrumentoConvocatorioId} | Consultar Conformidade Instrumento Convocatório, Modalidade de Contratação e Amparo Legal por código |


## `consultar()`

```php
consultar($amparo_legal_id, $modalidade_id, $tipo_instrumento_convocatorio_id): \OpenAPI\Client\Model\ConsultarAmparoLegalModalidadeInstrumentoConvocatorioDTO[]
```

Consultar Conformidade Instrumento Convocatório, Modalidade de Contratação e Amparo Legal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConformidadeInstrumentoConvocatrioModalidadeDeContrataoEAmparoLegalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amparo_legal_id = 56; // int
$modalidade_id = 56; // int
$tipo_instrumento_convocatorio_id = 56; // int

try {
    $result = $apiInstance->consultar($amparo_legal_id, $modalidade_id, $tipo_instrumento_convocatorio_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConformidadeInstrumentoConvocatrioModalidadeDeContrataoEAmparoLegalApi->consultar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **amparo_legal_id** | **int**|  | [optional] |
| **modalidade_id** | **int**|  | [optional] |
| **tipo_instrumento_convocatorio_id** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ConsultarAmparoLegalModalidadeInstrumentoConvocatorioDTO[]**](../Model/ConsultarAmparoLegalModalidadeInstrumentoConvocatorioDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletarRegistro()`

```php
deletarRegistro($amparo_legal_id, $modalidade_id, $tipo_instrumento_convocatorio_id, $excluir_dominio_generico_dto): string
```

Excluir Conformidade Instrumento Convocatório, Modalidade de Contratação e Amparo Legal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConformidadeInstrumentoConvocatrioModalidadeDeContrataoEAmparoLegalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$amparo_legal_id = 56; // int
$modalidade_id = 56; // int
$tipo_instrumento_convocatorio_id = 56; // int
$excluir_dominio_generico_dto = new \OpenAPI\Client\Model\ExcluirDominioGenericoDTO(); // \OpenAPI\Client\Model\ExcluirDominioGenericoDTO

try {
    $result = $apiInstance->deletarRegistro($amparo_legal_id, $modalidade_id, $tipo_instrumento_convocatorio_id, $excluir_dominio_generico_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConformidadeInstrumentoConvocatrioModalidadeDeContrataoEAmparoLegalApi->deletarRegistro: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **amparo_legal_id** | **int**|  | |
| **modalidade_id** | **int**|  | |
| **tipo_instrumento_convocatorio_id** | **int**|  | |
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

## `incluirRegistro5()`

```php
incluirRegistro5($amparo_legal_modalidade_instrumento_convocatorio_command): string
```

Inserir Conformidade Instrumento Convocatório, Modalidade de Contratação e Amparo Legal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConformidadeInstrumentoConvocatrioModalidadeDeContrataoEAmparoLegalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$amparo_legal_modalidade_instrumento_convocatorio_command = new \OpenAPI\Client\Model\AmparoLegalModalidadeInstrumentoConvocatorioCommand(); // \OpenAPI\Client\Model\AmparoLegalModalidadeInstrumentoConvocatorioCommand

try {
    $result = $apiInstance->incluirRegistro5($amparo_legal_modalidade_instrumento_convocatorio_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConformidadeInstrumentoConvocatrioModalidadeDeContrataoEAmparoLegalApi->incluirRegistro5: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **amparo_legal_modalidade_instrumento_convocatorio_command** | [**\OpenAPI\Client\Model\AmparoLegalModalidadeInstrumentoConvocatorioCommand**](../Model/AmparoLegalModalidadeInstrumentoConvocatorioCommand.md)|  | |

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

## `obterRegistro6()`

```php
obterRegistro6($amparo_legal_id, $modalidade_id, $tipo_instrumento_convocatorio_id): \OpenAPI\Client\Model\ConsultarAmparoLegalModalidadeInstrumentoConvocatorioDTO
```

Consultar Conformidade Instrumento Convocatório, Modalidade de Contratação e Amparo Legal por código

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConformidadeInstrumentoConvocatrioModalidadeDeContrataoEAmparoLegalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amparo_legal_id = 56; // int
$modalidade_id = 56; // int
$tipo_instrumento_convocatorio_id = 56; // int

try {
    $result = $apiInstance->obterRegistro6($amparo_legal_id, $modalidade_id, $tipo_instrumento_convocatorio_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConformidadeInstrumentoConvocatrioModalidadeDeContrataoEAmparoLegalApi->obterRegistro6: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **amparo_legal_id** | **int**|  | |
| **modalidade_id** | **int**|  | |
| **tipo_instrumento_convocatorio_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ConsultarAmparoLegalModalidadeInstrumentoConvocatorioDTO**](../Model/ConsultarAmparoLegalModalidadeInstrumentoConvocatorioDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
