<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetCurrentProcesses_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_GetCurrentProcesses_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $login_name = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $host_process = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $process_status = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $command = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $blocking_process_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $programm_name = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $server_process_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $d_b_name = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $host_name = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetCurrentProcesses_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE login_name = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "login_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE host_process = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "host_process";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE process_status = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "process_status";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE command = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "command";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE blocking_process_id = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "blocking_process_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE programm_name = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "programm_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE server_process_id = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "server_process_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE d_b_name = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "d_b_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE host_name = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "host_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
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
     * @return \dstore\engine\mi_GetCurrentProcesses_Ad\Response\Row
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
     * @return \dstore\engine\mi_GetCurrentProcesses_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <login_name> has a value
     *
     * @return boolean
     */
    public function hasLoginName(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <login_name> value
     *
     * @return \dstore\engine\mi_GetCurrentProcesses_Ad\Response\Row
     */
    public function clearLoginName(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <login_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getLoginName(){
      return $this->_get(10001);
    }
    
    /**
     * Set <login_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetCurrentProcesses_Ad\Response\Row
     */
    public function setLoginName(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <host_process> has a value
     *
     * @return boolean
     */
    public function hasHostProcess(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <host_process> value
     *
     * @return \dstore\engine\mi_GetCurrentProcesses_Ad\Response\Row
     */
    public function clearHostProcess(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <host_process> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getHostProcess(){
      return $this->_get(10002);
    }
    
    /**
     * Set <host_process> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetCurrentProcesses_Ad\Response\Row
     */
    public function setHostProcess(\dstore\engine\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <process_status> has a value
     *
     * @return boolean
     */
    public function hasProcessStatus(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <process_status> value
     *
     * @return \dstore\engine\mi_GetCurrentProcesses_Ad\Response\Row
     */
    public function clearProcessStatus(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <process_status> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getProcessStatus(){
      return $this->_get(10003);
    }
    
    /**
     * Set <process_status> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetCurrentProcesses_Ad\Response\Row
     */
    public function setProcessStatus(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <command> has a value
     *
     * @return boolean
     */
    public function hasCommand(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <command> value
     *
     * @return \dstore\engine\mi_GetCurrentProcesses_Ad\Response\Row
     */
    public function clearCommand(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <command> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCommand(){
      return $this->_get(10004);
    }
    
    /**
     * Set <command> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetCurrentProcesses_Ad\Response\Row
     */
    public function setCommand(\dstore\engine\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <blocking_process_id> has a value
     *
     * @return boolean
     */
    public function hasBlockingProcessId(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <blocking_process_id> value
     *
     * @return \dstore\engine\mi_GetCurrentProcesses_Ad\Response\Row
     */
    public function clearBlockingProcessId(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <blocking_process_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getBlockingProcessId(){
      return $this->_get(10005);
    }
    
    /**
     * Set <blocking_process_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetCurrentProcesses_Ad\Response\Row
     */
    public function setBlockingProcessId(\dstore\engine\values\integerValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <programm_name> has a value
     *
     * @return boolean
     */
    public function hasProgrammName(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <programm_name> value
     *
     * @return \dstore\engine\mi_GetCurrentProcesses_Ad\Response\Row
     */
    public function clearProgrammName(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <programm_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getProgrammName(){
      return $this->_get(10006);
    }
    
    /**
     * Set <programm_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetCurrentProcesses_Ad\Response\Row
     */
    public function setProgrammName(\dstore\engine\values\stringValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <server_process_id> has a value
     *
     * @return boolean
     */
    public function hasServerProcessId(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <server_process_id> value
     *
     * @return \dstore\engine\mi_GetCurrentProcesses_Ad\Response\Row
     */
    public function clearServerProcessId(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <server_process_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getServerProcessId(){
      return $this->_get(10007);
    }
    
    /**
     * Set <server_process_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetCurrentProcesses_Ad\Response\Row
     */
    public function setServerProcessId(\dstore\engine\values\integerValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <d_b_name> has a value
     *
     * @return boolean
     */
    public function hasDBName(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <d_b_name> value
     *
     * @return \dstore\engine\mi_GetCurrentProcesses_Ad\Response\Row
     */
    public function clearDBName(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <d_b_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDBName(){
      return $this->_get(10008);
    }
    
    /**
     * Set <d_b_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetCurrentProcesses_Ad\Response\Row
     */
    public function setDBName(\dstore\engine\values\stringValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <host_name> has a value
     *
     * @return boolean
     */
    public function hasHostName(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <host_name> value
     *
     * @return \dstore\engine\mi_GetCurrentProcesses_Ad\Response\Row
     */
    public function clearHostName(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <host_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getHostName(){
      return $this->_get(10009);
    }
    
    /**
     * Set <host_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetCurrentProcesses_Ad\Response\Row
     */
    public function setHostName(\dstore\engine\values\stringValue $value){
      return $this->_set(10009, $value);
    }
  }
}
