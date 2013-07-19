<div class="navbar navbar-static-top">
    <div class="navbar-inner">
        <?php echo $this->Html->link('Cake Bake custom views', array('controller' => 'posts', 'action' => 'index'), array('class' => 'brand')); ?>
        <ul class="nav">
            <li><?php echo $this->Html->link(__('Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
        </ul>
    </div>
</div>
