<div class="nav">
    <ul>
        <li><?php echo $this->Html->link('Pagina inicial', '/'); ?></li>
        <li><?php echo $this->Html->link('Sobre o evento', array('controller' => 'pages', 'action' => 'display', 'sobre-o-evento')); ?></li>
        <li><?php echo $this->Html->link('Como chegar', array('controller' => 'pages', 'action' => 'display', 'como-chegar')); ?></li>
        <li><?php echo $this->Html->link('Inscreva-se', array('controller' => 'inscricoes', 'action' => 'inscricao')); ?></li>
    </ul>
</div>