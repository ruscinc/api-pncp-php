# OpenAPI\Client\CritrioDeJulgamentoApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**alterarParcialmenteRegistro5()**](CritrioDeJulgamentoApi.md#alterarParcialmenteRegistro5) | **PATCH** /v1/criterios-julgamentos/{id} | Alterar critério de julgamento |
| [**incluirRegistro7()**](CritrioDeJulgamentoApi.md#incluirRegistro7) | **POST** /v1/criterios-julgamentos | Inserir critério de julgamento |
| [**obterRegistro8()**](CritrioDeJulgamentoApi.md#obterRegistro8) | **GET** /v1/criterios-julgamentos/{id} | Consultar critério de julgamento por código |
| [**obterTodosRegistros5()**](CritrioDeJulgamentoApi.md#obterTodosRegistros5) | **GET** /v1/criterios-julgamentos | Consultar critérios de julgamentos |


## `alterarParcialmenteRegistro5()`

```php
alterarParcialmenteRegistro5($id, $alterar_parcial_dominio_generico_dto): string
```

Alterar critério de julgamento

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CritrioDeJulgamentoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$alterar_parcial_dominio_generico_dto = new \OpenAPI\Client\Model\AlterarParcialDominioGenericoDTO(); // \OpenAPI\Client\Model\AlterarParcialDominioGenericoDTO

try {
    $result = $apiInstance->alterarParcialmenteRegistro5($id, $alterar_parcial_dominio_generico_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CritrioDeJulgamentoApi->alterarParcialmenteRegistro5: ', $e->getMessage(), PHP_EOL;
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

## `incluirRegistro7()`

```php
incluirRegistro7($incluir_dominio_generico_dto): string
```

Inserir critério de julgamento

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CritrioDeJulgamentoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incluir_dominio_generico_dto = new \OpenAPI\Client\Model\IncluirDominioGenericoDTO(); // \OpenAPI\Client\Model\IncluirDominioGenericoDTO

try {
    $result = $apiInstance->incluirRegistro7($incluir_dominio_generico_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CritrioDeJulgamentoApi->incluirRegistro7: ', $e->getMessage(), PHP_EOL;
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

## `obterRegistro8()`

```php
obterRegistro8($id): \OpenAPI\Client\Model\DominioGenericoDTO
```

Consultar critério de julgamento por código

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CritrioDeJulgamentoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->obterRegistro8($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CritrioDeJulgamentoApi->obterRegistro8: ', $e->getMessage(), PHP_EOL;
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

## `obterTodosRegistros5()`

```php
obterTodosRegistros5($status_ativo): object
```

Consultar critérios de julgamentos

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CritrioDeJulgamentoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status_ativo = True; // bool

try {
    $result = $apiInstance->obterTodosRegistros5($status_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CritrioDeJulgamentoApi->obterTodosRegistros5: ', $e->getMessage(), PHP_EOL;
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
