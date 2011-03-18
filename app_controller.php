<?php

Class AppController extends Controller {

    var $components = array('Session');
    var $helpers = array('Html', 'Session', 'Javascript', 'Form', 'Text');

    function URLprevious() {
        return $this->Session->read('history.current');
    }

    function URLsave() {
        $current = $this->params['url']['url'];
        if ($this->Session->read('history.current') != $current) {
            $this->Session->write('history.previous', $this->Session->read('history.current'));
            $this->Session->write('history.current', $current);
        }
    }

}

?>
