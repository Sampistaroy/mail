<?php
class HistosController extends AppController {
    public $helpers = array('Html', 'Form');



    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $histo = $this->Histo->find('first', array(
            'conditions' => array('structure_id'=> $id),
            'recursive' => 1
            ));
        if (!$histo) {
            throw new NotFoundException(__('Invalid histo'));
        }

        if ($this->request->is(array('histo', 'put'))) {
            $this->Histo->id = $id;
            if ($this->Histo->save($this->request->data)) {
            $this->Session->setFlash('Histo a été sauvegardé',"motif");
                return $this->redirect(array('controller' => 'sitesconfigs', 'action' => 'histo',$id));
            }else{
            $this->Session->setFlash('l\'histo n\'a pas put etre sauvegardé',"motif", array('type'=>'danger'));
        }}

        if (!$this->request->data) {
            $this->request->data = $histo;
        }
    }

}