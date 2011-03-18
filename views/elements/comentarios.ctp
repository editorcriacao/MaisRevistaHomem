<div id="caixaCinza">
    <a name="Comentario"></a>
    <h2>Faça seu comentario</h2>
    <?php echo $this->Form->create('Comentario', array('controller' => 'comentario', 'action' => 'adicionar')) ?>
    <?php echo $form->input('nome', array('label' => 'Nome: &nbsp;', 'size' => '40', 'class' => 'text2')) ?>
    <?php echo $form->input('email', array('label' => 'Email:* ', 'size' => '40', 'class' => 'text2')) ?>
    <?php echo $form->input('site_leitor', array('label' => 'Website: ', 'size' => '38', 'class' => 'text2')) ?>
    <?php echo $form->input('cidade_leitor', array('label' => 'Cidade: ', 'size' => '39', 'class' => 'text2')) ?>
    <?php echo $form->input('artigo_id', array('type'=>'hidden', 'value'=>$session->read('Artigo.id')))?>
    <?php echo $form->input('estado_leitor', array('label' => 'Estado: ','class'=>'text2', 'style'=>'height: 20px;', 'type' => 'select', 'options' => array('1' => 'AC', '2' => 'AL', '3' => 'AP', '4' => 'AM', '5' => 'BA', '6' => 'CE', '7' => 'DF', '8' => 'ES', '9' => 'GO', '10' => 'MA', '11' => 'MT', '12' => 'MS', '13' => 'MG', '14' => 'PA', '15' => 'PB', '16' => 'PR', '17' => 'PE', '18' => 'PI', '19' => 'RJ', '20' => 'RN', '21' => 'RS', '22' => 'RO', '23' => 'RR', '24' => 'SC', '25' => 'SP', '26' => 'SE', '27' => 'TO'))) ?><br>
    <div style="margin-top: -12px;font-family: arial, verdana, sans-serif; font-size: 11px;font-weight: bold;">* Seu email não será  publicado</div>
    <div style="margin-left: 330px; margin-top: -178px;  font-family: arial, verdana, sans-serif; font-size: 11px;font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sua Menssagem: <br><?php echo $this->Form->input('comentario', array('label' => '', 'type' => 'textarea',  'class'=>'text2', 'style'=>'height: 105px; width: 300px','rows' => '7', 'cols' => '36')) ?></div>
    <?php echo $this->Form->submit(' ', array('class' => 'enviarButom', 'style' => 'position: relative; margin-top: 5px; margin-left: 450px;')) ?>
    <?php echo $this->Form->end() ?>
</div>