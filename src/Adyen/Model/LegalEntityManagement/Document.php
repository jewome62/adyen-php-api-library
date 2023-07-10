<?php

/**
 * Legal Entity Management API
 *
 * The version of the OpenAPI document: 3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\LegalEntityManagement;

use \ArrayAccess;
use Adyen\Model\LegalEntityManagement\ObjectSerializer;

/**
 * Document Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Document implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Document';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attachment' => '\Adyen\Model\LegalEntityManagement\Attachment',
        'attachments' => '\Adyen\Model\LegalEntityManagement\Attachment[]',
        'creationDate' => '\DateTime',
        'description' => 'string',
        'expiryDate' => 'string',
        'fileName' => 'string',
        'id' => 'string',
        'issuerCountry' => 'string',
        'issuerState' => 'string',
        'modificationDate' => '\DateTime',
        'number' => 'string',
        'owner' => '\Adyen\Model\LegalEntityManagement\OwnerEntity',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attachment' => null,
        'attachments' => null,
        'creationDate' => 'date-time',
        'description' => null,
        'expiryDate' => null,
        'fileName' => null,
        'id' => null,
        'issuerCountry' => null,
        'issuerState' => null,
        'modificationDate' => 'date-time',
        'number' => null,
        'owner' => null,
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'attachment' => false,
        'attachments' => false,
        'creationDate' => false,
        'description' => false,
        'expiryDate' => false,
        'fileName' => false,
        'id' => false,
        'issuerCountry' => false,
        'issuerState' => false,
        'modificationDate' => false,
        'number' => false,
        'owner' => false,
        'type' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
        'attachment' => 'attachment',
        'attachments' => 'attachments',
        'creationDate' => 'creationDate',
        'description' => 'description',
        'expiryDate' => 'expiryDate',
        'fileName' => 'fileName',
        'id' => 'id',
        'issuerCountry' => 'issuerCountry',
        'issuerState' => 'issuerState',
        'modificationDate' => 'modificationDate',
        'number' => 'number',
        'owner' => 'owner',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attachment' => 'setAttachment',
        'attachments' => 'setAttachments',
        'creationDate' => 'setCreationDate',
        'description' => 'setDescription',
        'expiryDate' => 'setExpiryDate',
        'fileName' => 'setFileName',
        'id' => 'setId',
        'issuerCountry' => 'setIssuerCountry',
        'issuerState' => 'setIssuerState',
        'modificationDate' => 'setModificationDate',
        'number' => 'setNumber',
        'owner' => 'setOwner',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attachment' => 'getAttachment',
        'attachments' => 'getAttachments',
        'creationDate' => 'getCreationDate',
        'description' => 'getDescription',
        'expiryDate' => 'getExpiryDate',
        'fileName' => 'getFileName',
        'id' => 'getId',
        'issuerCountry' => 'getIssuerCountry',
        'issuerState' => 'getIssuerState',
        'modificationDate' => 'getModificationDate',
        'number' => 'getNumber',
        'owner' => 'getOwner',
        'type' => 'getType'
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

    public const TYPE_BANK_STATEMENT = 'bankStatement';
    public const TYPE_DRIVERS_LICENSE = 'driversLicense';
    public const TYPE_IDENTITY_CARD = 'identityCard';
    public const TYPE_NATIONAL_ID_NUMBER = 'nationalIdNumber';
    public const TYPE_PASSPORT = 'passport';
    public const TYPE_PROOF_OF_ADDRESS = 'proofOfAddress';
    public const TYPE_PROOF_OF_NATIONAL_ID_NUMBER = 'proofOfNationalIdNumber';
    public const TYPE_PROOF_OF_RESIDENCY = 'proofOfResidency';
    public const TYPE_REGISTRATION_DOCUMENT = 'registrationDocument';
    public const TYPE_VAT_DOCUMENT = 'vatDocument';
    public const TYPE_PROOF_OF_ORGANIZATION_TAX_INFO = 'proofOfOrganizationTaxInfo';
    public const TYPE_PROOF_OF_INDUSTRY = 'proofOfIndustry';
    public const TYPE_CONSTITUTIONAL_DOCUMENT = 'constitutionalDocument';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_BANK_STATEMENT,
            self::TYPE_DRIVERS_LICENSE,
            self::TYPE_IDENTITY_CARD,
            self::TYPE_NATIONAL_ID_NUMBER,
            self::TYPE_PASSPORT,
            self::TYPE_PROOF_OF_ADDRESS,
            self::TYPE_PROOF_OF_NATIONAL_ID_NUMBER,
            self::TYPE_PROOF_OF_RESIDENCY,
            self::TYPE_REGISTRATION_DOCUMENT,
            self::TYPE_VAT_DOCUMENT,
            self::TYPE_PROOF_OF_ORGANIZATION_TAX_INFO,
            self::TYPE_PROOF_OF_INDUSTRY,
            self::TYPE_CONSTITUTIONAL_DOCUMENT,
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
        $this->setIfExists('attachment', $data ?? [], null);
        $this->setIfExists('attachments', $data ?? [], null);
        $this->setIfExists('creationDate', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('expiryDate', $data ?? [], null);
        $this->setIfExists('fileName', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('issuerCountry', $data ?? [], null);
        $this->setIfExists('issuerState', $data ?? [], null);
        $this->setIfExists('modificationDate', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('owner', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
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

        if ($this->container['attachments'] === null) {
            $invalidProperties[] = "'attachments' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['owner'] === null) {
            $invalidProperties[] = "'owner' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets attachment
     *
     * @return \Adyen\Model\LegalEntityManagement\Attachment|null
     */
    public function getAttachment()
    {
        return $this->container['attachment'];
    }

    /**
     * Sets attachment
     *
     * @param \Adyen\Model\LegalEntityManagement\Attachment|null $attachment attachment
     *
     * @return self
     */
    public function setAttachment($attachment)
    {
        if (is_null($attachment)) {
            throw new \InvalidArgumentException('non-nullable attachment cannot be null');
        }
        $this->container['attachment'] = $attachment;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \Adyen\Model\LegalEntityManagement\Attachment[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Adyen\Model\LegalEntityManagement\Attachment[] $attachments Array that contains the document. The array supports multiple attachments for uploading different sides or pages of a document.
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        if (is_null($attachments)) {
            throw new \InvalidArgumentException('non-nullable attachments cannot be null');
        }
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets creationDate
     *
     * @return \DateTime|null
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param \DateTime|null $creationDate The creation date of the document.
     *
     * @return self
     */
    public function setCreationDate($creationDate)
    {
        if (is_null($creationDate)) {
            throw new \InvalidArgumentException('non-nullable creationDate cannot be null');
        }
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Your description for the document.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets expiryDate
     *
     * @return string|null
     * @deprecated
     */
    public function getExpiryDate()
    {
        return $this->container['expiryDate'];
    }

    /**
     * Sets expiryDate
     *
     * @param string|null $expiryDate The expiry date of the document, in YYYY-MM-DD format.
     *
     * @return self
     * @deprecated
     */
    public function setExpiryDate($expiryDate)
    {
        if (is_null($expiryDate)) {
            throw new \InvalidArgumentException('non-nullable expiryDate cannot be null');
        }
        $this->container['expiryDate'] = $expiryDate;

        return $this;
    }

    /**
     * Gets fileName
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
     * Sets fileName
     *
     * @param string|null $fileName The filename of the document.
     *
     * @return self
     */
    public function setFileName($fileName)
    {
        if (is_null($fileName)) {
            throw new \InvalidArgumentException('non-nullable fileName cannot be null');
        }
        $this->container['fileName'] = $fileName;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The unique identifier of the document.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets issuerCountry
     *
     * @return string|null
     * @deprecated
     */
    public function getIssuerCountry()
    {
        return $this->container['issuerCountry'];
    }

    /**
     * Sets issuerCountry
     *
     * @param string|null $issuerCountry The two-character [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code where the document was issued. For example, **US**.
     *
     * @return self
     * @deprecated
     */
    public function setIssuerCountry($issuerCountry)
    {
        if (is_null($issuerCountry)) {
            throw new \InvalidArgumentException('non-nullable issuerCountry cannot be null');
        }
        $this->container['issuerCountry'] = $issuerCountry;

        return $this;
    }

    /**
     * Gets issuerState
     *
     * @return string|null
     * @deprecated
     */
    public function getIssuerState()
    {
        return $this->container['issuerState'];
    }

    /**
     * Sets issuerState
     *
     * @param string|null $issuerState The state or province where the document was issued (AU only).
     *
     * @return self
     * @deprecated
     */
    public function setIssuerState($issuerState)
    {
        if (is_null($issuerState)) {
            throw new \InvalidArgumentException('non-nullable issuerState cannot be null');
        }
        $this->container['issuerState'] = $issuerState;

        return $this;
    }

    /**
     * Gets modificationDate
     *
     * @return \DateTime|null
     */
    public function getModificationDate()
    {
        return $this->container['modificationDate'];
    }

    /**
     * Sets modificationDate
     *
     * @param \DateTime|null $modificationDate The modification date of the document.
     *
     * @return self
     */
    public function setModificationDate($modificationDate)
    {
        if (is_null($modificationDate)) {
            throw new \InvalidArgumentException('non-nullable modificationDate cannot be null');
        }
        $this->container['modificationDate'] = $modificationDate;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number The number in the document.
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \Adyen\Model\LegalEntityManagement\OwnerEntity
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \Adyen\Model\LegalEntityManagement\OwnerEntity $owner owner
     *
     * @return self
     */
    public function setOwner($owner)
    {
        if (is_null($owner)) {
            throw new \InvalidArgumentException('non-nullable owner cannot be null');
        }
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of document, used when providing an ID number or uploading a document. The possible values depend on the legal entity type.  When providing ID numbers: * For **individual**, the `type` values can be **driversLicense**, **identityCard**, **nationalIdNumber**, or **passport**.  When uploading photo IDs: * For **individual**, the `type` values can be **identityCard**, **driversLicense**, or **passport**.  When uploading other documents: * For **organization**, the `type` values can be **proofOfAddress**, **registrationDocument**, **vatDocument**, **proofOfOrganizationTaxInfo**, **proofOfOwnership**, or **proofOfIndustry**.   * For **individual**, the `type` values can be **identityCard**, **driversLicense**, **passport**, **proofOfNationalIdNumber**, **proofOfResidency**, **proofOfIndustry**, or **proofOfIndividualTaxId**.  * For **soleProprietorship**, the `type` values can be **constitutionalDocument**, **proofOfAddress**, or **proofOfIndustry**.  * Use **bankStatement** to upload documents for a [transfer instrument](https://docs.adyen.com/api-explorer/#/legalentity/latest/post/transferInstruments__resParam_id).
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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
}