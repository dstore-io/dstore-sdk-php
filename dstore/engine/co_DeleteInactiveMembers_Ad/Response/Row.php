<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/co_DeleteInactiveMembers_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\co_DeleteInactiveMembers_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $community_member_id = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $last_login = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $nickname = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $creation_date_and_time = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $number_of_postings = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.co_DeleteInactiveMembers_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE community_member_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "community_member_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE last_login = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "last_login";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE nickname = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "nickname";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE creation_date_and_time = 20003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20003;
      $f->name      = "creation_date_and_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE number_of_postings = 20004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20004;
      $f->name      = "number_of_postings";
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
     * @return \dstore\engine\co_DeleteInactiveMembers_Ad\Response\Row
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
     * @return \dstore\engine\co_DeleteInactiveMembers_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <community_member_id> has a value
     *
     * @return boolean
     */
    public function hasCommunityMemberId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <community_member_id> value
     *
     * @return \dstore\engine\co_DeleteInactiveMembers_Ad\Response\Row
     */
    public function clearCommunityMemberId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <community_member_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCommunityMemberId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <community_member_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\co_DeleteInactiveMembers_Ad\Response\Row
     */
    public function setCommunityMemberId(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <last_login> has a value
     *
     * @return boolean
     */
    public function hasLastLogin(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <last_login> value
     *
     * @return \dstore\engine\co_DeleteInactiveMembers_Ad\Response\Row
     */
    public function clearLastLogin(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <last_login> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getLastLogin(){
      return $this->_get(10002);
    }
    
    /**
     * Set <last_login> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\co_DeleteInactiveMembers_Ad\Response\Row
     */
    public function setLastLogin(\dstore\engine\values\timestampValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <nickname> has a value
     *
     * @return boolean
     */
    public function hasNickname(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <nickname> value
     *
     * @return \dstore\engine\co_DeleteInactiveMembers_Ad\Response\Row
     */
    public function clearNickname(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <nickname> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getNickname(){
      return $this->_get(10003);
    }
    
    /**
     * Set <nickname> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\co_DeleteInactiveMembers_Ad\Response\Row
     */
    public function setNickname(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <creation_date_and_time> has a value
     *
     * @return boolean
     */
    public function hasCreationDateAndTime(){
      return $this->_has(20003);
    }
    
    /**
     * Clear <creation_date_and_time> value
     *
     * @return \dstore\engine\co_DeleteInactiveMembers_Ad\Response\Row
     */
    public function clearCreationDateAndTime(){
      return $this->_clear(20003);
    }
    
    /**
     * Get <creation_date_and_time> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getCreationDateAndTime(){
      return $this->_get(20003);
    }
    
    /**
     * Set <creation_date_and_time> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\co_DeleteInactiveMembers_Ad\Response\Row
     */
    public function setCreationDateAndTime(\dstore\engine\values\timestampValue $value){
      return $this->_set(20003, $value);
    }
    
    /**
     * Check if <number_of_postings> has a value
     *
     * @return boolean
     */
    public function hasNumberOfPostings(){
      return $this->_has(20004);
    }
    
    /**
     * Clear <number_of_postings> value
     *
     * @return \dstore\engine\co_DeleteInactiveMembers_Ad\Response\Row
     */
    public function clearNumberOfPostings(){
      return $this->_clear(20004);
    }
    
    /**
     * Get <number_of_postings> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getNumberOfPostings(){
      return $this->_get(20004);
    }
    
    /**
     * Set <number_of_postings> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\co_DeleteInactiveMembers_Ad\Response\Row
     */
    public function setNumberOfPostings(\dstore\engine\values\integerValue $value){
      return $this->_set(20004, $value);
    }
  }
}
