<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $business_name
 * @property string $email
 * @property string $password
 * @property string $fname
 * @property string $lname
 * @property string $phone_number
 * @property string $amount_needed
 * @property string $gross_annual_sales
 * @property string $years_in_business
 * @property string $is_sole_owner
 * @property string $percentage_share
 * @property string $does_lease_or_own
 * @property string $is_current_with_payments
 * @property string $has_federal_liens
 * @property string $is_on_payment_plan
 * @property string $has_current_balance
 * @property string $balance_from_what_company
 * @property string $balance_outstanding
 * @property string $best_time
 * @property string $needs
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('agent_id,business_name, email, password, fname, lname, phone_number,  gross_annual_sales, years_in_business, is_sole_owner, does_lease_or_own, has_federal_liens, has_current_balance', 'required'),
			array('agent_id,business_name, fname, lname, phone_number,  gross_annual_sales, years_in_business, is_sole_owner, does_lease_or_own, has_federal_liens, has_current_balance', 'required','on'=>'update'),
			array('business_name, email, password, fname, lname, phone_number, amount_needed, gross_annual_sales, years_in_business, balance_from_what_company, balance_outstanding, best_time', 'length', 'max'=>255),
			array('email', 'email'),
			array('email', 'unique'),
			array('is_sole_owner, does_lease_or_own, is_current_with_payments, has_federal_liens, is_on_payment_plan, has_current_balance', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id,agent_id, business_name, email, password, fname, lname, phone_number, amount_needed, gross_annual_sales, years_in_business, is_sole_owner, does_lease_or_own, is_current_with_payments, has_federal_liens, is_on_payment_plan, has_current_balance, balance_from_what_company, balance_outstanding, best_time, needs,funding_purpose,document_signed,percentage_share,document_link_sent_at', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'agent' => array(self::BELONGS_TO, 'Agents',array('agent_id' =>'id')),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'agent_id'=>'Agent',
			'business_name' => 'Business Name',
			'email' => 'Email',
			'password' => 'Password',
			'fname' => 'First Name',
			'lname' => 'Last Name',
			'phone_number' => 'Phone Number',
			'amount_needed' => 'Amount Needed',
			'gross_annual_sales' => 'Gross Annual Sales',
			'years_in_business' => 'Years in Business',
			'is_sole_owner' => 'Are you the sole owner of the business?',
			'percentage_share'=>'How much percent of the business do you own?',
			'does_lease_or_own' => 'Do you own your current business location?',
			'is_current_with_payments' => 'ARE YOU CURRENT WITH RENT PAYMENTS?',
			'has_federal_liens' => 'Do you have any federal or state tax liens?',
			'is_on_payment_plan' => 'Are you currently on a payment plan?',
			'has_current_balance' => 'Do you have a balance out with another funder',
			'balance_from_what_company' => 'FROM WHAT COMPANY(S)?',
			'balance_outstanding' => 'HOW MUCH CURRENTLY OUTSTANDING?',
			'best_time' => 'Best Time',
			'needs' => 'Needs',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('business_name',$this->business_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('phone_number',$this->phone_number,true);
		$criteria->compare('amount_needed',$this->amount_needed,true);
		$criteria->compare('gross_annual_sales',$this->gross_annual_sales,true);
		$criteria->compare('years_in_business',$this->years_in_business,true);
		$criteria->compare('is_sole_owner',$this->is_sole_owner,true);
		$criteria->compare('does_lease_or_own',$this->does_lease_or_own,true);
		$criteria->compare('is_current_with_payments',$this->is_current_with_payments,true);
		$criteria->compare('has_federal_liens',$this->has_federal_liens,true);
		$criteria->compare('is_on_payment_plan',$this->is_on_payment_plan,true);
		$criteria->compare('has_current_balance',$this->has_current_balance,true);
		$criteria->compare('balance_from_what_company',$this->balance_from_what_company,true);
		$criteria->compare('balance_outstanding',$this->balance_outstanding,true);
		$criteria->compare('best_time',$this->best_time,true);
		$criteria->compare('needs',$this->needs,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function beforeSave(){
		if($this->isNewRecord){
			$this->created = time();
			$this->password = md5($this->password);
		}
		$this->modified = time();
		return true;
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
