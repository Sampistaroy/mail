<?php
class InfosController extends AppController {
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
                            $this->request->data['Info']['user_id'] = $this->Auth->user('id');
                            $this->request->data['Info']['structure_id'] = $id; 
                            $this->request->data['Info']['visible'] = 'visi';
                            $this->request->data['Info']['create'] = date('Y-m-d H:i:s, mktime($_REQUEST["Hour"],$_REQUEST["Min"],$_REQUEST
["Sec"],$_REQUEST["Month"],$_REQUEST["Day"],$_REQUEST["Year"])');;
                            if ($this->Info->save($this->request->data)) {
                                $this->Session->setFlash(__('Votre info a été sauvegardé.'));
                                $this->redirect(array('controller' => 'sitesconfigs', 'action' => 'info',$id));
                            }
                            $this->Session->setFlash(__('Unable to add your info.',"motif", array('type'=>'danger')));
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

        $info = $this->Info->find('first', array(
                        'conditions' => array('structure_id'=> $id),
                                'recursive' => 1
                ));
        if (!$info) {
            throw new NotFoundException(__('Invalid info'));
        }

        if ($this->request->is(array('info', 'put'))) {
            $this->Info->id = $id;
            if ($this->Info->save($this->request->data)) {
                $this->Session->setFlash(__('Your info has been updated.'));
                return $this->redirect(array('controller' => 'sitesconfigs', 'action' => 'infos',$id));
            }else{
            $this->Session->setFlash(__('Unable to update your info.'));
        }}

        if (!$this->request->data) {
            $this->request->data = $info;
        }
    }

    public function suppr($id = null,$struct_id=null) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Info->delete($id)) {
            $this->Session->setFlash(
                __('La Info avec id : %s a été supprimé.',"motif")
            );
        } else {
            $this->Session->setFlash(
                __('La Info avec l\'id: %s n\'a pas pu être supprimé.',"motif", array('type'=>'danger'))
            );
        }
        return $this->redirect(array('controller' => 'sitesconfigs', 'action' => 'infos',$struct_id));
    }

}