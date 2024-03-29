<?php
/**
 * FolderItem
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
 * FolderItem Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FolderItem implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'owner_name' => 'string',
        'envelope_id' => 'string',
        'envelope_uri' => 'string',
        'status' => 'string',
        'sender_name' => 'string',
        'sender_email' => 'string',
        'created_date_time' => 'string',
        'sent_date_time' => 'string',
        'completed_date_time' => 'string',
        'subject' => 'string',
        'template_id' => 'string',
        'name' => 'string',
        'shared' => 'string',
        'password' => 'string',
        'description' => 'string',
        'last_modified' => 'string',
        'page_count' => 'int',
        'uri' => 'string',
        'is21_cfr_part11' => 'string',
        'is_universal_signature_envelope' => 'string',
        'custom_fields' => '\DocuSign\eSign\Model\CustomFieldV2[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'owner_name' => 'ownerName',
        'envelope_id' => 'envelopeId',
        'envelope_uri' => 'envelopeUri',
        'status' => 'status',
        'sender_name' => 'senderName',
        'sender_email' => 'senderEmail',
        'created_date_time' => 'createdDateTime',
        'sent_date_time' => 'sentDateTime',
        'completed_date_time' => 'completedDateTime',
        'subject' => 'subject',
        'template_id' => 'templateId',
        'name' => 'name',
        'shared' => 'shared',
        'password' => 'password',
        'description' => 'description',
        'last_modified' => 'lastModified',
        'page_count' => 'pageCount',
        'uri' => 'uri',
        'is21_cfr_part11' => 'is21CFRPart11',
        'is_universal_signature_envelope' => 'isUniversalSignatureEnvelope',
        'custom_fields' => 'customFields'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'owner_name' => 'setOwnerName',
        'envelope_id' => 'setEnvelopeId',
        'envelope_uri' => 'setEnvelopeUri',
        'status' => 'setStatus',
        'sender_name' => 'setSenderName',
        'sender_email' => 'setSenderEmail',
        'created_date_time' => 'setCreatedDateTime',
        'sent_date_time' => 'setSentDateTime',
        'completed_date_time' => 'setCompletedDateTime',
        'subject' => 'setSubject',
        'template_id' => 'setTemplateId',
        'name' => 'setName',
        'shared' => 'setShared',
        'password' => 'setPassword',
        'description' => 'setDescription',
        'last_modified' => 'setLastModified',
        'page_count' => 'setPageCount',
        'uri' => 'setUri',
        'is21_cfr_part11' => 'setIs21CfrPart11',
        'is_universal_signature_envelope' => 'setIsUniversalSignatureEnvelope',
        'custom_fields' => 'setCustomFields'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'owner_name' => 'getOwnerName',
        'envelope_id' => 'getEnvelopeId',
        'envelope_uri' => 'getEnvelopeUri',
        'status' => 'getStatus',
        'sender_name' => 'getSenderName',
        'sender_email' => 'getSenderEmail',
        'created_date_time' => 'getCreatedDateTime',
        'sent_date_time' => 'getSentDateTime',
        'completed_date_time' => 'getCompletedDateTime',
        'subject' => 'getSubject',
        'template_id' => 'getTemplateId',
        'name' => 'getName',
        'shared' => 'getShared',
        'password' => 'getPassword',
        'description' => 'getDescription',
        'last_modified' => 'getLastModified',
        'page_count' => 'getPageCount',
        'uri' => 'getUri',
        'is21_cfr_part11' => 'getIs21CfrPart11',
        'is_universal_signature_envelope' => 'getIsUniversalSignatureEnvelope',
        'custom_fields' => 'getCustomFields'
    );
  
    
    /**
      * $owner_name Name of the envelope owner.
      * @var string
      */
    protected $owner_name;
    
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
      * $status Indicates the envelope status. Valid values are:\n\n* sent - The envelope is sent to the recipients. \n* created - The envelope is saved as a draft and can be modified and sent later.
      * @var string
      */
    protected $status;
    
    /**
      * $sender_name Name of the envelope sender.
      * @var string
      */
    protected $sender_name;
    
    /**
      * $sender_email 
      * @var string
      */
    protected $sender_email;
    
    /**
      * $created_date_time Indicates the date and time the item was created.
      * @var string
      */
    protected $created_date_time;
    
    /**
      * $sent_date_time The date and time the envelope was sent.
      * @var string
      */
    protected $sent_date_time;
    
    /**
      * $completed_date_time Specifies the date and time this item was completed.
      * @var string
      */
    protected $completed_date_time;
    
    /**
      * $subject 
      * @var string
      */
    protected $subject;
    
    /**
      * $template_id The unique identifier of the template. If this is not provided, DocuSign will generate a value.
      * @var string
      */
    protected $template_id;
    
    /**
      * $name 
      * @var string
      */
    protected $name;
    
    /**
      * $shared When set to **true**, this custom tab is shared.
      * @var string
      */
    protected $shared;
    
    /**
      * $password 
      * @var string
      */
    protected $password;
    
    /**
      * $description 
      * @var string
      */
    protected $description;
    
    /**
      * $last_modified 
      * @var string
      */
    protected $last_modified;
    
    /**
      * $page_count 
      * @var int
      */
    protected $page_count;
    
    /**
      * $uri 
      * @var string
      */
    protected $uri;
    
    /**
      * $is21_cfr_part11 When set to **true**, indicates that this module is enabled on the account.
      * @var string
      */
    protected $is21_cfr_part11;
    
    /**
      * $is_universal_signature_envelope 
      * @var string
      */
    protected $is_universal_signature_envelope;
    
    /**
      * $custom_fields An optional array of strings that allows the sender to provide custom data about the recipient. This information is returned in the envelope status but otherwise not used by DocuSign. Each customField string can be a maximum of 100 characters.
      * @var \DocuSign\eSign\Model\CustomFieldV2[]
      */
    protected $custom_fields;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->owner_name = $data["owner_name"];
            $this->envelope_id = $data["envelope_id"];
            $this->envelope_uri = $data["envelope_uri"];
            $this->status = $data["status"];
            $this->sender_name = $data["sender_name"];
            $this->sender_email = $data["sender_email"];
            $this->created_date_time = $data["created_date_time"];
            $this->sent_date_time = $data["sent_date_time"];
            $this->completed_date_time = $data["completed_date_time"];
            $this->subject = $data["subject"];
            $this->template_id = $data["template_id"];
            $this->name = $data["name"];
            $this->shared = $data["shared"];
            $this->password = $data["password"];
            $this->description = $data["description"];
            $this->last_modified = $data["last_modified"];
            $this->page_count = $data["page_count"];
            $this->uri = $data["uri"];
            $this->is21_cfr_part11 = $data["is21_cfr_part11"];
            $this->is_universal_signature_envelope = $data["is_universal_signature_envelope"];
            $this->custom_fields = $data["custom_fields"];
        }
    }
    
    /**
     * Gets owner_name
     * @return string
     */
    public function getOwnerName()
    {
        return $this->owner_name;
    }
  
    /**
     * Sets owner_name
     * @param string $owner_name Name of the envelope owner.
     * @return $this
     */
    public function setOwnerName($owner_name)
    {
        
        $this->owner_name = $owner_name;
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
     * Gets sender_name
     * @return string
     */
    public function getSenderName()
    {
        return $this->sender_name;
    }
  
    /**
     * Sets sender_name
     * @param string $sender_name Name of the envelope sender.
     * @return $this
     */
    public function setSenderName($sender_name)
    {
        
        $this->sender_name = $sender_name;
        return $this;
    }
    
    /**
     * Gets sender_email
     * @return string
     */
    public function getSenderEmail()
    {
        return $this->sender_email;
    }
  
    /**
     * Sets sender_email
     * @param string $sender_email 
     * @return $this
     */
    public function setSenderEmail($sender_email)
    {
        
        $this->sender_email = $sender_email;
        return $this;
    }
    
    /**
     * Gets created_date_time
     * @return string
     */
    public function getCreatedDateTime()
    {
        return $this->created_date_time;
    }
  
    /**
     * Sets created_date_time
     * @param string $created_date_time Indicates the date and time the item was created.
     * @return $this
     */
    public function setCreatedDateTime($created_date_time)
    {
        
        $this->created_date_time = $created_date_time;
        return $this;
    }
    
    /**
     * Gets sent_date_time
     * @return string
     */
    public function getSentDateTime()
    {
        return $this->sent_date_time;
    }
  
    /**
     * Sets sent_date_time
     * @param string $sent_date_time The date and time the envelope was sent.
     * @return $this
     */
    public function setSentDateTime($sent_date_time)
    {
        
        $this->sent_date_time = $sent_date_time;
        return $this;
    }
    
    /**
     * Gets completed_date_time
     * @return string
     */
    public function getCompletedDateTime()
    {
        return $this->completed_date_time;
    }
  
    /**
     * Sets completed_date_time
     * @param string $completed_date_time Specifies the date and time this item was completed.
     * @return $this
     */
    public function setCompletedDateTime($completed_date_time)
    {
        
        $this->completed_date_time = $completed_date_time;
        return $this;
    }
    
    /**
     * Gets subject
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }
  
    /**
     * Sets subject
     * @param string $subject 
     * @return $this
     */
    public function setSubject($subject)
    {
        
        $this->subject = $subject;
        return $this;
    }
    
    /**
     * Gets template_id
     * @return string
     */
    public function getTemplateId()
    {
        return $this->template_id;
    }
  
    /**
     * Sets template_id
     * @param string $template_id The unique identifier of the template. If this is not provided, DocuSign will generate a value.
     * @return $this
     */
    public function setTemplateId($template_id)
    {
        
        $this->template_id = $template_id;
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
     * Gets shared
     * @return string
     */
    public function getShared()
    {
        return $this->shared;
    }
  
    /**
     * Sets shared
     * @param string $shared When set to **true**, this custom tab is shared.
     * @return $this
     */
    public function setShared($shared)
    {
        
        $this->shared = $shared;
        return $this;
    }
    
    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
  
    /**
     * Sets password
     * @param string $password 
     * @return $this
     */
    public function setPassword($password)
    {
        
        $this->password = $password;
        return $this;
    }
    
    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
  
    /**
     * Sets description
     * @param string $description 
     * @return $this
     */
    public function setDescription($description)
    {
        
        $this->description = $description;
        return $this;
    }
    
    /**
     * Gets last_modified
     * @return string
     */
    public function getLastModified()
    {
        return $this->last_modified;
    }
  
    /**
     * Sets last_modified
     * @param string $last_modified 
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        
        $this->last_modified = $last_modified;
        return $this;
    }
    
    /**
     * Gets page_count
     * @return int
     */
    public function getPageCount()
    {
        return $this->page_count;
    }
  
    /**
     * Sets page_count
     * @param int $page_count 
     * @return $this
     */
    public function setPageCount($page_count)
    {
        
        $this->page_count = $page_count;
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
     * Gets is21_cfr_part11
     * @return string
     */
    public function getIs21CfrPart11()
    {
        return $this->is21_cfr_part11;
    }
  
    /**
     * Sets is21_cfr_part11
     * @param string $is21_cfr_part11 When set to **true**, indicates that this module is enabled on the account.
     * @return $this
     */
    public function setIs21CfrPart11($is21_cfr_part11)
    {
        
        $this->is21_cfr_part11 = $is21_cfr_part11;
        return $this;
    }
    
    /**
     * Gets is_universal_signature_envelope
     * @return string
     */
    public function getIsUniversalSignatureEnvelope()
    {
        return $this->is_universal_signature_envelope;
    }
  
    /**
     * Sets is_universal_signature_envelope
     * @param string $is_universal_signature_envelope 
     * @return $this
     */
    public function setIsUniversalSignatureEnvelope($is_universal_signature_envelope)
    {
        
        $this->is_universal_signature_envelope = $is_universal_signature_envelope;
        return $this;
    }
    
    /**
     * Gets custom_fields
     * @return \DocuSign\eSign\Model\CustomFieldV2[]
     */
    public function getCustomFields()
    {
        return $this->custom_fields;
    }
  
    /**
     * Sets custom_fields
     * @param \DocuSign\eSign\Model\CustomFieldV2[] $custom_fields An optional array of strings that allows the sender to provide custom data about the recipient. This information is returned in the envelope status but otherwise not used by DocuSign. Each customField string can be a maximum of 100 characters.
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        
        $this->custom_fields = $custom_fields;
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
