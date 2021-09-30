<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from de.systopia.resource/xml/schema/CRM/Resource/ResourceAssignment.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:68e5dc4a12597cbb7ea90e351e7fe5ce)
 */
use CRM_Resource_ExtensionUtil as E;

/**
 * Database access object for the ResourceAssignment entity.
 */
class CRM_Resource_DAO_ResourceAssignment extends CRM_Core_DAO {
  const EXT = E::LONG_NAME;
  const TABLE_ADDED = '';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_resource_assignment';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Unique Resource Assignment ID
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
   * Resource Demand ID
   *
   * @var int
   */
  public $resource_demand_id;

  /**
   * Resource Demand Status: 1=proposed, 2=denied, 3=confirmed
   *
   * @var int
   */
  public $status;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_resource_assignment';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? E::ts('Resource Assignments') : E::ts('Resource Assignment');
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'resource_demand_id', 'civicrm_resource_demand', 'id');
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
          'description' => E::ts('Unique Resource Assignment ID'),
          'required' => TRUE,
          'where' => 'civicrm_resource_assignment.id',
          'table_name' => 'civicrm_resource_assignment',
          'entity' => 'ResourceAssignment',
          'bao' => 'CRM_Resource_DAO_ResourceAssignment',
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
          'where' => 'civicrm_resource_assignment.resource_id',
          'table_name' => 'civicrm_resource_assignment',
          'entity' => 'ResourceAssignment',
          'bao' => 'CRM_Resource_DAO_ResourceAssignment',
          'localizable' => 0,
          'FKClassName' => 'CRM_Resource_DAO_Resource',
          'html' => [
            'type' => 'Number',
          ],
          'add' => NULL,
        ],
        'resource_demand_id' => [
          'name' => 'resource_demand_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('Resource Demand ID'),
          'required' => TRUE,
          'where' => 'civicrm_resource_assignment.resource_demand_id',
          'table_name' => 'civicrm_resource_assignment',
          'entity' => 'ResourceAssignment',
          'bao' => 'CRM_Resource_DAO_ResourceAssignment',
          'localizable' => 0,
          'FKClassName' => 'CRM_Resource_DAO_ResourceDemand',
          'html' => [
            'type' => 'Number',
          ],
          'add' => NULL,
        ],
        'status' => [
          'name' => 'status',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Status'),
          'description' => E::ts('Resource Demand Status: 1=proposed, 2=denied, 3=confirmed'),
          'required' => TRUE,
          'where' => 'civicrm_resource_assignment.status',
          'table_name' => 'civicrm_resource_assignment',
          'entity' => 'ResourceAssignment',
          'bao' => 'CRM_Resource_DAO_ResourceAssignment',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'resource_assignment', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'resource_assignment', $prefix, []);
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
