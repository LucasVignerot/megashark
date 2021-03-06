<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Showtime $showtime
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Movies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Showtimes'), ['controller' => 'Showtimes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Room'), ['controller' => 'Rooms', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="showtimes form large-9 medium-8 columns content">
    <?= $this->Form->create($showtime) ?>
    <fieldset>
        <legend><?= __('Add Showtime') ?></legend>
        <?php
            echo $this->Form->control('movie_id', ['options' => $movies]);
            echo $this->Form->control('room_id', ['options' => $rooms]);
            echo $this->Form->control('start');
            echo $this->Form->control('end');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
