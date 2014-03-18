<?php
App::uses('AppController', 'Controller');
/**
 * PlayTrips Controller
 *
 * @property PlayTrip $PlayTrip
 * @property PaginatorComponent $Paginator
 */
class PlayTripsController extends AppController {

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
		$this->PlayTrip->recursive = 0;
		$this->set('playTrips', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PlayTrip->exists($id)) {
			throw new NotFoundException(__('Invalid play trip'));
		}
		$options = array('conditions' => array('PlayTrip.' . $this->PlayTrip->primaryKey => $id));
		$this->set('playTrip', $this->PlayTrip->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PlayTrip->create();
			if ($this->PlayTrip->save($this->request->data)) {
				$this->Session->setFlash(__('The play trip has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The play trip could not be saved. Please, try again.'));
			}
		}
		$users = $this->PlayTrip->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PlayTrip->exists($id)) {
			throw new NotFoundException(__('Invalid play trip'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PlayTrip->save($this->request->data)) {
				$this->Session->setFlash(__('The play trip has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The play trip could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PlayTrip.' . $this->PlayTrip->primaryKey => $id));
			$this->request->data = $this->PlayTrip->find('first', $options);
		}
		$users = $this->PlayTrip->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PlayTrip->id = $id;
		if (!$this->PlayTrip->exists()) {
			throw new NotFoundException(__('Invalid play trip'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PlayTrip->delete()) {
			$this->Session->setFlash(__('The play trip has been deleted.'));
		} else {
			$this->Session->setFlash(__('The play trip could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
