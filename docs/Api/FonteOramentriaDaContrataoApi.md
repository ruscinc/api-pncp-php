# OpenAPI\Client\FonteOramentriaDaContrataoApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**excluirRegistro1()**](FonteOramentriaDaContrataoApi.md#excluirRegistro1) | **DELETE** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/fonte-orcamentaria | Excluir fonte orçamentária da contratação - Informe os códigos das fontes orçamentárias a ser excluídas, separados por vírgula |
| [**incluirRegistros()**](FonteOramentriaDaContrataoApi.md#incluirRegistros) | **POST** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/fonte-orcamentaria | Inserir fonte orçamentária da contratação - Informe os códigos das fontes orçamentárias separados por vírgula |
| [**obterRegistro3()**](FonteOramentriaDaContrataoApi.md#obterRegistro3) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/fonte-orcamentaria/{fonteOrcamentariaId} | Consultar fonte orçamentária da contratação |
| [**obterRegistros1()**](FonteOramentriaDaContrataoApi.md#obterRegistros1) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/fonte-orcamentaria | Consultar todas as fontes orçamentárias da contratação |


## `excluirRegistro1()`

```php
excluirRegistro1($cnpj, $ano, $sequencial, $excluir_contratacao_fonte_orcamentaria_dto): string
```

Excluir fonte orçamentária da contratação - Informe os códigos das fontes orçamentárias a ser excluídas, separados por vírgula

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FonteOramentriaDaContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$excluir_contratacao_fonte_orcamentaria_dto = new \OpenAPI\Client\Model\ExcluirContratacaoFonteOrcamentariaDTO(); // \OpenAPI\Client\Model\ExcluirContratacaoFonteOrcamentariaDTO

try {
    $result = $apiInstance->excluirRegistro1($cnpj, $ano, $sequencial, $excluir_contratacao_fonte_orcamentaria_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FonteOramentriaDaContrataoApi->excluirRegistro1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **excluir_contratacao_fonte_orcamentaria_dto** | [**\OpenAPI\Client\Model\ExcluirContratacaoFonteOrcamentariaDTO**](../Model/ExcluirContratacaoFonteOrcamentariaDTO.md)|  | |

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

## `incluirRegistros()`

```php
incluirRegistros($cnpj, $ano, $sequencial, $incluir_contratacao_fonte_orcamentaria_dto): string[]
```

Inserir fonte orçamentária da contratação - Informe os códigos das fontes orçamentárias separados por vírgula

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FonteOramentriaDaContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$incluir_contratacao_fonte_orcamentaria_dto = new \OpenAPI\Client\Model\IncluirContratacaoFonteOrcamentariaDTO(); // \OpenAPI\Client\Model\IncluirContratacaoFonteOrcamentariaDTO

try {
    $result = $apiInstance->incluirRegistros($cnpj, $ano, $sequencial, $incluir_contratacao_fonte_orcamentaria_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FonteOramentriaDaContrataoApi->incluirRegistros: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **incluir_contratacao_fonte_orcamentaria_dto** | [**\OpenAPI\Client\Model\IncluirContratacaoFonteOrcamentariaDTO**](../Model/IncluirContratacaoFonteOrcamentariaDTO.md)|  | |

### Return type

**string[]**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `obterRegistro3()`

```php
obterRegistro3($cnpj, $ano, $sequencial, $fonte_orcamentaria_id): \OpenAPI\Client\Model\ContratacaoFonteOrcamentariaDTO
```

Consultar fonte orçamentária da contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FonteOramentriaDaContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$fonte_orcamentaria_id = 56; // int

try {
    $result = $apiInstance->obterRegistro3($cnpj, $ano, $sequencial, $fonte_orcamentaria_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FonteOramentriaDaContrataoApi->obterRegistro3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **fonte_orcamentaria_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ContratacaoFonteOrcamentariaDTO**](../Model/ContratacaoFonteOrcamentariaDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `obterRegistros1()`

```php
obterRegistros1($cnpj, $ano, $sequencial): \OpenAPI\Client\Model\ContratacaoFonteOrcamentariaDTO[]
```

Consultar todas as fontes orçamentárias da contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FonteOramentriaDaContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int

try {
    $result = $apiInstance->obterRegistros1($cnpj, $ano, $sequencial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FonteOramentriaDaContrataoApi->obterRegistros1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ContratacaoFonteOrcamentariaDTO[]**](../Model/ContratacaoFonteOrcamentariaDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
