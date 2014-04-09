<?php
App::uses('AppController', 'Controller');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class LogsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$dir = new Folder('files/trips/');
		$this->set('files', $dir->find('.*\.xml', true));
	}

/**
 * sendFile method
 * @return the response with the file.
 */
	public function sendFile($fileName) {
		$this->response->file('webroot/files/trips/' . $fileName);
		// Return response object to prevent controller from trying to render
		// a view
		return $this->response;
	}
}
