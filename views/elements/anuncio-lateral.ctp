<object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="120" height="600">
  <param name="movie" value="<?php echo $this->Html->url('../img/imagens/skyscraper.swf')?>" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="swfversion" value="6.0.65.0" />
  <!-- Esta tag param solicita que os usuários com o Flash Player 6.0 r65 e versões posteriores baixem a versão mais recente do Flash Player. Exclua-o se você não deseja que os usuários vejam o prompt. -->
  <param name="expressinstall" value="Scripts/expressInstall.swf" />
  <!-- A tag object a seguir aplica-se a navegadores que não sejam o IE. Portanto, oculte-a do IE usando o IECC. -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="<?php echo $this->Html->url('../img/imagens/skyscraper.swf')?>" width="120" height="600">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="swfversion" value="6.0.65.0" />
    <param name="expressinstall" value="Scripts/expressInstall.swf" />
    <!-- O navegador exibe o seguinte conteúdo alternativo para usuários que tenham o Flash Player 6.0 e versões anteriores. -->
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>