<br>
<h1>Entre em contato</h1>
<p>Este é o portal virtual da revista Mais Revista Homem, uma publicação bimestral da <b>Editor Criação</b>.</p>
<p><b style="color:#004c77">Endereço:</b> Praça Silvio Romero, 55 - Sala 45  Tatuapé - São Paulo - SP CEP 03323-000 </p>
<p><b style="color:#004c77">Telefone:</b> 11 2679 4420</p>
<p><b style="color:#004c77">Site:</b> <a href="http://www.editorcriacao.com.br" class="linkAssinante">www.editorcriacao.com.br</a> </p>
<br>
<div id="caixaCinza">
    <br><br>
    <?php echo $this->Form->create('Contato', array('controller'=>'usuarios', 'action'=>'email'))?>
    <?php echo $form->input('nome', array('label'=>'Nome: &nbsp;', 'size'=>'40', 'class'=>'text2'))?>
    <?php echo $form->input('email', array('label'=>'E-mail:* ', 'size'=>'40', 'class'=>'text2'))?>
    <?php echo $form->input('ddd', array('label'=>'DDD:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','class'=>'text2', 'size'=>'2'))?><div style="margin-left: 99px; margin-top: -27px;"><?php echo $form->input('telefone_leitor', array('label'=>'Telefone: ', 'size'=>'21', 'class'=>'text2'))?></div>
    <?php echo $form->input('site', array('label'=>'Website: ', 'size'=>'38', 'class'=>'text2'))?>
    <?php echo $form->input('cidade', array('label'=>'Cidade: ', 'size'=>'39', 'class'=>'text2'))?>
    <?php echo $form->input('estado', array('label'=>'Estado: ','class'=>'text2', 'style'=>'height: 20px;', 'type'=>'select', 'options'=>array('1'=>'AC', '2'=>'AL', '3'=>'AP', '4'=>'AM', '5'=>'BA', '6'=>'CE', '7'=>'DF', '8'=>'ES', '9'=>'GO', '10'=>'MA', '11'=>'MT', '12'=>'MS', '13'=>'MG', '14'=>'PA', '15'=>'PB', '16'=>'PR','17'=>'PE', '18'=>'PI', '19'=>'RJ', '20'=>'RN', '21'=>'RS', '22'=>'RO', '23'=>'RR', '24'=>'SC', '25'=>'SP', '26'=>'SE', '27'=>'TO')))?><br>
    <div style="margin-top: -12px;font-family: arial, verdana, sans-serif; font-size: 11px;font-weight: bold;">* Seu e-mail não será publicadoo</div>
 <div style="margin-left: 330px; margin-top: -200px;  font-family: arial, verdana, sans-serif; font-size: 11px;font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sua mensagem: <br><?php echo $this->Form->input('msg', array('label'=>'', 'type'=>'textarea', 'class'=>'text2', 'style'=>'height: 128px; width: 300px','rows'=>'7','cols'=>'36'))?></div>
 <div style="margin-left: 338px; font-family: arial, verdana, sans-serif; font-size: 10px;width: 320px;font-weight: bold;"><input type="checkbox" name="data[Leitor][termos]" id="LeitorTermos" value="0" /> Li e concordo com os Termos de Uso <?php echo $this->Form->submit(' ', array('class'=>'enviarButom', 'style'=>''))?></div>
    <?php echo $this->Form->end()?>
</div>
<br>