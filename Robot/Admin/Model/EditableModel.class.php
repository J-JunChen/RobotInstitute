<?php
namespace Admin\Model;
use Think\Model\RelationModel;


class EditableModel extends RelationModel{

	protected $_link = array(

		'TeachingWork' =>array(
			'mapping_type'=>self::HAS_MANY,
			'foreign_key'=>'group_id',
			'mapping_fields' => 'catalog_id, catalog, catalog_table' ,
			'mapping_order' => 'catalog_id',
		),

		'EnrollStudent' =>array(
			'mapping_type'=>self::HAS_MANY,
			'foreign_key'=>'group_id',
			'mapping_fields' => 'catalog_id, catalog, catalog_table' ,
			'mapping_order' => 'catalog_id',
		),

		'InstituteShow' =>array(
			'mapping_type'=>self::HAS_MANY,
			'foreign_key'=>'group_id',
			'mapping_fields' => 'catalog_id, catalog, catalog_table' ,
			'mapping_order' => 'catalog_id',
		),

	);
	
}