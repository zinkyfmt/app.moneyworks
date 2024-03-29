<?php
/**
 * Tabs
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
 * Tabs Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Tabs implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'sign_here_tabs' => '\DocuSign\eSign\Model\SignHere[]',
        'initial_here_tabs' => '\DocuSign\eSign\Model\InitialHere[]',
        'signer_attachment_tabs' => '\DocuSign\eSign\Model\SignerAttachment[]',
        'approve_tabs' => '\DocuSign\eSign\Model\Approve[]',
        'decline_tabs' => '\DocuSign\eSign\Model\Decline[]',
        'full_name_tabs' => '\DocuSign\eSign\Model\FullName[]',
        'date_signed_tabs' => '\DocuSign\eSign\Model\DateSigned[]',
        'envelope_id_tabs' => '\DocuSign\eSign\Model\EnvelopeId[]',
        'company_tabs' => '\DocuSign\eSign\Model\Company[]',
        'title_tabs' => '\DocuSign\eSign\Model\Title[]',
        'text_tabs' => '\DocuSign\eSign\Model\Text[]',
        'number_tabs' => '\DocuSign\eSign\Model\Number[]',
        'ssn_tabs' => '\DocuSign\eSign\Model\Ssn[]',
        'date_tabs' => '\DocuSign\eSign\Model\\DateTime[]',
        'zip_tabs' => '\DocuSign\eSign\Model\Zip[]',
        'email_tabs' => '\DocuSign\eSign\Model\Email[]',
        'note_tabs' => '\DocuSign\eSign\Model\Note[]',
        'checkbox_tabs' => '\DocuSign\eSign\Model\Checkbox[]',
        'radio_group_tabs' => '\DocuSign\eSign\Model\RadioGroup[]',
        'list_tabs' => '\DocuSign\eSign\Model\array[]',
        'first_name_tabs' => '\DocuSign\eSign\Model\FirstName[]',
        'last_name_tabs' => '\DocuSign\eSign\Model\LastName[]',
        'email_address_tabs' => '\DocuSign\eSign\Model\EmailAddress[]',
        'formula_tabs' => '\DocuSign\eSign\Model\FormulaTab[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'sign_here_tabs' => 'signHereTabs',
        'initial_here_tabs' => 'initialHereTabs',
        'signer_attachment_tabs' => 'signerAttachmentTabs',
        'approve_tabs' => 'approveTabs',
        'decline_tabs' => 'declineTabs',
        'full_name_tabs' => 'fullNameTabs',
        'date_signed_tabs' => 'dateSignedTabs',
        'envelope_id_tabs' => 'envelopeIdTabs',
        'company_tabs' => 'companyTabs',
        'title_tabs' => 'titleTabs',
        'text_tabs' => 'textTabs',
        'number_tabs' => 'numberTabs',
        'ssn_tabs' => 'ssnTabs',
        'date_tabs' => 'dateTabs',
        'zip_tabs' => 'zipTabs',
        'email_tabs' => 'emailTabs',
        'note_tabs' => 'noteTabs',
        'checkbox_tabs' => 'checkboxTabs',
        'radio_group_tabs' => 'radioGroupTabs',
        'list_tabs' => 'listTabs',
        'first_name_tabs' => 'firstNameTabs',
        'last_name_tabs' => 'lastNameTabs',
        'email_address_tabs' => 'emailAddressTabs',
        'formula_tabs' => 'formulaTabs'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'sign_here_tabs' => 'setSignHereTabs',
        'initial_here_tabs' => 'setInitialHereTabs',
        'signer_attachment_tabs' => 'setSignerAttachmentTabs',
        'approve_tabs' => 'setApproveTabs',
        'decline_tabs' => 'setDeclineTabs',
        'full_name_tabs' => 'setFullNameTabs',
        'date_signed_tabs' => 'setDateSignedTabs',
        'envelope_id_tabs' => 'setEnvelopeIdTabs',
        'company_tabs' => 'setCompanyTabs',
        'title_tabs' => 'setTitleTabs',
        'text_tabs' => 'setTextTabs',
        'number_tabs' => 'setNumberTabs',
        'ssn_tabs' => 'setSsnTabs',
        'date_tabs' => 'setDateTabs',
        'zip_tabs' => 'setZipTabs',
        'email_tabs' => 'setEmailTabs',
        'note_tabs' => 'setNoteTabs',
        'checkbox_tabs' => 'setCheckboxTabs',
        'radio_group_tabs' => 'setRadioGroupTabs',
        'list_tabs' => 'setListTabs',
        'first_name_tabs' => 'setFirstNameTabs',
        'last_name_tabs' => 'setLastNameTabs',
        'email_address_tabs' => 'setEmailAddressTabs',
        'formula_tabs' => 'setFormulaTabs'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'sign_here_tabs' => 'getSignHereTabs',
        'initial_here_tabs' => 'getInitialHereTabs',
        'signer_attachment_tabs' => 'getSignerAttachmentTabs',
        'approve_tabs' => 'getApproveTabs',
        'decline_tabs' => 'getDeclineTabs',
        'full_name_tabs' => 'getFullNameTabs',
        'date_signed_tabs' => 'getDateSignedTabs',
        'envelope_id_tabs' => 'getEnvelopeIdTabs',
        'company_tabs' => 'getCompanyTabs',
        'title_tabs' => 'getTitleTabs',
        'text_tabs' => 'getTextTabs',
        'number_tabs' => 'getNumberTabs',
        'ssn_tabs' => 'getSsnTabs',
        'date_tabs' => 'getDateTabs',
        'zip_tabs' => 'getZipTabs',
        'email_tabs' => 'getEmailTabs',
        'note_tabs' => 'getNoteTabs',
        'checkbox_tabs' => 'getCheckboxTabs',
        'radio_group_tabs' => 'getRadioGroupTabs',
        'list_tabs' => 'getListTabs',
        'first_name_tabs' => 'getFirstNameTabs',
        'last_name_tabs' => 'getLastNameTabs',
        'email_address_tabs' => 'getEmailAddressTabs',
        'formula_tabs' => 'getFormulaTabs'
    );
  
    
    /**
      * $sign_here_tabs A complex type the contains information about the tag that specifies where the recipient places their signature in the document. The \"optional\" parameter sets if the signature is required or optional.
      * @var \DocuSign\eSign\Model\SignHere[]
      */
    protected $sign_here_tabs;
    
    /**
      * $initial_here_tabs Specifies a tag location in the document at which a recipient will place their initials. The `optional` parameter specifies whether the initials are required or optional.
      * @var \DocuSign\eSign\Model\InitialHere[]
      */
    protected $initial_here_tabs;
    
    /**
      * $signer_attachment_tabs Specifies a tag on the document when you want the recipient to add supporting documents to an envelope.
      * @var \DocuSign\eSign\Model\SignerAttachment[]
      */
    protected $signer_attachment_tabs;
    
    /**
      * $approve_tabs Specifies a tag on the document where you want the recipient to approve documents in an envelope without placing a signature or initials on the document. If the recipient clicks the Approve tag during the signing process, the recipient is considered to have signed the document. No information is shown on the document for the approval, but it is recorded as a signature in the envelope history.
      * @var \DocuSign\eSign\Model\Approve[]
      */
    protected $approve_tabs;
    
    /**
      * $decline_tabs Specifies a tag on the document where you want to give the recipient the option of declining an envelope. If the recipient clicks the Decline tag during the signing process, the envelope is voided.
      * @var \DocuSign\eSign\Model\Decline[]
      */
    protected $decline_tabs;
    
    /**
      * $full_name_tabs Specifies a tag on the document where you want the recipient's name to appear.
      * @var \DocuSign\eSign\Model\FullName[]
      */
    protected $full_name_tabs;
    
    /**
      * $date_signed_tabs Specifies a tab on the document where the date the document was signed will automatically appear.
      * @var \DocuSign\eSign\Model\DateSigned[]
      */
    protected $date_signed_tabs;
    
    /**
      * $envelope_id_tabs Specifies a tag on the document where you want the envelope ID for to appear. Recipients cannot enter or change the information in this tab, it is for informational purposes only.
      * @var \DocuSign\eSign\Model\EnvelopeId[]
      */
    protected $envelope_id_tabs;
    
    /**
      * $company_tabs Specifies a tag on the document where you want the recipient's company name to appear.\n\nWhen getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
      * @var \DocuSign\eSign\Model\Company[]
      */
    protected $company_tabs;
    
    /**
      * $title_tabs Specifies a tag on the document where you want the recipient's title to appear.\n\nWhen getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
      * @var \DocuSign\eSign\Model\Title[]
      */
    protected $title_tabs;
    
    /**
      * $text_tabs Specifies a that that is an adaptable field that allows the recipient to enter different text information.\n\nWhen getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
      * @var \DocuSign\eSign\Model\Text[]
      */
    protected $text_tabs;
    
    /**
      * $number_tabs Specifies a tag on the document where you want the recipient to enter a number. It uses the same parameters as a Text tab, with the validation message and pattern set for number information.\n\nWhen getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
      * @var \DocuSign\eSign\Model\Number[]
      */
    protected $number_tabs;
    
    /**
      * $ssn_tabs Specifies a tag on the document where you want the recipient to enter a Social Security Number (SSN). A SSN can be typed with or without dashes. It uses the same parameters as a Text tab, with the validation message and pattern set for SSN information.\n\nWhen getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
      * @var \DocuSign\eSign\Model\Ssn[]
      */
    protected $ssn_tabs;
    
    /**
      * $date_tabs Specifies a tab on the document where you want the recipient to enter a date. Date tabs are single-line fields that allow date information to be entered in any format. The tooltip for this tab recommends entering the date as MM/DD/YYYY, but this is not enforced. The format entered by the signer is retained. \n\nIf you need a particular date format enforced, DocuSign recommends using a Text tab with a Validation Pattern and Validation Message to enforce the format.
      * @var \DocuSign\eSign\Model\\DateTime[]
      */
    protected $date_tabs;
    
    /**
      * $zip_tabs Specifies a tag on the document where you want the recipient to enter a ZIP code. The ZIP code can be a five numbers or the ZIP+4 format with nine numbers. The zip code can be typed with or without dashes. It uses the same parameters as a Text tab, with the validation message and pattern set for ZIP code information.\n\nWhen getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
      * @var \DocuSign\eSign\Model\Zip[]
      */
    protected $zip_tabs;
    
    /**
      * $email_tabs Specifies a tag on the document where you want the recipient to enter an email. Email tags are single-line fields that accept any characters. The system checks that a valid email format (i.e. xxx@yyy.zzz) is entered in the tag. It uses the same parameters as a Text tab, with the validation message and pattern set for email information.\n\nWhen getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
      * @var \DocuSign\eSign\Model\Email[]
      */
    protected $email_tabs;
    
    /**
      * $note_tabs Specifies a location on the document where you want to place additional information, in the form of a note, for a recipient.
      * @var \DocuSign\eSign\Model\Note[]
      */
    protected $note_tabs;
    
    /**
      * $checkbox_tabs Specifies a tag on the document in a location where the recipient can select an option.
      * @var \DocuSign\eSign\Model\Checkbox[]
      */
    protected $checkbox_tabs;
    
    /**
      * $radio_group_tabs Specifies a tag on the document in a location where the recipient can select one option from a group of options using a radio button. The radio buttons do not have to be on the same page in a document.
      * @var \DocuSign\eSign\Model\RadioGroup[]
      */
    protected $radio_group_tabs;
    
    /**
      * $list_tabs Specify this tag to give your recipient a list of options, presented as a drop-down list, from which they can select.
      * @var \DocuSign\eSign\Model\array[]
      */
    protected $list_tabs;
    
    /**
      * $first_name_tabs Specifies tag on a document where you want the recipient's first name to appear. This tag takes the recipient's name, as entered in the recipient information, splits it into sections based on spaces and uses the first section as the first name.
      * @var \DocuSign\eSign\Model\FirstName[]
      */
    protected $first_name_tabs;
    
    /**
      * $last_name_tabs Specifies a tag on a document where you want the recipient’s last name to appear. This tag takes the recipient’s name, as entered in the recipient information, splits it into sections based on spaces and uses the last section as the last name.
      * @var \DocuSign\eSign\Model\LastName[]
      */
    protected $last_name_tabs;
    
    /**
      * $email_address_tabs Specifies a location on the document where you want where you want the recipient’s email, as entered in the recipient information, to display.
      * @var \DocuSign\eSign\Model\EmailAddress[]
      */
    protected $email_address_tabs;
    
    /**
      * $formula_tabs Specifies a tag that is used to add a calculated field to a document. Envelope recipients cannot directly enter information into the tag; the formula tab calculates and displays a new value when changes are made to the reference tag values. The reference tag information and calculation operations are entered in the \"formula\" element. See the [ML:Using the Calculated Fields Feature] quick start guide or [ML:DocuSign Service User Guide] for more information about formulas.
      * @var \DocuSign\eSign\Model\FormulaTab[]
      */
    protected $formula_tabs;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->sign_here_tabs = $data["sign_here_tabs"];
            $this->initial_here_tabs = $data["initial_here_tabs"];
            $this->signer_attachment_tabs = $data["signer_attachment_tabs"];
            $this->approve_tabs = $data["approve_tabs"];
            $this->decline_tabs = $data["decline_tabs"];
            $this->full_name_tabs = $data["full_name_tabs"];
            $this->date_signed_tabs = $data["date_signed_tabs"];
            $this->envelope_id_tabs = $data["envelope_id_tabs"];
            $this->company_tabs = $data["company_tabs"];
            $this->title_tabs = $data["title_tabs"];
            $this->text_tabs = $data["text_tabs"];
            $this->number_tabs = $data["number_tabs"];
            $this->ssn_tabs = $data["ssn_tabs"];
            $this->date_tabs = $data["date_tabs"];
            $this->zip_tabs = $data["zip_tabs"];
            $this->email_tabs = $data["email_tabs"];
            $this->note_tabs = $data["note_tabs"];
            $this->checkbox_tabs = $data["checkbox_tabs"];
            $this->radio_group_tabs = $data["radio_group_tabs"];
            $this->list_tabs = $data["list_tabs"];
            $this->first_name_tabs = $data["first_name_tabs"];
            $this->last_name_tabs = $data["last_name_tabs"];
            $this->email_address_tabs = $data["email_address_tabs"];
            $this->formula_tabs = $data["formula_tabs"];
        }
    }
    
    /**
     * Gets sign_here_tabs
     * @return \DocuSign\eSign\Model\SignHere[]
     */
    public function getSignHereTabs()
    {
        return $this->sign_here_tabs;
    }
  
    /**
     * Sets sign_here_tabs
     * @param \DocuSign\eSign\Model\SignHere[] $sign_here_tabs A complex type the contains information about the tag that specifies where the recipient places their signature in the document. The \"optional\" parameter sets if the signature is required or optional.
     * @return $this
     */
    public function setSignHereTabs($sign_here_tabs)
    {
        
        $this->sign_here_tabs = $sign_here_tabs;
        return $this;
    }
    
    /**
     * Gets initial_here_tabs
     * @return \DocuSign\eSign\Model\InitialHere[]
     */
    public function getInitialHereTabs()
    {
        return $this->initial_here_tabs;
    }
  
    /**
     * Sets initial_here_tabs
     * @param \DocuSign\eSign\Model\InitialHere[] $initial_here_tabs Specifies a tag location in the document at which a recipient will place their initials. The `optional` parameter specifies whether the initials are required or optional.
     * @return $this
     */
    public function setInitialHereTabs($initial_here_tabs)
    {
        
        $this->initial_here_tabs = $initial_here_tabs;
        return $this;
    }
    
    /**
     * Gets signer_attachment_tabs
     * @return \DocuSign\eSign\Model\SignerAttachment[]
     */
    public function getSignerAttachmentTabs()
    {
        return $this->signer_attachment_tabs;
    }
  
    /**
     * Sets signer_attachment_tabs
     * @param \DocuSign\eSign\Model\SignerAttachment[] $signer_attachment_tabs Specifies a tag on the document when you want the recipient to add supporting documents to an envelope.
     * @return $this
     */
    public function setSignerAttachmentTabs($signer_attachment_tabs)
    {
        
        $this->signer_attachment_tabs = $signer_attachment_tabs;
        return $this;
    }
    
    /**
     * Gets approve_tabs
     * @return \DocuSign\eSign\Model\Approve[]
     */
    public function getApproveTabs()
    {
        return $this->approve_tabs;
    }
  
    /**
     * Sets approve_tabs
     * @param \DocuSign\eSign\Model\Approve[] $approve_tabs Specifies a tag on the document where you want the recipient to approve documents in an envelope without placing a signature or initials on the document. If the recipient clicks the Approve tag during the signing process, the recipient is considered to have signed the document. No information is shown on the document for the approval, but it is recorded as a signature in the envelope history.
     * @return $this
     */
    public function setApproveTabs($approve_tabs)
    {
        
        $this->approve_tabs = $approve_tabs;
        return $this;
    }
    
    /**
     * Gets decline_tabs
     * @return \DocuSign\eSign\Model\Decline[]
     */
    public function getDeclineTabs()
    {
        return $this->decline_tabs;
    }
  
    /**
     * Sets decline_tabs
     * @param \DocuSign\eSign\Model\Decline[] $decline_tabs Specifies a tag on the document where you want to give the recipient the option of declining an envelope. If the recipient clicks the Decline tag during the signing process, the envelope is voided.
     * @return $this
     */
    public function setDeclineTabs($decline_tabs)
    {
        
        $this->decline_tabs = $decline_tabs;
        return $this;
    }
    
    /**
     * Gets full_name_tabs
     * @return \DocuSign\eSign\Model\FullName[]
     */
    public function getFullNameTabs()
    {
        return $this->full_name_tabs;
    }
  
    /**
     * Sets full_name_tabs
     * @param \DocuSign\eSign\Model\FullName[] $full_name_tabs Specifies a tag on the document where you want the recipient's name to appear.
     * @return $this
     */
    public function setFullNameTabs($full_name_tabs)
    {
        
        $this->full_name_tabs = $full_name_tabs;
        return $this;
    }
    
    /**
     * Gets date_signed_tabs
     * @return \DocuSign\eSign\Model\DateSigned[]
     */
    public function getDateSignedTabs()
    {
        return $this->date_signed_tabs;
    }
  
    /**
     * Sets date_signed_tabs
     * @param \DocuSign\eSign\Model\DateSigned[] $date_signed_tabs Specifies a tab on the document where the date the document was signed will automatically appear.
     * @return $this
     */
    public function setDateSignedTabs($date_signed_tabs)
    {
        
        $this->date_signed_tabs = $date_signed_tabs;
        return $this;
    }
    
    /**
     * Gets envelope_id_tabs
     * @return \DocuSign\eSign\Model\EnvelopeId[]
     */
    public function getEnvelopeIdTabs()
    {
        return $this->envelope_id_tabs;
    }
  
    /**
     * Sets envelope_id_tabs
     * @param \DocuSign\eSign\Model\EnvelopeId[] $envelope_id_tabs Specifies a tag on the document where you want the envelope ID for to appear. Recipients cannot enter or change the information in this tab, it is for informational purposes only.
     * @return $this
     */
    public function setEnvelopeIdTabs($envelope_id_tabs)
    {
        
        $this->envelope_id_tabs = $envelope_id_tabs;
        return $this;
    }
    
    /**
     * Gets company_tabs
     * @return \DocuSign\eSign\Model\Company[]
     */
    public function getCompanyTabs()
    {
        return $this->company_tabs;
    }
  
    /**
     * Sets company_tabs
     * @param \DocuSign\eSign\Model\Company[] $company_tabs Specifies a tag on the document where you want the recipient's company name to appear.\n\nWhen getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     * @return $this
     */
    public function setCompanyTabs($company_tabs)
    {
        
        $this->company_tabs = $company_tabs;
        return $this;
    }
    
    /**
     * Gets title_tabs
     * @return \DocuSign\eSign\Model\Title[]
     */
    public function getTitleTabs()
    {
        return $this->title_tabs;
    }
  
    /**
     * Sets title_tabs
     * @param \DocuSign\eSign\Model\Title[] $title_tabs Specifies a tag on the document where you want the recipient's title to appear.\n\nWhen getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     * @return $this
     */
    public function setTitleTabs($title_tabs)
    {
        
        $this->title_tabs = $title_tabs;
        return $this;
    }
    
    /**
     * Gets text_tabs
     * @return \DocuSign\eSign\Model\Text[]
     */
    public function getTextTabs()
    {
        return $this->text_tabs;
    }
  
    /**
     * Sets text_tabs
     * @param \DocuSign\eSign\Model\Text[] $text_tabs Specifies a that that is an adaptable field that allows the recipient to enter different text information.\n\nWhen getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     * @return $this
     */
    public function setTextTabs($text_tabs)
    {
        
        $this->text_tabs = $text_tabs;
        return $this;
    }
    
    /**
     * Gets number_tabs
     * @return \DocuSign\eSign\Model\Number[]
     */
    public function getNumberTabs()
    {
        return $this->number_tabs;
    }
  
    /**
     * Sets number_tabs
     * @param \DocuSign\eSign\Model\Number[] $number_tabs Specifies a tag on the document where you want the recipient to enter a number. It uses the same parameters as a Text tab, with the validation message and pattern set for number information.\n\nWhen getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     * @return $this
     */
    public function setNumberTabs($number_tabs)
    {
        
        $this->number_tabs = $number_tabs;
        return $this;
    }
    
    /**
     * Gets ssn_tabs
     * @return \DocuSign\eSign\Model\Ssn[]
     */
    public function getSsnTabs()
    {
        return $this->ssn_tabs;
    }
  
    /**
     * Sets ssn_tabs
     * @param \DocuSign\eSign\Model\Ssn[] $ssn_tabs Specifies a tag on the document where you want the recipient to enter a Social Security Number (SSN). A SSN can be typed with or without dashes. It uses the same parameters as a Text tab, with the validation message and pattern set for SSN information.\n\nWhen getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     * @return $this
     */
    public function setSsnTabs($ssn_tabs)
    {
        
        $this->ssn_tabs = $ssn_tabs;
        return $this;
    }
    
    /**
     * Gets date_tabs
     * @return \DocuSign\eSign\Model\\DateTime[]
     */
    public function getDateTabs()
    {
        return $this->date_tabs;
    }
  
    /**
     * Sets date_tabs
     * @param \DocuSign\eSign\Model\\DateTime[] $date_tabs Specifies a tab on the document where you want the recipient to enter a date. Date tabs are single-line fields that allow date information to be entered in any format. The tooltip for this tab recommends entering the date as MM/DD/YYYY, but this is not enforced. The format entered by the signer is retained. \n\nIf you need a particular date format enforced, DocuSign recommends using a Text tab with a Validation Pattern and Validation Message to enforce the format.
     * @return $this
     */
    public function setDateTabs($date_tabs)
    {
        
        $this->date_tabs = $date_tabs;
        return $this;
    }
    
    /**
     * Gets zip_tabs
     * @return \DocuSign\eSign\Model\Zip[]
     */
    public function getZipTabs()
    {
        return $this->zip_tabs;
    }
  
    /**
     * Sets zip_tabs
     * @param \DocuSign\eSign\Model\Zip[] $zip_tabs Specifies a tag on the document where you want the recipient to enter a ZIP code. The ZIP code can be a five numbers or the ZIP+4 format with nine numbers. The zip code can be typed with or without dashes. It uses the same parameters as a Text tab, with the validation message and pattern set for ZIP code information.\n\nWhen getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     * @return $this
     */
    public function setZipTabs($zip_tabs)
    {
        
        $this->zip_tabs = $zip_tabs;
        return $this;
    }
    
    /**
     * Gets email_tabs
     * @return \DocuSign\eSign\Model\Email[]
     */
    public function getEmailTabs()
    {
        return $this->email_tabs;
    }
  
    /**
     * Sets email_tabs
     * @param \DocuSign\eSign\Model\Email[] $email_tabs Specifies a tag on the document where you want the recipient to enter an email. Email tags are single-line fields that accept any characters. The system checks that a valid email format (i.e. xxx@yyy.zzz) is entered in the tag. It uses the same parameters as a Text tab, with the validation message and pattern set for email information.\n\nWhen getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     * @return $this
     */
    public function setEmailTabs($email_tabs)
    {
        
        $this->email_tabs = $email_tabs;
        return $this;
    }
    
    /**
     * Gets note_tabs
     * @return \DocuSign\eSign\Model\Note[]
     */
    public function getNoteTabs()
    {
        return $this->note_tabs;
    }
  
    /**
     * Sets note_tabs
     * @param \DocuSign\eSign\Model\Note[] $note_tabs Specifies a location on the document where you want to place additional information, in the form of a note, for a recipient.
     * @return $this
     */
    public function setNoteTabs($note_tabs)
    {
        
        $this->note_tabs = $note_tabs;
        return $this;
    }
    
    /**
     * Gets checkbox_tabs
     * @return \DocuSign\eSign\Model\Checkbox[]
     */
    public function getCheckboxTabs()
    {
        return $this->checkbox_tabs;
    }
  
    /**
     * Sets checkbox_tabs
     * @param \DocuSign\eSign\Model\Checkbox[] $checkbox_tabs Specifies a tag on the document in a location where the recipient can select an option.
     * @return $this
     */
    public function setCheckboxTabs($checkbox_tabs)
    {
        
        $this->checkbox_tabs = $checkbox_tabs;
        return $this;
    }
    
    /**
     * Gets radio_group_tabs
     * @return \DocuSign\eSign\Model\RadioGroup[]
     */
    public function getRadioGroupTabs()
    {
        return $this->radio_group_tabs;
    }
  
    /**
     * Sets radio_group_tabs
     * @param \DocuSign\eSign\Model\RadioGroup[] $radio_group_tabs Specifies a tag on the document in a location where the recipient can select one option from a group of options using a radio button. The radio buttons do not have to be on the same page in a document.
     * @return $this
     */
    public function setRadioGroupTabs($radio_group_tabs)
    {
        
        $this->radio_group_tabs = $radio_group_tabs;
        return $this;
    }
    
    /**
     * Gets list_tabs
     * @return \DocuSign\eSign\Model\array[]
     */
    public function getListTabs()
    {
        return $this->list_tabs;
    }
  
    /**
     * Sets list_tabs
     * @param \DocuSign\eSign\Model\array[] $list_tabs Specify this tag to give your recipient a list of options, presented as a drop-down list, from which they can select.
     * @return $this
     */
    public function setListTabs($list_tabs)
    {
        
        $this->list_tabs = $list_tabs;
        return $this;
    }
    
    /**
     * Gets first_name_tabs
     * @return \DocuSign\eSign\Model\FirstName[]
     */
    public function getFirstNameTabs()
    {
        return $this->first_name_tabs;
    }
  
    /**
     * Sets first_name_tabs
     * @param \DocuSign\eSign\Model\FirstName[] $first_name_tabs Specifies tag on a document where you want the recipient's first name to appear. This tag takes the recipient's name, as entered in the recipient information, splits it into sections based on spaces and uses the first section as the first name.
     * @return $this
     */
    public function setFirstNameTabs($first_name_tabs)
    {
        
        $this->first_name_tabs = $first_name_tabs;
        return $this;
    }
    
    /**
     * Gets last_name_tabs
     * @return \DocuSign\eSign\Model\LastName[]
     */
    public function getLastNameTabs()
    {
        return $this->last_name_tabs;
    }
  
    /**
     * Sets last_name_tabs
     * @param \DocuSign\eSign\Model\LastName[] $last_name_tabs Specifies a tag on a document where you want the recipient’s last name to appear. This tag takes the recipient’s name, as entered in the recipient information, splits it into sections based on spaces and uses the last section as the last name.
     * @return $this
     */
    public function setLastNameTabs($last_name_tabs)
    {
        
        $this->last_name_tabs = $last_name_tabs;
        return $this;
    }
    
    /**
     * Gets email_address_tabs
     * @return \DocuSign\eSign\Model\EmailAddress[]
     */
    public function getEmailAddressTabs()
    {
        return $this->email_address_tabs;
    }
  
    /**
     * Sets email_address_tabs
     * @param \DocuSign\eSign\Model\EmailAddress[] $email_address_tabs Specifies a location on the document where you want where you want the recipient’s email, as entered in the recipient information, to display.
     * @return $this
     */
    public function setEmailAddressTabs($email_address_tabs)
    {
        
        $this->email_address_tabs = $email_address_tabs;
        return $this;
    }
    
    /**
     * Gets formula_tabs
     * @return \DocuSign\eSign\Model\FormulaTab[]
     */
    public function getFormulaTabs()
    {
        return $this->formula_tabs;
    }
  
    /**
     * Sets formula_tabs
     * @param \DocuSign\eSign\Model\FormulaTab[] $formula_tabs Specifies a tag that is used to add a calculated field to a document. Envelope recipients cannot directly enter information into the tag; the formula tab calculates and displays a new value when changes are made to the reference tag values. The reference tag information and calculation operations are entered in the \"formula\" element. See the [ML:Using the Calculated Fields Feature] quick start guide or [ML:DocuSign Service User Guide] for more information about formulas.
     * @return $this
     */
    public function setFormulaTabs($formula_tabs)
    {
        
        $this->formula_tabs = $formula_tabs;
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
