<?php
/**
 * Expirations
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
 * Expirations Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Expirations implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'expire_enabled' => 'string',
        'expire_after' => 'string',
        'expire_warn' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'expire_enabled' => 'expireEnabled',
        'expire_after' => 'expireAfter',
        'expire_warn' => 'expireWarn'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'expire_enabled' => 'setExpireEnabled',
        'expire_after' => 'setExpireAfter',
        'expire_warn' => 'setExpireWarn'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'expire_enabled' => 'getExpireEnabled',
        'expire_after' => 'getExpireAfter',
        'expire_warn' => 'getExpireWarn'
    );
  
    
    /**
      * $expire_enabled When set to **true**, the envelope expires (is no longer available for signing) in the set number of days. If false, the account default setting is used. If the account does not have an expiration setting, the DocuSign default value of 120 days is used.
      * @var string
      */
    protected $expire_enabled;
    
    /**
      * $expire_after An integer that sets the number of days the envelope is active.
      * @var string
      */
    protected $expire_after;
    
    /**
      * $expire_warn An integer that sets the number of days before envelope expiration that an expiration warning email is sent to the recipient. If set to 0 (zero), no warning email is sent.
      * @var string
      */
    protected $expire_warn;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->expire_enabled = $data["expire_enabled"];
            $this->expire_after = $data["expire_after"];
            $this->expire_warn = $data["expire_warn"];
        }
    }
    
    /**
     * Gets expire_enabled
     * @return string
     */
    public function getExpireEnabled()
    {
        return $this->expire_enabled;
    }
  
    /**
     * Sets expire_enabled
     * @param string $expire_enabled When set to **true**, the envelope expires (is no longer available for signing) in the set number of days. If false, the account default setting is used. If the account does not have an expiration setting, the DocuSign default value of 120 days is used.
     * @return $this
     */
    public function setExpireEnabled($expire_enabled)
    {
        
        $this->expire_enabled = $expire_enabled;
        return $this;
    }
    
    /**
     * Gets expire_after
     * @return string
     */
    public function getExpireAfter()
    {
        return $this->expire_after;
    }
  
    /**
     * Sets expire_after
     * @param string $expire_after An integer that sets the number of days the envelope is active.
     * @return $this
     */
    public function setExpireAfter($expire_after)
    {
        
        $this->expire_after = $expire_after;
        return $this;
    }
    
    /**
     * Gets expire_warn
     * @return string
     */
    public function getExpireWarn()
    {
        return $this->expire_warn;
    }
  
    /**
     * Sets expire_warn
     * @param string $expire_warn An integer that sets the number of days before envelope expiration that an expiration warning email is sent to the recipient. If set to 0 (zero), no warning email is sent.
     * @return $this
     */
    public function setExpireWarn($expire_warn)
    {
        
        $this->expire_warn = $expire_warn;
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
