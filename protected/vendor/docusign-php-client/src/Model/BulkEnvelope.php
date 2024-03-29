<?php
/**
 * BulkEnvelope
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
 * BulkEnvelope Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BulkEnvelope implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'transaction_id' => 'string',
        'submitted_date_time' => 'string',
        'envelope_id' => 'string',
        'envelope_uri' => 'string',
        'bulk_recipient_row' => 'string',
        'name' => 'string',
        'email' => 'string',
        'bulk_status' => 'string',
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'transaction_id' => 'transactionId',
        'submitted_date_time' => 'submittedDateTime',
        'envelope_id' => 'envelopeId',
        'envelope_uri' => 'envelopeUri',
        'bulk_recipient_row' => 'bulkRecipientRow',
        'name' => 'name',
        'email' => 'email',
        'bulk_status' => 'bulkStatus',
        'error_details' => 'errorDetails'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'transaction_id' => 'setTransactionId',
        'submitted_date_time' => 'setSubmittedDateTime',
        'envelope_id' => 'setEnvelopeId',
        'envelope_uri' => 'setEnvelopeUri',
        'bulk_recipient_row' => 'setBulkRecipientRow',
        'name' => 'setName',
        'email' => 'setEmail',
        'bulk_status' => 'setBulkStatus',
        'error_details' => 'setErrorDetails'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'transaction_id' => 'getTransactionId',
        'submitted_date_time' => 'getSubmittedDateTime',
        'envelope_id' => 'getEnvelopeId',
        'envelope_uri' => 'getEnvelopeUri',
        'bulk_recipient_row' => 'getBulkRecipientRow',
        'name' => 'getName',
        'email' => 'getEmail',
        'bulk_status' => 'getBulkStatus',
        'error_details' => 'getErrorDetails'
    );
  
    
    /**
      * $transaction_id Used to identify an envelope. The id is a sender-generated value and is valid in the DocuSign system for 7 days. It is recommended that a transaction ID is used for offline signing to ensure that an envelope is not sent multiple times. The `transactionId` property can be used determine an envelope's status (i.e. was it created or not) in cases where the internet connection was lost before the envelope status was returned.
      * @var string
      */
    protected $transaction_id;
    
    /**
      * $submitted_date_time 
      * @var string
      */
    protected $submitted_date_time;
    
    /**
      * $envelope_id The envelope ID of the envelope status that failed to post.
      * @var string
      */
    protected $envelope_id;
    
    /**
      * $envelope_uri Contains a URI for an endpoint that you can use to retrieve the envelope or envelopes.
      * @var string
      */
    protected $envelope_uri;
    
    /**
      * $bulk_recipient_row Reserved: TBD
      * @var string
      */
    protected $bulk_recipient_row;
    
    /**
      * $name 
      * @var string
      */
    protected $name;
    
    /**
      * $email 
      * @var string
      */
    protected $email;
    
    /**
      * $bulk_status Indicates the status of the bulk send operation. Returned values can be:\n* queued\n* processing\n* sent\n* failed
      * @var string
      */
    protected $bulk_status;
    
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
            $this->transaction_id = $data["transaction_id"];
            $this->submitted_date_time = $data["submitted_date_time"];
            $this->envelope_id = $data["envelope_id"];
            $this->envelope_uri = $data["envelope_uri"];
            $this->bulk_recipient_row = $data["bulk_recipient_row"];
            $this->name = $data["name"];
            $this->email = $data["email"];
            $this->bulk_status = $data["bulk_status"];
            $this->error_details = $data["error_details"];
        }
    }
    
    /**
     * Gets transaction_id
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }
  
    /**
     * Sets transaction_id
     * @param string $transaction_id Used to identify an envelope. The id is a sender-generated value and is valid in the DocuSign system for 7 days. It is recommended that a transaction ID is used for offline signing to ensure that an envelope is not sent multiple times. The `transactionId` property can be used determine an envelope's status (i.e. was it created or not) in cases where the internet connection was lost before the envelope status was returned.
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        
        $this->transaction_id = $transaction_id;
        return $this;
    }
    
    /**
     * Gets submitted_date_time
     * @return string
     */
    public function getSubmittedDateTime()
    {
        return $this->submitted_date_time;
    }
  
    /**
     * Sets submitted_date_time
     * @param string $submitted_date_time 
     * @return $this
     */
    public function setSubmittedDateTime($submitted_date_time)
    {
        
        $this->submitted_date_time = $submitted_date_time;
        return $this;
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
     * Gets envelope_uri
     * @return string
     */
    public function getEnvelopeUri()
    {
        return $this->envelope_uri;
    }
  
    /**
     * Sets envelope_uri
     * @param string $envelope_uri Contains a URI for an endpoint that you can use to retrieve the envelope or envelopes.
     * @return $this
     */
    public function setEnvelopeUri($envelope_uri)
    {
        
        $this->envelope_uri = $envelope_uri;
        return $this;
    }
    
    /**
     * Gets bulk_recipient_row
     * @return string
     */
    public function getBulkRecipientRow()
    {
        return $this->bulk_recipient_row;
    }
  
    /**
     * Sets bulk_recipient_row
     * @param string $bulk_recipient_row Reserved: TBD
     * @return $this
     */
    public function setBulkRecipientRow($bulk_recipient_row)
    {
        
        $this->bulk_recipient_row = $bulk_recipient_row;
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
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
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
     * Gets bulk_status
     * @return string
     */
    public function getBulkStatus()
    {
        return $this->bulk_status;
    }
  
    /**
     * Sets bulk_status
     * @param string $bulk_status Indicates the status of the bulk send operation. Returned values can be:\n* queued\n* processing\n* sent\n* failed
     * @return $this
     */
    public function setBulkStatus($bulk_status)
    {
        
        $this->bulk_status = $bulk_status;
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
