<h4 class="caixa-branca-titulos">FALE-CONOSCO</h4>
    <div id="linha-divisao-5px"></div>
<br />
<br />
<br />
<br />
<br />
<span style="color: #004c77; font-weight: bold">Endereço: </span>
<span>Praça Silvio Romero, 55 <br />
      Sala 45 -  Tatuapé<br />
      São Paulo - SP </span>
<br />
<br />
<span style="color: #004c77; font-weight: bold">Telefone: </span><span>11 2679 4420</span>

<br />
<br />
<div id="caixa-cinza" style="height: 240px;">
    <h3>Entre em contato</h3>
    <p>Preencha os campos abaixo para em contato com o site Mais Revista Homem.</p>
    <br>
    <div id="colunas-formulario">
        <div id="coluna-um">
            <?php echo $this->Form->create('Sac', array('action' => 'contato', 'id' => 'formulario-vagas')) ?>
            <?php echo $this->Form->input('nomeCompleto', array('label' => 'Nome Completo:', 'size' => '26')) ?>
            <?php echo $this->Form->input('email', array('label' => 'E-mail:', 'size' => '38')) ?>
            <?php echo $this->Form->input('endereço', array('label' => 'Endereço:', 'size' => '34')) ?>
            <?php echo $this->Form->input('estado', array('label' => 'Estado:', 'size'=>'37')) ?>
            <?php echo $this->Form->input('cidade', array('label' => 'Cidade:', 'size'=>'37')) ?>
            <ul id="telefone-vagas">
                <li>
                    <?php echo $this->Form->input('ddd', array('label' => 'DDD:', 'size' => '2')) ?>
                </li>
                <li>
                    <?php echo $this->Form->input('telefone', array('label' => 'Telefone:', 'size' => '16')) ?>
                </li>
            </ul>
        </div>
        <div id="coluna-dois">
            <?php echo $this->Form->input('mensagem', array('label' => 'Sua Mensagem:', 'type' => 'textarea')) ?>
            <?php echo $this->Form->submit('ENVIAR', array('style'=> 'position: relative; top: -20px; left: -9px;'))?>
        </div>

        <?php echo $this->Form->end() ?>
    </div>
    <br>
</div>