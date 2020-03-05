<?php
/**
 * ListCustomField
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
 * ListCustomField Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ListCustomField implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'list_items' => 'string[]',
        'field_id' => 'string',
        'name' => 'string',
        'show' => 'string',
        'required' => 'string',
        'value' => 'string',
        'configuration_type' => 'string',
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'list_items' => 'listItems',
        'field_id' => 'fieldId',
        'name' => 'name',
        'show' => 'show',
        'required' => 'required',
        'value' => 'value',
        'configuration_type' => 'configurationType',
        'error_details' => 'errorDetails'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'list_items' => 'setListItems',
        'field_id' => 'setFieldId',
        'name' => 'setName',
        'show' => 'setShow',
        'required' => 'setRequired',
        'value' => 'setValue',
        'configuration_type' => 'setConfigurationType',
        'error_details' => 'setErrorDetails'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'list_items' => 'getListItems',
        'field_id' => 'getFieldId',
        'name' => 'getName',
        'show' => 'getShow',
        'required' => 'getRequired',
        'value' => 'getValue',
        'configuration_type' => 'getConfigurationType',
        'error_details' => 'getErrorDetails'
    );
  
    
    /**
      * $list_items 
      * @var string[]
      */
    protected $list_items;
    
    /**
      * $field_id An ID used to specify a custom field.
      * @var string
      */
    protected $field_id;
    
    /**
      * $name The name of the custom field.
      * @var string
      */
    protected $name;
    
    /**
      * $show A boolean indicating if the value should be displayed.
      * @var string
      */
    protected $show;
    
    /**
      * $required When set to **true**, the signer is required to fill out this tab
      * @var string
      */
    protected $required;
    
    /**
      * $value The value of the custom field.\n\nMaximum Length: 100 characters.
      * @var string
      */
    protected $value;
    
    /**
      * $configuration_type If merge field's are being used, specifies the type of the merge field. The only  supported value is **salesforce**.
      * @var string
      */
    protected $configuration_type;
    
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
            $this->list_items = $data["list_items"];
            $this->field_id = $data["field_id"];
            $this->name = $data["name"];
            $this->show = $data["show"];
            $this->required = $data["required"];
            $this->value = $data["value"];
            $this->configuration_type = $data["configuration_type"];
            $this->error_details = $data["error_details"];
        }
    }
    
    /**
     * Gets list_items
     * @return string[]
     */
    public function getListItems()
    {
        return $this->list_items;
    }
  
    /**
     * Sets list_items
     * @param string[] $list_items 
     * @return $this
     */
    public function setListItems($list_items)
    {
        
        $this->list_items = $list_items;
        return $this;
    }
    
    /**
     * Gets field_id
     * @return string
     */
    public function getFieldId()
    {
        return $this->field_id;
    }
  
    /**
     * Sets field_id
     * @param string $field_id An ID used to specify a custom field.
     * @return $this
     */
    public function setFieldId($field_id)
    {
        
        $this->field_id = $field_id;
        return $this;
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name The name of the custom field.
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets show
     * @return string
     */
    public function getShow()
    {
        return $this->show;
    }
  
    /**
     * Sets show
     * @param string $show A boolean indicating if the value should be displayed.
     * @return $this
     */
    public function setShow($show)
    {
        
        $this->show = $show;
        return $this;
    }
    
    /**
     * Gets required
     * @return string
     */
    public function getRequired()
    {
        return $this->required;
    }
  
    /**
     * Sets required
     * @param string $required When set to **true**, the signer is required to fill out this tab
     * @return $this
     */
    public function setRequired($required)
    {
        
        $this->required = $required;
        return $this;
    }
    
    /**
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
  
    /**
     * Sets value
     * @param string $value The value of the custom field.\n\nMaximum Length: 100 characters.
     * @return $this
     */
    public function setValue($value)
    {
        
        $this->value = $value;
        return $this;
    }
    
    /**
     * Gets configuration_type
     * @return string
     */
    public function getConfigurationType()
    {
        return $this->configuration_type;
    }
  
    /**
     * Sets configuration_type
     * @param string $configuration_type If merge field's are being used, specifies the type of the merge field. The only  supported value is **salesforce**.
     * @return $this
     */
    public function setConfigurationType($configuration_type)
    {
        
        $this->configuration_type = $configuration_type;
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
