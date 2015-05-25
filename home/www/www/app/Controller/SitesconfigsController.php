<?php
class SitesconfigsController extends AppController {



	public function index($structure_id = null) {
        if (!$structure_id) {
            throw new NotFoundException(__('Invalid interface'));
        }
         //verifier si la structure_id appartient bien a l'utilisateur
        $this->loadModel('Structures_user');
            if($this->Structures_user->find('threaded', array(
                    'conditions' => array('user_id' => $this->Auth->user('id'),
                                            'structure_id'=> $structure_id),
                            'recursive' => 1
            ))){
                            //remplir les liens avec les id dans la view pour bien orienter la personne
                    $this->set('structure_id', $structure_id);

            }else{

            $this->Session->setFlash("<strong>Structure Non Autorisée</strong> ","motif", array('type'=>'danger'));
            return $this->redirect('/');
            }
    }

    public function infos($structure_id = null){
            if (!$structure_id) {
                throw new NotFoundException(__('Invalid interface'));
            }

                    //verifier si la structure_id appartient bien a l'utilisateur

            $this->loadModel('Structures_user');
            if($this->Structures_user->find('threaded', array(
                'conditions' => array('user_id' => $this->Auth->user('id'),
                'structure_id'=> $structure_id),
                'recursive' => 1
                ))){
                    //remplir les liens avec les id dans la view pour bien orienter la personne
                    $this->set('structure_id', $structure_id);
                    $this->loadModel('Info');
                $infos=$this->Info->find('threaded', array(
                    'conditions' => array('structure_id'=> $structure_id)
                    ));
                        $this->set('infos', $infos);
                        $this->loadModel('Nouvelle');
                        $nouvelles=$this->Nouvelle->find('threaded', array(
                            'conditions' => array('structure_id'=> $structure_id),
                            'order' => array('create'=>'desc'),
                            'limit' => 3
                            ));
                                $this->set('nouvelles', $nouvelles);
                        
                        $this->loadModel('Prestation');
                        $prestations=$this->Prestation->find('threaded', array(
                            'conditions' => array('Prestation.structure_id'=> $structure_id,'OR' => array(
                                array('a_la_Une'=> 1),
                                array('a_la_Une'=> 2) )),
                            'order' => array('a_la_Une'=>'ASC')
                            ));
                        $this->set('prestations', $prestations);
                        $this->loadModel('StructuresTag');
                        $this->set('structuresTags',$this->StructuresTag->findAllByStructure_id($structure_id));
                        

                
            }else{
                $this->Session->setFlash("<strong>Structure Non Autorisée</strong> ","motif", array('type'=>'danger'));
                return $this->redirect('/structures');
            }
    }

    public function nouvelles($structure_id = null){
            if (!$structure_id) {
                throw new NotFoundException(__('Invalid interface'));
            }

                    //verifier si la structure_id appartient bien a l'utilisateur

            $this->loadModel('Structures_user');
            if($this->Structures_user->find('threaded', array(
                    'conditions' => array('user_id' => $this->Auth->user('id'),
                                            'structure_id'=> $structure_id),
                            'recursive' => 1
                ))){
                                //remplir les liens avec les id dans la view pour bien orienter la personne
                        $this->set('structure_id', $structure_id);
                        $this->loadModel('Info');
                        if($infos=$this->Info->find('threaded', array(
                                'conditions' => array('structure_id'=> $structure_id)
                            ))){
                                $this->set('infos', $infos);
                                $this->loadModel('Nouvelle');
                                if($nouvelles=$this->Nouvelle->find('threaded', array(
                                        'conditions' => array('structure_id'=> $structure_id),
                                        'order' => array('Nouvelle.create'=> 'desc')
                                    ))){
                                        $this->set('nouvelles', $nouvelles);
                                }
                        }

                }else{
                    $this->Session->setFlash("<strong>Structure Non Autorisée</strong> ","motif", array('type'=>'danger'));
                    return $this->redirect('/structures');
                }
    }


