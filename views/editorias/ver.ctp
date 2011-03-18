<br>
<div id="tituloCabecario2">
    &nbsp;<b><?php echo $editoria['Editoria']['nomeEditoria']?></b>
</div>
<br /><br /><br/>
<?php if(!empty($artigos)){?>
 <?php foreach($artigos as $artigo){?>
    <div id="artigos" style="margin-left: 10px;">
        <div id="texto">
            <h1><?php echo $this->Html->link($artigo['Artigo']['titulo'], array('controller'=>'artigos', 'action'=>'ver', $artigo['Artigo']['id'], Inflector::slug($artigo['Artigo']['titulo'])), array('class'=>'linkH1Mais'))?></h1>
            <p><?php echo $this->Html->link($artigo['Artigo']['subTitulo'], array('controller'=>'artigos', 'action'=>'ver', $artigo['Artigo']['id'], Inflector::slug($artigo['Artigo']['titulo'])), array('class'=>'linkPMais'))?> </p>
        </div>
        <div id="leia">
            <a href="<?php echo $this->Html->url(array('controller'=>'artigos', 'action'=>'ver', $artigo['Artigo']['id'], Inflector::slug($artigo['Artigo']['titulo'])))?>"><?php echo $this->Html->image('../img/imagens/leia_mais2.png', array('border'=>'0'))?></a>
        </div>
        <div id="foto">
            <?php if(!empty($artigo['Artigo']['foto'])){?>
            <?php echo $this->Html->image('http://www.editorcriacao.com.br/gerenciadorEditor/app/webroot/img/fotos_artigos/'.$artigo['Artigo']['foto'])?>
            <?php }else{?>
            <?php echo $this->Html->image('imagens/fotos_artigos/sem_foto.png')?>
            <?php }?>
        </div>
    </div>
    <br /><br /><br />
 <?php }?>
 <?php }else{?>
    <p style="text-align: center;"> Não há artigos disponiveis</p>
    <?php }?>
