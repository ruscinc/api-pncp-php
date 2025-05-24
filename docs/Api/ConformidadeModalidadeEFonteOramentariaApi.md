# OpenAPI\Client\ConformidadeModalidadeEFonteOramentariaApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**excluirModalidadeFonteOrcamentaria()**](ConformidadeModalidadeEFonteOramentariaApi.md#excluirModalidadeFonteOrcamentaria) | **DELETE** /v1/modalidade-fonte-orcamentaria/{modalidadeId}/{fonteOrcamentariaId} | Excluir conformidade entre modalidade de contratação e Fonte Orçamentaria |
| [**incluirModalidadeFonteOrcamentaria()**](ConformidadeModalidadeEFonteOramentariaApi.md#incluirModalidadeFonteOrcamentaria) | **POST** /v1/modalidade-fonte-orcamentaria | Inserir conformidade entre modalidade de contratação e Fonte Orçamentaria |
| [**obterFonteOrcamentariaPorModalidade()**](ConformidadeModalidadeEFonteOramentariaApi.md#obterFonteOrcamentariaPorModalidade) | **GET** /v1/modalidade-fonte-orcamentaria | Consultar conformidade entre modalidade de contratação e Fonte Orçamentaria |
| [**obterModalidadeFonteOrcamentaria()**](ConformidadeModalidadeEFonteOramentariaApi.md#obterModalidadeFonteOrcamentaria) | **GET** /v1/modalidade-fonte-orcamentaria/{modalidadeId}/{fonteOrcamentariaId} | Consultar conformidade entre modalidade de contratação e Fonte Orçamentaria por código |


## `excluirModalidadeFonteOrcamentaria()`

```php
excluirModalidadeFonteOrcamentaria($modalidade_id, $fonte_orcamentaria_id, $excluir_dominio_generico_dto): object
```

Excluir conformidade entre modalidade de contratação e Fonte Orçamentaria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConformidadeModalidadeEFonteOramentariaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modalidade_id = 56; // int
$fonte_orcamentaria_id = 56; // int
$excluir_dominio_generico_dto = new \OpenAPI\Client\Model\ExcluirDominioGenericoDTO(); // \OpenAPI\Client\Model\ExcluirDominioGenericoDTO

try {
    $result = $apiInstance->excluirModalidadeFonteOrcamentaria($modalidade_id, $fonte_orcamentaria_id, $excluir_dominio_generico_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConformidadeModalidadeEFonteOramentariaApi->excluirModalidadeFonteOrcamentaria: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modalidade_id** | **int**|  | |
| **fonte_orcamentaria_id** | **int**|  | |
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

## `incluirModalidadeFonteOrcamentaria()`

```php
incluirModalidadeFonteOrcamentaria($modalidade_fonte_orcamentaria_dto): string
```

Inserir conformidade entre modalidade de contratação e Fonte Orçamentaria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConformidadeModalidadeEFonteOramentariaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modalidade_fonte_orcamentaria_dto = new \OpenAPI\Client\Model\ModalidadeFonteOrcamentariaDTO(); // \OpenAPI\Client\Model\ModalidadeFonteOrcamentariaDTO

try {
    $result = $apiInstance->incluirModalidadeFonteOrcamentaria($modalidade_fonte_orcamentaria_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConformidadeModalidadeEFonteOramentariaApi->incluirModalidadeFonteOrcamentaria: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modalidade_fonte_orcamentaria_dto** | [**\OpenAPI\Client\Model\ModalidadeFonteOrcamentariaDTO**](../Model/ModalidadeFonteOrcamentariaDTO.md)|  | |

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

## `obterFonteOrcamentariaPorModalidade()`

```php
obterFonteOrcamentariaPorModalidade($modalidade_id, $fonte_orcamentaria_id): object
```

Consultar conformidade entre modalidade de contratação e Fonte Orçamentaria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConformidadeModalidadeEFonteOramentariaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modalidade_id = 56; // int
$fonte_orcamentaria_id = 56; // int

try {
    $result = $apiInstance->obterFonteOrcamentariaPorModalidade($modalidade_id, $fonte_orcamentaria_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConformidadeModalidadeEFonteOramentariaApi->obterFonteOrcamentariaPorModalidade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modalidade_id** | **int**|  | [optional] |
| **fonte_orcamentaria_id** | **int**|  | [optional] |

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

## `obterModalidadeFonteOrcamentaria()`

```php
obterModalidadeFonteOrcamentaria($modalidade_id, $fonte_orcamentaria_id): \OpenAPI\Client\Model\ConsultarModalidadeFonteOrcamentariaDTO
```

Consultar conformidade entre modalidade de contratação e Fonte Orçamentaria por código

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConformidadeModalidadeEFonteOramentariaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modalidade_id = 56; // int
$fonte_orcamentaria_id = 56; // int

try {
    $result = $apiInstance->obterModalidadeFonteOrcamentaria($modalidade_id, $fonte_orcamentaria_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConformidadeModalidadeEFonteOramentariaApi->obterModalidadeFonteOrcamentaria: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modalidade_id** | **int**|  | |
| **fonte_orcamentaria_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ConsultarModalidadeFonteOrcamentariaDTO**](../Model/ConsultarModalidadeFonteOrcamentariaDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
