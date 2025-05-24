# API PNC

## Atualizar a API

Usar o comando abaixo para atualizar a API. Docker é necessário apenas em ambiente Windows.

```bash
cd /api-pncp-php

docker run --rm -v "$(pwd):/local" openapitools/openapi-generator-cli:v7.1.0 generate `
  -i https://treina.pncp.gov.br/pncp-api/v3/api-docs `
    -g php -o /local
```

## Instalar dependências

Usar o comando abaixo para instalar as dependências.

```bash
composer install
```

## Executar testes

Usar o comando abaixo para executar os testes.

```bash
composer test
```
