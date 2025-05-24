# OpenAPI\Client\ModalidadeApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**alterarParcialmenteRegistro3()**](ModalidadeApi.md#alterarParcialmenteRegistro3) | **PATCH** /v1/modalidades/{id} | Alterar modalidade de contratação |
| [**incluirRegistro4()**](ModalidadeApi.md#incluirRegistro4) | **POST** /v1/modalidades | Inserir modalidade de contratação |
| [**obterRegistro5()**](ModalidadeApi.md#obterRegistro5) | **GET** /v1/modalidades/{id} | Consultar modalidade de contratação por código |
| [**obterTodosRegistros3()**](ModalidadeApi.md#obterTodosRegistros3) | **GET** /v1/modalidades | Consultar modalidades de contratação |


## `alterarParcialmenteRegistro3()`

```php
alterarParcialmenteRegistro3($id, $alterar_parcial_dominio_generico_dto): string
```

Alterar modalidade de contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ModalidadeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$alterar_parcial_dominio_generico_dto = new \OpenAPI\Client\Model\AlterarParcialDominioGenericoDTO(); // \OpenAPI\Client\Model\AlterarParcialDominioGenericoDTO

try {
    $result = $apiInstance->alterarParcialmenteRegistro3($id, $alterar_parcial_dominio_generico_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModalidadeApi->alterarParcialmenteRegistro3: ', $e->getMessage(), PHP_EOL;
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

## `incluirRegistro4()`

```php
incluirRegistro4($incluir_dominio_generico_dto): string
```

Inserir modalidade de contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ModalidadeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incluir_dominio_generico_dto = new \OpenAPI\Client\Model\IncluirDominioGenericoDTO(); // \OpenAPI\Client\Model\IncluirDominioGenericoDTO

try {
    $result = $apiInstance->incluirRegistro4($incluir_dominio_generico_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModalidadeApi->incluirRegistro4: ', $e->getMessage(), PHP_EOL;
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

## `obterRegistro5()`

```php
obterRegistro5($id): \OpenAPI\Client\Model\DominioGenericoDTO
```

Consultar modalidade de contratação por código

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ModalidadeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->obterRegistro5($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModalidadeApi->obterRegistro5: ', $e->getMessage(), PHP_EOL;
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

## `obterTodosRegistros3()`

```php
obterTodosRegistros3($status_ativo): object
```

Consultar modalidades de contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ModalidadeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status_ativo = True; // bool

try {
    $result = $apiInstance->obterTodosRegistros3($status_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModalidadeApi->obterTodosRegistros3: ', $e->getMessage(), PHP_EOL;
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
