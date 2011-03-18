<?php

Class ArtigosController extends AppController {

    var $name = 'Artigos';

    function destaques() {
        $destaque = $this->Artigo->find('all', array(
                    'conditions' => array('Artigo.site' => 2, 'Artigo.destaque' => 1),
                    'order' => array('Artigo.created' => 'Desc'),
                    'limit' => 3));

        if (isset($this->params['requested'])) {
            return $destaque;
        } else {
            $this->set('destaque', $destaque);
        }
    }

    function recentes() {
        $recentes = $this->Artigo->find('all', array(
                    'conditions' => array('Artigo.site' => 2),
                    'order' => array('Artigo.created' => 'DESC'),
                    'limit' => 3
                ));

        if (isset($this->params['requested'])) {
            return $recentes;
        } else {
            $this->set('recentes', $recentes);
        }
    }

    function ultimasMaterias($id) {
        $recentes = $this->Artigo->find('first', array(
                    'conditions' => array('Artigo.site' => 2),
                    'order' => array('Artigo.created' => 'DESC')
                ));

        $ultimasMaterias = $this->Artigo->find('first', array(
                    'conditions' => array('Artigo.site' => 2, 'Artigo.id != ' . $recentes['Artigo']['id'], 'Artigo.editoria_id' => $id),
                    'order' => array('Artigo.created' => 'DESC')
                ));

        if (isset($this->params['requested'])) {
            return $ultimasMaterias;
        } else {
            $this->set('ultimasMaterias', $ultimasMaterias);
        }
    }

    function ver($id) {
        $this->Session->write('Artigo.id', $id);
        $artigo = $this->Artigo->find('first', array('conditions' => array('Artigo.id' => $id)));
        $this->set('title_for_layout', $artigo['Artigo']['titulo']);
        $this->Artigo->UpdateAll(array('Artigo.cliques' => $artigo['Artigo']['cliques']+=1), array('Artigo.id' => $id));
        $this->set('artigo', $artigo);
        $this->set('relacionado', $this->Artigo->find('all', array('conditions' => array('Artigo.editoria_id' => $artigo['Artigo']['editoria_id'], 'Artigo.id <>' => $artigo['Artigo']['id']), 'limit' => 5, 'order' => array('Artigo.created' => 'DESC'))));
        $this->Set('comentarios', $this->Artigo->Comentario->find('all', array('conditions' => array('Comentario.artigo_id' => $id), 'order' => array('Comentario.created' => 'DESC'))));
    }

}

?>
