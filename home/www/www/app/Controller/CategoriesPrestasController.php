<?php
class CategoriesPrestasController extends AppController {
    public $helpers = array('Html', 'Form');


    public function visible($structure_id = null) {
            $this->Session->setFlash('Cette fonctionnalité n\'est pas encore en service',"motif", array('type'=>'danger'));
            $this->redirect(array('controller'=>'sitesconfigs', 'action'=>'prestations', $structure_id));
    }


    public function add($structure_id = null) {
        $this->loadModel('Categories_presta');
        if ($this->request->is(array('categories_presta', 'post'))) {
            if (isset($this->data)) {
                $this->request->data['Categories_presta']['structure_id'] = $structure_id; 
                if($this->Categories_presta->save($this->data)){
                    $this->Session->setFlash('La Categorie a été ajoutée.',"motif");
                    $this->redirect(array('controller'=>'sitesconfigs', 'action'=>'prestations', $structure_id));
                }else{
                    debug($this->request->data);
                    $this->Session->setFlash('La Categorie des prestations n\'a pas pu être ajoutée.',"motif", array('type'=>'danger'));
                }
            }
        }
            // Liste des catégories pour le formulaire select.
        if($cat_presta = array('Racine des catégories') +  $this->Categories_presta->generateTreeList(array(
                    'structure_id'=>$structure_id), null, null, '---')){
            $this->set('cat_prestas', $cat_presta);
        }
            // Liste des catégories pour le formulaire select.
        // préselection pour le formulaire prestation
        if(isset($structure_id)){
            $this->set('structure_id', $structure_id); }
    }

    public function edit($structure_id = null, $cat_presta_id = null) {
        $this->loadModel('Categories_presta');
        if ($this->request->is(array('Categories_presta', 'put'))) {
            if (isset($this->data)) {
                if($this->Categories_presta->save($this->data)){
                    $this->Session->setFlash('la catégorie a été modifiée',"motif");
                    $this->redirect(array('controller'=>'sitesconfigs', 'action'=>'prestations', $structure_id));
                }else{
                    $this->Session->setFlash('la catégorie ne peut pas s\'inclure dans elle meme',"motif",array("type"=>"danger"));
                }
            }
        }
        if($cat_presta_id != null){
            $this->Categories_presta->id = $cat_presta_id;
            $this->data = $this->Categories_presta->read();
        }
            // Liste des catégories pour le formulaire select.
        if($cat_presta =  array('Racine des catégories') + $this->Categories_presta->generateTreeList(array(
                    'structure_id'=>$structure_id), null, null, '---')){
            $this->set('cat_prestas', $cat_presta);
        }
    }

    public function suppr($structure_id=null,$cat_presta_id = null) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        // trouver si il existe des prestations reliées à cette catégorie et les relier a une autre
        $this->loadModel('Categories_presta');
        $this->loadModel('Prestation');
        $this->Categories_presta->id = $cat_presta_id;
        $this->data = $this->Categories_presta->read();
        debug($this->data);
        $this->Prestation->updateAll(
            array('Prestation.categories_presta_id' => $this->data['Categories_presta']['parent_id']),
            array('Prestation.categories_presta_id' => $this->data['Categories_presta']['id'])
        );
        if ($this->Categories_presta->removeFromTree($cat_presta_id,true)) {
            $this->Session->setFlash('La Catégorie des prestations a été supprimée.',"motif");
        } else {
            $this->Session->setFlash('La Categorie des prestations n\'a pas pu être supprimé.',"motif", array('type'=>'danger')
            );
        }
        return $this->redirect(array('controller' => 'sitesconfigs', 'action' => 'prestations',$structure_id));
}

    public function moveupcat($structure_id = null,$cat_presta_id = null){
        // tester si l'id de la structure et de la categories_presta sont la.
        if (!$structure_id && !$cat_presta_id) {
            throw new NotFoundException(__('Invalid id or road'));
        }
        // récupérer la cat_presta grace a sont id.

        $this->loadModel('Categories_presta');
        if($cat_presta_id != null){
            $this->Categories_presta->id = $cat_presta_id;
            $this->data = $this->Categories_presta->read();
        }
        if ($this->request->is(array('categories_presta', 'post'))) { //OK !!
            if (isset($this->data)) {
                $this->Categories_presta->moveUp($this->Categories_presta->id, '1');
                $this->redirect(array('controller'=>'sitesconfigs', 'action'=>'prestations', $structure_id));
            }else{
                $this->Session->setFlash('pas passé le data',"motif", array('type'=>'danger'));
                $this->redirect(array('controller'=>'sitesconfigs', 'action'=>'prestations', $structure_id));
            }
        }else{
            $this->Session->setFlash('pas passé le put',"motif", array('type'=>'danger'));
            $this->redirect(array('controller'=>'sitesconfigs', 'action'=>'prestations', $structure_id));

        }
        // la faire décaler vers le haut.

        // rediriger vers la page de config du site des prestations.
        
    }

    public function movedowncat($structure_id = null,$cat_presta_id = null){
        // tester si l'id de la structure et de la categories_presta sont la.
        if (!$structure_id && !$cat_presta_id) {
            throw new NotFoundException(__('Invalid id or road'));
        }
        // récupérer la cat_presta grace a sont id.

        $this->loadModel('Categories_presta');
        if($cat_presta_id != null){
            $this->Categories_presta->id = $cat_presta_id;
            $this->data = $this->Categories_presta->read();
        }
        if ($this->request->is(array('categories_presta', 'post'))) { //OK !!
            if (isset($this->data)) {
                $this->Categories_presta->moveDown($this->Categories_presta->id, '1');
                $this->redirect(array('controller'=>'sitesconfigs', 'action'=>'prestations', $structure_id));
            }else{
                $this->Session->setFlash('pas passé le data',"motif", array('type'=>'danger'));
                $this->redirect(array('controller'=>'sitesconfigs', 'action'=>'prestations', $structure_id));
            }
        }else{
            $this->Session->setFlash('pas passé le put',"motif", array('type'=>'danger'));
            $this->redirect(array('controller'=>'sitesconfigs', 'action'=>'prestations', $structure_id));

        }
        // la faire décaler vers le haut.

        // rediriger vers la page de config du site des prestations.
        
    }

}