    public function histo($structure_id = null){
            if (!$structure_id) {
                throw new NotFoundException(__('Invalid interface'));
            }

                    //verifier si la structure_id appartient bien a l'utilisateur

            $this->loadModel('Structures_user');
            if($this->Structures_user->find('threaded', array(
                    'conditions' => array('user_id' => $this->Auth->user('id'),
                                            'structure_id'=> $structure_id),
                            'recursive' => 1
            ))){
                            //remplir les liens avec les id dans la view pour bien orienter la personne
                    $this->set('structure_id', $structure_id);
                    $this->loadModel('Info');
                    if($infos=$this->Info->find('threaded', array(
                            'conditions' => array('structure_id'=> $structure_id)
                    ))){
                            $this->set('infos', $infos);
                        $this->loadModel('Histo');
                        if($histo=$this->Histo->find('first', array(
                                'conditions' => array('structure_id'=> $structure_id)
                        ))){
                            $this->set('histos', $histo);
                        }
                    }

            }else{

            $this->Session->setFlash("<strong>Structure Non Autorisée</strong> ","motif", array('type'=>'danger'));
            return $this->redirect('/structures');
            }
    }

    public function prestations($structure_id = null){
        if (!$structure_id) {
            throw new NotFoundException(__('Invalid interface'));
        }

        $this->loadModel('Structures_user');
            //verifier si la structure_id appartient bien a l'utilisateur
        if($this->Structures_user->find('threaded', array(
            'conditions' => array('user_id' => $this->Auth->user('id'),
                'structure_id'=> $structure_id),
            'recursive' => 1
            ))){
                //récupérer objet(info) pour le titre
            $this->set('structure_id', $structure_id);
            $this->loadModel('Info');
            if($infos=$this->Info->find('threaded', array(
                'conditions' => array('structure_id'=> $structure_id)
                ))){
                $this->set('infos', $infos);
                    //récup des catégories
                $this->loadModel('Categories_presta');
                if($cat_presta = $this->Categories_presta->generateTreeList(array(
                    'structure_id'=>$structure_id), null, null, '--- ')){
                    $this->set('cat_prestas', $cat_presta);
                }
                //verifier si la structure_id appartient bien a l'utilisateur
                $this->loadModel('Prestation');
                if($prestas=$this->Prestation->find('threaded', array(
                    'conditions' => array('Prestation.structure_id'=> $structure_id),
                    'recursive' => '-1'
                    )
                )){
                    $this->set('prestas', $prestas);
                }
                //verifier si la structure_id appartient bien a l'utilisateur
                $this->loadModel('Cat_opt_presta');
                if($cat_opt_prestas=$this->Cat_opt_presta->find('threaded', array(
                    'conditions' => array('Cat_opt_presta.structure_id'=> $structure_id),
                    'recursive' => '1',
                    'order' => 'Cat_opt_presta.cat_opt_id'
                        )
                    )){
                    $this->set('cat_opt_prestas', $cat_opt_prestas);
                }
                //verifier si la structure_id appartient bien a l'utilisateur
                $this->loadModel('Option');
                if($options=$this->Option->find('threaded', array(
                    'conditions' => array('Option.structure_id'=> $structure_id),
                    'recursive' => '1'
                        )
                    )){
                    $this->set('options', $options);
                }
                //verifier si la structure_id appartient bien a l'utilisateur
                $this->loadModel('Cat_opt');
                if($cat_opts=$this->Cat_opt->find('threaded', array(
                    'conditions' => array('Cat_opt.structure_id'=> $structure_id),
                    'recursive' => '1'
                        )
                    )){
                    $this->set('cat_opts', $cat_opts);
                }
            }

        }else{

            $this->Session->setFlash("<strong>Structure Non Autorisée</strong> ","motif", array('type'=>'danger'));
            return $this->redirect('/structures');
        }
    }

    public function spots($structure_id = null){
        $this->set('structure_id', $structure_id);
    }

    public function albums($structure_id = null){
        $this->set('structure_id', $structure_id);
	}

    public function contact_us($structure_id = null){
        $this->set('structure_id', $structure_id);
    }
}
