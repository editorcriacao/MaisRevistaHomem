<?php echo $javascript->link(array('carrocel','galeria'))?>
<?php echo $html->css(array('carrocel', 'galeria'))?>
<?php echo $javascript->codeBlock('J(function() {
		J("#gallery a").lightBox({fixedNavigation:false});
	});')?>
<?php echo $javascript->codeBlock('J(document).ready(function() {
	try {
		var oHandlerHorizontal = J("#carouseldiv1").msCarousel({boxClass:"div.set", width:620, height:325, scrollSpeed:500}).data("msCarousel");
		J("#next1").click(function() {
			oHandlerHorizontal.next();
		});
		J("#previous1").click(function() {
			oHandlerHorizontal.previous();
		});


	} catch(e) {
		alert(e.message);
	}

})')?>
<div id="tituloCabecario">
    <a href="<?php echo $this->Html->url('/')?>" class="linkCabecario">HOME</a> / <a href="<?php echo $this->Html->url('/revista-digital')?>" class="linkCabecario">REVISTA DIGITAL</a>
    <div id="tracoCinza"></div>
</div>
<br>
<div id="caixaCinza">
    <div id="capaRevista">
        <?php echo $this->Html->image('../img/imagens/capa_homem_1v_n1.png')?>
    </div>
    <div id="textoRevista">
        <h1 style="color:#003552">Ultima edição</h1>
        <div style="margin-top: -15px; margin-left: 11px; font-family: arial, verdana, sans-serif; color:#646567; font-size: 14px; border-bottom: 1px solid #9c9e9f;">Primeira Edição - N°1 - Ano 1 - Outubro de 2010</div>
        <h2 style="font-size: 14px;">"ESTÁ CADA VEZ MAIS COMUM ENCONTRAR PAIS SOLTEIROS."</h2>
        <p><b>CIÊNCIA E TECNOLOGIA: </b>A nova linguagem de informações das redes sociais.</p>
        <p><b>SAÚDE E BEM-ESTAR:</b> A  causa da disfunção erétil e seus tratamentos</p>
        <p><b>CARROS E MOTOS: </b>Og Pozzoli: a historia do antigomobilismo </p>
        <div id="opcao"><div id="gallery" style="display: inline" style="position: relative; margin-left: 5px;">
                                             <a href="img/imagens/capas/maisrevistahomem1.png" title="Mais Revista Homem - Edição 1">
                                             <img src="img/imagens/ampliarCapa.png" alt="" border="0" />
                                             </a>
                                </div><a href="<?php echo $this->Html->url(array('controller'=>'revistas', 'action'=>'ler', 'maisrevistahomem1')) ?>"><?php echo $this->Html->image('../img/imagens/revistaDigital.png', array('border'=>'0'))?></a><a href="<?php echo $this->Html->url('http://www.editorcriacao.com.br/assinaturas/check/2/mais-revista-homem')?>"><?php echo $this->Html->image('../img/imagens/assinarRevista.png', array('border'=>'0')) ?></a></div>
    </div>
</div>
<br><br>

<!--<div id="Carro2">
<div id="cimaCarro2"></div>
    <div id="setaEsquerda"><?php echo $form->submit(' ', array('id'=>'previous1', 'class'=>'setaEsquerda'))?></div>
    <div id="carousel2">
     <div id="carouseldiv1">
            <div class="set">
                <div id="boxCarrosel">
                    <div id="frameBoxCarrosel2">
                            <div id="imagenReduzida" style="position: relative; right: 55px; top: 15px;">
                            <?php echo $html->image('/img/imagens/capa_homem_1v_n1.png')?>
                        </div>
                        <div id="boxTextoRevista">
                            <h3>Primeira Edição</h3>
                            <p>N°1 - Ano 1 - Outubro de 2010</p>
                            <div id="opcao2">
                                <?php echo $this->Html->image('../img/imagens/ampliar2.png') ?>
                                <br/>
                                <a href="<?php echo $this->Html->url(array('controller'=>'revistas', 'action'=>'ler')) ?>"><?php echo $this->Html->image('../img/imagens/revista2.png', array('border'=>'0')) ?></a>
                            </div>
                        </div>

                    </div>

                    
                </div>
            </div>
        </div>
    </div>
    <div id="setaDireita"><?php echo $form->submit(' ', array('id'=>'next1', 'class'=>'setaDireita'))?></div>
    <div id="baixoCarro"></div></div>-->
    <br><br><br>