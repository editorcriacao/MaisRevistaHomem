<?php echo $form->create('Busca', array('controller'=>'buscas','action'=>'pesquisa'))?>
<?php echo $form->input('busca', array('label'=>'','class'=>'procura', 'value'=>'o que você procura?', 'id'=>'busca'))?>
<?php echo $form->submit(' ', array('class'=>'lupa'))?>
<?php echo $form->end()?>
