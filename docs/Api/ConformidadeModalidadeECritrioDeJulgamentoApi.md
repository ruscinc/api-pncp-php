# OpenAPI\Client\ConformidadeModalidadeECritrioDeJulgamentoApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**excluirModalidadeCriterioJulgamento()**](ConformidadeModalidadeECritrioDeJulgamentoApi.md#excluirModalidadeCriterioJulgamento) | **DELETE** /v1/modalidade-criterio-julgamento/{modalidadeId}/{criterioJulgamentoId} | Excluir conformidade entre modalidade de contratação e critério de julgamento |
| [**incluirModalidadeCriterioJulgamento()**](ConformidadeModalidadeECritrioDeJulgamentoApi.md#incluirModalidadeCriterioJulgamento) | **POST** /v1/modalidade-criterio-julgamento | Inserir conformidade entre modalidade de contratação e critério de julgamento |
| [**obterCriteriosJulgamentoPorModalidade()**](ConformidadeModalidadeECritrioDeJulgamentoApi.md#obterCriteriosJulgamentoPorModalidade) | **GET** /v1/modalidade-criterio-julgamento | Consultar conformidade entre modalidade de contratação e critério de julgamento |
| [**obterModalidadeCriterioJulgamento()**](ConformidadeModalidadeECritrioDeJulgamentoApi.md#obterModalidadeCriterioJulgamento) | **GET** /v1/modalidade-criterio-julgamento/{modalidadeId}/{criterioJulgamentoId} | Consultar conformidade entre modalidade de contratação e critério de julgamento por código |


## `excluirModalidadeCriterioJulgamento()`

```php
excluirModalidadeCriterioJulgamento($modalidade_id, $criterio_julgamento_id, $excluir_dominio_generico_dto): object
```

Excluir conformidade entre modalidade de contratação e critério de julgamento

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConformidadeModalidadeECritrioDeJulgamentoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modalidade_id = 56; // int
$criterio_julgamento_id = 56; // int
$excluir_dominio_generico_dto = new \OpenAPI\Client\Model\ExcluirDominioGenericoDTO(); // \OpenAPI\Client\Model\ExcluirDominioGenericoDTO

try {
    $result = $apiInstance->excluirModalidadeCriterioJulgamento($modalidade_id, $criterio_julgamento_id, $excluir_dominio_generico_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConformidadeModalidadeECritrioDeJulgamentoApi->excluirModalidadeCriterioJulgamento: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modalidade_id** | **int**|  | |
| **criterio_julgamento_id** | **int**|  | |
| **excluir_dominio_generico_dto** | [**\OpenAPI\Client\Model\ExcluirDominioGenericoDTO**](../Model/ExcluirDominioGenericoDTO.md)|  | |

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

## `incluirModalidadeCriterioJulgamento()`

```php
incluirModalidadeCriterioJulgamento($modalidade_criterio_julgamento_dto): string
```

Inserir conformidade entre modalidade de contratação e critério de julgamento

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConformidadeModalidadeECritrioDeJulgamentoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modalidade_criterio_julgamento_dto = new \OpenAPI\Client\Model\ModalidadeCriterioJulgamentoDTO(); // \OpenAPI\Client\Model\ModalidadeCriterioJulgamentoDTO

try {
    $result = $apiInstance->incluirModalidadeCriterioJulgamento($modalidade_criterio_julgamento_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConformidadeModalidadeECritrioDeJulgamentoApi->incluirModalidadeCriterioJulgamento: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modalidade_criterio_julgamento_dto** | [**\OpenAPI\Client\Model\ModalidadeCriterioJulgamentoDTO**](../Model/ModalidadeCriterioJulgamentoDTO.md)|  | |

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

## `obterCriteriosJulgamentoPorModalidade()`

```php
obterCriteriosJulgamentoPorModalidade($modalidade_id, $criterio_julgamento_id): object
```

Consultar conformidade entre modalidade de contratação e critério de julgamento

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConformidadeModalidadeECritrioDeJulgamentoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modalidade_id = 56; // int
$criterio_julgamento_id = 56; // int

try {
    $result = $apiInstance->obterCriteriosJulgamentoPorModalidade($modalidade_id, $criterio_julgamento_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConformidadeModalidadeECritrioDeJulgamentoApi->obterCriteriosJulgamentoPorModalidade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modalidade_id** | **int**|  | [optional] |
| **criterio_julgamento_id** | **int**|  | [optional] |

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

## `obterModalidadeCriterioJulgamento()`

```php
obterModalidadeCriterioJulgamento($modalidade_id, $criterio_julgamento_id): \OpenAPI\Client\Model\ConsultarModalidadeCriterioJulgamentoDTO
```

Consultar conformidade entre modalidade de contratação e critério de julgamento por código

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConformidadeModalidadeECritrioDeJulgamentoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modalidade_id = 56; // int
$criterio_julgamento_id = 56; // int

try {
    $result = $apiInstance->obterModalidadeCriterioJulgamento($modalidade_id, $criterio_julgamento_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConformidadeModalidadeECritrioDeJulgamentoApi->obterModalidadeCriterioJulgamento: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modalidade_id** | **int**|  | |
| **criterio_julgamento_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ConsultarModalidadeCriterioJulgamentoDTO**](../Model/ConsultarModalidadeCriterioJulgamentoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
