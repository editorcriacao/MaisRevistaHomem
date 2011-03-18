<h4 class="caixa-branca-titulos">CADASTRO</h4>
    <div id="linha-divisao-5px"></div>
    <br />
<br />
    <br />
    <br />
<div id="colunas-formulario">
            <?php echo $form->create('Usuario', array('controller'=>'usuarios', 'action'=>'cadastro'))?>
            <?php echo $form->input('nome_usuario', array('label'=>'Nome Completo:*', 'size'=>'40'))?><br>
            <?php echo $form->input('email_usuario', array('label'=>'Email:*', 'size'=>'53'))?><br>
            <?php echo $form->input('login_usuario', array('label'=>'Login:*', 'size'=>'53'))?>
            <span style="font-size: 9px; font-family: verdana, arial, sans-serif; color: #5d5d5d; margin-left: 10px; padding-top: 5px">O login deve conter entre 5 a 25 caracteres</span><br><br>
            <?php echo $form->input('senha_usuario', array('label'=>'Senha:*', 'size'=>'52', 'type'=>'password'))?>
            <span style="font-size: 9px; font-family: verdana, arial, sans-serif; color: #5d5d5d; margin-left: 10px; padding-top: 5px">A senha deve conter no minimo 6 caracteres</span><br><br>
            <?php echo $form->input('confirmar_senha_usuario', array('label'=>'Confirmar senha:*', 'size'=>'39', 'type'=>'password'))?><br><br>
			<br>
            <span style="color: #97bf0d; float: left; margin-top: -30px; font-family: arial; font-size: 11px;">*Preenchimento obrigatório.</span>
			<br>
             <span>Deseja receber newsletters com novidades, promoções,
eventos e outras informações.</span><br><br>
            <?php echo $form->input('email_marketing_usuario', array('options'=>array('1'=>'Sim', '0'=>'Não'), 'value'=>'0','div'=>'', 'label'=>'', 'type'=>'radio', 'legend'=>false))?><br><br><br>
            <?php echo $form->submit('Cadastrar')?>
            <?php echo $form->end()?>
</div>
<br><br><br>