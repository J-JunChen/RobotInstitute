<?php
namespace Admin\Model;
use Think\Model\RelationModel;


class LoginModel extends RelationModel{

	protected $_link = array(

		'UserType' =>array(
			'mapping_type'=>self::BELONGS_TO ,
			'foreign_key'=>'type_id',
			'mapping_fields' => 'type' ,
		),

	);
	
}