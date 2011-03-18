<?php
    class RevistasController extends AppController {
        var $name = 'Revistas';


        function ler($revista){
            if($this->Session->read('Usuario.logado') == 1){
               $this->set('revista', $revista);
               $this->render();
            }else{
                $this->Session->setFlash('Não foi possivel acessar essa area.', 'msg_bad');
                $this->redirect('/revista-digital');
            }
        }
    }
?>
