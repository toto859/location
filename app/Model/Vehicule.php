<?php
App::uses('AppModel', 'Model');
/**
 * Vehicule Model
 *
 * @property Detail $Detail
 */
class Vehicule extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID';


	//The Associations below have been created with all possible keys, those that are not needed can be removed
    public $validate = array(
        'file_name' => array(
            'uploadError-1' => array(
                'rule' => array('fileExtension', array('jpg', 'jpeg', 'png', 'gif')),
                'message' => 'Image must be jpg, jpeg, png or gif'
            ),
            'uploadError-2' => array(
                'rule' => array('fileSize', '<=', '1MB'),
                'message' => 'Image must be less than 1MB'
            )
        )
    );
    
    
     public function getCarNames ($term = null) {
      if(!empty($term)) {
        $vehicule = $this->find('list', array(
          'conditions' => array(
            'nom LIKE' => trim($term) . '%'
          )
        ));
        return $vehicule;
      }
      return false;
    }

    //The Associations below have been created with all possible keys, those that are not needed can be removed


    public function fileExtension($check, $extensions, $allowEmpty = true) {
        $file = current($check);

        if ($allowEmpty && empty($file['tmp_name'])) {
            return true;
        }

        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        return in_array($extension, $extensions);
    }

    public function beforeDelete($cascade = true) {
        $oldextension = $this->field('filename');
        $oldfile = IMAGES . 'filenames' . DS . $this->id . '.' . $oldextension;

        if (file_exists($oldfile)) {
            unlink($oldfile);
        }
    }

    public function afterSave($created, $options = array()) {
        if (isset($this->data[$this->alias]['file_name'])) {
            $file = $this->data[$this->alias]['file_name'];
            $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
            if (!empty($file['tmp_name'])) {
                $oldextension = $this->field('filename');
                $oldfile = IMAGES . 'filenames' . DS . $this->id . '.' . $oldextension;

                if (file_exists($oldfile)) {
                    unlink($oldfile);
                }

                move_uploaded_file($file['tmp_name'], IMAGES . 'filenames' . DS . $this->id . '.' . $extension);
                $this->saveField('filename', $extension);
            }
        }
    }
/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Detail' => array(
			'className' => 'Detail',
			'foreignKey' => 'vehicule_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
        
        
        	public $belongsTo = array(
		'Subcategory' => array(
			'className' => 'Subcategory',
			'foreignKey' => 'subcategory_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
