<?php echo $this->Html->docType() ?>
<html>
    <head>
        <?php echo $this->Html->charset() ?>
        <title>Mais Revista Homem</title>
        <?php echo $this->Html->css(array('reset', 'estrutura', 'tipografia', 'icon')) ?>
        <?php echo $this->Html->script(array('jquery')) ?>

    </head>
    <body>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#alertBAD span").click(function(){
                    $(".box-msg").fadeOut();
                    $("#cover").fadeOut();
                });

            });
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('input[type=text], textarea, input[type=password]').focus(function(){
                    if($(this).val() == $(this).attr('defaultValue'))
                    {
                        $(this).val('');
                    }
                });

                $('input[type=text], textarea, input[type=password]').blur(function(){
                    if($(this).val() == '')
                    {
                        $(this).val($(this).attr('defaultValue'));
                    }
                });
            });
        </script>
        <div id="todo">

            <div id="header">
                <div id="header-caixa">
                    <a href="<?php echo $this->Html->url('/')?>"><?php echo $this->Html->image('logo.png') ?></a>
                    <div id="caixa-superior-header">

                        <ul id="busca-div">
                            <?php echo $this->Form->create('Busca', array('action' => 'pesquisa')) ?>
                            <li><?php echo $this->Form->input('busca', array('label' => '', 'value' => 'o que você procura?')) ?></li>
                            <li><?php echo $this->Form->submit(' ') ?></li>
                            <?php echo $this->Form->end() ?>
                        </ul>

                        <ul id="menu-superior-header">
                            <li><a href="" class="central-assinante-link">CENTRAL DO ASSINANTE</a> | </li>
                            <li><a href="<?php echo $this->Html->url('http://www.editorcriacao.com.br/assinaturas/check/1/mais-revista-mulher') ?>" class="assine-link">ASSINE</a></li>
                            <li>
                                <ul id="icon">
                                    <li><span class="mail"></span></li>
                                    <li><span class="linkendin"></span></li>
                                    <li><span class="twitter"></span></li>
                                    <li><span class="rss"></span></li>
                                </ul>
                            </li>
                        </ul>
                        <?php if ($this->Session->read('Usuario.logado') == 1) {
                        ?>
                                <ul id="menu-inferior-header-2">
                                    <li>Bem-vindo <?php echo $this->Session->read('Usuario.nome') ?> |</li>
                                    <li><a href="">Alterar Cadastro</a> |</li>
                                    <li><a href="">Alterar Senha</a> |</li>
                                    <li><a href="<?php echo $this->Html->url(array('controller' => 'usuarios', 'action' => 'sair')) ?>">Sair</a></li>

                                </ul>
                        <?php } else {
                        ?>
                                <ul id="login">
                            <?php echo $this->Form->create('Usuario', array('action' => 'login')) ?>
                                <li><?php echo $this->Form->input('login_usuario', array('label' => '', 'value' => 'login')) ?></li>
                                <li><?php echo $this->Form->input('senha_usuario', array('label' => '', 'value' => 'senha', 'type' => 'password')) ?></li>
                                <li><?php echo $this->Form->submit('ENTRAR') ?></li>
                            <?php echo $this->Form->end() ?>
                            </ul>

                        <?php } ?>
                        </div>

                    </div>
                    <div id="caixa-inferior">
                        <ul id="menu-inferior">
                            <li><a href="<?php echo $this->Html->url('/')?>">HOME</a></li>
                            <li><a href="<?php echo $this->Html->url('/revista')?>">A REVISTA</a></li>
                            <li><a href="<?php echo $this->Html->url('/colunistas')?>">COLUNISTAS</a></li>
                            <li>
                                <a href="" id="sub-menu">ASSUNTOS <span class="seta"></span></a>
                                <ul id="subMenu-menu-inferior">
                                    <li><a href="<?php echo $this->Html->url(array('controller'=>'editorias', 'action'=>'ver', 11, 'saude-bem-estar'))?>">SAÚDE E BEM-ESTAR</a></li>
                                    <li><a href="<?php echo $this->Html->url(array('controller'=>'editorias', 'action'=>'ver', 13, 'visual-estilo'))?>">VISUAL E ESTILO</a></li>
                                    <li><a href="<?php echo $this->Html->url(array('controller'=>'editorias', 'action'=>'ver', 17, 'carros-motos'))?>">CARROS E MOTOS</a></li>
                                    <li><a href="<?php echo $this->Html->url(array('controller'=>'editorias', 'action'=>'ver', 19, 'esporte-boa-forma'))?>">ESPORTE E BOA FORMA</a></li>
                                    <li><a href="<?php echo $this->Html->url(array('controller'=>'editorias', 'action'=>'ver', 29, 'ciencia-tecnologia'))?>">CIÊNCIA E TECNOLOGIA</a></li>
                                    <li><a href="<?php echo $this->Html->url(array('controller'=>'editorias', 'action'=>'ver', 37, 'sexo-mulheres'))?>">SEXO E MULHERES</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo $this->Html->url('/cadastro')?>">CADASTRO</a></li>
                            <li><a href="<?php echo $this->Html->url('/revista-digital')?>">REVISTA DIGITAL</a></li>
                            <li><a href="">LOJA VIRTUAL</a></li>
                            <li><a href="" style="padding-left: 23px; padding-right: 23px;">FALE CONOSCO</a></li>
                        </ul>

                        <div id="banner-superior">
                            <?php echo $this->element('anuncios')?>
                        </div>
                    </div>
                </div>
                <div id="content">
                <?php echo $session->flash(); ?>
                            <div id="lateral-direita">

                                <br />

                                <ul id="lancamento-revistas">
                                    <li>
                                        <h3>Mantenha-se informado</h3>
                                        <p>Saiba antes que todo mundo do lançamento das novas publicações
                                            da Mais Revista Mulher.</p>
                                    </li>

                        <?php echo $this->Form->create('Newsletter', array('action' => 'cadastreEmail')) ?>
                            <li style="margin-left: -12px;"><?php echo $this->Form->input('nome', array('label' => '', 'value' => 'coloque seu nome e sobrenome aqui', 'size' => '38')) ?></li>
                            <li style="margin-left: -12px;"><?php echo $this->Form->input('email', array('label' => '', 'value' => 'coloque seu e-mail aqui', 'size' => '25')) ?></li>
                            <li><?php echo $this->Form->submit('AVISE-ME') ?></li>
                        <?php echo $this->Form->end() ?>



                        </ul>

                                <div id="linha-divisao-latera"></div>
                        <ul id="banners-lateral">
                            <li><br/><br/><br/></li>
                            <li><?php echo $this->element('anuncio-lateral') ?></li>

                        </ul>
                    </div>
                    <!--            FIM LATERAL DIREITA-->

                    <div id="conteudo">
                    <?php echo $content_for_layout ?>
                        </div>
                        <!--                FIM CONTEUDO-->
                    </div>

                </div>

                <div id="footer">
                    <div id="footer-caixa">
                        <ul id="copy">
                            <li>&copy; Copyrights - 2011 - Editor Criação Marketing e Comunicação Ltda.</li>
                        </ul>

                        <ul id="rodape-conteudo">
                            <li><a href="<?php echo $this->Html->url('http://www.editorcriacao.com.br/assinaturas/check/1/mais-revista-mulher') ?>" style="color:#7fae01">ASSINE</a>|</li>
                            <li><a href="">CENTRAL DO ASSINANTE</a>|</li>
                            <li><a href="<?php echo $this->Html->url('http://www.editorcriacao.com.br/publicidade') ?>">ANUNCIE</a>|</li>
                            <li><a href="<?php echo $this->Html->url('/contato') ?>">CONTATO</a></li>
                </ul>
            </div>
        </div>

    </body>
</html>