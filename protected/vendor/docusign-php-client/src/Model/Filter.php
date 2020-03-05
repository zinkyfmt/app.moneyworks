<?php
/**
 * Filter
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
 * Filter Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Filter implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'action_required' => 'string',
        'expires' => 'string',
        'is_template' => 'string',
        'status' => 'string',
        'from_date_time' => 'string',
        'to_date_time' => 'string',
        'search_target' => 'string',
        'search_text' => 'string',
        'folder_ids' => 'string',
        'order_by' => 'string',
        'order' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'action_required' => 'actionRequired',
        'expires' => 'expires',
        'is_template' => 'isTemplate',
        'status' => 'status',
        'from_date_time' => 'fromDateTime',
        'to_date_time' => 'toDateTime',
        'search_target' => 'searchTarget',
        'search_text' => 'searchText',
        'folder_ids' => 'folderIds',
        'order_by' => 'orderBy',
        'order' => 'order'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'action_required' => 'setActionRequired',
        'expires' => 'setExpires',
        'is_template' => 'setIsTemplate',
        'status' => 'setStatus',
        'from_date_time' => 'setFromDateTime',
        'to_date_time' => 'setToDateTime',
        'search_target' => 'setSearchTarget',
        'search_text' => 'setSearchText',
        'folder_ids' => 'setFolderIds',
        'order_by' => 'setOrderBy',
        'order' => 'setOrder'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'action_required' => 'getActionRequired',
        'expires' => 'getExpires',
        'is_template' => 'getIsTemplate',
        'status' => 'getStatus',
        'from_date_time' => 'getFromDateTime',
        'to_date_time' => 'getToDateTime',
        'search_target' => 'getSearchTarget',
        'search_text' => 'getSearchText',
        'folder_ids' => 'getFolderIds',
        'order_by' => 'getOrderBy',
        'order' => 'getOrder'
    );
  
    
    /**
      * $action_required Access token information.
      * @var string
      */
    protected $action_required;
    
    /**
      * $expires 
      * @var string
      */
    protected $expires;
    
    /**
      * $is_template 
      * @var string
      */
    protected $is_template;
    
    /**
      * $status Indicates the envelope status. Valid values are:\n\n* sent - The envelope is sent to the recipients. \n* created - The envelope is saved as a draft and can be modified and sent later.
      * @var string
      */
    protected $status;
    
    /**
      * $from_date_time 
      * @var string
      */
    protected $from_date_time;
    
    /**
      * $to_date_time Must be set to \"bearer\".
      * @var string
      */
    protected $to_date_time;
    
    /**
      * $search_target 
      * @var string
      */
    protected $search_target;
    
    /**
      * $search_text 
      * @var string
      */
    protected $search_text;
    
    /**
      * $folder_ids 
      * @var string
      */
    protected $folder_ids;
    
    /**
      * $order_by 
      * @var string
      */
    protected $order_by;
    
    /**
      * $order 
      * @var string
      */
    protected $order;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->action_required = $data["action_required"];
            $this->expires = $data["expires"];
            $this->is_template = $data["is_template"];
            $this->status = $data["status"];
            $this->from_date_time = $data["from_date_time"];
            $this->to_date_time = $data["to_date_time"];
            $this->search_target = $data["search_target"];
            $this->search_text = $data["search_text"];
            $this->folder_ids = $data["folder_ids"];
            $this->order_by = $data["order_by"];
            $this->order = $data["order"];
        }
    }
    
    /**
     * Gets action_required
     * @return string
     */
    public function getActionRequired()
    {
        return $this->action_required;
    }
  
    /**
     * Sets action_required
     * @param string $action_required Access token information.
     * @return $this
     */
    public function setActionRequired($action_required)
    {
        
        $this->action_required = $action_required;
        return $this;
    }
    
    /**
     * Gets expires
     * @return string
     */
    public function getExpires()
    {
        return $this->expires;
    }
  
    /**
     * Sets expires
     * @param string $expires 
     * @return $this
     */
    public function setExpires($expires)
    {
        
        $this->expires = $expires;
        return $this;
    }
    
    /**
     * Gets is_template
     * @return string
     */
    public function getIsTemplate()
    {
        return $this->is_template;
    }
  
    /**
     * Sets is_template
     * @param string $is_template 
     * @return $this
     */
    public function setIsTemplate($is_template)
    {
        
        $this->is_template = $is_template;
        return $this;
    }
    
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status Indicates the envelope status. Valid values are:\n\n* sent - The envelope is sent to the recipients. \n* created - The envelope is saved as a draft and can be modified and sent later.
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets from_date_time
     * @return string
     */
    public function getFromDateTime()
    {
        return $this->from_date_time;
    }
  
    /**
     * Sets from_date_time
     * @param string $from_date_time 
     * @return $this
     */
    public function setFromDateTime($from_date_time)
    {
        
        $this->from_date_time = $from_date_time;
        return $this;
    }
    
    /**
     * Gets to_date_time
     * @return string
     */
    public function getToDateTime()
    {
        return $this->to_date_time;
    }
  
    /**
     * Sets to_date_time
     * @param string $to_date_time Must be set to \"bearer\".
     * @return $this
     */
    public function setToDateTime($to_date_time)
    {
        
        $this->to_date_time = $to_date_time;
        return $this;
    }
    
    /**
     * Gets search_target
     * @return string
     */
    public function getSearchTarget()
    {
        return $this->search_target;
    }
  
    /**
     * Sets search_target
     * @param string $search_target 
     * @return $this
     */
    public function setSearchTarget($search_target)
    {
        
        $this->search_target = $search_target;
        return $this;
    }
    
    /**
     * Gets search_text
     * @return string
     */
    public function getSearchText()
    {
        return $this->search_text;
    }
  
    /**
     * Sets search_text
     * @param string $search_text 
     * @return $this
     */
    public function setSearchText($search_text)
    {
        
        $this->search_text = $search_text;
        return $this;
    }
    
    /**
     * Gets folder_ids
     * @return string
     */
    public function getFolderIds()
    {
        return $this->folder_ids;
    }
  
    /**
     * Sets folder_ids
     * @param string $folder_ids 
     * @return $this
     */
    public function setFolderIds($folder_ids)
    {
        
        $this->folder_ids = $folder_ids;
        return $this;
    }
    
    /**
     * Gets order_by
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }
  
    /**
     * Sets order_by
     * @param string $order_by 
     * @return $this
     */
    public function setOrderBy($order_by)
    {
        
        $this->order_by = $order_by;
        return $this;
    }
    
    /**
     * Gets order
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }
  
    /**
     * Sets order
     * @param string $order 
     * @return $this
     */
    public function setOrder($order)
    {
        
        $this->order = $order;
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
