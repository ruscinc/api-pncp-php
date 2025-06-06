<?php
/**
 * RecuperarValoresCategoriaItemPcaDTO
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
 * RecuperarValoresCategoriaItemPcaDTO Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RecuperarValoresCategoriaItemPcaDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RecuperarValoresCategoriaItemPcaDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'categoria_item_id' => 'int',
        'quantidade_itens' => 'int',
        'valor_total' => 'float',
        'categoria_item_nome' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'categoria_item_id' => 'int64',
        'quantidade_itens' => 'int64',
        'valor_total' => null,
        'categoria_item_nome' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'categoria_item_id' => false,
		'quantidade_itens' => false,
		'valor_total' => false,
		'categoria_item_nome' => false
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
        'categoria_item_id' => 'categoriaItemId',
        'quantidade_itens' => 'quantidadeItens',
        'valor_total' => 'valorTotal',
        'categoria_item_nome' => 'categoriaItemNome'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'categoria_item_id' => 'setCategoriaItemId',
        'quantidade_itens' => 'setQuantidadeItens',
        'valor_total' => 'setValorTotal',
        'categoria_item_nome' => 'setCategoriaItemNome'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'categoria_item_id' => 'getCategoriaItemId',
        'quantidade_itens' => 'getQuantidadeItens',
        'valor_total' => 'getValorTotal',
        'categoria_item_nome' => 'getCategoriaItemNome'
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
        $this->setIfExists('categoria_item_id', $data ?? [], null);
        $this->setIfExists('quantidade_itens', $data ?? [], null);
        $this->setIfExists('valor_total', $data ?? [], null);
        $this->setIfExists('categoria_item_nome', $data ?? [], null);
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
     * Gets categoria_item_id
     *
     * @return int|null
     */
    public function getCategoriaItemId()
    {
        return $this->container['categoria_item_id'];
    }

    /**
     * Sets categoria_item_id
     *
     * @param int|null $categoria_item_id categoria_item_id
     *
     * @return self
     */
    public function setCategoriaItemId($categoria_item_id)
    {
        if (is_null($categoria_item_id)) {
            throw new \InvalidArgumentException('non-nullable categoria_item_id cannot be null');
        }
        $this->container['categoria_item_id'] = $categoria_item_id;

        return $this;
    }

    /**
     * Gets quantidade_itens
     *
     * @return int|null
     */
    public function getQuantidadeItens()
    {
        return $this->container['quantidade_itens'];
    }

    /**
     * Sets quantidade_itens
     *
     * @param int|null $quantidade_itens quantidade_itens
     *
     * @return self
     */
    public function setQuantidadeItens($quantidade_itens)
    {
        if (is_null($quantidade_itens)) {
            throw new \InvalidArgumentException('non-nullable quantidade_itens cannot be null');
        }
        $this->container['quantidade_itens'] = $quantidade_itens;

        return $this;
    }

    /**
     * Gets valor_total
     *
     * @return float|null
     */
    public function getValorTotal()
    {
        return $this->container['valor_total'];
    }

    /**
     * Sets valor_total
     *
     * @param float|null $valor_total valor_total
     *
     * @return self
     */
    public function setValorTotal($valor_total)
    {
        if (is_null($valor_total)) {
            throw new \InvalidArgumentException('non-nullable valor_total cannot be null');
        }
        $this->container['valor_total'] = $valor_total;

        return $this;
    }

    /**
     * Gets categoria_item_nome
     *
     * @return string|null
     */
    public function getCategoriaItemNome()
    {
        return $this->container['categoria_item_nome'];
    }

    /**
     * Sets categoria_item_nome
     *
     * @param string|null $categoria_item_nome categoria_item_nome
     *
     * @return self
     */
    public function setCategoriaItemNome($categoria_item_nome)
    {
        if (is_null($categoria_item_nome)) {
            throw new \InvalidArgumentException('non-nullable categoria_item_nome cannot be null');
        }
        $this->container['categoria_item_nome'] = $categoria_item_nome;

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


