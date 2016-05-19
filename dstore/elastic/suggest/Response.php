<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/elastic/item/suggest.proto
//   Date: 2016-05-19 08:08:10

namespace dstore\elastic\suggest {

  class Response extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\elastic\error\Error */
    public $error = null;
    
    /**  @var \dstore\elastic\suggest\Response\Suggestion[]  */
    public $suggestion = array();
    
    /**  @var \dstore\elastic\item\Item[]  */
    public $matching_item = array();
    
    /**  @var string */
    public $elastic_query_string = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.elastic.suggest.Response');

      // OPTIONAL MESSAGE error = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "error";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\elastic\error\Error';
      $descriptor->addField($f);

      // REPEATED MESSAGE suggestion = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "suggestion";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\dstore\elastic\suggest\Response\Suggestion';
      $descriptor->addField($f);

      // REPEATED MESSAGE matching_item = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "matching_item";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\dstore\elastic\item\Item';
      $descriptor->addField($f);

      // OPTIONAL STRING elastic_query_string = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "elastic_query_string";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <error> has a value
     *
     * @return boolean
     */
    public function hasError(){
      return $this->_has(1);
    }
    
    /**
     * Clear <error> value
     *
     * @return \dstore\elastic\suggest\Response
     */
    public function clearError(){
      return $this->_clear(1);
    }
    
    /**
     * Get <error> value
     *
     * @return \dstore\elastic\error\Error
     */
    public function getError(){
      return $this->_get(1);
    }
    
    /**
     * Set <error> value
     *
     * @param \dstore\elastic\error\Error $value
     * @return \dstore\elastic\suggest\Response
     */
    public function setError(\dstore\elastic\error\Error $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <suggestion> has a value
     *
     * @return boolean
     */
    public function hasSuggestion(){
      return $this->_has(2);
    }
    
    /**
     * Clear <suggestion> value
     *
     * @return \dstore\elastic\suggest\Response
     */
    public function clearSuggestion(){
      return $this->_clear(2);
    }
    
    /**
     * Get <suggestion> value
     *
     * @param int $idx
     * @return \dstore\elastic\suggest\Response\Suggestion
     */
    public function getSuggestion($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <suggestion> value
     *
     * @param \dstore\elastic\suggest\Response\Suggestion $value
     * @return \dstore\elastic\suggest\Response
     */
    public function setSuggestion(\dstore\elastic\suggest\Response\Suggestion $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <suggestion>
     *
     * @return \dstore\elastic\suggest\Response\Suggestion[]
     */
    public function getSuggestionList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <suggestion>
     *
     * @param \dstore\elastic\suggest\Response\Suggestion $value
     * @return \dstore\elastic\suggest\Response
     */
    public function addSuggestion(\dstore\elastic\suggest\Response\Suggestion $value){
     return $this->_add(2, $value);
    }
    
    /**
     * Check if <matching_item> has a value
     *
     * @return boolean
     */
    public function hasMatchingItem(){
      return $this->_has(3);
    }
    
    /**
     * Clear <matching_item> value
     *
     * @return \dstore\elastic\suggest\Response
     */
    public function clearMatchingItem(){
      return $this->_clear(3);
    }
    
    /**
     * Get <matching_item> value
     *
     * @param int $idx
     * @return \dstore\elastic\item\Item
     */
    public function getMatchingItem($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <matching_item> value
     *
     * @param \dstore\elastic\item\Item $value
     * @return \dstore\elastic\suggest\Response
     */
    public function setMatchingItem(\dstore\elastic\item\Item $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <matching_item>
     *
     * @return \dstore\elastic\item\Item[]
     */
    public function getMatchingItemList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <matching_item>
     *
     * @param \dstore\elastic\item\Item $value
     * @return \dstore\elastic\suggest\Response
     */
    public function addMatchingItem(\dstore\elastic\item\Item $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <elastic_query_string> has a value
     *
     * @return boolean
     */
    public function hasElasticQueryString(){
      return $this->_has(5);
    }
    
    /**
     * Clear <elastic_query_string> value
     *
     * @return \dstore\elastic\suggest\Response
     */
    public function clearElasticQueryString(){
      return $this->_clear(5);
    }
    
    /**
     * Get <elastic_query_string> value
     *
     * @return string
     */
    public function getElasticQueryString(){
      return $this->_get(5);
    }
    
    /**
     * Set <elastic_query_string> value
     *
     * @param string $value
     * @return \dstore\elastic\suggest\Response
     */
    public function setElasticQueryString( $value){
      return $this->_set(5, $value);
    }
  }
}
