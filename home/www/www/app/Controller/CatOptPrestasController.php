<?php
class CatOptPrestasController extends AppController {
    public $helpers = array('Html', 'Form');


    public function add($structure_id = null, $prestation_id = null) {

    }

    public function edit_cat_opt_id($structure_id = null, $cat_opt_presta_id = null) {
        $this->loadModel('Cat_opt_presta');
        if ($this->request->is(array('cat_opt_presta', 'put'))) {
            if (isset($this->data)) {
                                if($this->Cat_opt_presta->save($this->data)){
                                    $this->Session->setFlash('insertion Cat_opt_presta réussit ici',"motif");
                                    $this->redirect(array('controller'=>'sitesconfigs', 'action'=>'prestations', $structure_id));
                                }else{
                                    $this->Session->setFlash('Cette combinaise Prestation option & categorie existe déjà.',"motif", array('type'=>'danger'));
                                }
            }
        }
        $this->set('structure_id', $structure_id);
        // remplissage champ select(categorie_option)
        $cat_opt_prestas = $this->Cat_opt_presta->find('first', array(
                'conditions' => array('Cat_opt_presta.structure_id' => $structure_id,'Cat_opt_presta.id'=>$cat_opt_presta_id))
        );
        $this->set('cat_opt_prestas', $cat_opt_prestas);
        // remplissage champ select(categorie_option)
        $this->loadModel('Cat_opt');
        $cat_opts = array('TOUTES CATEGORIES') + $this->Cat_opt->find('list', array(
                'fields' => array('Cat_opt.id', 'Cat_opt.cat_optname'),
                'conditions' => array('structure_id' => $structure_id))
        );
        $this->set('cat_opts', $cat_opts);
        // préselection pour le formulaire prestation
        if(!isset($this->request->data['Cat_opt_presta']['id'])){
            $this->request->data['Cat_opt_presta']['id'] = $cat_opt_prestas['Cat_opt_presta']['id']; }
        // préselection pour le formulaire prix
        if(!isset($this->request->data['Cat_opt_presta']['prestation_id'])){
            $this->request->data['Cat_opt_presta']['prestation_id'] = $cat_opt_prestas['Cat_opt_presta']['prestation_id'];}  
        // préselection pour le formulaire de l'option.id
        if(!isset($this->request->data['Cat_opt_presta']['option_id'])){
            $this->request->data['Cat_opt_presta']['option_id'] = $cat_opt_prestas['Cat_opt_presta']['option_id'];  } 
        // préselection pour le formulaire de l'option.id
        if(!isset($this->request->data['Cat_opt_presta']['cat_opt_id'])){
            $this->request->data['Cat_opt_presta']['cat_opt_id'] = $cat_opt_prestas['Cat_opt_presta']['cat_opt_id'];  } 
        // préselection pour le formulaire de l'option.id
        if(!isset($this->request->data['Cat_opt_presta']['opt_nv_prix'])){
            $this->request->data['Cat_opt_presta']['opt_nv_prix'] = $cat_opt_prestas['Cat_opt_presta']['opt_nv_prix'];  } 
        // préselection pour le formulaire de l'option.id
        if(!isset($this->request->data['Cat_opt_presta']['structure_id'])){
            $this->request->data['Cat_opt_presta']['structure_id'] = $cat_opt_prestas['Cat_opt_presta']['structure_id'];  } 
    }



    public function suppr($structure_id=null,$cat_prestas_id = null) {
        $this->Session->setFlash('la suppression n\'est pas encore faite',"motif", array('type'=>'danger'));

        return $this->redirect(array('controller' => 'sitesconfigs', 'action' => 'prestations',$structure_id));
    }


}