<?php

/**
 * This is the model class for table "AuthItem".
 *
 * The followings are the available columns in table 'AuthItem':
 * @property integer $id
 * @property string $name
 * @property string $username
 * @property string $password
 */
class AuthItem extends CActiveRecord
{
	public $parent;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'AuthItem';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name,description', 'required'),
			array('parent,bizrule,data','safe')
		);
	}

	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(

		);
	}


	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'name' => 'Name',
			'type' => 'Type',
			'description' => 'Description',
       

		);
	}

	public function getRoleslist(){
            
			$auth = new AuthItem();
			$roles= Yii::app()->authManager->getRoles();
			$roledata=array();
			foreach($roles as $key=>$value){
				if( $key=='superadmin'){
					//echo $key; 
					$roledata[]=array('name'=>$key,'name'=>$key,'group'=>'');

					$childroles= Yii::app()->authManager->getItemChildren($key);
					
					foreach($childroles as $keyy=>$valuee){
					//echo '<pre>';	print_r($valuee);die;
						$roledata[]=array('name'=>$keyy,'name'=>$keyy,'group'=>$key);
					}
				}
			}
			//die;
			//$roledata=($auth->findAll('type= 2 AND name !="admin"'));
            return CHtml::listData($roledata, 'name', 'name','group');
        }
        
	
	
}
