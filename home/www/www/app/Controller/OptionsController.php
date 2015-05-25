<?php
class OptionsController extends AppController {
    public $helpers = array('Html','Form');


    public function visible($structure_id = null) {
        $this->Session->setFlash('Cette fonctionnalité n\'est pas encore en service',"motif", array('type'=>'danger'));
        $this->redirect(array('controller'=>'sitesconfigs', 'action'=>'prestations', $structure_id));
    }


    public function add($structure_id = null, $prestation_id = null) {
        // charge model option
        $this->loadModel('Option');
        // si la requete est un put et une option
        if ($this->request->is(array('option', 'put'))) {
            if (isset($this->data)) {
                // verifie quel option.Option est cochée
                if($this->request->data['Option']['id']=='new'){
                    $this->Session->setFlash('2',"motif", array('type'=>'danger'));
                        // vérifier si option.optionname est unique
                    if(!$this->Option->find('first', array(
                        'fields' => array('Option.id', 'Option.optionname'),
                        'conditions' => array('structure_id' => $structure_id,
                                                'optionname'=>$this->request->data['Option']['optionname']),
                        'recursive'=>0)
                    )){
                        // verifier si les champs sont bien remplis
                        $option_name=$this->request->data['Option']['optionname'];
                        if(isset($option_name) && !empty($option_name)){
                            // si il est unique, insérer l'option dans la bdd et recup l'idate(format)
                            $this->request->data['Option']['id'] = ''; 
                            $this->request->data['Option']['structure_id'] = $structure_id; 
                            if($this->Option->save($this->data)){
                                // si il est inséré, insérer cat_opt_presta
                                $option_id=$this->Option->getInsertID();
                                debug($option_id);
                                $this->request->data['Cat_opt_presta']['option_id']=$option_id;
                                $this->request->data['Cat_opt_presta']['structure_id']=$structure_id;
                                $this->loadModel('Cat_opt_presta');
                                if($this->Cat_opt_presta->save($this->data)){
                                    $this->Session->setFlash('insertion Cat_opt_presta réussit ici',"motif");
                                    $this->redirect(array('controller'=>'sitesconfigs', 'action'=>'prestations', $structure_id));
                                }else{
                                    $this->Session->setFlash('Cette combinaise Prestation option & categorie existe déjà.',"motif", array('type'=>'danger'));
                                }

                            }
                        }else{
                            debug($this->request->data['Option']['optionname']);
                            $this->Session->setFlash('Vous devez au moins renseigner le nom',"motif", array('type'=>'danger'));

                        }
                    }else{
                        $this->Session->setFlash('Il existe déjà une option avec ce nom',"motif", array('type'=>'danger'));
                    }
                }else{
                    if ($option_id=$this->Option->find('first', array(
                        'fields' => array('Option.id'),
                        'conditions' => array('structure_id' => $structure_id,
                                                'id'=>$this->request->data['Option']['id']),
                        'recursive'=>0))) {
                        $this->request->data['Cat_opt_presta']['option_id']=$option_id['Option']['id'];
                        $this->request->data['Cat_opt_presta']['structure_id']=$structure_id;
                        $this->loadModel('Cat_opt_presta');
                        if($this->Cat_opt_presta->save($this->data)){
                                    $this->Session->setFlash('insertion Cat_opt_presta réussit',"motif");
                                    $this->redirect(array('controller'=>'sitesconfigs', 'action'=>'prestations', $structure_id));
                        }else{
                            $this->Cat_opt_presta->validationErrors['option_id'];
                            $this->Session->setFlash('Cette combinaise Prestation option & categorie existe déjà.',"motif", array('type'=>'danger'));
                        }
                    }

                }
            }
        }
        // remplissage champ select(prestations)
        $this->loadModel('Prestation');
        $prestations = array('TOUTES PRESTATIONS') + $this->Prestation->find('list', array(
                'fields' => array('Prestation.id', 'Prestation.prestationname'),
                'conditions' => array('structure_id' => $structure_id))
        );
        $this->set('prestations', $prestations);
        // préselection pour le formulaire prestation
        if(!isset($this->request->data['Cat_opt_presta']['prestation_id'])){
            $this->request->data['Cat_opt_presta']['prestation_id'] = $prestation_id; }
        // préselection pour le formulaire prix
        if(!isset($this->request->data['Option']['prix'])){
            $this->request->data['Option']['prix'] = 'inclus';}  
        // préselection pour le formulaire visible
        $this->request->data['Option']['visible'] = 'cache';
        // préselection pour le formulaire de l'option.id
        if(!isset($this->request->data['Option']['id'])){
            $this->request->data['Option']['id'] = 'new';  }


        // remplissage champ option(Option)
        $this->loadModel('Option');
        $options_prestas = $this->Option->find('list', array(
                'fields' => array('Option.id', 'Option.optionname'),
                'conditions' => array('structure_id' => $structure_id))
        );
        $this->set('options_prestas', $options_prestas);


        // remplissage champ select(categorie_option)
        $this->loadModel('Cat_opt');
        $cat_opts = array('TOUTES CATEGORIES') + $this->Cat_opt->find('list', array(
                'fields' => array('Cat_opt.id', 'Cat_opt.cat_optname'),
                'conditions' => array('structure_id' => $structure_id))
        );
        $this->set('cat_opts', $cat_opts);

    }

    public function edit($structure_id = null, $option_id = null) {
    if (!$option_id) {
        throw new NotFoundException(__('Option non valide'));
    }

    $option = $this->Option->findById($option_id);
    if (!$option) {
        throw new NotFoundException(__('Invalid option'));
    }

    if ($this->request->is(array('option', 'put'))) {
        $this->Option->id = $option_id;
        if ($this->Option->save($this->request->data)) {
            $this->Session->setFlash(__('Votre option a été modifiée.'));
            return $this->redirect(array('controller' => 'sitesconfigs', 'action' => 'prestations',$structure_id));
        }
        $this->Session->setFlash(__('Impossible de modifier votre option.'));
    }

    if (!$this->request->data) {
        $this->request->data = $option;
    }

    }

    public function suppr($structure_id=null,$option_id = null) {
        $this->loadModel('Option');
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Option->delete($option_id, true)) {
            $this->loadModel('Cat_opt_presta');
            // findALl avec cette option_id et deleteAll
            $cat_opt_presta=$this->Cat_opt_presta->findAllByOption_id($option_id);
            $this->Cat_opt_presta->deleteAll(array('Cat_opt_presta.option_id' => $option_id), false);
            $this->Session->setFlash('L\'option a été supprimé.',"motif");
        } else {
            $this->Session->setFlash('L\'option  n\'a pas pu être supprimé.',"motif");
        }

        return $this->redirect(array('controller' => 'sitesconfigs', 'action' => 'prestations',$structure_id));
    }



    public function suppr_check($structure_id=null,$cat_opt_presta_id = null) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        $this->loadModel('Cat_opt_presta');

        if ($this->Cat_opt_presta->delete($cat_opt_presta_id)) {
                $this->Session->setFlash("La Cat_opt_presta a bien été supprimèe","motif");
        } else {
            $this->Session->setFlash('La Cat_opt_presta n\'a pas pu être supprimé.',"motif", array('type'=>'danger'));
        }
        $this->redirect(array('controller' => 'sitesconfigs', 'action' => 'prestations',$structure_id));
    }



    public function moveupcat($structure_id = null,$cat_presta_id = null){
        // a faire.
        
    }

    public function movedowncat($structure_id = null,$cat_presta_id = null){
        // a faire
    }

}