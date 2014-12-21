<?php
/**
 * DetailFixture
 *
 */
class DetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'IMAGE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 225, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'AJOUT' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'COMMENTAIRE' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'AUTEUR' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'COM_VISIBLE' => array('type' => 'integer', 'null' => false, 'default' => '1', 'unsigned' => false),
		'vehicule_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1),
			'vehicules_id' => array('column' => 'vehicule_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'ID' => 1,
			'IMAGE' => 'Lorem ipsum dolor sit amet',
			'AJOUT' => '2014-10-23 19:29:01',
			'COMMENTAIRE' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'AUTEUR' => 'Lorem ipsum dolor sit amet',
			'COM_VISIBLE' => 1,
			'vehicule_id' => 1
		),
	);

}
