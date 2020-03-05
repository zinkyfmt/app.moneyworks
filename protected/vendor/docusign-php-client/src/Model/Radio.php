<?php
/**
 * Radio
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
 * Radio Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Radio implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'page_number' => 'string',
        'x_position' => 'string',
        'y_position' => 'string',
        'anchor_string' => 'string',
        'anchor_x_offset' => 'string',
        'anchor_y_offset' => 'string',
        'anchor_units' => 'string',
        'anchor_ignore_if_not_present' => 'string',
        'anchor_case_sensitive' => 'string',
        'anchor_match_whole_word' => 'string',
        'anchor_horizontal_alignment' => 'string',
        'value' => 'string',
        'selected' => 'string',
        'tab_id' => 'string',
        'required' => 'string',
        'locked' => 'string',
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'page_number' => 'pageNumber',
        'x_position' => 'xPosition',
        'y_position' => 'yPosition',
        'anchor_string' => 'anchorString',
        'anchor_x_offset' => 'anchorXOffset',
        'anchor_y_offset' => 'anchorYOffset',
        'anchor_units' => 'anchorUnits',
        'anchor_ignore_if_not_present' => 'anchorIgnoreIfNotPresent',
        'anchor_case_sensitive' => 'anchorCaseSensitive',
        'anchor_match_whole_word' => 'anchorMatchWholeWord',
        'anchor_horizontal_alignment' => 'anchorHorizontalAlignment',
        'value' => 'value',
        'selected' => 'selected',
        'tab_id' => 'tabId',
        'required' => 'required',
        'locked' => 'locked',
        'error_details' => 'errorDetails'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'page_number' => 'setPageNumber',
        'x_position' => 'setXPosition',
        'y_position' => 'setYPosition',
        'anchor_string' => 'setAnchorString',
        'anchor_x_offset' => 'setAnchorXOffset',
        'anchor_y_offset' => 'setAnchorYOffset',
        'anchor_units' => 'setAnchorUnits',
        'anchor_ignore_if_not_present' => 'setAnchorIgnoreIfNotPresent',
        'anchor_case_sensitive' => 'setAnchorCaseSensitive',
        'anchor_match_whole_word' => 'setAnchorMatchWholeWord',
        'anchor_horizontal_alignment' => 'setAnchorHorizontalAlignment',
        'value' => 'setValue',
        'selected' => 'setSelected',
        'tab_id' => 'setTabId',
        'required' => 'setRequired',
        'locked' => 'setLocked',
        'error_details' => 'setErrorDetails'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'page_number' => 'getPageNumber',
        'x_position' => 'getXPosition',
        'y_position' => 'getYPosition',
        'anchor_string' => 'getAnchorString',
        'anchor_x_offset' => 'getAnchorXOffset',
        'anchor_y_offset' => 'getAnchorYOffset',
        'anchor_units' => 'getAnchorUnits',
        'anchor_ignore_if_not_present' => 'getAnchorIgnoreIfNotPresent',
        'anchor_case_sensitive' => 'getAnchorCaseSensitive',
        'anchor_match_whole_word' => 'getAnchorMatchWholeWord',
        'anchor_horizontal_alignment' => 'getAnchorHorizontalAlignment',
        'value' => 'getValue',
        'selected' => 'getSelected',
        'tab_id' => 'getTabId',
        'required' => 'getRequired',
        'locked' => 'getLocked',
        'error_details' => 'getErrorDetails'
    );
  
    
    /**
      * $page_number Specifies the page number on which the tab is located.
      * @var string
      */
    protected $page_number;
    
    /**
      * $x_position This indicates the horizontal offset of the object on the page. DocuSign uses 72 DPI when determining position.
      * @var string
      */
    protected $x_position;
    
    /**
      * $y_position This indicates the vertical offset of the object on the page. DocuSign uses 72 DPI when determining position.
      * @var string
      */
    protected $y_position;
    
    /**
      * $anchor_string Anchor text information for a radio button.
      * @var string
      */
    protected $anchor_string;
    
    /**
      * $anchor_x_offset Specifies the X axis location of the tab, in achorUnits, relative to the anchorString.
      * @var string
      */
    protected $anchor_x_offset;
    
    /**
      * $anchor_y_offset Specifies the Y axis location of the tab, in achorUnits, relative to the anchorString.
      * @var string
      */
    protected $anchor_y_offset;
    
    /**
      * $anchor_units Specifies units of the X and Y offset. Units could be pixels, millimeters, centimeters, or inches.
      * @var string
      */
    protected $anchor_units;
    
    /**
      * $anchor_ignore_if_not_present When set to **true**, this tab is ignored if anchorString is not found in the document.
      * @var string
      */
    protected $anchor_ignore_if_not_present;
    
    /**
      * $anchor_case_sensitive When set to **true**, the anchor string does not consider case when matching strings in the document. The default value is **true**.
      * @var string
      */
    protected $anchor_case_sensitive;
    
    /**
      * $anchor_match_whole_word When set to **true**, the anchor string in this tab matches whole words only (strings embedded in other strings are ignored.) The default value is **true**.
      * @var string
      */
    protected $anchor_match_whole_word;
    
    /**
      * $anchor_horizontal_alignment Specifies the alignment of anchor tabs with anchor strings. Possible values are **left** or **right**. The default value is **left**.
      * @var string
      */
    protected $anchor_horizontal_alignment;
    
    /**
      * $value Specifies the value of the tab.
      * @var string
      */
    protected $value;
    
    /**
      * $selected When set to **true**, the radio button is selected.
      * @var string
      */
    protected $selected;
    
    /**
      * $tab_id The unique identifier for the tab. The tabid can be retrieved with the [ML:GET call].
      * @var string
      */
    protected $tab_id;
    
    /**
      * $required When set to **true**, the signer is required to fill out this tab
      * @var string
      */
    protected $required;
    
    /**
      * $locked When set to **true**, the signer cannot change the data of the custom tab.
      * @var string
      */
    protected $locked;
    
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
            $this->page_number = $data["page_number"];
            $this->x_position = $data["x_position"];
            $this->y_position = $data["y_position"];
            $this->anchor_string = $data["anchor_string"];
            $this->anchor_x_offset = $data["anchor_x_offset"];
            $this->anchor_y_offset = $data["anchor_y_offset"];
            $this->anchor_units = $data["anchor_units"];
            $this->anchor_ignore_if_not_present = $data["anchor_ignore_if_not_present"];
            $this->anchor_case_sensitive = $data["anchor_case_sensitive"];
            $this->anchor_match_whole_word = $data["anchor_match_whole_word"];
            $this->anchor_horizontal_alignment = $data["anchor_horizontal_alignment"];
            $this->value = $data["value"];
            $this->selected = $data["selected"];
            $this->tab_id = $data["tab_id"];
            $this->required = $data["required"];
            $this->locked = $data["locked"];
            $this->error_details = $data["error_details"];
        }
    }
    
    /**
     * Gets page_number
     * @return string
     */
    public function getPageNumber()
    {
        return $this->page_number;
    }
  
    /**
     * Sets page_number
     * @param string $page_number Specifies the page number on which the tab is located.
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        
        $this->page_number = $page_number;
        return $this;
    }
    
    /**
     * Gets x_position
     * @return string
     */
    public function getXPosition()
    {
        return $this->x_position;
    }
  
    /**
     * Sets x_position
     * @param string $x_position This indicates the horizontal offset of the object on the page. DocuSign uses 72 DPI when determining position.
     * @return $this
     */
    public function setXPosition($x_position)
    {
        
        $this->x_position = $x_position;
        return $this;
    }
    
    /**
     * Gets y_position
     * @return string
     */
    public function getYPosition()
    {
        return $this->y_position;
    }
  
    /**
     * Sets y_position
     * @param string $y_position This indicates the vertical offset of the object on the page. DocuSign uses 72 DPI when determining position.
     * @return $this
     */
    public function setYPosition($y_position)
    {
        
        $this->y_position = $y_position;
        return $this;
    }
    
    /**
     * Gets anchor_string
     * @return string
     */
    public function getAnchorString()
    {
        return $this->anchor_string;
    }
  
    /**
     * Sets anchor_string
     * @param string $anchor_string Anchor text information for a radio button.
     * @return $this
     */
    public function setAnchorString($anchor_string)
    {
        
        $this->anchor_string = $anchor_string;
        return $this;
    }
    
    /**
     * Gets anchor_x_offset
     * @return string
     */
    public function getAnchorXOffset()
    {
        return $this->anchor_x_offset;
    }
  
    /**
     * Sets anchor_x_offset
     * @param string $anchor_x_offset Specifies the X axis location of the tab, in achorUnits, relative to the anchorString.
     * @return $this
     */
    public function setAnchorXOffset($anchor_x_offset)
    {
        
        $this->anchor_x_offset = $anchor_x_offset;
        return $this;
    }
    
    /**
     * Gets anchor_y_offset
     * @return string
     */
    public function getAnchorYOffset()
    {
        return $this->anchor_y_offset;
    }
  
    /**
     * Sets anchor_y_offset
     * @param string $anchor_y_offset Specifies the Y axis location of the tab, in achorUnits, relative to the anchorString.
     * @return $this
     */
    public function setAnchorYOffset($anchor_y_offset)
    {
        
        $this->anchor_y_offset = $anchor_y_offset;
        return $this;
    }
    
    /**
     * Gets anchor_units
     * @return string
     */
    public function getAnchorUnits()
    {
        return $this->anchor_units;
    }
  
    /**
     * Sets anchor_units
     * @param string $anchor_units Specifies units of the X and Y offset. Units could be pixels, millimeters, centimeters, or inches.
     * @return $this
     */
    public function setAnchorUnits($anchor_units)
    {
        
        $this->anchor_units = $anchor_units;
        return $this;
    }
    
    /**
     * Gets anchor_ignore_if_not_present
     * @return string
     */
    public function getAnchorIgnoreIfNotPresent()
    {
        return $this->anchor_ignore_if_not_present;
    }
  
    /**
     * Sets anchor_ignore_if_not_present
     * @param string $anchor_ignore_if_not_present When set to **true**, this tab is ignored if anchorString is not found in the document.
     * @return $this
     */
    public function setAnchorIgnoreIfNotPresent($anchor_ignore_if_not_present)
    {
        
        $this->anchor_ignore_if_not_present = $anchor_ignore_if_not_present;
        return $this;
    }
    
    /**
     * Gets anchor_case_sensitive
     * @return string
     */
    public function getAnchorCaseSensitive()
    {
        return $this->anchor_case_sensitive;
    }
  
    /**
     * Sets anchor_case_sensitive
     * @param string $anchor_case_sensitive When set to **true**, the anchor string does not consider case when matching strings in the document. The default value is **true**.
     * @return $this
     */
    public function setAnchorCaseSensitive($anchor_case_sensitive)
    {
        
        $this->anchor_case_sensitive = $anchor_case_sensitive;
        return $this;
    }
    
    /**
     * Gets anchor_match_whole_word
     * @return string
     */
    public function getAnchorMatchWholeWord()
    {
        return $this->anchor_match_whole_word;
    }
  
    /**
     * Sets anchor_match_whole_word
     * @param string $anchor_match_whole_word When set to **true**, the anchor string in this tab matches whole words only (strings embedded in other strings are ignored.) The default value is **true**.
     * @return $this
     */
    public function setAnchorMatchWholeWord($anchor_match_whole_word)
    {
        
        $this->anchor_match_whole_word = $anchor_match_whole_word;
        return $this;
    }
    
    /**
     * Gets anchor_horizontal_alignment
     * @return string
     */
    public function getAnchorHorizontalAlignment()
    {
        return $this->anchor_horizontal_alignment;
    }
  
    /**
     * Sets anchor_horizontal_alignment
     * @param string $anchor_horizontal_alignment Specifies the alignment of anchor tabs with anchor strings. Possible values are **left** or **right**. The default value is **left**.
     * @return $this
     */
    public function setAnchorHorizontalAlignment($anchor_horizontal_alignment)
    {
        
        $this->anchor_horizontal_alignment = $anchor_horizontal_alignment;
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
     * @param string $value Specifies the value of the tab.
     * @return $this
     */
    public function setValue($value)
    {
        
        $this->value = $value;
        return $this;
    }
    
    /**
     * Gets selected
     * @return string
     */
    public function getSelected()
    {
        return $this->selected;
    }
  
    /**
     * Sets selected
     * @param string $selected When set to **true**, the radio button is selected.
     * @return $this
     */
    public function setSelected($selected)
    {
        
        $this->selected = $selected;
        return $this;
    }
    
    /**
     * Gets tab_id
     * @return string
     */
    public function getTabId()
    {
        return $this->tab_id;
    }
  
    /**
     * Sets tab_id
     * @param string $tab_id The unique identifier for the tab. The tabid can be retrieved with the [ML:GET call].
     * @return $this
     */
    public function setTabId($tab_id)
    {
        
        $this->tab_id = $tab_id;
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
     * Gets locked
     * @return string
     */
    public function getLocked()
    {
        return $this->locked;
    }
  
    /**
     * Sets locked
     * @param string $locked When set to **true**, the signer cannot change the data of the custom tab.
     * @return $this
     */
    public function setLocked($locked)
    {
        
        $this->locked = $locked;
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
