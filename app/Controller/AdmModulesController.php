<?php
App::uses('AppController', 'Controller');
/**
 * AdmModules Controller
 *
 * @property AdmModule $AdmModule
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AdmModulesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AdmModule->recursive = 0;
		$this->set('admModules', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AdmModule->exists($id)) {
			throw new NotFoundException(__('Invalid adm module'));
		}
		$options = array('conditions' => array('AdmModule.' . $this->AdmModule->primaryKey => $id));
		$this->set('admModule', $this->AdmModule->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AdmModule->create();
			if ($this->AdmModule->save($this->request->data)) {
				$this->Session->setFlash(__('The adm module has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The adm module could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AdmModule->exists($id)) {
			throw new NotFoundException(__('Invalid adm module'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AdmModule->save($this->request->data)) {
				$this->Session->setFlash(__('The adm module has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The adm module could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AdmModule.' . $this->AdmModule->primaryKey => $id));
			$this->request->data = $this->AdmModule->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AdmModule->id = $id;
		if (!$this->AdmModule->exists()) {
			throw new NotFoundException(__('Invalid adm module'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AdmModule->delete()) {
			$this->Session->setFlash(__('The adm module has been deleted.'));
		} else {
			$this->Session->setFlash(__('The adm module could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
