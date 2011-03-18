<?php
    class LeitorsController extends AppController{
        var $name = 'Leitors';

        function index() {
            $leitors = $this->Leitor->find('all', array('limit' => 5, 'conditions' => array('Leitor.site' => '2')));
            if (isset($this->params['requested'])) {
                return $leitors;
            } else {
                $this->set('leitors', $leitors);
            }
        }

        function primeiro(){
            $leitorPrimeiro = $this->Leitor->find('first', array('limit'=>'1', 'conditions'=>array('Leitor.site'=>'2'), 'order'=>array('Leitor.enviado'=>'DESC')));
            if (isset($this->params['requested'])) {
                return $leitorPrimeiro;
            } else {
                $this->set('leitorPrimeiro', $leitorPrimeiro);
            }
        }

        function ver($id){
            $this->set('leitor', $this->Leitor->find('first', array('conditions'=>array('Leitor.id'=> $id))));
        }

        function email(){
            $this->Email->from = $this->data['Leitor']['email_leitor'];
            $this->Email->to = 'redacao@editorcriacao.com.br';

            $this->Email->smtpOptions = array(
                                                    'port' => '25',
                                                    'timeout' => '120',
                                                    'host' => 'smtp.editorcriacao.com.br',
                                                    'username' => 'redacao@editorcriacao.com.br',
                                                    'password' => 'farma45');
            $this->Email->delivery = 'smtp';
            $this->Email->sendAs = 'html';
            $this->Email->send('
                        <span style="font-size: 14px; font-family: arial, verdana, sans-serif; color: #000;">Nome:'.$this->data['Leitor']['nome_leitor'].'<br/><br/></span>
                        <span style="font-size: 14px; font-family: arial, verdana, sans-serif; color: #000;">E-mail:'.$this->data['Leitor']['email_leitor'].'<br/><br/></span>
                        <span style="font-size: 14px; font-family: arial, verdana, sans-serif; color: #000;">DDD:'.$this->data['Leitor']['ddd_leitor'].'<br/><br/></span>
                        <span style="font-size: 14px; font-family: arial, verdana, sans-serif; color: #000;">Telefone:'.$this->data['Leitor']['telefone_leitor'].'<br/><br/></span>
                        <span style="font-size: 14px; font-family: arial, verdana, sans-serif; color: #000;">Mensagem:'.$this->data['Leitor']['msg_leitor'].'<br/><br/><br/></span>
               ');


            $this->Session->setFlash('Sua mensagem foi enviada com sucesso! Entraremos em contato o mais rapido possivel. A Editor Criação agradece!', 'msg_good');
            $this->redirect('/sac');
        }
    }
?>