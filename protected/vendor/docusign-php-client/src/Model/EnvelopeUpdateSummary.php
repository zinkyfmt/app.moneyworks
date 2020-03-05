<?php
/**
 * EnvelopeUpdateSummary
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
 * EnvelopeUpdateSummary Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EnvelopeUpdateSummary implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'envelope_id' => 'string',
        'bulk_envelope_status' => '\DocuSign\eSign\Model\BulkEnvelopeStatus',
        'lock_information' => '\DocuSign\eSign\Model\LockInformation',
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'envelope_id' => 'envelopeId',
        'bulk_envelope_status' => 'bulkEnvelopeStatus',
        'lock_information' => 'lockInformation',
        'error_details' => 'errorDetails'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'envelope_id' => 'setEnvelopeId',
        'bulk_envelope_status' => 'setBulkEnvelopeStatus',
        'lock_information' => 'setLockInformation',
        'error_details' => 'setErrorDetails'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'envelope_id' => 'getEnvelopeId',
        'bulk_envelope_status' => 'getBulkEnvelopeStatus',
        'lock_information' => 'getLockInformation',
        'error_details' => 'getErrorDetails'
    );
  
    
    /**
      * $envelope_id The envelope ID of the envelope status that failed to post.
      * @var string
      */
    protected $envelope_id;
    
    /**
      * $bulk_envelope_status 
      * @var \DocuSign\eSign\Model\BulkEnvelopeStatus
      */
    protected $bulk_envelope_status;
    
    /**
      * $lock_information 
      * @var \DocuSign\eSign\Model\LockInformation
      */
    protected $lock_information;
    
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
            $this->envelope_id = $data["envelope_id"];
            $this->bulk_envelope_status = $data["bulk_envelope_status"];
            $this->lock_information = $data["lock_information"];
            $this->error_details = $data["error_details"];
        }
    }
    
    /**
     * Gets envelope_id
     * @return string
     */
    public function getEnvelopeId()
    {
        return $this->envelope_id;
    }
  
    /**
     * Sets envelope_id
     * @param string $envelope_id The envelope ID of the envelope status that failed to post.
     * @return $this
     */
    public function setEnvelopeId($envelope_id)
    {
        
        $this->envelope_id = $envelope_id;
        return $this;
    }
    
    /**
     * Gets bulk_envelope_status
     * @return \DocuSign\eSign\Model\BulkEnvelopeStatus
     */
    public function getBulkEnvelopeStatus()
    {
        return $this->bulk_envelope_status;
    }
  
    /**
     * Sets bulk_envelope_status
     * @param \DocuSign\eSign\Model\BulkEnvelopeStatus $bulk_envelope_status 
     * @return $this
     */
    public function setBulkEnvelopeStatus($bulk_envelope_status)
    {
        
        $this->bulk_envelope_status = $bulk_envelope_status;
        return $this;
    }
    
    /**
     * Gets lock_information
     * @return \DocuSign\eSign\Model\LockInformation
     */
    public function getLockInformation()
    {
        return $this->lock_information;
    }
  
    /**
     * Sets lock_information
     * @param \DocuSign\eSign\Model\LockInformation $lock_information 
     * @return $this
     */
    public function setLockInformation($lock_information)
    {
        
        $this->lock_information = $lock_information;
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
