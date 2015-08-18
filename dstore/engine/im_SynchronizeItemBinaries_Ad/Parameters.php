<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_SynchronizeItemBinaries_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\im_SynchronizeItemBinaries_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $charac_id_for_synchronization = null;
    
    /**  @var boolean */
    public $charac_id_for_synchronization_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $report_only = null;
    
    /**  @var boolean */
    public $report_only_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $only_direct_successors_of_id = null;
    
    /**  @var boolean */
    public $only_direct_successors_of_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $process_values_in_chunks_with_size = null;
    
    /**  @var boolean */
    public $process_values_in_chunks_with_size_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_SynchronizeItemBinaries_Ad.Parameters');

      // OPTIONAL MESSAGE charac_id_for_synchronization = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "charac_id_for_synchronization";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL charac_id_for_synchronization_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "charac_id_for_synchronization_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE report_only = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "report_only";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL report_only_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "report_only_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE only_direct_successors_of_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "only_direct_successors_of_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL only_direct_successors_of_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "only_direct_successors_of_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE process_values_in_chunks_with_size = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "process_values_in_chunks_with_size";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL process_values_in_chunks_with_size_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "process_values_in_chunks_with_size_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <charac_id_for_synchronization> has a value
     *
     * @return boolean
     */
    public function hasCharacIdForSynchronization(){
      return $this->_has(1);
    }
    
    /**
     * Clear <charac_id_for_synchronization> value
     *
     * @return \dstore\engine\im_SynchronizeItemBinaries_Ad\Parameters
     */
    public function clearCharacIdForSynchronization(){
      return $this->_clear(1);
    }
    
    /**
     * Get <charac_id_for_synchronization> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCharacIdForSynchronization(){
      return $this->_get(1);
    }
    
    /**
     * Set <charac_id_for_synchronization> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_SynchronizeItemBinaries_Ad\Parameters
     */
    public function setCharacIdForSynchronization(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <charac_id_for_synchronization_null> has a value
     *
     * @return boolean
     */
    public function hasCharacIdForSynchronizationNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <charac_id_for_synchronization_null> value
     *
     * @return \dstore\engine\im_SynchronizeItemBinaries_Ad\Parameters
     */
    public function clearCharacIdForSynchronizationNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <charac_id_for_synchronization_null> value
     *
     * @return boolean
     */
    public function getCharacIdForSynchronizationNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <charac_id_for_synchronization_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_SynchronizeItemBinaries_Ad\Parameters
     */
    public function setCharacIdForSynchronizationNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <report_only> has a value
     *
     * @return boolean
     */
    public function hasReportOnly(){
      return $this->_has(2);
    }
    
    /**
     * Clear <report_only> value
     *
     * @return \dstore\engine\im_SynchronizeItemBinaries_Ad\Parameters
     */
    public function clearReportOnly(){
      return $this->_clear(2);
    }
    
    /**
     * Get <report_only> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getReportOnly(){
      return $this->_get(2);
    }
    
    /**
     * Set <report_only> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\im_SynchronizeItemBinaries_Ad\Parameters
     */
    public function setReportOnly(\dstore\engine\values\booleanValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <report_only_null> has a value
     *
     * @return boolean
     */
    public function hasReportOnlyNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <report_only_null> value
     *
     * @return \dstore\engine\im_SynchronizeItemBinaries_Ad\Parameters
     */
    public function clearReportOnlyNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <report_only_null> value
     *
     * @return boolean
     */
    public function getReportOnlyNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <report_only_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_SynchronizeItemBinaries_Ad\Parameters
     */
    public function setReportOnlyNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <only_direct_successors_of_id> has a value
     *
     * @return boolean
     */
    public function hasOnlyDirectSuccessorsOfId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <only_direct_successors_of_id> value
     *
     * @return \dstore\engine\im_SynchronizeItemBinaries_Ad\Parameters
     */
    public function clearOnlyDirectSuccessorsOfId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <only_direct_successors_of_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getOnlyDirectSuccessorsOfId(){
      return $this->_get(3);
    }
    
    /**
     * Set <only_direct_successors_of_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_SynchronizeItemBinaries_Ad\Parameters
     */
    public function setOnlyDirectSuccessorsOfId(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <only_direct_successors_of_id_null> has a value
     *
     * @return boolean
     */
    public function hasOnlyDirectSuccessorsOfIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <only_direct_successors_of_id_null> value
     *
     * @return \dstore\engine\im_SynchronizeItemBinaries_Ad\Parameters
     */
    public function clearOnlyDirectSuccessorsOfIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <only_direct_successors_of_id_null> value
     *
     * @return boolean
     */
    public function getOnlyDirectSuccessorsOfIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <only_direct_successors_of_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_SynchronizeItemBinaries_Ad\Parameters
     */
    public function setOnlyDirectSuccessorsOfIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <process_values_in_chunks_with_size> has a value
     *
     * @return boolean
     */
    public function hasProcessValuesInChunksWithSize(){
      return $this->_has(4);
    }
    
    /**
     * Clear <process_values_in_chunks_with_size> value
     *
     * @return \dstore\engine\im_SynchronizeItemBinaries_Ad\Parameters
     */
    public function clearProcessValuesInChunksWithSize(){
      return $this->_clear(4);
    }
    
    /**
     * Get <process_values_in_chunks_with_size> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getProcessValuesInChunksWithSize(){
      return $this->_get(4);
    }
    
    /**
     * Set <process_values_in_chunks_with_size> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_SynchronizeItemBinaries_Ad\Parameters
     */
    public function setProcessValuesInChunksWithSize(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <process_values_in_chunks_with_size_null> has a value
     *
     * @return boolean
     */
    public function hasProcessValuesInChunksWithSizeNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <process_values_in_chunks_with_size_null> value
     *
     * @return \dstore\engine\im_SynchronizeItemBinaries_Ad\Parameters
     */
    public function clearProcessValuesInChunksWithSizeNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <process_values_in_chunks_with_size_null> value
     *
     * @return boolean
     */
    public function getProcessValuesInChunksWithSizeNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <process_values_in_chunks_with_size_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_SynchronizeItemBinaries_Ad\Parameters
     */
    public function setProcessValuesInChunksWithSizeNull( $value){
      return $this->_set(1004, $value);
    }
  }
}
