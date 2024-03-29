<?php
/**
 * SignerEmailNotifications
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
 * SignerEmailNotifications Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SignerEmailNotifications implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'envelope_activation' => 'string',
        'envelope_complete' => 'string',
        'carbon_copy_notification' => 'string',
        'certified_delivery_notification' => 'string',
        'envelope_declined' => 'string',
        'envelope_voided' => 'string',
        'envelope_corrected' => 'string',
        'reassigned_signer' => 'string',
        'purge_documents' => 'string',
        'fax_received' => 'string',
        'document_markup_activation' => 'string',
        'agent_notification' => 'string',
        'offline_signing_failed' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'envelope_activation' => 'envelopeActivation',
        'envelope_complete' => 'envelopeComplete',
        'carbon_copy_notification' => 'carbonCopyNotification',
        'certified_delivery_notification' => 'certifiedDeliveryNotification',
        'envelope_declined' => 'envelopeDeclined',
        'envelope_voided' => 'envelopeVoided',
        'envelope_corrected' => 'envelopeCorrected',
        'reassigned_signer' => 'reassignedSigner',
        'purge_documents' => 'purgeDocuments',
        'fax_received' => 'faxReceived',
        'document_markup_activation' => 'documentMarkupActivation',
        'agent_notification' => 'agentNotification',
        'offline_signing_failed' => 'offlineSigningFailed'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'envelope_activation' => 'setEnvelopeActivation',
        'envelope_complete' => 'setEnvelopeComplete',
        'carbon_copy_notification' => 'setCarbonCopyNotification',
        'certified_delivery_notification' => 'setCertifiedDeliveryNotification',
        'envelope_declined' => 'setEnvelopeDeclined',
        'envelope_voided' => 'setEnvelopeVoided',
        'envelope_corrected' => 'setEnvelopeCorrected',
        'reassigned_signer' => 'setReassignedSigner',
        'purge_documents' => 'setPurgeDocuments',
        'fax_received' => 'setFaxReceived',
        'document_markup_activation' => 'setDocumentMarkupActivation',
        'agent_notification' => 'setAgentNotification',
        'offline_signing_failed' => 'setOfflineSigningFailed'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'envelope_activation' => 'getEnvelopeActivation',
        'envelope_complete' => 'getEnvelopeComplete',
        'carbon_copy_notification' => 'getCarbonCopyNotification',
        'certified_delivery_notification' => 'getCertifiedDeliveryNotification',
        'envelope_declined' => 'getEnvelopeDeclined',
        'envelope_voided' => 'getEnvelopeVoided',
        'envelope_corrected' => 'getEnvelopeCorrected',
        'reassigned_signer' => 'getReassignedSigner',
        'purge_documents' => 'getPurgeDocuments',
        'fax_received' => 'getFaxReceived',
        'document_markup_activation' => 'getDocumentMarkupActivation',
        'agent_notification' => 'getAgentNotification',
        'offline_signing_failed' => 'getOfflineSigningFailed'
    );
  
    
    /**
      * $envelope_activation When set to **true**, the user receives notification that the envelope has been activated.
      * @var string
      */
    protected $envelope_activation;
    
    /**
      * $envelope_complete When set to **true**, the user receives notification that the envelope has been completed.
      * @var string
      */
    protected $envelope_complete;
    
    /**
      * $carbon_copy_notification When set to **true**, the user receives notifications of carbon copy deliveries.
      * @var string
      */
    protected $carbon_copy_notification;
    
    /**
      * $certified_delivery_notification When set to **true**, the user receives notifications of certified deliveries.
      * @var string
      */
    protected $certified_delivery_notification;
    
    /**
      * $envelope_declined When set to **true**, the user receives notification that the envelope has been declined.
      * @var string
      */
    protected $envelope_declined;
    
    /**
      * $envelope_voided When set to **true**, the user receives notification that the envelope has been voided.
      * @var string
      */
    protected $envelope_voided;
    
    /**
      * $envelope_corrected When set to **true**, the user receives notification that the envelope has been corrected.
      * @var string
      */
    protected $envelope_corrected;
    
    /**
      * $reassigned_signer When set to **true**, the user receives notification that the envelope has been reassigned.
      * @var string
      */
    protected $reassigned_signer;
    
    /**
      * $purge_documents When set to **true**, the user receives notification of document purges.
      * @var string
      */
    protected $purge_documents;
    
    /**
      * $fax_received Reserved:
      * @var string
      */
    protected $fax_received;
    
    /**
      * $document_markup_activation When set to **true**, the user receives notification that document markup has been activated.
      * @var string
      */
    protected $document_markup_activation;
    
    /**
      * $agent_notification When set to **true**, the user receives agent notification emails.
      * @var string
      */
    protected $agent_notification;
    
    /**
      * $offline_signing_failed When set to **true**, the user receives notification if the offline signing failed.
      * @var string
      */
    protected $offline_signing_failed;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->envelope_activation = $data["envelope_activation"];
            $this->envelope_complete = $data["envelope_complete"];
            $this->carbon_copy_notification = $data["carbon_copy_notification"];
            $this->certified_delivery_notification = $data["certified_delivery_notification"];
            $this->envelope_declined = $data["envelope_declined"];
            $this->envelope_voided = $data["envelope_voided"];
            $this->envelope_corrected = $data["envelope_corrected"];
            $this->reassigned_signer = $data["reassigned_signer"];
            $this->purge_documents = $data["purge_documents"];
            $this->fax_received = $data["fax_received"];
            $this->document_markup_activation = $data["document_markup_activation"];
            $this->agent_notification = $data["agent_notification"];
            $this->offline_signing_failed = $data["offline_signing_failed"];
        }
    }
    
    /**
     * Gets envelope_activation
     * @return string
     */
    public function getEnvelopeActivation()
    {
        return $this->envelope_activation;
    }
  
    /**
     * Sets envelope_activation
     * @param string $envelope_activation When set to **true**, the user receives notification that the envelope has been activated.
     * @return $this
     */
    public function setEnvelopeActivation($envelope_activation)
    {
        
        $this->envelope_activation = $envelope_activation;
        return $this;
    }
    
    /**
     * Gets envelope_complete
     * @return string
     */
    public function getEnvelopeComplete()
    {
        return $this->envelope_complete;
    }
  
    /**
     * Sets envelope_complete
     * @param string $envelope_complete When set to **true**, the user receives notification that the envelope has been completed.
     * @return $this
     */
    public function setEnvelopeComplete($envelope_complete)
    {
        
        $this->envelope_complete = $envelope_complete;
        return $this;
    }
    
    /**
     * Gets carbon_copy_notification
     * @return string
     */
    public function getCarbonCopyNotification()
    {
        return $this->carbon_copy_notification;
    }
  
    /**
     * Sets carbon_copy_notification
     * @param string $carbon_copy_notification When set to **true**, the user receives notifications of carbon copy deliveries.
     * @return $this
     */
    public function setCarbonCopyNotification($carbon_copy_notification)
    {
        
        $this->carbon_copy_notification = $carbon_copy_notification;
        return $this;
    }
    
    /**
     * Gets certified_delivery_notification
     * @return string
     */
    public function getCertifiedDeliveryNotification()
    {
        return $this->certified_delivery_notification;
    }
  
    /**
     * Sets certified_delivery_notification
     * @param string $certified_delivery_notification When set to **true**, the user receives notifications of certified deliveries.
     * @return $this
     */
    public function setCertifiedDeliveryNotification($certified_delivery_notification)
    {
        
        $this->certified_delivery_notification = $certified_delivery_notification;
        return $this;
    }
    
    /**
     * Gets envelope_declined
     * @return string
     */
    public function getEnvelopeDeclined()
    {
        return $this->envelope_declined;
    }
  
    /**
     * Sets envelope_declined
     * @param string $envelope_declined When set to **true**, the user receives notification that the envelope has been declined.
     * @return $this
     */
    public function setEnvelopeDeclined($envelope_declined)
    {
        
        $this->envelope_declined = $envelope_declined;
        return $this;
    }
    
    /**
     * Gets envelope_voided
     * @return string
     */
    public function getEnvelopeVoided()
    {
        return $this->envelope_voided;
    }
  
    /**
     * Sets envelope_voided
     * @param string $envelope_voided When set to **true**, the user receives notification that the envelope has been voided.
     * @return $this
     */
    public function setEnvelopeVoided($envelope_voided)
    {
        
        $this->envelope_voided = $envelope_voided;
        return $this;
    }
    
    /**
     * Gets envelope_corrected
     * @return string
     */
    public function getEnvelopeCorrected()
    {
        return $this->envelope_corrected;
    }
  
    /**
     * Sets envelope_corrected
     * @param string $envelope_corrected When set to **true**, the user receives notification that the envelope has been corrected.
     * @return $this
     */
    public function setEnvelopeCorrected($envelope_corrected)
    {
        
        $this->envelope_corrected = $envelope_corrected;
        return $this;
    }
    
    /**
     * Gets reassigned_signer
     * @return string
     */
    public function getReassignedSigner()
    {
        return $this->reassigned_signer;
    }
  
    /**
     * Sets reassigned_signer
     * @param string $reassigned_signer When set to **true**, the user receives notification that the envelope has been reassigned.
     * @return $this
     */
    public function setReassignedSigner($reassigned_signer)
    {
        
        $this->reassigned_signer = $reassigned_signer;
        return $this;
    }
    
    /**
     * Gets purge_documents
     * @return string
     */
    public function getPurgeDocuments()
    {
        return $this->purge_documents;
    }
  
    /**
     * Sets purge_documents
     * @param string $purge_documents When set to **true**, the user receives notification of document purges.
     * @return $this
     */
    public function setPurgeDocuments($purge_documents)
    {
        
        $this->purge_documents = $purge_documents;
        return $this;
    }
    
    /**
     * Gets fax_received
     * @return string
     */
    public function getFaxReceived()
    {
        return $this->fax_received;
    }
  
    /**
     * Sets fax_received
     * @param string $fax_received Reserved:
     * @return $this
     */
    public function setFaxReceived($fax_received)
    {
        
        $this->fax_received = $fax_received;
        return $this;
    }
    
    /**
     * Gets document_markup_activation
     * @return string
     */
    public function getDocumentMarkupActivation()
    {
        return $this->document_markup_activation;
    }
  
    /**
     * Sets document_markup_activation
     * @param string $document_markup_activation When set to **true**, the user receives notification that document markup has been activated.
     * @return $this
     */
    public function setDocumentMarkupActivation($document_markup_activation)
    {
        
        $this->document_markup_activation = $document_markup_activation;
        return $this;
    }
    
    /**
     * Gets agent_notification
     * @return string
     */
    public function getAgentNotification()
    {
        return $this->agent_notification;
    }
  
    /**
     * Sets agent_notification
     * @param string $agent_notification When set to **true**, the user receives agent notification emails.
     * @return $this
     */
    public function setAgentNotification($agent_notification)
    {
        
        $this->agent_notification = $agent_notification;
        return $this;
    }
    
    /**
     * Gets offline_signing_failed
     * @return string
     */
    public function getOfflineSigningFailed()
    {
        return $this->offline_signing_failed;
    }
  
    /**
     * Sets offline_signing_failed
     * @param string $offline_signing_failed When set to **true**, the user receives notification if the offline signing failed.
     * @return $this
     */
    public function setOfflineSigningFailed($offline_signing_failed)
    {
        
        $this->offline_signing_failed = $offline_signing_failed;
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
