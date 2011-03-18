<?php
    class ColunistasController extends AppController{
        var $name = 'Colunistas';

        function index() {
            $colunista = $this->Colunista->find('all', array('limit' => 5, 'conditions' => array('Colunista.site' => '2')));
            if (isset($this->params['requested'])) {
                return $colunista;
            } else {
                $this->set('colunista', $colunista);
            }
        }
    }
?>
