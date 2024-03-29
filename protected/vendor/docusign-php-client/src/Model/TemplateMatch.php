<?php
/**
 * TemplateMatch
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
 * TemplateMatch Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TemplateMatch implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'match_percentage' => 'string',
        'document_start_page' => 'string',
        'document_end_page' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'match_percentage' => 'matchPercentage',
        'document_start_page' => 'documentStartPage',
        'document_end_page' => 'documentEndPage'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'match_percentage' => 'setMatchPercentage',
        'document_start_page' => 'setDocumentStartPage',
        'document_end_page' => 'setDocumentEndPage'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'match_percentage' => 'getMatchPercentage',
        'document_start_page' => 'getDocumentStartPage',
        'document_end_page' => 'getDocumentEndPage'
    );
  
    
    /**
      * $match_percentage 
      * @var string
      */
    protected $match_percentage;
    
    /**
      * $document_start_page 
      * @var string
      */
    protected $document_start_page;
    
    /**
      * $document_end_page 
      * @var string
      */
    protected $document_end_page;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->match_percentage = $data["match_percentage"];
            $this->document_start_page = $data["document_start_page"];
            $this->document_end_page = $data["document_end_page"];
        }
    }
    
    /**
     * Gets match_percentage
     * @return string
     */
    public function getMatchPercentage()
    {
        return $this->match_percentage;
    }
  
    /**
     * Sets match_percentage
     * @param string $match_percentage 
     * @return $this
     */
    public function setMatchPercentage($match_percentage)
    {
        
        $this->match_percentage = $match_percentage;
        return $this;
    }
    
    /**
     * Gets document_start_page
     * @return string
     */
    public function getDocumentStartPage()
    {
        return $this->document_start_page;
    }
  
    /**
     * Sets document_start_page
     * @param string $document_start_page 
     * @return $this
     */
    public function setDocumentStartPage($document_start_page)
    {
        
        $this->document_start_page = $document_start_page;
        return $this;
    }
    
    /**
     * Gets document_end_page
     * @return string
     */
    public function getDocumentEndPage()
    {
        return $this->document_end_page;
    }
  
    /**
     * Sets document_end_page
     * @param string $document_end_page 
     * @return $this
     */
    public function setDocumentEndPage($document_end_page)
    {
        
        $this->document_end_page = $document_end_page;
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
