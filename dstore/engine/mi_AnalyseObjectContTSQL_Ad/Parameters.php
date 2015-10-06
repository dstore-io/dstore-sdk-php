<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_AnalyseObjectContTSQL_Ad.proto
//   Date: 2015-10-06 11:19:49

namespace dstore\engine\mi_AnalyseObjectContTSQL_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $object_name_containing_t_s_q_l = null;
    
    /**  @var boolean */
    public $object_name_containing_t_s_q_l_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $force_analysis = null;
    
    /**  @var boolean */
    public $force_analysis_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_AnalyseObjectContTSQL_Ad.Parameters');

      // OPTIONAL MESSAGE object_name_containing_t_s_q_l = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "object_name_containing_t_s_q_l";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL object_name_containing_t_s_q_l_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "object_name_containing_t_s_q_l_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE force_analysis = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "force_analysis";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL force_analysis_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "force_analysis_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <object_name_containing_t_s_q_l> has a value
     *
     * @return boolean
     */
    public function hasObjectNameContainingTSQL(){
      return $this->_has(1);
    }
    
    /**
     * Clear <object_name_containing_t_s_q_l> value
     *
     * @return \dstore\engine\mi_AnalyseObjectContTSQL_Ad\Parameters
     */
    public function clearObjectNameContainingTSQL(){
      return $this->_clear(1);
    }
    
    /**
     * Get <object_name_containing_t_s_q_l> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getObjectNameContainingTSQL(){
      return $this->_get(1);
    }
    
    /**
     * Set <object_name_containing_t_s_q_l> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_AnalyseObjectContTSQL_Ad\Parameters
     */
    public function setObjectNameContainingTSQL(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <object_name_containing_t_s_q_l_null> has a value
     *
     * @return boolean
     */
    public function hasObjectNameContainingTSQLNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <object_name_containing_t_s_q_l_null> value
     *
     * @return \dstore\engine\mi_AnalyseObjectContTSQL_Ad\Parameters
     */
    public function clearObjectNameContainingTSQLNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <object_name_containing_t_s_q_l_null> value
     *
     * @return boolean
     */
    public function getObjectNameContainingTSQLNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <object_name_containing_t_s_q_l_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_AnalyseObjectContTSQL_Ad\Parameters
     */
    public function setObjectNameContainingTSQLNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <force_analysis> has a value
     *
     * @return boolean
     */
    public function hasForceAnalysis(){
      return $this->_has(2);
    }
    
    /**
     * Clear <force_analysis> value
     *
     * @return \dstore\engine\mi_AnalyseObjectContTSQL_Ad\Parameters
     */
    public function clearForceAnalysis(){
      return $this->_clear(2);
    }
    
    /**
     * Get <force_analysis> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getForceAnalysis(){
      return $this->_get(2);
    }
    
    /**
     * Set <force_analysis> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_AnalyseObjectContTSQL_Ad\Parameters
     */
    public function setForceAnalysis(\dstore\engine\values\booleanValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <force_analysis_null> has a value
     *
     * @return boolean
     */
    public function hasForceAnalysisNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <force_analysis_null> value
     *
     * @return \dstore\engine\mi_AnalyseObjectContTSQL_Ad\Parameters
     */
    public function clearForceAnalysisNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <force_analysis_null> value
     *
     * @return boolean
     */
    public function getForceAnalysisNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <force_analysis_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_AnalyseObjectContTSQL_Ad\Parameters
     */
    public function setForceAnalysisNull( $value){
      return $this->_set(1002, $value);
    }
  }
}

