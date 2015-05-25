<?php
class NouvellesController extends AppController {
    public $helpers = array('Html', 'Form');



    public function add($id = null) {
                if (!$id) {
                    throw new NotFoundException(__('Invalid interface'));
                }

                        //verifier si la structure_id appartient bien a l'utilisateur

                $this->loadModel('Structures_user');
                if($this->Structures_user->find('threaded', array(
                        'conditions' => array('user_id' => $this->Auth->user('id'),
                                                'structure_id'=> $id),
                                'recursive' => 1
                ))){
                                //remplir les liens avec les id dans la view pour bien orienter la personne
                        if ($this->request->is('post')) {
                            $this->request->data['Nouvelle']['user_id'] = $this->Auth->user('id');
                            $this->request->data['Nouvelle']['structure_id'] = $id; 
                            $this->request->data['Nouvelle']['visible'] = 'visi';
                            $this->request->data['Nouvelle']['create'] = date('Y-m-d H:i:s, mktime($_REQUEST["Hour"],$_REQUEST["Min"],$_REQUEST
["Sec"],$_REQUEST["Month"],$_REQUEST["Day"],$_REQUEST["Year"])');;
                            if ($this->Nouvelle->save($this->request->data)) {
                                $this->Session->setFlash(__('Votre nouvelle a été sauvegardé.'));
                                $this->redirect(array('controller' => 'sitesconfigs', 'action' => 'nouvelles',$id));
                            }
                            $this->Session->setFlash(__('Unable to add your nouvelle.',"motif", array('type'=>'danger')));
                        }

                }else{

                $this->Session->setFlash("<strong>Structure Non Autorisée</strong> ","motif", array('type'=>'danger'));
                return $this->redirect('/structures');
                }
    }

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $nouvelle = $this->Nouvelle->findById($id);
        if (!$nouvelle) {
            throw new NotFoundException(__('Invalid nouvelle'));
        }

        if ($this->request->is(array('nouvelle', 'put'))) {
            $this->Nouvelle->id = $id;
            if ($this->Nouvelle->save($this->request->data)) {
                $this->Session->setFlash(__('Your nouvelle has been updated.'));
                return $this->redirect(array('controller' => 'sitesconfigs', 'action' => 'nouvelles','10'));
            }else{
            $this->Session->setFlash(__('Unable to update your nouvelle.'));
        }}

        if (!$this->request->data) {
            $this->request->data = $nouvelle;
        }
    }

    public function suppr($id = null,$struct_id=null) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Nouvelle->delete($id)) {
            $this->Session->setFlash(
                __('La Nouvelle avec id : %s a été supprimé.',"motif")
            );
        } else {
            $this->Session->setFlash(
                __('La Nouvelle avec l\'id: %s n\'a pas pu être supprimé.',"motif", array('type'=>'danger'))
            );
        }
        return $this->redirect(array('controller' => 'sitesconfigs', 'action' => 'nouvelles',$struct_id));
    }

}