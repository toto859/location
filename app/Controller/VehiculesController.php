<?php

App::uses('AppController', 'Controller');

/**
 * Vehicules Controller
 *
 * @property Vehicule $Vehicule
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class VehiculesController extends AppController {

    /**
     * Helpers
     *
     * @var array
     */
    public $helpers = array('Html', 'Form');

    public function isAuthorized($user) {
        // All registered users can add posts
        if ($this->action === 'add') {
            return true;
        }

        // The owner of a post can edit and delete it
        //if (in_array($this->action, array('edit', 'delete'))) {
        //   $postId = (int) $this->request->params['pass'][0];
        //   if ($this->Vehicule->isOwnedBy($postId, $user['id'])) {
        //       return true;
        //   }
        //}

        return parent::isAuthorized($user);
    }

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Session','RequestHandler');

    /**
     * index method
     *
     * @return void
     */
    //public function index() {
    //	$this->Vehicule->recursive = 0;
    //	$this->set('vehicules', $this->paginate());
    //}

    public function index() {
        $this->Vehicule->recursive = 0;
        $this->set('vehicules', $this->paginate());
        $this->set('vehicules', $this->Vehicule->find('all'));

//autocomplete
        if ($this->request->is('ajax')) {
            $term = $this->request->query('term');
            $carNames = $this->Vehicule->getCarNames($term);
            $this->set(compact('carNames'));
            $this->set('_serialize', 'carNames');
        }
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Vehicule->exists($id)) {
            throw new NotFoundException(__('Invalid vehicule'));
        }
        $options = array('conditions' => array('Vehicule.' . $this->Vehicule->primaryKey => $id));
        $this->set('vehicule', $this->Vehicule->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Vehicule->create();
            if ($this->Vehicule->save($this->request->data)) {
                $this->Session->setFlash(__('The vehicule has been saved'), 'flash/success');
                //$this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The vehicule could not be saved. Please, try again.'), 'flash/error');
            }
        }

        $categories = $this->Vehicule->Subcategory->Category->find('list');
//        $subcategories = $this->Post->Subcategory->find('list');
        $subcategories = $this->Vehicule->Subcategory->find('list');
        $this->set(compact('categories', 'subcategories'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Vehicule->id = $id;
        if (!$this->Vehicule->exists($id)) {
            throw new NotFoundException(__('Invalid vehicule'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Vehicule->save($this->request->data)) {
                $this->Session->setFlash(__('The vehicule has been saved'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The vehicule could not be saved. Please, try again.'), 'flash/error');
            }
        } else {
            $options = array('conditions' => array('Vehicule.' . $this->Vehicule->primaryKey => $id));
            $this->request->data = $this->Vehicule->find('first', $options);
        }
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @throws MethodNotAllowedException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Vehicule->id = $id;
        if (!$this->Vehicule->exists()) {
            throw new NotFoundException(__('Invalid vehicule'));
        }
        if ($this->Vehicule->delete()) {
            $this->Session->setFlash(__('Vehicule deleted'), 'flash/success');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Vehicule was not deleted'), 'flash/error');
        $this->redirect(array('action' => 'index'));
    }

}
