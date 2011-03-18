<div id="tituloCabecario">
    <a href="<?php echo $this->Html->url('/')?>" class="linkCabecario">HOME</a> / <a href="<?php echo $this->Html->url('/leitor')?>" class="linkCabecario">+ LEITOR</a>
    <div id="tracoCinza"></div>
</div>

<div id="caixaCinza">
    <h1>Espaço opinião</h1>
    <?php echo $this->Form->create('Leitor', array('controller'=>'leitors', 'action'=>'email'))?>
    <?php echo $form->input('nome_leitor', array('label'=>'Nome: &nbsp;', 'size'=>'40', 'class'=>'text2'))?>
    <?php echo $form->input('email_leitor', array('label'=>'Email:* ', 'size'=>'40', 'class'=>'text2'))?>
    <?php echo $form->input('ddd_leitor', array('label'=>'DDD:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','class'=>'text2', 'size'=>'2'))?><div style="margin-left: 99px; margin-top: -27px;"><?php echo $form->input('telefone_leitor', array('label'=>'Telefone: ', 'size'=>'21', 'class'=>'text2'))?></div>
    <?php echo $form->input('site_leitor', array('label'=>'Website: ', 'size'=>'38', 'class'=>'text2'))?>
    <?php echo $form->input('cidade_leitor', array('label'=>'Cidade: ', 'size'=>'39', 'class'=>'text2'))?>
    <?php echo $form->input('estado_leitor', array('label'=>'Estado: ', 'class'=>'text2', 'style'=>'height: 20px;','type'=>'select', 'options'=>array('1'=>'AC', '2'=>'AL', '3'=>'AP', '4'=>'AM', '5'=>'BA', '6'=>'CE', '7'=>'DF', '8'=>'ES', '9'=>'GO', '10'=>'MA', '11'=>'MT', '12'=>'MS', '13'=>'MG', '14'=>'PA', '15'=>'PB', '16'=>'PR','17'=>'PE', '18'=>'PI', '19'=>'RJ', '20'=>'RN', '21'=>'RS', '22'=>'RO', '23'=>'RR', '24'=>'SC', '25'=>'SP', '26'=>'SE', '27'=>'TO')))?><br>
    <div style="margin-top: -12px;font-family: arial, verdana, sans-serif; font-size: 11px;font-weight: bold;">* Seu email não será  publicado</div>
 <div style="margin-left: 330px; margin-top: -200px; font-family: arial, verdana, sans-serif; font-size: 11px;font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sua Menssage:<?php echo $this->Form->input('msg_leitor', array('label'=>'', 'type'=>'textarea', 'class'=>'text2', 'style'=>'height: 128px; width: 300px','rows'=>'7','cols'=>'36'))?></div>
 <div style="margin-left: 338px; font-family: arial, verdana, sans-serif; font-size: 10px;width: 320px;font-weight: bold;"><input type="checkbox" name="data[Leitor][termos]" id="LeitorTermos" value="0" /> Li e concordo com os Termos de Uso <?php echo $this->Form->submit(' ', array('class'=>'enviarButom', 'style'=>'margin-top: -18px; position: absolute'))?></div>
    <?php echo $this->Form->end()?>
</div>
<br>
<div id="tituloCabecario">
    <a href="<?php echo $this->Html->url('/')?>" class="linkCabecario">HOME</a> / <a href="<?php echo $this->Html->url('/leitor')?>" class="linkCabecario">+ LEITOR</a>
    <div id="tracoCinza"></div>
</div>
<br>

<?php $leitors = $this->requestAction(array('controller'=>'leitors', 'action'=>'index'))?>
<?php $leitorsPrimeiro = $this->requestAction(array('controller'=>'leitors', 'action'=>'primeiro'))?>
<?php if(!empty($leitors)){?>
<div id="caixaLeitor">
    <div id="foto">
        <?php echo $html->image('../img/imagens/'.$leitorsPrimeiro['Leitor']['foto'])?>
    </div>
    <div id="texto">
        <h1><?php echo $this->Html->link($leitorsPrimeiro['Leitor']['titulo'], array('controller'=>'leitors', 'action'=>'ver', $leitorsPrimeiro['Leitor']['id']), array('class'=>'linkH1'))?></h1><br>
        <h4>Enviado dia <?php echo $leitorsPrimeiro['Leitor']['enviado']?></h4>
        <p><?php echo $leitorsPrimeiro['Leitor']['cabecalho']?></p>
        <div style="margin-left: 300px;">
                    <div id="barraLeiaMais" style="margin-left: 0px; margin-top: 43px;"><a href="<?php echo $this->Html->url(array('controller'=>'leitors', 'action'=>'ver', $leitorsPrimeiro['Leitor']['id']))?>"><?php echo $this->Html->image('../img/imagens/leia3.png', array('border'=>0));?></a></div>
        </div>
    </div>
</div>
<div id="barraCinza"></div>
<br><br>
<?php foreach($leitors as $leitor){?>
<h5><?php echo $this->Html->link($leitor['Leitor']['titulo'], array('controller'=>'leitors', 'action'=>'ver', $leitor['Leitor']['id']), array('class'=>'linkH5'))?></h5>
<p>“<?php echo $leitor['Leitor']['cabecalho']?>”</p>
<div id="barraCinza"></div>
<br><br>
<?php } ?>
<?php }else{ ?>
<p>Não há nenhum artigo escritos pelos leitores da Revista + Homem</p>

<?php }?>

<div id="paginator">

<div id="caixaButtom">
    <span>PRIMEIRA</span>
</div>
<div id="caixaButtom">
    <span>ANTERIOR</span>
</div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div id="caixaButtom">
    <span>1</span>
</div>
<div id="caixaButtom">
    <span>2</span>
</div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="caixaButtom">
    <span>PRÓXIMA</span>
</div>
    <div id="caixaButtom">
    <span>ULTIMA</span>
</div>
</div>