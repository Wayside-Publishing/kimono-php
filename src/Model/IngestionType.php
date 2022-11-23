<?php
/**
 * IngestionType
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

/**
 * IngestionType Class Doc Comment
 *
 * @category Class
 * @package  Kimono
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IngestionType
{
    /**
     * Possible values of this enum
     */
    const UNSPECIFIED = 'unspecified';
    const COLLECTION = 'collection';
    const BULK_LOAD = 'bulk_load';
    const EVENT_BUNDLE = 'event_bundle';
    const BULK_ATTR_CHANGE = 'bulk_attr_change';
    const MIRROR = 'mirror';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNSPECIFIED,
            self::COLLECTION,
            self::BULK_LOAD,
            self::EVENT_BUNDLE,
            self::BULK_ATTR_CHANGE,
            self::MIRROR,
        ];
    }
}

