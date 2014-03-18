<?php
App::uses('AppController', 'Controller');
/**
 * TripInstances Controller
 *
 * @property TripInstance $TripInstance
 * @property PaginatorComponent $Paginator
 */
class TripInstancesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TripInstance->recursive = 0;
		$this->set('tripInstances', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TripInstance->exists($id)) {
			throw new NotFoundException(__('Invalid trip instance'));
		}
		$options = array('conditions' => array('TripInstance.' . $this->TripInstance->primaryKey => $id));
		$this->set('tripInstance', $this->TripInstance->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TripInstance->create();
			if ($this->TripInstance->save($this->request->data)) {
				$this->Session->setFlash(__('The trip instance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trip instance could not be saved. Please, try again.'));
			}
		}
		$users = $this->TripInstance->User->find('list');
		$trips = $this->TripInstance->Trip->find('list');
		$this->set(compact('users', 'trips'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TripInstance->exists($id)) {
			throw new NotFoundException(__('Invalid trip instance'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TripInstance->save($this->request->data)) {
				$this->Session->setFlash(__('The trip instance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trip instance could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TripInstance.' . $this->TripInstance->primaryKey => $id));
			$this->request->data = $this->TripInstance->find('first', $options);
		}
		$users = $this->TripInstance->User->find('list');
		$trips = $this->TripInstance->Trip->find('list');
		$this->set(compact('users', 'trips'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TripInstance->id = $id;
		if (!$this->TripInstance->exists()) {
			throw new NotFoundException(__('Invalid trip instance'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TripInstance->delete()) {
			$this->Session->setFlash(__('The trip instance has been deleted.'));
		} else {
			$this->Session->setFlash(__('The trip instance could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
