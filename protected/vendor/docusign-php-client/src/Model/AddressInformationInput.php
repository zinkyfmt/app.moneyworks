<?php
/**
 * AddressInformationInput
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
 * AddressInformationInput Class Doc Comment
 *
 * @category    Class
 * @description Contains address input information.
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AddressInformationInput implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'address_information' => '\DocuSign\eSign\Model\AddressInformation',
        'display_level_code' => 'string',
        'receive_in_response' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'address_information' => 'addressInformation',
        'display_level_code' => 'displayLevelCode',
        'receive_in_response' => 'receiveInResponse'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'address_information' => 'setAddressInformation',
        'display_level_code' => 'setDisplayLevelCode',
        'receive_in_response' => 'setReceiveInResponse'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'address_information' => 'getAddressInformation',
        'display_level_code' => 'getDisplayLevelCode',
        'receive_in_response' => 'getReceiveInResponse'
    );
  
    
    /**
      * $address_information 
      * @var \DocuSign\eSign\Model\AddressInformation
      */
    protected $address_information;
    
    /**
      * $display_level_code Specifies the display level for the recipient. \nValid values are: \n\n* ReadOnly\n* Editable\n* DoNotDisplay
      * @var string
      */
    protected $display_level_code;
    
    /**
      * $receive_in_response When set to **true**, the information needs to be returned in the response.
      * @var string
      */
    protected $receive_in_response;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->address_information = $data["address_information"];
            $this->display_level_code = $data["display_level_code"];
            $this->receive_in_response = $data["receive_in_response"];
        }
    }
    
    /**
     * Gets address_information
     * @return \DocuSign\eSign\Model\AddressInformation
     */
    public function getAddressInformation()
    {
        return $this->address_information;
    }
  
    /**
     * Sets address_information
     * @param \DocuSign\eSign\Model\AddressInformation $address_information 
     * @return $this
     */
    public function setAddressInformation($address_information)
    {
        
        $this->address_information = $address_information;
        return $this;
    }
    
    /**
     * Gets display_level_code
     * @return string
     */
    public function getDisplayLevelCode()
    {
        return $this->display_level_code;
    }
  
    /**
     * Sets display_level_code
     * @param string $display_level_code Specifies the display level for the recipient. \nValid values are: \n\n* ReadOnly\n* Editable\n* DoNotDisplay
     * @return $this
     */
    public function setDisplayLevelCode($display_level_code)
    {
        
        $this->display_level_code = $display_level_code;
        return $this;
    }
    
    /**
     * Gets receive_in_response
     * @return string
     */
    public function getReceiveInResponse()
    {
        return $this->receive_in_response;
    }
  
    /**
     * Sets receive_in_response
     * @param string $receive_in_response When set to **true**, the information needs to be returned in the response.
     * @return $this
     */
    public function setReceiveInResponse($receive_in_response)
    {
        
        $this->receive_in_response = $receive_in_response;
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
