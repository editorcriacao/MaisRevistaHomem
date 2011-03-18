<a href="<?php echo $this->Html->url('/contato')?>" id="faleConosco" class="faleConosco">FALE CONOSCO</a>
<br />
<br />
<span id="enquete" class="faleConosco">ENQUETES</span>
 <?php
        $banner = mt_rand(0, 10);
        if(($banner % 2) == 0){?>
<div id="anuncioLateral1">
    <h2 style="font-size: 11px; text-align: left;"><b>Você teve algum problema na esfera sexual?</b></h2>
    <?php echo $form->create('Usuario', array('url'=>'/usuarios/enquete/2'))?>
         <?php echo $form->input('enquete', array('type'=>'radio','options'=>array('1'=>'Disfunção erétil <br />', '2'=>'Ejaculação precoce <br />', '3'=>'Ejaculação retrógrada <br />', '4'=>'Falta de libido <br />'), 'legend'=>false, 'style'=>'margin-left: 10px;'))?><br><br>
         <?php echo $form->submit(' ', array('class'=>'votar'))?>
    <?php echo $form->end()?>
</div>
 <?php }else{ ?>
<div id="anuncioLateral1">
    <h2 style="font-size: 11px; text-align: left;"><b>Como você (homem) crias seus filhos?</b></h2>
    <?php echo $form->create('Usuario', array('url'=>'/usuarios/enquete/3'))?>
         <?php echo $form->input('enquete', array('type'=>'radio','options'=>array('1'=>'Sozinho <br />', '2'=>'Compartilha com a mãe <br />', '3'=>'Ou delega à mãe <br />'), 'legend'=>false, 'style'=>'margin-left: 10px;'))?><br><br>
         <?php echo $form->submit(' ', array('class'=>'votar'))?>
    <?php echo $form->end()?>
</div>
      <?php }?>
            <div id="anuncioLateral1">
               <?php echo $this->Html->image('../img/imagens/capa_homem_1v_n1.png')?>
            </div>
            <hr id="barraVerde">
             <div id="anuncioLateral2">
                
            </div>
            