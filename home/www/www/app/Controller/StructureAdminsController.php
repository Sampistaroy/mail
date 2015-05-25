<?php
class StructureAdminsController extends AppController {
    public $helpers = array('Calendar');


    public function index($structure_id=null,$date = null) {
        $this->set('structure_id',$structure_id);
    }

}