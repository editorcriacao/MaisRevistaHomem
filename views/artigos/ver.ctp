<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=YOUR-ACCOUNT-ID"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script type="text/javascript">
    $(function() {
        var delay = 400;

        function hideMenu() {
            if (!$('.custom_button').data('in') && !$('.hover_menu').data('in') && !$('.hover_menu').data('hidden')) {
                $('.hover_menu').fadeOut('fast');
                $('.custom_button').removeClass('active');
                $('.hover_menu').data('hidden', true);
            }
        }

        $('.custom_button, .hover_menu').mouseenter(function() {
            $('.hover_menu').fadeIn('fast');
            $('.custom_button').addClass('active');
            $(this).data('in', true);
            $('.hover_menu').data('hidden', false);
        }).mouseleave(function() {
            $(this).data('in', false);
            setTimeout(hideMenu, delay);
        });

    });
</script>
<?php echo $html->css(array('addthis')) ?>
<div id="tituloCabecario">
    <a href="<?php echo $this->Html->url('/') ?>" class="linkCabecario">HOME</a>
</div>
<br>

<!------------------------------------------------------ Menu compartilhar ------------------------------------------------------>
<div id="menuCompartilhe">
    <div class="tracejado_menu_compartilhar"></div>
    <div class="menu_compartilhar">
        <div class="addthis_toolbox">
            <div class="custom_hover">
                <span class="custom_button"><?php echo $html->image('../img/imagens/icone_compartilhar.png', array('border' => '0', 'style' => 'margin : 2px 5px 2px 0px', 'alt' => 'Compartilhe essa máteria')) ?><b>COMPARTILHE</b></span>
            </div>
            <div class="hover_menu">
                <div class="column1">
                    <a class="addthis_button_email">Email</a>
                </div>
                <div class="column2">
                    <a class="addthis_button_print">Imprimir</a>
                </div>
                <div class="clear"></div>
                <div class="top"></div>
                <div class="column1">
                    <a class="addthis_button_facebook">Facebook</a>
                    <a class="addthis_button_myspace">MySpace</a>
                </div>
                <div class="column2">
                    <a class="addthis_button_delicious">Delicous</a>
                    <a class="addthis_button_stumbleupon">Stumble</a>
                    <a class="addthis_button_digg">Digg</a>
                </div>
                <div class="clear"></div>
                <div class="more">
                    <a class="addthis_button_expanded">Mais...</a>
                </div>
            </div>
        </div>
        <div style="position: relative; margin-top: -25px; margin-left: 120px;">
        <a href="#Comentario"><?php echo $html->image('../img/imagens/icone_comente.png', array('border' => '0', 'style' => 'margin : 2px 5px 2px 10px', 'alt' => 'Deixe seu comentário')) ?><b>COMENTE</b></a>
        </div>
        <div style="position: relative; margin-top: -20px; margin-left: 225px;">
        <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.maisrevistahomem.com.br/artigos/ver/<?php echo $artigo['Artigo']['id'].'/'.Inflector::slug($artigo['Artigo']['titulo'])?>&amp;layout=button_count&amp;show_faces=true&amp;width=450&amp;action=like&amp;font=verdana&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>
        </div>
        <div style="position: relative; margin-top: -25px; margin-left: 325px;">
        <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="editorcriacao">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
        </div>
        <div class="tracejado_menu_compartilhar2"></div>

    </div>
</div>
<!--Alterar funções dos icones MAIS e MENOS-->
<!------------------------------------------------------ Fim Menu compartilhar ------------------------------------------------------>

<h1><?php echo $artigo['Artigo']['titulo'] ?></h1>
 <p class="subTitulo"><?php echo $artigo['Artigo']['subTitulo']?></p>
<p style="color:#000"><i>Por Redação + Revista Homem</i></p>

<?php if(!empty($artigo['Artigo']['imagemMateria'])){?>
 <div id="textoImagem">
 <?php echo $html->image('http://www.editorcriacao.com.br/gerenciadorEditor/app/webroot/img/img-materia/'.$artigo['Artigo']['imagemMateria'])?>
 </div>
<?php }?>
<div id="artigo">

    <?php if(!empty($artigo['Artigo']['imagemOlho'])){?>
 <div id="textoImagem" style="display: block; width: 280px;padding: 0px; float: right;">
 <?php echo $html->image('http://www.editorcriacao.com.br/gerenciadorEditor/app/webroot/img/img-olho/'.$artigo['Artigo']['imagemOlho'])?>
 </div>
<?php }?>

    <?php if (!empty($artigo['Artigo']['olho'])) {
    ?>
        <div id="textoOlho" style="display: block; width: 280px;padding: 0px; float: right;">
            <h3>“<?php echo $artigo['Artigo']['olho'] ?>”</h3>
        </div>
    <?php } ?>
    <?php echo $artigo['Artigo']['texto'] ?>
