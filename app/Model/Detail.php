<?php
App::uses('AppModel', 'Model');
/**
 * Detail Model
 *
 * @property Vehicule $Vehicule
 */
class Detail extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Vehicule' => array(
			'className' => 'Vehicule',
			'foreignKey' => 'vehicule_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
