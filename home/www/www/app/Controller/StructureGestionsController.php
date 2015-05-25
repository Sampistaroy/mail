<?php
class StructureGestionsController extends AppController {
    public $helpers = array('Calendargestion');


    public function index($structure_id=null,$date = null) {
        $this->set('structure_id',$structure_id);
    }


    public function agenda($structure_id=null,$date = null) {
        $this->set('structure_id',$structure_id);

        // on cherche le modele
        $this->loadModel('Planch');
        $planches = $this->Planch->find('threaded', array(
        'fields' => array('debut', 'fin','id','receptaclename','nb_places'),
        'conditions' => array('Planch.structure_id' => $structure_id)));
        $this->set('planches',$planches);

        foreach ($planches as $planche) {
            $d_h_planch_debut = (int)(date_format(new DateTime($planche['Planch']['debut']), 'j'));
            if (isset($events[$d_h_planch_debut])) {

                    $events[$d_h_planch_debut][] = $planche['Planch']['id'];
            }else{
                $events[$d_h_planch_debut] =  array($planche['Planch']['id']);
            }
        }

     
        $this->set('events',$events);

        //$this->set('d_h_planch_debut',$d_h_planch_debut);




        
    }

}