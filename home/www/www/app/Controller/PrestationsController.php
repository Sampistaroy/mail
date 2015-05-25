<?php
class PrestationsController extends AppController {
    public $helpers = array('Html', 'Form');


    public function visible($structure_id = null) {
            $this->Session->setFlash('Cette fonctionnalité n\'est pas encore en service',"motif", array('type'=>'danger'));
            $this->redirect(array('controller'=>'sitesconfigs', 'action'=>'prestations', $structure_id));
    }


    public function add($structure_id = null, $cat_presta_id = null) {
        $this->loadModel('Prestation');
        if ($this->request->is(array('prestation', 'post'))) {
            if (isset($this->data)) { 
            $this->request->data['Prestation']['structure_id'] = $structure_id; 
            $this->request->data['Prestation']['visible'] = 'visi'; 
            $this->Prestation->save($this->data);
            $this->redirect(array('controller'=>'sitesconfigs', 'action'=>'prestations', $structure_id));
            }
        }
        $this->loadModel('Categories_presta');
        if(isset($cat_presta_id)){
            $this->request->data['Prestation']['categories_presta_id'] = $cat_presta_id;
        }
            // Liste des catégories pour le formulaire select.
        if($cat_prestas = array('Categorie_parente') +  $this->Categories_presta->generateTreeList(array(
                    'structure_id'=>$structure_id), null, null, '---')){
            $this->set('cat_prestas', $cat_prestas);
        }
    }

    public function a_la_Une($structure_id = null){
            $this->Session->setFlash('Pas encore fonctionnel',"motif", array('type'=>'danger'));
            $this->redirect(array('controller'=>'sitesconfigs', 'action'=>'infos', $structure_id));
    }


    public function edit($structure_id = null, $prestation_id = null) {
        // tester si l'id de la structure et de la categories_presta sont la.
        if (!$structure_id && !$prestation_id) {
            throw new NotFoundException(__('Invalid id or road'));
        }
        //chargement du modele
        $this->loadModel('Prestation');
        // test si on a une requete de type Put et categories_presta
        if ($this->request->is(array('prestation', 'put'))) {
            // test existe des données
            if (isset($this->data)) {
                //créer notre objet a partir de $this->data qui vient du formulaire
                $this->Prestation->save($this->data);
                //redirige
                $this->redirect(array('controller'=>'sitesconfigs', 'action'=>'prestations', $structure_id));
            }
        }
        if($prestation_id != null){
            $this->Prestation->id = $prestation_id;
            $this->data = $this->Prestation->read();
        }
        //chargement du modele
        $this->loadModel('Categories_presta');
        if($structure_id != null){
            $this->Categories_presta->id = $structure_id;
            $this->Categories_presta->read();
        }
            // Liste des catégories pour le formulaire select.
        if($cat_prestas =  array('Categorie_parente') + $this->Categories_presta->generateTreeList(array(
                    'structure_id'=>$structure_id), null, null, '---')){
            $this->set('cat_prestas', $cat_prestas);
        }
    }








    public function suppr($structure_id=null,$prestation_id = null) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        $this->loadModel('Prestation');

        if ($this->Prestation->delete($prestation_id)) {
                $this->Session->setFlash("La Prestation a bien été supprimèe","motif");
        } else {
            $this->Session->setFlash('La Prestation avec l\'id: %s n\'a pas pu être supprimé.',"motif", array('type'=>'danger'));
        }
        $this->redirect(array('controller' => 'sitesconfigs', 'action' => 'prestations',$structure_id));
    }

    public function suppr_check($structure_id=null,$prestation_id = null) {
        //chargement du modele
        $this->loadModel('Prestation');
        if($prestation_id != null){
            $this->Prestation->id = $prestation_id;
            $this->Prestation->saveField('categories_presta_id',0);
            
        }else{
            $this->Session->setFlash('Ca foire !!! 1 ',"motif", array('type'=>'danger'));
        }
        return $this->redirect(array('controller' => 'sitesconfigs', 'action' => 'prestations',$structure_id));
    }

    public function moveuppresta($structure_id = null,$prestation_id = null){
            $this->Session->setFlash('Cette fonctionnalité n\'est pas encore en service',"motif", array('type'=>'danger'));
            $this->redirect(array('controller'=>'sitesconfigs', 'action'=>'prestations', $structure_id)); 
    }

    public function movedownpresta($structure_id = null,$prestation_id = null){
            $this->Session->setFlash('Cette fonctionnalité n\'est pas encore en service',"motif", array('type'=>'danger'));
            $this->redirect(array('controller'=>'sitesconfigs', 'action'=>'prestations', $structure_id));        
    }

}