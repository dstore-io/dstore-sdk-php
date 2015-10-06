<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetProcedureDependencies_Ad.proto
//   Date: 2015-10-06 11:19:51

namespace dstore\engine\mi_GetProcedureDependencies_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $procedure_name = null;
    
    /**  @var boolean */
    public $procedure_name_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $max_level_of_dependence = null;
    
    /**  @var boolean */
    public $max_level_of_dependence_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $max_number_of_rows = null;
    
    /**  @var boolean */
    public $max_number_of_rows_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $sibling_sort_by_name = null;
    
    /**  @var boolean */
    public $sibling_sort_by_name_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetProcedureDependencies_Ad.Parameters');

      // OPTIONAL MESSAGE procedure_name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "procedure_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL procedure_name_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "procedure_name_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE max_level_of_dependence = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "max_level_of_dependence";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL max_level_of_dependence_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "max_level_of_dependence_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE max_number_of_rows = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "max_number_of_rows";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL max_number_of_rows_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "max_number_of_rows_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sibling_sort_by_name = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "sibling_sort_by_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL sibling_sort_by_name_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "sibling_sort_by_name_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <procedure_name> has a value
     *
     * @return boolean
     */
    public function hasProcedureName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <procedure_name> value
     *
     * @return \dstore\engine\mi_GetProcedureDependencies_Ad\Parameters
     */
    public function clearProcedureName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <procedure_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getProcedureName(){
      return $this->_get(1);
    }
    
    /**
     * Set <procedure_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetProcedureDependencies_Ad\Parameters
     */
    public function setProcedureName(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <procedure_name_null> has a value
     *
     * @return boolean
     */
    public function hasProcedureNameNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <procedure_name_null> value
     *
     * @return \dstore\engine\mi_GetProcedureDependencies_Ad\Parameters
     */
    public function clearProcedureNameNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <procedure_name_null> value
     *
     * @return boolean
     */
    public function getProcedureNameNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <procedure_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetProcedureDependencies_Ad\Parameters
     */
    public function setProcedureNameNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <max_level_of_dependence> has a value
     *
     * @return boolean
     */
    public function hasMaxLevelOfDependence(){
      return $this->_has(2);
    }
    
    /**
     * Clear <max_level_of_dependence> value
     *
     * @return \dstore\engine\mi_GetProcedureDependencies_Ad\Parameters
     */
    public function clearMaxLevelOfDependence(){
      return $this->_clear(2);
    }
    
    /**
     * Get <max_level_of_dependence> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getMaxLevelOfDependence(){
      return $this->_get(2);
    }
    
    /**
     * Set <max_level_of_dependence> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetProcedureDependencies_Ad\Parameters
     */
    public function setMaxLevelOfDependence(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <max_level_of_dependence_null> has a value
     *
     * @return boolean
     */
    public function hasMaxLevelOfDependenceNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <max_level_of_dependence_null> value
     *
     * @return \dstore\engine\mi_GetProcedureDependencies_Ad\Parameters
     */
    public function clearMaxLevelOfDependenceNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <max_level_of_dependence_null> value
     *
     * @return boolean
     */
    public function getMaxLevelOfDependenceNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <max_level_of_dependence_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetProcedureDependencies_Ad\Parameters
     */
    public function setMaxLevelOfDependenceNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <max_number_of_rows> has a value
     *
     * @return boolean
     */
    public function hasMaxNumberOfRows(){
      return $this->_has(3);
    }
    
    /**
     * Clear <max_number_of_rows> value
     *
     * @return \dstore\engine\mi_GetProcedureDependencies_Ad\Parameters
     */
    public function clearMaxNumberOfRows(){
      return $this->_clear(3);
    }
    
    /**
     * Get <max_number_of_rows> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getMaxNumberOfRows(){
      return $this->_get(3);
    }
    
    /**
     * Set <max_number_of_rows> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetProcedureDependencies_Ad\Parameters
     */
    public function setMaxNumberOfRows(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <max_number_of_rows_null> has a value
     *
     * @return boolean
     */
    public function hasMaxNumberOfRowsNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <max_number_of_rows_null> value
     *
     * @return \dstore\engine\mi_GetProcedureDependencies_Ad\Parameters
     */
    public function clearMaxNumberOfRowsNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <max_number_of_rows_null> value
     *
     * @return boolean
     */
    public function getMaxNumberOfRowsNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <max_number_of_rows_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetProcedureDependencies_Ad\Parameters
     */
    public function setMaxNumberOfRowsNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <sibling_sort_by_name> has a value
     *
     * @return boolean
     */
    public function hasSiblingSortByName(){
      return $this->_has(4);
    }
    
    /**
     * Clear <sibling_sort_by_name> value
     *
     * @return \dstore\engine\mi_GetProcedureDependencies_Ad\Parameters
     */
    public function clearSiblingSortByName(){
      return $this->_clear(4);
    }
    
    /**
     * Get <sibling_sort_by_name> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getSiblingSortByName(){
      return $this->_get(4);
    }
    
    /**
     * Set <sibling_sort_by_name> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetProcedureDependencies_Ad\Parameters
     */
    public function setSiblingSortByName(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <sibling_sort_by_name_null> has a value
     *
     * @return boolean
     */
    public function hasSiblingSortByNameNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <sibling_sort_by_name_null> value
     *
     * @return \dstore\engine\mi_GetProcedureDependencies_Ad\Parameters
     */
    public function clearSiblingSortByNameNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <sibling_sort_by_name_null> value
     *
     * @return boolean
     */
    public function getSiblingSortByNameNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <sibling_sort_by_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetProcedureDependencies_Ad\Parameters
     */
    public function setSiblingSortByNameNull( $value){
      return $this->_set(1004, $value);
    }
  }
}

