
<?php if($session->read('Usuario.logado') == 1){?>
  <span class="link" style="margin-left: -67px;"><?php echo 'Bem-vindo(a) '. $session->read('Usuario.nome')?>
  &nbsp;&nbsp;<a href="<?php echo $html->url('http://www.editorcriacao.com.br/recuperar-senha')?>" class="linkUsuario">Esqueci minha senha</a> | <a href="<?php echo $html->url('/fale-conosco')?>" class="linkUsuario">Fale conosco</a> | <?php echo $html->link('Sair', array('controller'=>'usuarios', 'action'=>'sair'), array('class'=>'linkUsuario'))?></span>
<?php }else{?>
<?php echo $form->create('Usuario', array('action'=>'login'))?>
    <?php echo $form->input('login_usuario', array('label'=>'', '', 'value'=>'Login', 'class'=>'login'))?>
    <?php echo $form->input('senha_usuario', array('label'=>'', 'type'=>'password', 'value'=>'Senha', 'class'=>'senha'))?>
    <?php echo $form->submit(' ', array('class'=>'logar'))?>
<?php echo $form->end()?>
<?php }?>





