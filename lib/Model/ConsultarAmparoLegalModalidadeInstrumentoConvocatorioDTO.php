<?php
/**
 * ConsultarAmparoLegalModalidadeInstrumentoConvocatorioDTO
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
 * ConsultarAmparoLegalModalidadeInstrumentoConvocatorioDTO Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConsultarAmparoLegalModalidadeInstrumentoConvocatorioDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConsultarAmparoLegalModalidadeInstrumentoConvocatorioDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amparo_legal' => '\OpenAPI\Client\Model\DominioGenericoResumidoDTO',
        'modalidade' => '\OpenAPI\Client\Model\DominioGenericoResumidoDTO',
        'tipo_instrumento_convocatorio' => '\OpenAPI\Client\Model\DominioGenericoResumidoDTO',
        'data_inclusao' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amparo_legal' => null,
        'modalidade' => null,
        'tipo_instrumento_convocatorio' => null,
        'data_inclusao' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amparo_legal' => false,
		'modalidade' => false,
		'tipo_instrumento_convocatorio' => false,
		'data_inclusao' => false
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
        'amparo_legal' => 'amparoLegal',
        'modalidade' => 'modalidade',
        'tipo_instrumento_convocatorio' => 'tipoInstrumentoConvocatorio',
        'data_inclusao' => 'dataInclusao'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amparo_legal' => 'setAmparoLegal',
        'modalidade' => 'setModalidade',
        'tipo_instrumento_convocatorio' => 'setTipoInstrumentoConvocatorio',
        'data_inclusao' => 'setDataInclusao'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amparo_legal' => 'getAmparoLegal',
        'modalidade' => 'getModalidade',
        'tipo_instrumento_convocatorio' => 'getTipoInstrumentoConvocatorio',
        'data_inclusao' => 'getDataInclusao'
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
        $this->setIfExists('amparo_legal', $data ?? [], null);
        $this->setIfExists('modalidade', $data ?? [], null);
        $this->setIfExists('tipo_instrumento_convocatorio', $data ?? [], null);
        $this->setIfExists('data_inclusao', $data ?? [], null);
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
     * Gets amparo_legal
     *
     * @return \OpenAPI\Client\Model\DominioGenericoResumidoDTO|null
     */
    public function getAmparoLegal()
    {
        return $this->container['amparo_legal'];
    }

    /**
     * Sets amparo_legal
     *
     * @param \OpenAPI\Client\Model\DominioGenericoResumidoDTO|null $amparo_legal amparo_legal
     *
     * @return self
     */
    public function setAmparoLegal($amparo_legal)
    {
        if (is_null($amparo_legal)) {
            throw new \InvalidArgumentException('non-nullable amparo_legal cannot be null');
        }
        $this->container['amparo_legal'] = $amparo_legal;

        return $this;
    }

    /**
     * Gets modalidade
     *
     * @return \OpenAPI\Client\Model\DominioGenericoResumidoDTO|null
     */
    public function getModalidade()
    {
        return $this->container['modalidade'];
    }

    /**
     * Sets modalidade
     *
     * @param \OpenAPI\Client\Model\DominioGenericoResumidoDTO|null $modalidade modalidade
     *
     * @return self
     */
    public function setModalidade($modalidade)
    {
        if (is_null($modalidade)) {
            throw new \InvalidArgumentException('non-nullable modalidade cannot be null');
        }
        $this->container['modalidade'] = $modalidade;

        return $this;
    }

    /**
     * Gets tipo_instrumento_convocatorio
     *
     * @return \OpenAPI\Client\Model\DominioGenericoResumidoDTO|null
     */
    public function getTipoInstrumentoConvocatorio()
    {
        return $this->container['tipo_instrumento_convocatorio'];
    }

    /**
     * Sets tipo_instrumento_convocatorio
     *
     * @param \OpenAPI\Client\Model\DominioGenericoResumidoDTO|null $tipo_instrumento_convocatorio tipo_instrumento_convocatorio
     *
     * @return self
     */
    public function setTipoInstrumentoConvocatorio($tipo_instrumento_convocatorio)
    {
        if (is_null($tipo_instrumento_convocatorio)) {
            throw new \InvalidArgumentException('non-nullable tipo_instrumento_convocatorio cannot be null');
        }
        $this->container['tipo_instrumento_convocatorio'] = $tipo_instrumento_convocatorio;

        return $this;
    }

    /**
     * Gets data_inclusao
     *
     * @return \DateTime|null
     */
    public function getDataInclusao()
    {
        return $this->container['data_inclusao'];
    }

    /**
     * Sets data_inclusao
     *
     * @param \DateTime|null $data_inclusao data_inclusao
     *
     * @return self
     */
    public function setDataInclusao($data_inclusao)
    {
        if (is_null($data_inclusao)) {
            throw new \InvalidArgumentException('non-nullable data_inclusao cannot be null');
        }
        $this->container['data_inclusao'] = $data_inclusao;

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


