<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from de.systopia.resource/xml/schema/CRM/Resource/ResourceUnavailability.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:9b72c8e8f8d3b9eba99422771ec236f3)
 */
use CRM_Resource_ExtensionUtil as E;

/**
 * Database access object for the ResourceUnavailability entity.
 */
class CRM_Resource_DAO_ResourceUnavailability extends CRM_Core_DAO {
  const EXT = E::LONG_NAME;
  const TABLE_ADDED = '';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_resource_unavailability';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Unique Resource Unavailability ID
   *
   * @var int
   */
  public $id;

  /**
   * Resource Demand ID
   *
   * @var int
   */
  public $resource_id;

  /**
   * Class name of the implementation, a subclass of CRM_Resource_BAO_Resource_Unavailability
   *
   * @var string
   */
  public $class_name;

  /**
   * A json encoded data blob to store the parameters of this specific unavailability
   *
   * @var string
   */
  public $parameters;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_resource_unavailability';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? E::ts('Resource Unavailabilities') : E::ts('Resource Unavailability');
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'resource_id', 'civicrm_resource', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('Unique Resource Unavailability ID'),
          'required' => TRUE,
          'where' => 'civicrm_resource_unavailability.id',
          'table_name' => 'civicrm_resource_unavailability',
          'entity' => 'ResourceUnavailability',
          'bao' => 'CRM_Resource_DAO_ResourceUnavailability',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'add' => NULL,
        ],
        'resource_id' => [
          'name' => 'resource_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('Resource Demand ID'),
          'required' => TRUE,
          'where' => 'civicrm_resource_unavailability.resource_id',
          'table_name' => 'civicrm_resource_unavailability',
          'entity' => 'ResourceUnavailability',
          'bao' => 'CRM_Resource_DAO_ResourceUnavailability',
          'localizable' => 0,
          'FKClassName' => 'CRM_Resource_DAO_Resource',
          'html' => [
            'type' => 'Number',
          ],
          'add' => NULL,
        ],
        'class_name' => [
          'name' => 'class_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Implementation Class Name'),
          'description' => E::ts('Class name of the implementation, a subclass of CRM_Resource_BAO_Resource_Unavailability'),
          'maxlength' => 127,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_resource_unavailability.class_name',
          'table_name' => 'civicrm_resource_unavailability',
          'entity' => 'ResourceUnavailability',
          'bao' => 'CRM_Resource_DAO_ResourceUnavailability',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => NULL,
        ],
        'parameters' => [
          'name' => 'parameters',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Parameters for the unavailability'),
          'description' => E::ts('A json encoded data blob to store the parameters of this specific unavailability'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_resource_unavailability.parameters',
          'table_name' => 'civicrm_resource_unavailability',
          'entity' => 'ResourceUnavailability',
          'bao' => 'CRM_Resource_DAO_ResourceUnavailability',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => NULL,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'resource_unavailability', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'resource_unavailability', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
