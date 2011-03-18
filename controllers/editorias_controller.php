<?php
    Class EditoriasController extends AppController{
        var $name = 'Editorias';

        function index(){
            $editoria = $this->Editoria->find('all', array('conditions'=>array('site'=>1)));

                if (isset($this->params['requested'])) {
                    return $editoria;
                } else {
                    $this->set('editoria', $editoria);
                }
        }

        function ver($id){
            $this->Editoria->id = $id;
            $editoria = $this->Editoria->read();
            $this->set('editoria', $editoria); 
            $this->set('artigos', $this->Editoria->Artigo->find('all', array('conditions'=> array('Artigo.editoria_id'=>$id))));
            $this->pageTitle = ' - '.$editoria['Editoria']['nomeEditoria'];
        }
    }
?>