</div>
<br><br>
<div id="relacionados"></div>
<br>
<div id="listaHistorias">
    <?php if (!empty($relacionado)) {
    ?>
    <?php foreach ($relacionado as $historias) {
    ?>
            <li><a href="<?php echo $this->Html->url(array('controller' => 'artigos', 'action' => 'ver', $historias['Artigo']['id'], Inflector::slug($historias['Artigo']['titulo']))) ?>" class="relacionado"><?php echo $historias['Artigo']['titulo'] ?></a></li>
    <?php } ?>
    <?php } else {
 ?>
        <p>Não há historias relacionadas</p>
<?php } ?>
</div>
<br><br>
<div id="comentarios"></div>
<br>
<?php if (!empty($comentarios)) {
 ?>
<?php foreach ($comentarios as $comentario) { ?>
            <h2 style="font-size: 12px;"><?php echo $comentario['Comentario']['nome'] ?> <span style="color:#000">disse:</span></h2>
            <br>
            <p><?php echo $comentario['Comentario']['comentario'] ?></p>
            <br>
            <h4><?php echo $comentario['Comentario']['created'] ?></h4>
            <div id="tracoCinza2"></div>
            <br>
<?php } ?>
<?php } else {
?>
        <p>Esse artigo ainda não possui comentários</p>
<?php } ?><br>
<?php echo $this->element('comentarios') ?>
    <br><br>

<!------------------------------------------------------ Menu compartilhar ------------------------------------------------------>
<div id="menuCompartilhe">
    <div class="tracejado_menu_compartilhar"></div>
    <div class="menu_compartilhar">
        <div class="addthis_toolbox">
            <div class="custom_hover">
                <span class="custom_button"><?php echo $html->image('../img/imagens/icone_compartilhar.png', array('border' => '0', 'style' => 'margin : 2px 5px 2px 0px', 'alt' => 'Compartilhe essa máteria')) ?><b>COMPARTILHE</b></span>
            </div>
            <div class="hover_menu">
                <div class="column1">
                    <a class="addthis_button_email">Email</a>
                </div>
                <div class="column2">
                    <a class="addthis_button_print">Imprimir</a>
                </div>
                <div class="clear"></div>
                <div class="top"></div>
                <div class="column1">
                    <a class="addthis_button_facebook">Facebook</a>
                    <a class="addthis_button_myspace">MySpace</a>
                </div>
                <div class="column2">
                    <a class="addthis_button_delicious">Delicous</a>
                    <a class="addthis_button_stumbleupon">Stumble</a>
                    <a class="addthis_button_digg">Digg</a>
                </div>
                <div class="clear"></div>
                <div class="more">
                    <a class="addthis_button_expanded">Mais...</a>
                </div>
            </div>
        </div>
        <div style="position: relative; margin-top: -25px; margin-left: 120px;">
        <a href="#Comentario"><?php echo $html->image('../img/imagens/icone_comente.png', array('border' => '0', 'style' => 'margin : 2px 5px 2px 10px', 'alt' => 'Deixe seu comentário')) ?><b>COMENTE</b></a>
        </div>
        <div style="position: relative; margin-top: -20px; margin-left: 225px;">
        <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.maisrevistahomem.com.br/artigos/ver/<?php echo $artigo['Artigo']['id'].'/'.Inflector::slug($artigo['Artigo']['titulo'])?>&amp;layout=button_count&amp;show_faces=true&amp;width=450&amp;action=like&amp;font=verdana&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>
        </div>
        <div style="position: relative; margin-top: -25px; margin-left: 325px;">
        <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="editorcriacao">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
        </div>
        <div class="tracejado_menu_compartilhar2"></div>

    </div>
</div>
<!--Alterar funções dos icones MAIS e MENOS-->
<!------------------------------------------------------ Fim Menu compartilhar ------------------------------------------------------>
<br><br>