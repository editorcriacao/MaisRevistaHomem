<?php echo $this->Html->css(array('galeria')) ?>
<?php echo $this->Html->script(array('jquery.lightbox-0.5.min')) ?>
<script type="text/javascript">
    $(document).ready(function(){
       $("a#ampliar-capa").lightBox({fixedNavigation:true});
    });
</script>
<a href="<?php echo $this->Html->url('/revista-digital')?>">REVISTA DIGITAL</a>
<div class="linha-divisao-2"></div>
<br />
<br />
<div id="caixa-cinza">
    <br>
    <div id="colunas-formulario">
        <div id="coluna-um">
            <?php echo $this->Html->image('capa_homem_1v_n1.png') ?>
        </div>
        <div id="coluna-dois">
            <h3>Ultima Edição</h3>
            <span style="border-bottom: 1px solid #ccc">Primeira Edição - N°1 - Ano 1 - Outubro 2010</span>
            <br />
            <br />
            <span class="bold"><b>CIÊNCIA E TECNOLOGIA</b></span>
            <br />
            <span>A nova linguagem de informação das redes sociais</span>
            <br />
            <br />
            <span class="bold"><b>CULTURA E VARIEDADES</b></span>
            <br />
            <span>Dicas de livros e DVDs</span>
            <br />
            <br />
            <span  class="bold"><b>CARROS E MOTOS</b></span>
            <br />
            <span>Og Pozzoli: a historia do antigomobilismo</span>
            <br />
            <br />
            <a href="<?php echo $this->Html->url(array('controller' => 'revistas', 'action' => 'ler', 'maisrevistahomem1')) ?>"><?php echo $this->Html->image('revistaDigital.png') ?></a><a href="img/capas/maisrevistahomem1.png" title="Mais Revista Homem N.1" id="ampliar-capa"><?php echo $this->Html->image('ampliarCapa.png') ?></a><a href="http://editorcriacao.com.br/revistas/detalhes/2/mais-revista-homem" target="_blank"><?php echo $this->Html->image('comprarRevista.png') ?></a>
        </div>
    </div>
    <br>
</div>
<br />
<br />