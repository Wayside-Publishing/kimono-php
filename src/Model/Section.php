<?php
/**
 * Section
 *
 * PHP version 5
 *
 * @category Class
 * @package  Kimono
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Interop Data API
 *
 * Interop Data APIs provide access to the data objects and events from Interop Cloud repositories and Integration repositories
 *
 * The version of the OpenAPI document: 2.0
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Kimono\Model;

use ArrayAccess;
use Kimono\ObjectSerializer;

/**
 * Section Class Doc Comment
 *
 * @category Class
 * @package  Kimono
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Section implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Section';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ext' => 'map[string,object]',
        'sys' => '\Kimono\Model\SysType',
        'localId' => 'string',
        'title' => 'string',
        'description' => 'string',
        'terms' => '\Kimono\Model\Term[]',
        'course' => '\Kimono\Model\Course',
        'org' => '\Kimono\Model\OrgRefType',
        'teachers' => '\Kimono\Model\PersonMembershipRefType[]',
        'students' => '\Kimono\Model\PersonMembershipRefType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'ext' => null,
        'sys' => null,
        'localId' => null,
        'title' => null,
        'description' => null,
        'terms' => null,
        'course' => null,
        'org' => null,
        'teachers' => null,
        'students' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ext' => '$ext',
        'sys' => '$sys',
        'localId' => 'local_id',
        'title' => 'title',
        'description' => 'description',
        'terms' => '$terms',
        'course' => '$course',
        'org' => '$org',
        'teachers' => '$teachers',
        'students' => '$students'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ext' => 'setExt',
        'sys' => 'setSys',
        'localId' => 'setLocalId',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'terms' => 'setTerms',
        'course' => 'setCourse',
        'org' => 'setOrg',
        'teachers' => 'setTeachers',
        'students' => 'setStudents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ext' => 'getExt',
        'sys' => 'getSys',
        'localId' => 'getLocalId',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'terms' => 'getTerms',
        'course' => 'getCourse',
        'org' => 'getOrg',
        'teachers' => 'getTeachers',
        'students' => 'getStudents'
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
        $this->container['ext'] = isset($data['ext']) ? $data['ext'] : null;
        $this->container['sys'] = isset($data['sys']) ? $data['sys'] : null;
        $this->container['localId'] = isset($data['localId']) ? $data['localId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['terms'] = isset($data['terms']) ? $data['terms'] : null;
        $this->container['course'] = isset($data['course']) ? $data['course'] : null;
        $this->container['org'] = isset($data['org']) ? $data['org'] : null;
        $this->container['teachers'] = isset($data['teachers']) ? $data['teachers'] : null;
        $this->container['students'] = isset($data['students']) ? $data['students'] : null;
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
     * Gets ext
     *
     * @return map[string,object]|null
     */
    public function getExt()
    {
        return $this->container['ext'];
    }

    /**
     * Sets ext
     *
     * @param map[string,object]|null $ext ext
     *
     * @return $this
     */
    public function setExt($ext)
    {
        $this->container['ext'] = $ext;

        return $this;
    }

    /**
     * Gets sys
     *
     * @return \Kimono\Model\SysType|null
     */
    public function getSys()
    {
        return $this->container['sys'];
    }

    /**
     * Sets sys
     *
     * @param \Kimono\Model\SysType|null $sys sys
     *
     * @return $this
     */
    public function setSys($sys)
    {
        $this->container['sys'] = $sys;

        return $this;
    }

    /**
     * Gets localId
     *
     * @return string|null
     */
    public function getLocalId()
    {
        return $this->container['localId'];
    }

    /**
     * Sets localId
     *
     * @param string|null $localId localId
     *
     * @return $this
     */
    public function setLocalId($localId)
    {
        $this->container['localId'] = $localId;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets terms
     *
     * @return \Kimono\Model\Term[]|null
     */
    public function getTerms()
    {
        return $this->container['terms'];
    }

    /**
     * Sets terms
     *
     * @param \Kimono\Model\Term[]|null $terms terms
     *
     * @return $this
     */
    public function setTerms($terms)
    {
        $this->container['terms'] = $terms;

        return $this;
    }

    /**
     * Gets course
     *
     * @return \Kimono\Model\Course|null
     */
    public function getCourse()
    {
        return $this->container['course'];
    }

    /**
     * Sets course
     *
     * @param \Kimono\Model\Course|null $course course
     *
     * @return $this
     */
    public function setCourse($course)
    {
        $this->container['course'] = $course;

        return $this;
    }

    /**
     * Gets org
     *
     * @return \Kimono\Model\OrgRefType|null
     */
    public function getOrg()
    {
        return $this->container['org'];
    }

    /**
     * Sets org
     *
     * @param \Kimono\Model\OrgRefType|null $org org
     *
     * @return $this
     */
    public function setOrg($org)
    {
        $this->container['org'] = $org;

        return $this;
    }

    /**
     * Gets teachers
     *
     * @return \Kimono\Model\PersonMembershipRefType[]|null
     */
    public function getTeachers()
    {
        return $this->container['teachers'];
    }

    /**
     * Sets teachers
     *
     * @param \Kimono\Model\PersonMembershipRefType[]|null $teachers teachers
     *
     * @return $this
     */
    public function setTeachers($teachers)
    {
        $this->container['teachers'] = $teachers;

        return $this;
    }

    /**
     * Gets students
     *
     * @return \Kimono\Model\PersonMembershipRefType[]|null
     */
    public function getStudents()
    {
        return $this->container['students'];
    }

    /**
     * Sets students
     *
     * @param \Kimono\Model\PersonMembershipRefType[]|null $students students
     *
     * @return $this
     */
    public function setStudents($students)
    {
        $this->container['students'] = $students;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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

