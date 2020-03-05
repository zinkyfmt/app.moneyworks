<?php
/**
 * AccountSharedAccess
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
 * AccountSharedAccess Class Doc Comment
 *
 * @category    Class
 * @description Contains shared access information.
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AccountSharedAccess implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'result_set_size' => 'string',
        'total_set_size' => 'string',
        'start_position' => 'string',
        'end_position' => 'string',
        'next_uri' => 'string',
        'previous_uri' => 'string',
        'account_id' => 'string',
        'shared_access' => '\DocuSign\eSign\Model\MemberSharedItems[]',
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'result_set_size' => 'resultSetSize',
        'total_set_size' => 'totalSetSize',
        'start_position' => 'startPosition',
        'end_position' => 'endPosition',
        'next_uri' => 'nextUri',
        'previous_uri' => 'previousUri',
        'account_id' => 'accountId',
        'shared_access' => 'sharedAccess',
        'error_details' => 'errorDetails'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'result_set_size' => 'setResultSetSize',
        'total_set_size' => 'setTotalSetSize',
        'start_position' => 'setStartPosition',
        'end_position' => 'setEndPosition',
        'next_uri' => 'setNextUri',
        'previous_uri' => 'setPreviousUri',
        'account_id' => 'setAccountId',
        'shared_access' => 'setSharedAccess',
        'error_details' => 'setErrorDetails'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'result_set_size' => 'getResultSetSize',
        'total_set_size' => 'getTotalSetSize',
        'start_position' => 'getStartPosition',
        'end_position' => 'getEndPosition',
        'next_uri' => 'getNextUri',
        'previous_uri' => 'getPreviousUri',
        'account_id' => 'getAccountId',
        'shared_access' => 'getSharedAccess',
        'error_details' => 'getErrorDetails'
    );
  
    
    /**
      * $result_set_size The number of results returned in this response.
      * @var string
      */
    protected $result_set_size;
    
    /**
      * $total_set_size The total number of items available in the result set. This will always be greater than or equal to the value of the property returning the results in the in the response.
      * @var string
      */
    protected $total_set_size;
    
    /**
      * $start_position Starting position of the current result set.
      * @var string
      */
    protected $start_position;
    
    /**
      * $end_position The last position in the result set.
      * @var string
      */
    protected $end_position;
    
    /**
      * $next_uri The URI to the next chunk of records based on the search request. If the endPosition is the entire results of the search, this is null.
      * @var string
      */
    protected $next_uri;
    
    /**
      * $previous_uri The postal code for the billing address.
      * @var string
      */
    protected $previous_uri;
    
    /**
      * $account_id The account ID associated with the envelope.
      * @var string
      */
    protected $account_id;
    
    /**
      * $shared_access A complex type containing the shared access information to an envelope for the users specified in the request.
      * @var \DocuSign\eSign\Model\MemberSharedItems[]
      */
    protected $shared_access;
    
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
            $this->result_set_size = $data["result_set_size"];
            $this->total_set_size = $data["total_set_size"];
            $this->start_position = $data["start_position"];
            $this->end_position = $data["end_position"];
            $this->next_uri = $data["next_uri"];
            $this->previous_uri = $data["previous_uri"];
            $this->account_id = $data["account_id"];
            $this->shared_access = $data["shared_access"];
            $this->error_details = $data["error_details"];
        }
    }
    
    /**
     * Gets result_set_size
     * @return string
     */
    public function getResultSetSize()
    {
        return $this->result_set_size;
    }
  
    /**
     * Sets result_set_size
     * @param string $result_set_size The number of results returned in this response.
     * @return $this
     */
    public function setResultSetSize($result_set_size)
    {
        
        $this->result_set_size = $result_set_size;
        return $this;
    }
    
    /**
     * Gets total_set_size
     * @return string
     */
    public function getTotalSetSize()
    {
        return $this->total_set_size;
    }
  
    /**
     * Sets total_set_size
     * @param string $total_set_size The total number of items available in the result set. This will always be greater than or equal to the value of the property returning the results in the in the response.
     * @return $this
     */
    public function setTotalSetSize($total_set_size)
    {
        
        $this->total_set_size = $total_set_size;
        return $this;
    }
    
    /**
     * Gets start_position
     * @return string
     */
    public function getStartPosition()
    {
        return $this->start_position;
    }
  
    /**
     * Sets start_position
     * @param string $start_position Starting position of the current result set.
     * @return $this
     */
    public function setStartPosition($start_position)
    {
        
        $this->start_position = $start_position;
        return $this;
    }
    
    /**
     * Gets end_position
     * @return string
     */
    public function getEndPosition()
    {
        return $this->end_position;
    }
  
    /**
     * Sets end_position
     * @param string $end_position The last position in the result set.
     * @return $this
     */
    public function setEndPosition($end_position)
    {
        
        $this->end_position = $end_position;
        return $this;
    }
    
    /**
     * Gets next_uri
     * @return string
     */
    public function getNextUri()
    {
        return $this->next_uri;
    }
  
    /**
     * Sets next_uri
     * @param string $next_uri The URI to the next chunk of records based on the search request. If the endPosition is the entire results of the search, this is null.
     * @return $this
     */
    public function setNextUri($next_uri)
    {
        
        $this->next_uri = $next_uri;
        return $this;
    }
    
    /**
     * Gets previous_uri
     * @return string
     */
    public function getPreviousUri()
    {
        return $this->previous_uri;
    }
  
    /**
     * Sets previous_uri
     * @param string $previous_uri The postal code for the billing address.
     * @return $this
     */
    public function setPreviousUri($previous_uri)
    {
        
        $this->previous_uri = $previous_uri;
        return $this;
    }
    
    /**
     * Gets account_id
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }
  
    /**
     * Sets account_id
     * @param string $account_id The account ID associated with the envelope.
     * @return $this
     */
    public function setAccountId($account_id)
    {
        
        $this->account_id = $account_id;
        return $this;
    }
    
    /**
     * Gets shared_access
     * @return \DocuSign\eSign\Model\MemberSharedItems[]
     */
    public function getSharedAccess()
    {
        return $this->shared_access;
    }
  
    /**
     * Sets shared_access
     * @param \DocuSign\eSign\Model\MemberSharedItems[] $shared_access A complex type containing the shared access information to an envelope for the users specified in the request.
     * @return $this
     */
    public function setSharedAccess($shared_access)
    {
        
        $this->shared_access = $shared_access;
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
