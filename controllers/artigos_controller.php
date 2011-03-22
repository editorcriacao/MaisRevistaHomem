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

    function ultimasSaude() {
        $recentes = $this->Artigo->find('first', array(
                    'conditions' => array('Artigo.site' => 2, 'Artigo.editoria_id' => 11),
                    'order' => array('Artigo.created' => 'DESC')
                ));

        $ultimasSaude = $this->Artigo->find('first', array(
                    'conditions' => array('Artigo.site' => 2, 'Artigo.id != ' . $recentes['Artigo']['id'], 'Artigo.editoria_id' => 11),
                    'order' => array('Artigo.created' => 'DESC')
                ));

        if (isset($this->params['requested'])) {
            return $ultimasSaude;
        } else {
            $this->set('ultimasSaude', $ultimasSaude);
        }
    }

    function ultimasVisual() {
        $recentes = $this->Artigo->find('first', array(
                    'conditions' => array('Artigo.site' => 2, 'Artigo.editoria_id' => 13),
                    'order' => array('Artigo.created' => 'DESC')
                ));

        $ultimasVisual = $this->Artigo->find('first', array(
                    'conditions' => array('Artigo.site' => 2, 'Artigo.editoria_id' => 13),
                    'order' => array('Artigo.created' => 'DESC')
                ));

        if (isset($this->params['requested'])) {
            return $ultimasVisual;
        } else {
            $this->set('ultimasVisual', $ultimasVisual);
        }
    }

    function ultimasCarro() {
        $recentes = $this->Artigo->find('first', array(
                    'conditions' => array('Artigo.site' => 2, 'Artigo.editoria_id' => 17),
                    'order' => array('Artigo.created' => 'DESC')
                ));

        $ultimasCarro = $this->Artigo->find('first', array(
                    'conditions' => array('Artigo.site' => 2,  'Artigo.editoria_id' => 17),
                    'order' => array('Artigo.created' => 'DESC')
                ));

        if (isset($this->params['requested'])) {
            return $ultimasCarro;
        } else {
            $this->set('ultimasCarro', $ultimasCarro);
        }
    }

    function ultimasEsporte() {
        $recentes = $this->Artigo->find('first', array(
                    'conditions' => array('Artigo.site' => 2, 'Artigo.editoria_id' => 19),
                    'order' => array('Artigo.created' => 'DESC')
                ));

        $ultimasEsporte = $this->Artigo->find('first', array(
                    'conditions' => array('Artigo.site' => 2, 'Artigo.editoria_id' => 19),
                    'order' => array('Artigo.created' => 'DESC')
                ));

        if (isset($this->params['requested'])) {
            return $ultimasEsporte;
        } else {
            $this->set('ultimasEsporte', $ultimasEsporte);
        }
    }

    function ultimasCiencia() {
        $recentes = $this->Artigo->find('first', array(
                    'conditions' => array('Artigo.site' => 2, 'Artigo.editoria_id' => 29),
                    'order' => array('Artigo.created' => 'DESC')
                ));

        $ultimasCiencia = $this->Artigo->find('first', array(
                    'conditions' => array('Artigo.site' => 2, 'Artigo.editoria_id' => 29),
                    'order' => array('Artigo.created' => 'DESC')
                ));

        if (isset($this->params['requested'])) {
            return $ultimasCiencia;
        } else {
            $this->set('ultimasCiencia', $ultimasCiencia);
        }
    }

    function ultimasSexo() {
        $recentes = $this->Artigo->find('first', array(
                    'conditions' => array('Artigo.site' => 2, 'Artigo.editoria_id' => 37),
                    'order' => array('Artigo.created' => 'DESC')
                ));

        $ultimasCiencia = $this->Artigo->find('first', array(
                    'conditions' => array('Artigo.site' => 2,  'Artigo.editoria_id' => 37),
                    'order' => array('Artigo.created' => 'DESC')
                ));

        if (isset($this->params['requested'])) {
            return $ultimasCiencia;
        } else {
            $this->set('ultimasCiencia', $ultimasCiencia);
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
