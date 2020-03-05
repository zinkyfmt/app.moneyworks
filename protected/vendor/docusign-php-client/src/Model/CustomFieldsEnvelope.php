<?php
/**
 * CustomFieldsEnvelope
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
/**
 * CustomFieldsEnvelope Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CustomFieldsEnvelope implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'text_custom_fields' => '\DocuSign\eSign\Model\TextCustomField[]',
        'list_custom_fields' => '\DocuSign\eSign\Model\ListCustomField[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'text_custom_fields' => 'textCustomFields',
        'list_custom_fields' => 'listCustomFields'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'text_custom_fields' => 'setTextCustomFields',
        'list_custom_fields' => 'setListCustomFields'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'text_custom_fields' => 'getTextCustomFields',
        'list_custom_fields' => 'getListCustomFields'
    );
  
    
    /**
      * $text_custom_fields An array of text custom fields.
      * @var \DocuSign\eSign\Model\TextCustomField[]
      */
    protected $text_custom_fields;
    
    /**
      * $list_custom_fields An array of list custom fields.
      * @var \DocuSign\eSign\Model\ListCustomField[]
      */
    protected $list_custom_fields;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->text_custom_fields = $data["text_custom_fields"];
            $this->list_custom_fields = $data["list_custom_fields"];
        }
    }
    
    /**
     * Gets text_custom_fields
     * @return \DocuSign\eSign\Model\TextCustomField[]
     */
    public function getTextCustomFields()
    {
        return $this->text_custom_fields;
    }
  
    /**
     * Sets text_custom_fields
     * @param \DocuSign\eSign\Model\TextCustomField[] $text_custom_fields An array of text custom fields.
     * @return $this
     */
    public function setTextCustomFields($text_custom_fields)
    {
        
        $this->text_custom_fields = $text_custom_fields;
        return $this;
    }
    
    /**
     * Gets list_custom_fields
     * @return \DocuSign\eSign\Model\ListCustomField[]
     */
    public function getListCustomFields()
    {
        return $this->list_custom_fields;
    }
  
    /**
     * Sets list_custom_fields
     * @param \DocuSign\eSign\Model\ListCustomField[] $list_custom_fields An array of list custom fields.
     * @return $this
     */
    public function setListCustomFields($list_custom_fields)
    {
        
        $this->list_custom_fields = $list_custom_fields;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
