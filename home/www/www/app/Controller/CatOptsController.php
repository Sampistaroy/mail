<?php
class CatOptsController extends AppController {
    public $helpers = array('Html', 'Form');


    public function visible($structure_id = null) {
        $this->Session->setFlash('Cette fonctionnalité n\'est pas encore en service',"motif", array('type'=>'danger'));
        $this->redirect(array('controller'=>'sitesconfigs', 'action'=>'prestations', $structure_id));
    }


    public function add($structure_id = null, $prestation_id = null) {
        // charge models 
        $this->loadModel('Cat_opt');
        $this->loadModel('Option');
        // si la requete est un put et une option
        if ($this->request->is(array( 'post' , 'put'))) {
            if (isset($this->data)) {
                // verifie quel option.Option est cochée
                if($this->request->data['Cat_opt']['id']=='new'){
                    $this->Session->setFlash('on a passe if "new"',"motif", array('type'=>'danger'));
                        // vérifier si option.optionname est unique
                    if(!$this->Cat_opt->find('first', array(
                        'conditions' => array('structure_id' => $structure_id,
                                                'cat_optname'=>$this->request->data['Cat_opt']['cat_optname']),
                        'recursive'=>0)
                    )){
                        // verifier si les champs sont bien remplis
                        $cat_opt_name=$this->request->data['Cat_opt']['cat_optname'];
                        if(isset($cat_opt_name) && !empty($cat_opt_name)){
                            // si il est unique, insérer l'option dans la bdd et recup l'idate(format)
                            $this->request->data['Cat_opt']['id'] = ''; 
                            $this->request->data['Cat_opt']['structure_id'] = $structure_id; 
                            if($this->Cat_opt->save($this->data)){
                                // si il est inséré, insérer cat_opt_presta
                                $cat_opt_id=$this->Cat_opt->getInsertID();
                                debug($cat_opt_id);
                                $this->request->data['Cat_opt_presta']['cat_opt_id']=$cat_opt_id;
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
                            debug($this->request->data['Cat_opt']['cat_optname']);
                            $this->Session->setFlash('Vous devez au moins renseigner le nom',"motif", array('type'=>'danger'));

                        }
                    }else{
                        $this->Session->setFlash('Il existe déjà une catégories d\'option avec ce nom',"motif", array('type'=>'danger'));
                    }
                }elseif ($cat_opt_id=$this->Cat_opt->find('first', array(
                    'fields' => array('Cat_opt.id'),
                    'conditions' => array('structure_id' => $structure_id,
                                            'id'=>$this->request->data['Cat_opt']['id']),
                    'recursive'=>0))) {
                    $this->request->data['Cat_opt_presta']['cat_opt_id']=$cat_opt_id['Cat_opt']['id'];
                    $this->request->data['Cat_opt_presta']['structure_id']=$structure_id;
                    $this->loadModel('Cat_opt_presta');
                    if($this->Cat_opt_presta->save($this->data)){
                                $this->Session->setFlash('insertion Cat_opt_presta réussit',"motif");
                                $this->redirect(array('controller'=>'sitesconfigs', 'action'=>'prestations', $structure_id));
                    }else{
                        $this->Cat_opt_presta->validationErrors['cat_opt_id'];
                        $this->Session->setFlash('Cette combinaise Prestation option & categorie existe déjà.',"motif", array('type'=>'danger'));
                    }
                }
            }
        }
        // préselection pour le formulaire prestation
        if(!isset($this->request->data['Cat_opt_presta']['prestation_id'])){
            $this->request->data['Cat_opt_presta']['prestation_id'] = $prestation_id; }
        // préselection pour le formulaire prix
        if(!isset($this->request->data['Cat_opt']['id'])){
            $this->request->data['Cat_opt']['id'] = 'new';} 


        // remplissage champ option(Option)
        $options_prestas = $this->Option->find('list', array(
                'fields' => array('Option.id', 'Option.optionname'),
                'conditions' => array('structure_id' => $structure_id))
        );
        $this->set('options_prestas', $options_prestas);


        // remplissage champ select(categorie_option)
        $cat_opts = $this->Cat_opt->find('list', array(
                'fields' => array('Cat_opt.id', 'Cat_opt.cat_optname'),
                'conditions' => array('structure_id' => $structure_id))
        );
        $this->set('cat_opts', $cat_opts);
    }

    public function edit($structure_id = null, $cat_opt_presta_id = null) {
        if ($this->request->is(array('option', 'put'))) {
            if (isset($this->data)) {
                // 
            }
        }
        // remplissage champ select(categorie_option)
        $this->loadModel('Cat_opt_presta');
        $cat_opt_prestas = $this->Cat_opt_presta->find('first', array(
                'conditions' => array('Cat_opt_presta.structure_id' => $structure_id,'Cat_opt_presta.id'=>$cat_opt_presta_id))
        );
        $this->set('cat_opt_prestas', $cat_opt_prestas);
        debug($this->request->data['Cat_opt_presta']);
        // remplissage champ select(categorie_option)
        $this->loadModel('Cat_opt');
        $cat_opts = array('TOUTES CATEGORIES') + $this->Cat_opt->find('list', array(
                'fields' => array('Cat_opt.id', 'Cat_opt.cat_optname'),
                'conditions' => array('structure_id' => $structure_id))
        );
        $this->set('cat_opts', $cat_opts);
        debug($cat_opts);

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
    debug($this->request->data);


    }




    public function suppr($structure_id=null,$cat_opt_id = null) {
        $this->loadModel('Cat_opt');
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Cat_opt->delete($option_id, true)) {
            $this->loadModel('Cat_opt_presta');
            // findALl avec cette option_id et deleteAll
            $cat_opt_presta=$this->Cat_opt_presta->findAllByOption_id($cat_opt_id);
            $this->Cat_opt_presta->deleteAll(array('Cat_opt_presta.option_id' => $cat_opt_id), false);
            $this->Session->setFlash('La catégorie option a été supprimée.',"motif");
            debug($cat_opt);
        } else {
            $this->Session->setFlash('La catégorie option  n\'a pas pu être supprimée.',"motif");
        }

        return $this->redirect(array('controller' => 'sitesconfigs', 'action' => 'prestations',$structure_id));
    }

    
    public function suppr_check($structure_id=null,$prestation_id = null,$cat_opt_id = null) {
        $this->loadModel('Cat_opt_presta');
        $mavars=$this->Cat_opt_presta->findAllByPrestation_idAndCat_opt_id($prestation_id,$cat_opt_id);
        foreach ($mavars as $key => $mavar ) {
            $mavar['Cat_opt_presta']['cat_opt_id']=0;
            unset($mavar['Cat_opt']);
            unset($mavar['Option']);
            unset($mavar['Prestation']);
            $mavars[$key]=$mavar;
        }
        $this->Cat_opt_presta->saveAll($mavars);
        return $this->redirect(array('controller' => 'sitesconfigs', 'action' => 'prestations',$structure_id));
    }


    public function moveupcat($structure_id = null,$cat_presta_id = null){
        // a faire.
        
    }

    public function movedowncat($structure_id = null,$cat_presta_id = null){
        // a faire
    }

}