<?php
class AgendasController extends AppController {
    public $helpers = array('Html', 'Form','Calendar');


    public function index($structure_id=null,$date = null) {
        $this->set('structure_id',$structure_id);
        // Si la $date est null ou n'existe pas mettre la date d'aujourdhui dans la variable $date

        // Recupérer dans la variable $listejours la liste des jours d'une semaine (lundi,mardi,...)

        //


$events = array(
        // the 15th
        15 => 
            array('item 1','item 2'),
   
);
        $this->set('events',$events);




        
    }
    public function gestion($structure_id=null,$date = null) {
        $this->set('structure_id',$structure_id);
        // Si la $date est null ou n'existe pas mettre la date d'aujourdhui dans la variable $date

        // Recupérer dans la variable $listejours la liste des jours d'une semaine (lundi,mardi,...)

        //


$events = array(
        // the 15th
        15 => 
            array('item 1','item 2'),
   
);
        $this->set('events',$events);




        
    }

}