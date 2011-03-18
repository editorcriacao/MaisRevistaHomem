<br>
<div id="centralAssinante">
</div>
 <br>
<div id="itens2">
    <div id="textoItens2">
         <div>
             <?php if($session->read('Usuario.logado') == 1){?>
                <?php if($session->read('Usuario.assinante') == 1){?>
                    <div style="float: left; width: 330px">
                         <h5 style="color:#003552; font-family: verdana, arial, sans-serif; font-size: 14px;">SERVIÇOS</h5>
                         <div class="listaAcesse1">
                             <li>Acesso as Revistas</li>
                             <li><?php echo $html->link('Alterar dados pessoais', array('controller'=>'usuarios', 'action'=>'alterar'))?></li>
                             <li><?php echo $html->link('Alterar senha', array('controller'=>'usuarios', 'action'=>'alterarSenha'))?></li>
                             <li><?php echo $html->link('SAC', array('sac/'))?></li>

                         </div>
                     </div>
                  <?php }else{?>
                     <div style="float: left; width: 330px">
                         <h5 style="color:#003552; font-family: verdana, arial, sans-serif; font-size: 14px;">SERVIÇOS</h5>
                         <div class="listaAcesse1">
                             <li><?php echo $html->link('Alterar dados pessoais', array('controller'=>'usuarios', 'action'=>'alterar'))?></li>
                             <li><?php echo $html->link('Alterar senha', array('controller'=>'usuarios', 'action'=>'alterarSenha'))?></li>
                             <li><?php echo $html->link('SAC', array('/sac'))?></li>

                         </div>
                     </div>
                  <?php }?>
             <?php }else{?>
                 <div style="float: left; width: 290px;">
                      <h5 style="color:#003552; font-family: verdana, arial, sans-serif; font-size: 14px;">USUÁRIOS</h5>
                      <br>
                      <?php echo $form->create('Usuario', array('controller'=>'usuarios', 'action'=>'login'))?>
                      <span style="font-family:arial, verdana, sans-serif; font-size: 12px;padding-top: 5px;">Login:</span>
                      <?php echo $form->input('login_usuario', array('label'=>' ','class'=>'campoTexto', 'size'=>'30'))?>
                       <span style="font-family:arial, verdana, sans-serif; font-size: 12px;margin-top: 5px;">Senha:</span>
                      <?php echo $form->input('senha_usuario', array('label'=>' ','class'=>'campoTexto', 'type'=>'password', 'size'=>'30'))?><br>
                      <?php echo $form->submit(' ', array('class'=>'botaoLogin'))?>
                      <?php echo $form->end()?>
                      <br /><br />
                  </div>
             <?php }?>
         </div>
    </div>
</div>
<br><br><br><br><br><br /><br />
<div id="pesquisa"></div>
<div id="itens2">
    <div id="textoItens2">
         <p>O que você acha de nossos serviços e atendimento?</p>
    <?php echo $form->create('Usuario', array('/usuarios/enquete/1')) ?>
         <?php echo $form->input('enquete', array('type'=>'radio','options'=>array('1'=>'Muito Bom', '2'=>'Bom', '3'=>'Regular', '4'=>'Ruim'), 'legend'=>false, 'style'=>'margin-left: 10px;'))?><br><br>
         <?php echo $form->submit(' ', array('class'=>'votar'))?>
    <?php echo $form->end()?>
    </div>
</div>
