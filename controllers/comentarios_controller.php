<?php

class ComentariosController extends AppController {

    var $name = 'Comentarios';

    function index() {
        $comentarios = $this->Comentario->find('all', array('conditions' => array('Cometario.site' => 2)));

        if (isset($this->params['requested'])) {
            return $comentarios;
        } else {
            $this->set('comentarios', $comentarios);
        }
    }

    function adicionar() {
        if (!empty($this->data)) {
            if ($this->Comentario->save($this->data)) {
                $this->Session->setFlash('Comentario adicionado com sucesso!', 'msg_good');
                $this->redirect('../'.$this->URLprevious());
            }
        }
    }

}

?>
