<?php

/**
 * This is the model class for table "AuthItemChild".
 *
 * The followings are the available columns in table 'AuthItemChild':
 * @property string $parent
 * @property string $child
 *
 * The followings are the available model relations:
 * @property AuthItem $parent0
 * @property AuthItem $child0
 */
class AuthItemChild extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AuthItemChild the static model class
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
		return 'AuthItemChild';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parent, child', 'required'),
			array('parent, child', 'length', 'max'=>64),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('parent, child', 'safe', 'on'=>'search'),
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
			'parent0' => array(self::BELONGS_TO, 'AuthItem', 'parent'),
			'child0' => array(self::BELONGS_TO, 'AuthItem', 'child'),
			'childRoles' => array(self::HAS_MANY, 'AuthItemChild', 'parent'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'parent' => 'Parent',
			'child' => 'Child',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
		$this->attributes=array_map('trim',$this->attributes);
		$criteria->compare('parent',$this->parent,true);
		$criteria->compare('child',$this->child,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
		/**
         * function name getTreedata
         * uses this function use for display tree of roles 
         * It use other function to tree items
         * It returns tree data in array form with children hierarchy
         * */
		public function getTreedata(){
          	$result = array();
			$result = self::getTreeItemsRecursive();
			return $result;
		}
		 /**
         * function name getTreeItemsRecursive
         * uses this function use for display tree of roles 
         * It use getsubmenuItems function to get items
         **/
        public static function getTreeItemsRecursive()
        {
			$result = array();
			$models =AuthItem::model()->findAll('type=2');
			
			if(!empty($models))
			{
				foreach($models as $menu)
				{
					$menus = self::model()->find('t.parent="'.$menu->name.'"'  );
					if(isset($menus)){
						$childexsist=self::model()->find('t.child="'.$menu->name.'"' );
						if(!$childexsist){
							$result[] = $menus->getsubmenuItems($menu->name,'');
						}
					}
				}
				
			}
			return $result;
                
        }
		 /**
		 * function name getsubmenuItems
		 * use this function to get child items 
		 **/
        public function getsubmenuItems($parent,$child)
        {
			if($child==''){
				$name=$parent;
			}else{
				$name=$child;
			}
			$result = array(
				'text' =>$name
			);
			$childRoles = self::model()->findAll('t.parent="'.$name.'"'  );
			if(isset($childRoles))
			{
				$childrens = array();
				foreach($childRoles as $cm)
				{
					$childrens[] = $cm->getsubmenuItems($cm->parent,$cm->child);
				}
				if(!empty($childrens))
				{
						$result['children'] = $childrens;
				}
			}			
			return $result;
        }
        
        
     
        
}
