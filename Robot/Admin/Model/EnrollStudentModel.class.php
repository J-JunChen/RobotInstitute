<?php
namespace Admin\Model;
use Think\Model\RelationModel;

/**
* 
*/
class EnrollStudentModel extends RelationModel{

	protected $_link = array(
		
		'EnrollStudentInformation' =>array(
			'mapping_type'=>self::HAS_MANY,
			'foreign_key'=>'catalog_id',
			'mapping_fields' => 'catalog_id' ,
		),

		'EnrollStudentStandard' =>array(
			'mapping_type'=>self::HAS_MANY,
			'foreign_key'=>'catalog_id',
			'mapping_fields' => 'catalog_id' ,
		),

	);

}

