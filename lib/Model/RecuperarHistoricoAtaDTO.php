<?php
/**
 * RecuperarHistoricoAtaDTO
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API PNCP
 *
 * API REST de serviços do Portal Nacional de Contratações Públicas (PNCP)
 *
 * The version of the OpenAPI document: 1.0
 * Contact: css.serpro@serpro.gov.br
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * RecuperarHistoricoAtaDTO Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RecuperarHistoricoAtaDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RecuperarHistoricoAtaDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'justificativa' => 'string',
        'tipo_log_manutencao' => 'string',
        'categoria_log_manutencao' => 'string',
        'log_manutencao_data_inclusao' => '\DateTime',
        'ata_sequencial' => 'int',
        'documento_ata_tipo' => 'string',
        'documento_ata_titulo' => 'string',
        'documento_ata_sequencial' => 'int',
        'compra_sequencial' => 'int',
        'tipo_log_manutencao_nome' => 'string',
        'categoria_log_manutencao_nome' => 'string',
        'compra_orgao_cnpj' => 'string',
        'compra_ano' => 'int',
        'usuario_nome' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'justificativa' => null,
        'tipo_log_manutencao' => null,
        'categoria_log_manutencao' => null,
        'log_manutencao_data_inclusao' => 'date-time',
        'ata_sequencial' => 'int32',
        'documento_ata_tipo' => null,
        'documento_ata_titulo' => null,
        'documento_ata_sequencial' => 'int32',
        'compra_sequencial' => 'int32',
        'tipo_log_manutencao_nome' => null,
        'categoria_log_manutencao_nome' => null,
        'compra_orgao_cnpj' => null,
        'compra_ano' => 'int32',
        'usuario_nome' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'justificativa' => false,
		'tipo_log_manutencao' => false,
		'categoria_log_manutencao' => false,
		'log_manutencao_data_inclusao' => false,
		'ata_sequencial' => false,
		'documento_ata_tipo' => false,
		'documento_ata_titulo' => false,
		'documento_ata_sequencial' => false,
		'compra_sequencial' => false,
		'tipo_log_manutencao_nome' => false,
		'categoria_log_manutencao_nome' => false,
		'compra_orgao_cnpj' => false,
		'compra_ano' => false,
		'usuario_nome' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'justificativa' => 'justificativa',
        'tipo_log_manutencao' => 'tipoLogManutencao',
        'categoria_log_manutencao' => 'categoriaLogManutencao',
        'log_manutencao_data_inclusao' => 'logManutencaoDataInclusao',
        'ata_sequencial' => 'ataSequencial',
        'documento_ata_tipo' => 'documentoAtaTipo',
        'documento_ata_titulo' => 'documentoAtaTitulo',
        'documento_ata_sequencial' => 'documentoAtaSequencial',
        'compra_sequencial' => 'compraSequencial',
        'tipo_log_manutencao_nome' => 'tipoLogManutencaoNome',
        'categoria_log_manutencao_nome' => 'categoriaLogManutencaoNome',
        'compra_orgao_cnpj' => 'compraOrgaoCnpj',
        'compra_ano' => 'compraAno',
        'usuario_nome' => 'usuarioNome'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'justificativa' => 'setJustificativa',
        'tipo_log_manutencao' => 'setTipoLogManutencao',
        'categoria_log_manutencao' => 'setCategoriaLogManutencao',
        'log_manutencao_data_inclusao' => 'setLogManutencaoDataInclusao',
        'ata_sequencial' => 'setAtaSequencial',
        'documento_ata_tipo' => 'setDocumentoAtaTipo',
        'documento_ata_titulo' => 'setDocumentoAtaTitulo',
        'documento_ata_sequencial' => 'setDocumentoAtaSequencial',
        'compra_sequencial' => 'setCompraSequencial',
        'tipo_log_manutencao_nome' => 'setTipoLogManutencaoNome',
        'categoria_log_manutencao_nome' => 'setCategoriaLogManutencaoNome',
        'compra_orgao_cnpj' => 'setCompraOrgaoCnpj',
        'compra_ano' => 'setCompraAno',
        'usuario_nome' => 'setUsuarioNome'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'justificativa' => 'getJustificativa',
        'tipo_log_manutencao' => 'getTipoLogManutencao',
        'categoria_log_manutencao' => 'getCategoriaLogManutencao',
        'log_manutencao_data_inclusao' => 'getLogManutencaoDataInclusao',
        'ata_sequencial' => 'getAtaSequencial',
        'documento_ata_tipo' => 'getDocumentoAtaTipo',
        'documento_ata_titulo' => 'getDocumentoAtaTitulo',
        'documento_ata_sequencial' => 'getDocumentoAtaSequencial',
        'compra_sequencial' => 'getCompraSequencial',
        'tipo_log_manutencao_nome' => 'getTipoLogManutencaoNome',
        'categoria_log_manutencao_nome' => 'getCategoriaLogManutencaoNome',
        'compra_orgao_cnpj' => 'getCompraOrgaoCnpj',
        'compra_ano' => 'getCompraAno',
        'usuario_nome' => 'getUsuarioNome'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const TIPO_LOG_MANUTENCAO__0 = '0';
    public const TIPO_LOG_MANUTENCAO__1 = '1';
    public const TIPO_LOG_MANUTENCAO__2 = '2';
    public const CATEGORIA_LOG_MANUTENCAO__1 = '1';
    public const CATEGORIA_LOG_MANUTENCAO__2 = '2';
    public const CATEGORIA_LOG_MANUTENCAO__3 = '3';
    public const CATEGORIA_LOG_MANUTENCAO__4 = '4';
    public const CATEGORIA_LOG_MANUTENCAO__5 = '5';
    public const CATEGORIA_LOG_MANUTENCAO__6 = '6';
    public const CATEGORIA_LOG_MANUTENCAO__7 = '7';
    public const CATEGORIA_LOG_MANUTENCAO__8 = '8';
    public const CATEGORIA_LOG_MANUTENCAO__9 = '9';
    public const CATEGORIA_LOG_MANUTENCAO__10 = '10';
    public const CATEGORIA_LOG_MANUTENCAO__11 = '11';
    public const CATEGORIA_LOG_MANUTENCAO__12 = '12';
    public const CATEGORIA_LOG_MANUTENCAO__13 = '13';
    public const CATEGORIA_LOG_MANUTENCAO__14 = '14';
    public const CATEGORIA_LOG_MANUTENCAO__15 = '15';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTipoLogManutencaoAllowableValues()
    {
        return [
            self::TIPO_LOG_MANUTENCAO__0,
            self::TIPO_LOG_MANUTENCAO__1,
            self::TIPO_LOG_MANUTENCAO__2,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoriaLogManutencaoAllowableValues()
    {
        return [
            self::CATEGORIA_LOG_MANUTENCAO__1,
            self::CATEGORIA_LOG_MANUTENCAO__2,
            self::CATEGORIA_LOG_MANUTENCAO__3,
            self::CATEGORIA_LOG_MANUTENCAO__4,
            self::CATEGORIA_LOG_MANUTENCAO__5,
            self::CATEGORIA_LOG_MANUTENCAO__6,
            self::CATEGORIA_LOG_MANUTENCAO__7,
            self::CATEGORIA_LOG_MANUTENCAO__8,
            self::CATEGORIA_LOG_MANUTENCAO__9,
            self::CATEGORIA_LOG_MANUTENCAO__10,
            self::CATEGORIA_LOG_MANUTENCAO__11,
            self::CATEGORIA_LOG_MANUTENCAO__12,
            self::CATEGORIA_LOG_MANUTENCAO__13,
            self::CATEGORIA_LOG_MANUTENCAO__14,
            self::CATEGORIA_LOG_MANUTENCAO__15,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('justificativa', $data ?? [], null);
        $this->setIfExists('tipo_log_manutencao', $data ?? [], null);
        $this->setIfExists('categoria_log_manutencao', $data ?? [], null);
        $this->setIfExists('log_manutencao_data_inclusao', $data ?? [], null);
        $this->setIfExists('ata_sequencial', $data ?? [], null);
        $this->setIfExists('documento_ata_tipo', $data ?? [], null);
        $this->setIfExists('documento_ata_titulo', $data ?? [], null);
        $this->setIfExists('documento_ata_sequencial', $data ?? [], null);
        $this->setIfExists('compra_sequencial', $data ?? [], null);
        $this->setIfExists('tipo_log_manutencao_nome', $data ?? [], null);
        $this->setIfExists('categoria_log_manutencao_nome', $data ?? [], null);
        $this->setIfExists('compra_orgao_cnpj', $data ?? [], null);
        $this->setIfExists('compra_ano', $data ?? [], null);
        $this->setIfExists('usuario_nome', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTipoLogManutencaoAllowableValues();
        if (!is_null($this->container['tipo_log_manutencao']) && !in_array($this->container['tipo_log_manutencao'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'tipo_log_manutencao', must be one of '%s'",
                $this->container['tipo_log_manutencao'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCategoriaLogManutencaoAllowableValues();
        if (!is_null($this->container['categoria_log_manutencao']) && !in_array($this->container['categoria_log_manutencao'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'categoria_log_manutencao', must be one of '%s'",
                $this->container['categoria_log_manutencao'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets justificativa
     *
     * @return string|null
     */
    public function getJustificativa()
    {
        return $this->container['justificativa'];
    }

    /**
     * Sets justificativa
     *
     * @param string|null $justificativa justificativa
     *
     * @return self
     */
    public function setJustificativa($justificativa)
    {
        if (is_null($justificativa)) {
            throw new \InvalidArgumentException('non-nullable justificativa cannot be null');
        }
        $this->container['justificativa'] = $justificativa;

        return $this;
    }

    /**
     * Gets tipo_log_manutencao
     *
     * @return string|null
     */
    public function getTipoLogManutencao()
    {
        return $this->container['tipo_log_manutencao'];
    }

    /**
     * Sets tipo_log_manutencao
     *
     * @param string|null $tipo_log_manutencao tipo_log_manutencao
     *
     * @return self
     */
    public function setTipoLogManutencao($tipo_log_manutencao)
    {
        if (is_null($tipo_log_manutencao)) {
            throw new \InvalidArgumentException('non-nullable tipo_log_manutencao cannot be null');
        }
        $allowedValues = $this->getTipoLogManutencaoAllowableValues();
        if (!in_array($tipo_log_manutencao, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'tipo_log_manutencao', must be one of '%s'",
                    $tipo_log_manutencao,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tipo_log_manutencao'] = $tipo_log_manutencao;

        return $this;
    }

    /**
     * Gets categoria_log_manutencao
     *
     * @return string|null
     */
    public function getCategoriaLogManutencao()
    {
        return $this->container['categoria_log_manutencao'];
    }

    /**
     * Sets categoria_log_manutencao
     *
     * @param string|null $categoria_log_manutencao categoria_log_manutencao
     *
     * @return self
     */
    public function setCategoriaLogManutencao($categoria_log_manutencao)
    {
        if (is_null($categoria_log_manutencao)) {
            throw new \InvalidArgumentException('non-nullable categoria_log_manutencao cannot be null');
        }
        $allowedValues = $this->getCategoriaLogManutencaoAllowableValues();
        if (!in_array($categoria_log_manutencao, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'categoria_log_manutencao', must be one of '%s'",
                    $categoria_log_manutencao,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['categoria_log_manutencao'] = $categoria_log_manutencao;

        return $this;
    }

    /**
     * Gets log_manutencao_data_inclusao
     *
     * @return \DateTime|null
     */
    public function getLogManutencaoDataInclusao()
    {
        return $this->container['log_manutencao_data_inclusao'];
    }

    /**
     * Sets log_manutencao_data_inclusao
     *
     * @param \DateTime|null $log_manutencao_data_inclusao log_manutencao_data_inclusao
     *
     * @return self
     */
    public function setLogManutencaoDataInclusao($log_manutencao_data_inclusao)
    {
        if (is_null($log_manutencao_data_inclusao)) {
            throw new \InvalidArgumentException('non-nullable log_manutencao_data_inclusao cannot be null');
        }
        $this->container['log_manutencao_data_inclusao'] = $log_manutencao_data_inclusao;

        return $this;
    }

    /**
     * Gets ata_sequencial
     *
     * @return int|null
     */
    public function getAtaSequencial()
    {
        return $this->container['ata_sequencial'];
    }

    /**
     * Sets ata_sequencial
     *
     * @param int|null $ata_sequencial ata_sequencial
     *
     * @return self
     */
    public function setAtaSequencial($ata_sequencial)
    {
        if (is_null($ata_sequencial)) {
            throw new \InvalidArgumentException('non-nullable ata_sequencial cannot be null');
        }
        $this->container['ata_sequencial'] = $ata_sequencial;

        return $this;
    }

    /**
     * Gets documento_ata_tipo
     *
     * @return string|null
     */
    public function getDocumentoAtaTipo()
    {
        return $this->container['documento_ata_tipo'];
    }

    /**
     * Sets documento_ata_tipo
     *
     * @param string|null $documento_ata_tipo documento_ata_tipo
     *
     * @return self
     */
    public function setDocumentoAtaTipo($documento_ata_tipo)
    {
        if (is_null($documento_ata_tipo)) {
            throw new \InvalidArgumentException('non-nullable documento_ata_tipo cannot be null');
        }
        $this->container['documento_ata_tipo'] = $documento_ata_tipo;

        return $this;
    }

    /**
     * Gets documento_ata_titulo
     *
     * @return string|null
     */
    public function getDocumentoAtaTitulo()
    {
        return $this->container['documento_ata_titulo'];
    }

    /**
     * Sets documento_ata_titulo
     *
     * @param string|null $documento_ata_titulo documento_ata_titulo
     *
     * @return self
     */
    public function setDocumentoAtaTitulo($documento_ata_titulo)
    {
        if (is_null($documento_ata_titulo)) {
            throw new \InvalidArgumentException('non-nullable documento_ata_titulo cannot be null');
        }
        $this->container['documento_ata_titulo'] = $documento_ata_titulo;

        return $this;
    }

    /**
     * Gets documento_ata_sequencial
     *
     * @return int|null
     */
    public function getDocumentoAtaSequencial()
    {
        return $this->container['documento_ata_sequencial'];
    }

    /**
     * Sets documento_ata_sequencial
     *
     * @param int|null $documento_ata_sequencial documento_ata_sequencial
     *
     * @return self
     */
    public function setDocumentoAtaSequencial($documento_ata_sequencial)
    {
        if (is_null($documento_ata_sequencial)) {
            throw new \InvalidArgumentException('non-nullable documento_ata_sequencial cannot be null');
        }
        $this->container['documento_ata_sequencial'] = $documento_ata_sequencial;

        return $this;
    }

    /**
     * Gets compra_sequencial
     *
     * @return int|null
     */
    public function getCompraSequencial()
    {
        return $this->container['compra_sequencial'];
    }

    /**
     * Sets compra_sequencial
     *
     * @param int|null $compra_sequencial compra_sequencial
     *
     * @return self
     */
    public function setCompraSequencial($compra_sequencial)
    {
        if (is_null($compra_sequencial)) {
            throw new \InvalidArgumentException('non-nullable compra_sequencial cannot be null');
        }
        $this->container['compra_sequencial'] = $compra_sequencial;

        return $this;
    }

    /**
     * Gets tipo_log_manutencao_nome
     *
     * @return string|null
     */
    public function getTipoLogManutencaoNome()
    {
        return $this->container['tipo_log_manutencao_nome'];
    }

    /**
     * Sets tipo_log_manutencao_nome
     *
     * @param string|null $tipo_log_manutencao_nome tipo_log_manutencao_nome
     *
     * @return self
     */
    public function setTipoLogManutencaoNome($tipo_log_manutencao_nome)
    {
        if (is_null($tipo_log_manutencao_nome)) {
            throw new \InvalidArgumentException('non-nullable tipo_log_manutencao_nome cannot be null');
        }
        $this->container['tipo_log_manutencao_nome'] = $tipo_log_manutencao_nome;

        return $this;
    }

    /**
     * Gets categoria_log_manutencao_nome
     *
     * @return string|null
     */
    public function getCategoriaLogManutencaoNome()
    {
        return $this->container['categoria_log_manutencao_nome'];
    }

    /**
     * Sets categoria_log_manutencao_nome
     *
     * @param string|null $categoria_log_manutencao_nome categoria_log_manutencao_nome
     *
     * @return self
     */
    public function setCategoriaLogManutencaoNome($categoria_log_manutencao_nome)
    {
        if (is_null($categoria_log_manutencao_nome)) {
            throw new \InvalidArgumentException('non-nullable categoria_log_manutencao_nome cannot be null');
        }
        $this->container['categoria_log_manutencao_nome'] = $categoria_log_manutencao_nome;

        return $this;
    }

    /**
     * Gets compra_orgao_cnpj
     *
     * @return string|null
     */
    public function getCompraOrgaoCnpj()
    {
        return $this->container['compra_orgao_cnpj'];
    }

    /**
     * Sets compra_orgao_cnpj
     *
     * @param string|null $compra_orgao_cnpj compra_orgao_cnpj
     *
     * @return self
     */
    public function setCompraOrgaoCnpj($compra_orgao_cnpj)
    {
        if (is_null($compra_orgao_cnpj)) {
            throw new \InvalidArgumentException('non-nullable compra_orgao_cnpj cannot be null');
        }
        $this->container['compra_orgao_cnpj'] = $compra_orgao_cnpj;

        return $this;
    }

    /**
     * Gets compra_ano
     *
     * @return int|null
     */
    public function getCompraAno()
    {
        return $this->container['compra_ano'];
    }

    /**
     * Sets compra_ano
     *
     * @param int|null $compra_ano compra_ano
     *
     * @return self
     */
    public function setCompraAno($compra_ano)
    {
        if (is_null($compra_ano)) {
            throw new \InvalidArgumentException('non-nullable compra_ano cannot be null');
        }
        $this->container['compra_ano'] = $compra_ano;

        return $this;
    }

    /**
     * Gets usuario_nome
     *
     * @return string|null
     */
    public function getUsuarioNome()
    {
        return $this->container['usuario_nome'];
    }

    /**
     * Sets usuario_nome
     *
     * @param string|null $usuario_nome usuario_nome
     *
     * @return self
     */
    public function setUsuarioNome($usuario_nome)
    {
        if (is_null($usuario_nome)) {
            throw new \InvalidArgumentException('non-nullable usuario_nome cannot be null');
        }
        $this->container['usuario_nome'] = $usuario_nome;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


