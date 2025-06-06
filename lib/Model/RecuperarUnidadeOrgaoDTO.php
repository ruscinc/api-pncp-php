<?php
/**
 * RecuperarUnidadeOrgaoDTO
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
 * RecuperarUnidadeOrgaoDTO Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RecuperarUnidadeOrgaoDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RecuperarUnidadeOrgaoDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'codigo_unidade' => 'string',
        'nome_unidade' => 'string',
        'municipio_nome' => 'string',
        'codigo_ibge' => 'string',
        'uf_sigla' => 'string',
        'uf_nome' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'codigo_unidade' => null,
        'nome_unidade' => null,
        'municipio_nome' => null,
        'codigo_ibge' => null,
        'uf_sigla' => null,
        'uf_nome' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'codigo_unidade' => false,
		'nome_unidade' => false,
		'municipio_nome' => false,
		'codigo_ibge' => false,
		'uf_sigla' => false,
		'uf_nome' => false
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
        'codigo_unidade' => 'codigoUnidade',
        'nome_unidade' => 'nomeUnidade',
        'municipio_nome' => 'municipioNome',
        'codigo_ibge' => 'codigoIbge',
        'uf_sigla' => 'ufSigla',
        'uf_nome' => 'ufNome'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'codigo_unidade' => 'setCodigoUnidade',
        'nome_unidade' => 'setNomeUnidade',
        'municipio_nome' => 'setMunicipioNome',
        'codigo_ibge' => 'setCodigoIbge',
        'uf_sigla' => 'setUfSigla',
        'uf_nome' => 'setUfNome'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'codigo_unidade' => 'getCodigoUnidade',
        'nome_unidade' => 'getNomeUnidade',
        'municipio_nome' => 'getMunicipioNome',
        'codigo_ibge' => 'getCodigoIbge',
        'uf_sigla' => 'getUfSigla',
        'uf_nome' => 'getUfNome'
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
        $this->setIfExists('codigo_unidade', $data ?? [], null);
        $this->setIfExists('nome_unidade', $data ?? [], null);
        $this->setIfExists('municipio_nome', $data ?? [], null);
        $this->setIfExists('codigo_ibge', $data ?? [], null);
        $this->setIfExists('uf_sigla', $data ?? [], null);
        $this->setIfExists('uf_nome', $data ?? [], null);
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
     * Gets codigo_unidade
     *
     * @return string|null
     */
    public function getCodigoUnidade()
    {
        return $this->container['codigo_unidade'];
    }

    /**
     * Sets codigo_unidade
     *
     * @param string|null $codigo_unidade codigo_unidade
     *
     * @return self
     */
    public function setCodigoUnidade($codigo_unidade)
    {
        if (is_null($codigo_unidade)) {
            throw new \InvalidArgumentException('non-nullable codigo_unidade cannot be null');
        }
        $this->container['codigo_unidade'] = $codigo_unidade;

        return $this;
    }

    /**
     * Gets nome_unidade
     *
     * @return string|null
     */
    public function getNomeUnidade()
    {
        return $this->container['nome_unidade'];
    }

    /**
     * Sets nome_unidade
     *
     * @param string|null $nome_unidade nome_unidade
     *
     * @return self
     */
    public function setNomeUnidade($nome_unidade)
    {
        if (is_null($nome_unidade)) {
            throw new \InvalidArgumentException('non-nullable nome_unidade cannot be null');
        }
        $this->container['nome_unidade'] = $nome_unidade;

        return $this;
    }

    /**
     * Gets municipio_nome
     *
     * @return string|null
     */
    public function getMunicipioNome()
    {
        return $this->container['municipio_nome'];
    }

    /**
     * Sets municipio_nome
     *
     * @param string|null $municipio_nome municipio_nome
     *
     * @return self
     */
    public function setMunicipioNome($municipio_nome)
    {
        if (is_null($municipio_nome)) {
            throw new \InvalidArgumentException('non-nullable municipio_nome cannot be null');
        }
        $this->container['municipio_nome'] = $municipio_nome;

        return $this;
    }

    /**
     * Gets codigo_ibge
     *
     * @return string|null
     */
    public function getCodigoIbge()
    {
        return $this->container['codigo_ibge'];
    }

    /**
     * Sets codigo_ibge
     *
     * @param string|null $codigo_ibge codigo_ibge
     *
     * @return self
     */
    public function setCodigoIbge($codigo_ibge)
    {
        if (is_null($codigo_ibge)) {
            throw new \InvalidArgumentException('non-nullable codigo_ibge cannot be null');
        }
        $this->container['codigo_ibge'] = $codigo_ibge;

        return $this;
    }

    /**
     * Gets uf_sigla
     *
     * @return string|null
     */
    public function getUfSigla()
    {
        return $this->container['uf_sigla'];
    }

    /**
     * Sets uf_sigla
     *
     * @param string|null $uf_sigla uf_sigla
     *
     * @return self
     */
    public function setUfSigla($uf_sigla)
    {
        if (is_null($uf_sigla)) {
            throw new \InvalidArgumentException('non-nullable uf_sigla cannot be null');
        }
        $this->container['uf_sigla'] = $uf_sigla;

        return $this;
    }

    /**
     * Gets uf_nome
     *
     * @return string|null
     */
    public function getUfNome()
    {
        return $this->container['uf_nome'];
    }

    /**
     * Sets uf_nome
     *
     * @param string|null $uf_nome uf_nome
     *
     * @return self
     */
    public function setUfNome($uf_nome)
    {
        if (is_null($uf_nome)) {
            throw new \InvalidArgumentException('non-nullable uf_nome cannot be null');
        }
        $this->container['uf_nome'] = $uf_nome;

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


