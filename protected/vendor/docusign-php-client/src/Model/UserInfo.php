<?php
/**
 * UserInfo
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
 * UserInfo Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserInfo implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'user_name' => 'string',
        'email' => 'string',
        'user_id' => 'string',
        'user_type' => 'string',
        'user_status' => 'string',
        'uri' => 'string',
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'user_name' => 'userName',
        'email' => 'email',
        'user_id' => 'userId',
        'user_type' => 'userType',
        'user_status' => 'userStatus',
        'uri' => 'uri',
        'error_details' => 'errorDetails'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'user_name' => 'setUserName',
        'email' => 'setEmail',
        'user_id' => 'setUserId',
        'user_type' => 'setUserType',
        'user_status' => 'setUserStatus',
        'uri' => 'setUri',
        'error_details' => 'setErrorDetails'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'user_name' => 'getUserName',
        'email' => 'getEmail',
        'user_id' => 'getUserId',
        'user_type' => 'getUserType',
        'user_status' => 'getUserStatus',
        'uri' => 'getUri',
        'error_details' => 'getErrorDetails'
    );
  
    
    /**
      * $user_name 
      * @var string
      */
    protected $user_name;
    
    /**
      * $email 
      * @var string
      */
    protected $email;
    
    /**
      * $user_id 
      * @var string
      */
    protected $user_id;
    
    /**
      * $user_type 
      * @var string
      */
    protected $user_type;
    
    /**
      * $user_status 
      * @var string
      */
    protected $user_status;
    
    /**
      * $uri 
      * @var string
      */
    protected $uri;
    
    /**
      * $error_details 
      * @var \DocuSign\eSign\Model\ErrorDetails
      */
    protected $error_details;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->user_name = $data["user_name"];
            $this->email = $data["email"];
            $this->user_id = $data["user_id"];
            $this->user_type = $data["user_type"];
            $this->user_status = $data["user_status"];
            $this->uri = $data["uri"];
            $this->error_details = $data["error_details"];
        }
    }
    
    /**
     * Gets user_name
     * @return string
     */
    public function getUserName()
    {
        return $this->user_name;
    }
  
    /**
     * Sets user_name
     * @param string $user_name 
     * @return $this
     */
    public function setUserName($user_name)
    {
        
        $this->user_name = $user_name;
        return $this;
    }
    
    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
  
    /**
     * Sets email
     * @param string $email 
     * @return $this
     */
    public function setEmail($email)
    {
        
        $this->email = $email;
        return $this;
    }
    
    /**
     * Gets user_id
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }
  
    /**
     * Sets user_id
     * @param string $user_id 
     * @return $this
     */
    public function setUserId($user_id)
    {
        
        $this->user_id = $user_id;
        return $this;
    }
    
    /**
     * Gets user_type
     * @return string
     */
    public function getUserType()
    {
        return $this->user_type;
    }
  
    /**
     * Sets user_type
     * @param string $user_type 
     * @return $this
     */
    public function setUserType($user_type)
    {
        
        $this->user_type = $user_type;
        return $this;
    }
    
    /**
     * Gets user_status
     * @return string
     */
    public function getUserStatus()
    {
        return $this->user_status;
    }
  
    /**
     * Sets user_status
     * @param string $user_status 
     * @return $this
     */
    public function setUserStatus($user_status)
    {
        
        $this->user_status = $user_status;
        return $this;
    }
    
    /**
     * Gets uri
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }
  
    /**
     * Sets uri
     * @param string $uri 
     * @return $this
     */
    public function setUri($uri)
    {
        
        $this->uri = $uri;
        return $this;
    }
    
    /**
     * Gets error_details
     * @return \DocuSign\eSign\Model\ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->error_details;
    }
  
    /**
     * Sets error_details
     * @param \DocuSign\eSign\Model\ErrorDetails $error_details 
     * @return $this
     */
    public function setErrorDetails($error_details)
    {
        
        $this->error_details = $error_details;
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
