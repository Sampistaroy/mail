<?php
class SitesController extends AppController {



        public $helpers = array('Paginator');


        public $components = array('Paginator');

        public $paginate = array(
                'Nouvelle' => array(
                        'recursive' => -1,
                        'limit' => 5,
                        'order' => array(
                            'Nouvelle.create' => 'desc')
                )
        );
        
	


	public function infos($structure_id = null){
                $this->loadModel('Info');
                // chargment de info pour le titre et autre
                $this->set('infos',
                        $this->Info->find(
                                'first', array(
                                        'conditions' => array('structure_id' => $structure_id)
                                )
                        )
                );
                // transmission de  $structure_id
                $this->set('structure_id', $structure_id);
                // Chargement des Tags de la structure
                $this->loadModel('StructuresTag');
                $this->set('structuresTags',$this->StructuresTag->findAllByStructure_id($structure_id));
                // chargement des nouvelles
                $this->loadModel('Nouvelle');
                $this->set('news',
                        $this->Nouvelle->find(
                                'all', array(
                                        'conditions' => array('structure_id' => $structure_id),
                                        'recursive' => -1,
                                        'order'=> array('create' => 'DESC'),
                                        'limit' => 3
                )));
	}

	public function nouvelles($structure_id = null){
                $this->loadModel('Info');
                // chargment de info pour le titre et autre
                $this->set('infos',
                        $this->Info->find(
                                'first', array(
                                        'conditions' => array('structure_id' => $structure_id)
                                )
                        )
                );
                // transmission de  $structure_id
                $this->set('structure_id', $structure_id);
                // chargement des nouvelles
                $this->loadModel('Nouvelle');
    $this->Paginator->settings = $this->paginate;
    $news = $this->Paginator->paginate('Nouvelle',
                        array('Nouvelle.structure_id'=>$structure_id));
    $this->set('news', $news);
	}

	public function histo($structure_id = null){
                $this->loadModel('Info');
                // chargment de info pour le titre et autre
                $this->set('infos',
                        $this->Info->find(
                                'first', array(
                                        'conditions' => array('structure_id' => $structure_id)
                                )
                        )
                );
                $this->loadModel('Histo');
                if($histo=$this->Histo->find('first', array(
                        'conditions' => array('structure_id'=> $structure_id)
                ))){
                    $this->set('histos', $histo);
                }
                $this->set('structure_id', $structure_id);
	}

	public function prestations($structure_id = null){
                $this->set('structure_id', $structure_id);
                $this->loadModel('Info');
                // chargment de info pour le titre et autre
                $this->set('infos',
                        $this->Info->find(
                                'first', array(
                                        'conditions' => array('structure_id' => $structure_id)
                                )
                        )
                );
                //récup des catégories
                $this->loadModel('Categories_presta');
                if($cat_prestas = $this->Categories_presta->generateTreeList(array(
                    'structure_id'=>$structure_id), null, null, '--- ')){
                    $this->set('cat_prestas', $cat_prestas);
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
	}

	public function spots($structure_id = null){
                $this->set('structure_id', $structure_id);
                $this->loadModel('Info');
                // chargment de info pour le titre et autre
                $this->set('infos',
                        $this->Info->find(
                                'first', array(
                                        'conditions' => array('structure_id' => $structure_id)
                                )
                        )
                );
	}

}
