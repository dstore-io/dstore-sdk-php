<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetTemplates_Ad.proto
//   Date: 2015-10-06 11:19:52

namespace dstore\engine\mi_GetTemplates_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $description = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $frame_name = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $file_name = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $can_be_source_template = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $is_real_time_template = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $template_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $language_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetTemplates_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE description = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE frame_name = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "frame_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE file_name = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "file_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE can_be_source_template = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "can_be_source_template";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE is_real_time_template = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "is_real_time_template";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE template_id = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "template_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE language_id = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "language_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <row_id> has a value
     *
     * @return boolean
     */
    public function hasRowId(){
      return $this->_has(10000);
    }
    
    /**
     * Clear <row_id> value
     *
     * @return \dstore\engine\mi_GetTemplates_Ad\Response\Row
     */
    public function clearRowId(){
      return $this->_clear(10000);
    }
    
    /**
     * Get <row_id> value
     *
     * @return int
     */
    public function getRowId(){
      return $this->_get(10000);
    }
    
    /**
     * Set <row_id> value
     *
     * @param int $value
     * @return \dstore\engine\mi_GetTemplates_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <description> has a value
     *
     * @return boolean
     */
    public function hasDescription(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <description> value
     *
     * @return \dstore\engine\mi_GetTemplates_Ad\Response\Row
     */
    public function clearDescription(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDescription(){
      return $this->_get(10001);
    }
    
    /**
     * Set <description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetTemplates_Ad\Response\Row
     */
    public function setDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <frame_name> has a value
     *
     * @return boolean
     */
    public function hasFrameName(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <frame_name> value
     *
     * @return \dstore\engine\mi_GetTemplates_Ad\Response\Row
     */
    public function clearFrameName(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <frame_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getFrameName(){
      return $this->_get(10002);
    }
    
    /**
     * Set <frame_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetTemplates_Ad\Response\Row
     */
    public function setFrameName(\dstore\engine\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <file_name> has a value
     *
     * @return boolean
     */
    public function hasFileName(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <file_name> value
     *
     * @return \dstore\engine\mi_GetTemplates_Ad\Response\Row
     */
    public function clearFileName(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <file_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getFileName(){
      return $this->_get(10003);
    }
    
    /**
     * Set <file_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetTemplates_Ad\Response\Row
     */
    public function setFileName(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <can_be_source_template> has a value
     *
     * @return boolean
     */
    public function hasCanBeSourceTemplate(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <can_be_source_template> value
     *
     * @return \dstore\engine\mi_GetTemplates_Ad\Response\Row
     */
    public function clearCanBeSourceTemplate(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <can_be_source_template> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getCanBeSourceTemplate(){
      return $this->_get(10004);
    }
    
    /**
     * Set <can_be_source_template> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetTemplates_Ad\Response\Row
     */
    public function setCanBeSourceTemplate(\dstore\engine\values\booleanValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <is_real_time_template> has a value
     *
     * @return boolean
     */
    public function hasIsRealTimeTemplate(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <is_real_time_template> value
     *
     * @return \dstore\engine\mi_GetTemplates_Ad\Response\Row
     */
    public function clearIsRealTimeTemplate(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <is_real_time_template> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getIsRealTimeTemplate(){
      return $this->_get(10005);
    }
    
    /**
     * Set <is_real_time_template> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetTemplates_Ad\Response\Row
     */
    public function setIsRealTimeTemplate(\dstore\engine\values\booleanValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <template_id> has a value
     *
     * @return boolean
     */
    public function hasTemplateId(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <template_id> value
     *
     * @return \dstore\engine\mi_GetTemplates_Ad\Response\Row
     */
    public function clearTemplateId(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <template_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getTemplateId(){
      return $this->_get(10006);
    }
    
    /**
     * Set <template_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetTemplates_Ad\Response\Row
     */
    public function setTemplateId(\dstore\engine\values\integerValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <language_id> has a value
     *
     * @return boolean
     */
    public function hasLanguageId(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <language_id> value
     *
     * @return \dstore\engine\mi_GetTemplates_Ad\Response\Row
     */
    public function clearLanguageId(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <language_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getLanguageId(){
      return $this->_get(10007);
    }
    
    /**
     * Set <language_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetTemplates_Ad\Response\Row
     */
    public function setLanguageId(\dstore\engine\values\integerValue $value){
      return $this->_set(10007, $value);
    }
  }
}

