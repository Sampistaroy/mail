<?php
App::uses('AppController', 'Controller');
/**
 * Samps Controller
 *
 * @property Samp $Samp
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SampsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

}
